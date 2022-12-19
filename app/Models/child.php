<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class child extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'Childs';

    protected $fillable = [
        'name',
        'dob',
        'img',
        'Add',
        'class',
        'country',
        'state',
        'city',
        'pincode',
        'person_name',
        'relation',
        'contact'
    ];

}
