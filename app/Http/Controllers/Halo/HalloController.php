<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function ole()
    {
        $nama = "Ardhi";
        $data = ["nama"=> $nama];
        return view("coba.ole", $data);
    }
}
