<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    //custom primary key
    protected $primaryKey ='company_id';
    //incrementing

    public $incrementing = false;
    // timestamps
    public $timestamps = false;
    // artributes

    public $attributes = [

    ];
}
