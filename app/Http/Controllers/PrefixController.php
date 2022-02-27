<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefixController extends Controller
{
    public function honda(){
        return "Ini Adalah Halaman Motor Honda";
    }
    public function yamaha(){
        return "Ini Adalah Halaman Motor Yamaha";
    }
    public function kawasaki(){
        return "Ini Adalah Halaman Motor Kawasaki";
    }
    public function karir(){
        return "Program Karir";
    }
    public function magang(){
        return "Program Magang";
    }
    public function kunjungan(){
        return "Program Kunjungan Industri";
    }
}
