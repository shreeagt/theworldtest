<?php

namespace App\Model;
// use VanOns\Laraberg\Models\Gutenbergable;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    // use Gutenbergable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'blog_url', 'blog_title'
    // ]; 

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "videos";
}