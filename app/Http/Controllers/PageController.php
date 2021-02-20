<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Cassandra\Rows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    public function index()
    {
        $camaras = $this->productRepository
                        ->makeModel()::join('categories','products.category_id','categories.id')
                        ->where('categories.id','1')
                        ->select('products.*','categories.name as categoria')
                        ->get();
        $lentes  = $this->productRepository
                        ->makeModel()::join('categories','products.category_id','categories.id')
                        ->where('categories.id','2')
                        ->select('products.*','categories.name as categoria')
                        ->get();
        $proyectores = $this->productRepository
                            ->makeModel()::join('categories','products.category_id','categories.id')
                            ->where('categories.id','3')
                            ->select('products.*','categories.name as categoria')
                            ->get();

        return view('web.index',compact('camaras','lentes','proyectores'));
    }

    public function organismsGovernmental()
    {
        return view('web.governmental');
    }

    public function organismsEducative()
    {
        return view('web.educative');
    }

    public function organismsBusiness()
    {
        return view('web.business');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function faqs()
    {
        return view('web.faqs');
    }

    public function aboutUs()
    {
        return view('web.about_us');
    }

    public function productList(Request $request)
    {
        $filtros = [];
       // dd($request->all());
        $marks = $this->productRepository
            ->makeModel()::join('marks','products.mark_id','marks.id')
            ->groupBy('marks.name')
            ->select('marks.name',DB::raw('COUNT(products.id) as catinda_by_marks'))
            ->get();
        $models = $this->productRepository
            ->makeModel()::groupBy('modelo')
            ->select('modelo',DB::raw('COUNT(products.id) as catinda_by_models'))
            ->get()->toArray();

            $query = $this->productRepository
                    ->makeModel()::join('marks','products.mark_id','marks.id')
                    ->join('categories','products.category_id','categories.id');
                    if(isset($request->product)){
                        $productNames = $request->product;
                        if (is_array($productNames)){
                            $query->where(function ($query) use ($productNames){
                                foreach ($productNames as $productSearch){
                                    $query->whereOr('products.name','like','%'.$productSearch.'%');
                                }
                            });
                            $filtros['products'] = array_unique($productNames);
                        }else{
                            $query->whereOr('products.name','like','%'.$productNames.'%');
                            $filtros['products'] = $productNames;
                        }
                    }
                    if(isset($request->precio)){
                        $precioNames = $request->precio;
                        if (is_array($precioNames)){
                            $query->whereOr(function ($query) use ($precioNames){
                                foreach ($precioNames as $precioSearch){
                                    $query->whereOr('products.precio','like','%'.$precioSearch.'%');
                                }
                            });
                            $filtros['precio'] = array_unique($precioNames);
                        }else{
                            $query->where('products.precio','like','%'.$precioNames.'%');
                            $filtros['precio'] = $precioNames;
                        }
                    }
                    if(isset($request->modelo)){
                        $modeloNames = $request->modelo;
                        if (is_array($modeloNames)){
                            $query->whereOr(function ($query) use ($modeloNames){
                                foreach ($modeloNames as $modeloSearch){
                                    $query->whereOr('products.modelo','like','%'.$modeloSearch.'%');
                                }
                            });
                            $filtros['modelo'] = array_unique($modeloNames);
                        }else{
                            $query->where('products.modelo','like','%'.$modeloNames.'%');
                            $filtros['modelo'] = $modeloNames;
                        }
                    }
                    if(isset($request->category)){
                        $categoryNames = $request->category;
                        if (is_array($categoryNames)){
                            $query->whereOr(function ($query) use ($categoryNames){
                                foreach ($categoryNames as $categorySearch){
                                    $query->whereOr('categories.name','like','%'.$categorySearch.'%');
                                }
                            });
                            $filtros['category'] = array_unique($categoryNames);
                        }else{
                            $query->where('categories.name','like','%'.$categoryNames.'%');
                            $filtros['category'] = $categoryNames;
                        }
                    }
                    if(isset($request->mark)){
                        $markNames = $request->mark;
                        if (is_array($markNames)){
                            $query->whereOr(function ($query) use ($markNames){
                                foreach ($markNames as $markSearch){
                                    $query->whereOr('marks.name','like','%'.$markSearch.'%');
                                }
                            });
                            $filtros['mark'] = array_unique($markNames);
                        }else{
                            $query->where('marks.name','like','%'.$markNames.'%');
                            $filtros['mark'] = $markNames;
                        }
                    }
            $query->select('products.*','marks.name as marca','categories.name as categoria');
            if($request->order){
                $query->orderByRaw(DB::raw("FIELD(products.status_product, '".$request->order."' ) DESC"));
                $filtros['order'] = $request->order;
            }
            $products = $query->paginate(5);

        return view('web.product_list',compact('products','marks','models','filtros'));
    }
    public function productDetail($slug)
    {

        $product = $this->productRepository
            ->makeModel()::join('marks','products.mark_id','marks.id')
            ->join('categories','products.category_id','categories.id')
            ->where('products.slug',$slug)
            ->select('products.*','marks.name as marca','categories.name as categoria')
            ->first();
        
        return view('web.product_detail_b',compact('product'));
    }

    public function ajaxSearch(Request $request)
    {
        if ($search = $request->input('search')){
            $product = $this->productRepository->makeModel()::join('categories','products.category_id','categories.id')
                            ->where('products.name','like','%'.$search.'%')
                            ->select('products.*','categories.name as categoria')
                            ->get();
        }
        return response()->json($product, 200, ['Content-Type'=>'application/json'], JSON_UNESCAPED_UNICODE);
    }
}
