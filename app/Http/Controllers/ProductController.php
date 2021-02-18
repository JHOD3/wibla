<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Mark;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Flash;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository
                        ->makeModel()::join('marks','products.mark_id','marks.id')
                        ->join('categories','products.category_id','categories.id')
                        ->select('products.*','marks.name as marca','categories.name as categoria')
                        ->paginate(5);
         return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        $listCategories = Category::listCategories();
        $listMarks      = Mark::listMarks();
        $listStatus = array(
            ''=>'Selecciona uno',
            'Destacado'=>'Destacado',
            'Oferta'=>'Oferta',
            'Nuevo'=>'Nuevo',
        );
        return view('products.create', compact('listCategories','listMarks','listStatus'));
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        if ($primary_image = $request->file('primary_image')) {
            $destinationPath = 'uploads/';
            $primary_imageName = "primary_image_". date('YmdHis') . "." . $primary_image->getClientOriginalExtension();
            $primary_image->move($destinationPath, $primary_imageName);
            $input['primary_image'] = $primary_imageName;
            Image::make($primary_image->getRealPath())
                ->resize(269,162, function ($constraint){
                    $constraint->aspectRatio();
                })->save($destinationPath.'thumbnail',72);
            Image::make($destinationPath.$primary_imageName)->resize(250,250)->save('uploads/thumbnail/250px/'.$primary_imageName,72);
            Image::make($destinationPath.$primary_imageName)->resize(300,300)->save('uploads/thumbnail/300px/'.$primary_imageName,100);
        }
        if ($content_box_image = $request->file('content_box_image')) {
            $destinationPath = 'uploads/';
            $content_box_imageName = "content_box_image_" . date('YmdHis') . "." . $content_box_image->getClientOriginalExtension();
            $content_box_image->move($destinationPath, $content_box_imageName);
            $input['content_box_image'] = $content_box_imageName;
        }

        if ($slider_images = $request->file('slider_image')){
            $slider_image_imagenes_name = [];
            foreach ($slider_images as $key => $slider_image) {
                $destinationPath = 'uploads/';
                $slider_imageName = "slider_images_".$key. date('YmdHis') . "." . $slider_image->getClientOriginalExtension();
                $slider_image->move($destinationPath, $slider_imageName);
                $slider_image_imagenes_name[] = $slider_imageName;
            }
            $input['slider_image'] = $slider_image_imagenes_name;
        }

        $product = $this->productRepository->create($input);

        Flash::success('Product saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository
            ->makeModel()::join('marks','products.mark_id','marks.id')
            ->join('categories','products.category_id','categories.id')
            ->select('products.*','marks.name as marca','categories.name as categoria')
            ->where('products.id',$id)
            ->first();

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);
        $listCategories = Category::listCategories();
        $listMarks      = Mark::listMarks();
        $listStatus = array(
            ''=>'Selecciona uno',
            'Destacado'=>'Destacado',
            'Oferta'=>'Oferta',
            'Nuevo'=>'Nuevo',
        );
        if (empty($product)) {
            Flash::error('Product not found');
            return redirect(route('products.index'));
        }

        return view('products.edit', compact('listCategories','listMarks','listStatus'))->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');
            return redirect(route('products.index'));
        }
        $input = $request->all();
        if ($primary_image = $request->file('primary_image')) {
            //dd($primary_image, $primary_image->getRealPath());
            $destinationPath = 'uploads/';
            $primary_imageName = "primary_image_". date('YmdHis') . "." . $primary_image->getClientOriginalExtension();
            $primary_image->move($destinationPath, $primary_imageName);
            $input['primary_image'] = $primary_imageName;
            Image::make($destinationPath.$primary_imageName)->resize(269,162)->save('uploads/thumbnail/'.$primary_imageName,72);
            Image::make($destinationPath.$primary_imageName)->resize(250,250)->save('uploads/thumbnail/250px/'.$primary_imageName,72);
            Image::make($destinationPath.$primary_imageName)->resize(300,300)->save('uploads/thumbnail/300px/'.$primary_imageName,100);
        }
        if ($content_box_image = $request->file('content_box_image')) {
            $destinationPath = 'uploads/';
            $content_box_imageName = "content_box_image_" . date('YmdHis') . "." . $content_box_image->getClientOriginalExtension();
            $content_box_image->move($destinationPath, $content_box_imageName);
            $input['content_box_image'] = $content_box_imageName;
        }

        if ($slider_images = $request->file('slider_image')){
            $slider_image_imagenes_name = [];
            foreach ($slider_images as $key => $slider_image) {
                $destinationPath = 'uploads/';
                $slider_imageName = "slider_images_".$key. date('YmdHis') . "." . $slider_image->getClientOriginalExtension();
                $slider_image->move($destinationPath, $slider_imageName);
                $slider_image_imagenes_name[] = $slider_imageName;
            }
            $input['slider_image'] = $slider_image_imagenes_name;
        }

        
        $product = $this->productRepository->update($input, $id);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }
}
