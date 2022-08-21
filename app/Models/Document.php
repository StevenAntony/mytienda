<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table = 'documento';

    protected $primaryKey = 'Codigo';

    public $timestamps = false;

    public static function saleDocument()
    {
        $document = self::select([
                        'documento.Nombre as nameDocument',
                        'serie.Serie as nameSerie',
                        'serie.Codigo as codeSerie'
                    ])
                    ->join('serie','serie.CodigoDocumento','=','documento.Codigo')
                    ->where('serie.Estado','=',1)
                    ->where('documento.Afines','=','01')
                    ->where('documento.Estado','=',1)->get();

        $groupDocument = [];
        foreach ($document as $key => $value) {
            $search = array_search($value->nameDocument,array_column($groupDocument,'nameDocument'));
            if ($search === false) {
                array_push($groupDocument,[
                    'nameDocument'   => $value->nameDocument,
                    'series'            => []
                ]);
                $groupDocument[count($groupDocument)-1]['series'][] = [
                    'codeSerie'   => $value->codeSerie,
                    'nameSerie'   => $value->nameSerie
                ];
            }else{
                $groupDocument[$search]['series'][] =[
                    'codeSerie'   => $value->codeSerie,
                    'nameSerie'   => $value->nameSerie
                ];
            }
        }

        return $groupDocument;
    }
}
