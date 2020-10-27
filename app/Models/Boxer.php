<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boxer extends Model
{
   protected $fillable = ['name', 'division', 'country','wins','losses','draws'];
    use HasFactory;



    public function getPathAttribute () {
        return $this -> path();
    }

    public function path () {
        return "/boxers/" . $this -> id;
    }

}
