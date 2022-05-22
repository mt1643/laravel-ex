<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use chillerlan\QRCode\QRCode;

class QrCodeController extends Controller
{
    public function index()
    {
        $url = 'https://www.google.com';
        $data = (new QRCode())->render($url);
        return view('qr', ['url' => $data]);
    }
}
