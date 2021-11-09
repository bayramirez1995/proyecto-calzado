<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table ='clientes';
    protected $primaryKey ='id';  
    public $timestamps = false; 
   
   // public function tipo(){
     // return $this->belongsTo('App\Models\tipo_actividad','actividadcomercial');
    //}
}
