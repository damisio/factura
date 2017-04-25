<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
  //  $factura = DB::table('TBLMAfactura')->get();
  protected $fillable = ['idFactura', 'descripcion', 'precio', 'create_ad', 'update_at'];

}
