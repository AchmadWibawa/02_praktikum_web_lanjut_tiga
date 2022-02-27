<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function rekomendasi(){
        return 'Berikut Rekomendasi Motor';
    }
    public function motor($nama){
        return 'Rekomendasi Pertama Adalah Motor '.$nama;
    }
}
