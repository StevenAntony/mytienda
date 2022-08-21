<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Person;
use App\Models\Document;
use App\Modules\Response;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ResourceController extends Controller
{
    private static $response ;

    public function __construct() {
        self::$response = new Response;
        self::$response->setHeader([]);
    }

    public function saleDocument(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'action'    => ['required',Rule::in(['List', 'Create'])],
            'reference' => 'required|string|max:2'
        ]);

        if (!$validator->fails()) {
            switch ($request->action) {
                case 'List':
                    $document = Document::saleDocument();
                    self::$response->setCodigo(200);
                    self::$response->setMensaje("Información");
                    self::$response->setDatos($document);
                    break;
                default:
                    self::$response->setCodigo(404);
                    self::$response->setMensajeError('action no disponible');
                    break;
            }
        }else{
            self::$response->setCodigo(400);
            self::$response->setMensajeError($validator->errors());
        }

        return response()->json(self::$response->send(), 200, self::$response->getHeader());
    }

    public function paymentMethod(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'action'    => ['required',Rule::in(['List', 'Create'])]
        ]);

        if (!$validator->fails()) {
            switch ($request->action) {
                case 'List':
                    $paymentMethod = PaymentMethod::list();
                    self::$response->setCodigo(200);
                    self::$response->setMensaje("Información");
                    self::$response->setDatos($paymentMethod);
                    break;
                default:
                    self::$response->setCodigo(404);
                    self::$response->setMensajeError('action no disponible');
                    break;
            }
        }else{
            self::$response->setCodigo(400);
            self::$response->setMensajeError($validator->errors());
        }

        return response()->json(self::$response->send(), 200, self::$response->getHeader());
    }

    public function client(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'action'    => ['required',Rule::in(['Search'])],
            'search'    => 'required|string'
        ]);

        if (!$validator->fails()) {
            switch ($request->action) {
                case 'Search':
                    $person = Person::searchClient($request->search);
                    self::$response->setCodigo(200);
                    self::$response->setMensaje("Información");
                    self::$response->setDatos($person);
                    break;
                default:
                    self::$response->setCodigo(404);
                    self::$response->setMensajeError('action no disponible');
                    break;
            }
        }else{
            self::$response->setCodigo(400);
            self::$response->setMensajeError($validator->errors());
        }

        return response()->json(self::$response->send(), 200, self::$response->getHeader());
    }

    public function product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'action'    => ['required',Rule::in(['Search'])],
            'search'    => 'required|string'
        ]);

        if (!$validator->fails()) {
            switch ($request->action) {
                case 'Search':
                    $product = Item::productForSale($request->search);
                    self::$response->setCodigo(200);
                    self::$response->setMensaje("Información");
                    self::$response->setDatos($product);
                    break;
                default:
                    self::$response->setCodigo(404);
                    self::$response->setMensajeError('action no disponible');
                    break;
            }
        }else{
            self::$response->setCodigo(400);
            self::$response->setMensajeError($validator->errors());
        }

        return response()->json(self::$response->send(), 200, self::$response->getHeader());
    }
}
