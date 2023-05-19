<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
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
    protected $table = "photos";
}