<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = "matakuliahs";
    protected $primarykey = "id";
    protected $fillable =['id','nama','sks'];
}
