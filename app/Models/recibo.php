<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recibo extends Model
{
    use HasFactory;
    protected $table ='recibo';
    protected $primaryKey ='id';  
    public $timestamps = false; 
   
   // public function tipo(){
     // return $this->belongsTo('App\Models\tipo_actividad','actividadcomercial');
    //}
}
