<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['name','description','thumb','price','sales_date','series','type'];
}
