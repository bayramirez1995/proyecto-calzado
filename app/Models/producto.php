<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table ='productos';
    protected $primaryKey ='id';  
    public $timestamps = false; 
   
   // public function tipo(){
     // return $this->belongsTo('App\Models\tipo_actividad','actividadcomercial');
    //}
}
