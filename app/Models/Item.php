<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';

    protected $primaryKey = 'Codigo';

    public $timestamps = false;

    public static function productForSale($search)
    {
        $product = self::select([
                        'item.Nombre as nameProduct','p.Codigo as presentationCode',
                        'u.Nombre as nameUnit',
                        'p.Descripcion as presentationDescription',
                        'p.PrecioVenta as price',
                        'item.Marca as mark',
                        'item.Imagen as image',
                        DB::raw('IF(SUM(sp.Cantidad) IS NULL,0,SUM(sp.Cantidad)) as Stock')
                    ])
                    ->join('presentacion as p', function ($join) {
                        $join->on('p.CodigoItem','=','item.Codigo')
                             ->where('p.Estado','=',1);
                    })
                    ->join('unidad_medida as u','u.Codigo','=','p.CodigoUnidad')
                    ->where(function($query) use ($search) {
                        $query->where('item.Nombre','like','%'.$search.'%');
                    })
                    ->leftjoin('stock_presentacion as sp','sp.CodigoPresentacion','=','p.Codigo')
                    ->where('item.Estado','=',1)
                    ->whereIn('item.Tipo',['01','02'])
                    ->groupBy('p.Codigo')
                    ->get();

        return $product;
    }
}
