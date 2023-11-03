<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


  

class News extends Model

{

    use HasFactory;
 



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'title', 'content','date','source','is_bookmarked'

    ];




    protected $hidden = [
        'created_at', 'updated_at'
   ];

}