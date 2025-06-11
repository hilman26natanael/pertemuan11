<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    protected $table = "prodis";
    protected $primarykey = "id";
    protected $fillable =['id','nama','fakultas'];
}
