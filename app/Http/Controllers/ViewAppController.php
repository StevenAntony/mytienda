<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class ViewAppController extends Controller
{
    public function venta()
    {
        $document = Document::saleDocument();
        return view('app.negocio.venta')
                ->with('document',$document);
    }
}
