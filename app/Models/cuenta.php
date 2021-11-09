<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{
    use HasFactory;
    protected $table ='cuentas';
    protected $primaryKey ='id';  
    public $timestamps = false; 
   
   // public function tipo(){
     // return $this->belongsTo('App\Models\tipo_actividad','actividadcomercial');
    //}
}
