<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = "comics";
    protected $fillable = ['title','type','sale_date','price','description','thumb'];
}
