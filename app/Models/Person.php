<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    use HasFactory;
    protected $table = 'persona';

    protected $primaryKey = 'Codigo';

    public $timestamps = false;

    public static function searchClient(
        $search,
        $status = true    
    )
    {
        $person = self::select([
                        DB::raw('IF(persona.Tipo = "01",CONCAT(persona.Nombre," ",persona.ApellidoPaterno," ",persona.ApellidoMaterno),persona.RazonSocial) as client'),
                        DB::raw('IF(persona.TipoDocumento = "1","DNI",
                        IF(persona.TipoDocumento = "6","RUC","SIN DOCUMENTO")) as documentType'),
                        'persona.Documento as document',
                        'persona.Direccion as address'
                    ])
                    ->join('rol_persona as rp', function ($join) {
                        $join->on('rp.CodigoPersona','=','persona.Codigo')
                             ->where('rp.Rol', '=', '01')
                             ->where('rp.Estado','=',1);
                    })
                    ->where(function($query) use ($search) {
                        $query->where('persona.Nombre','like','%'.$search.'%')
                              ->orWhere('persona.ApellidoPaterno', 'like', '%'.$search.'%')
                              ->orWhere('persona.ApellidoMaterno', 'like', '%'.$search.'%')
                              ->orWhere('persona.NombreComercial', 'like', '%'.$search.'%')
                              ->orWhere('persona.Documento', 'like', '%'.$search.'%');
                    });
        $person = ($status)?$person->where('persona.Estado','=',1):$person;

        $person = $person->get();

        return $person;
    }
}
