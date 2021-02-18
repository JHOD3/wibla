<?php

namespace App\Models;

use App\Casts\Json;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version December 14, 2020, 3:55 am UTC
 *
 * @property \App\Models\categories $category
 * @property \App\Models\marks $mark
 * @property integer $category_id
 * @property integer $mark_id
 * @property string $name
 * @property string $sub_name
 * @property string $text_additional
 * @property string $precio
 * @property string $property
 * @property string $primary_image
 * @property string $content_box_image
 * @property string $slider_image
 * @property string $box_content
 * @property string $slug
 * @property string $title_description
 * @property string $Description
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_id',
        'mark_id',
        'name',
        'sub_name',
        'text_additional',
        'precio',
        'property',
        'primary_image',
        'content_box_image',
        'status_product',
        'slider_image',
        'box_content',
        'slug',
        'title_description',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'mark_id' => 'integer',
        'name' => 'string',
        'sub_name' => 'string',
        'text_additional' => 'string',
        'precio' => 'string',
        'property' => Json::class,
        'primary_image' => 'string',
        'status_product' => 'string',
        'content_box_image' => 'string',
        'slider_image' => Json::class,
        'box_content' => Json::class,
        'slug' => 'string',
        'title_description' => 'string',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'mark_id' => 'required',
        'precio' => 'required',
        'property' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\categories::class, 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function mark()
    {
        return $this->belongsTo(\App\Models\marks::class, 'mark_id', 'id');
    }
}
