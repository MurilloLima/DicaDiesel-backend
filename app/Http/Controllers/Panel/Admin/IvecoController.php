<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IvecoController extends Controller
{
    public function index()
    {
        return view('panel.admin.pages.iveco.index');
        # code...
    }

    public function result(Request $request)
    {
        $url = 'https://www.iveco.com/Brasil/Documents/MUM%20Scudato%20MY19%20-%20Ed.03.pdf';
        $nome = 'Macaco';
        $parser = new \Smalot\PdfParser\Parser();

        $pdf = $parser->parseContent(file_get_contents($url));
        $text = $pdf->getText();


        if (strpos($text, $nome) !== false) {
            echo '<strong>' . $text . '</strong>';
        }
    }
}
