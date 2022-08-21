<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    protected $table = 'medio_pago';

    protected $primaryKey = 'Codigo';

    public $timestamps = false;

    public static function list($status = true)
    {
        $document = self::select([
                        'Nombre as namePaymentMethod',
                        'Codigo as codePaymentMethod'
                    ]);
        $document = ($status)?$document->where('Estado','=',1):$document;

        $document = $document->get();

        return $document;
    }
}
