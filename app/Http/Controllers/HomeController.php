<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){



        return view('dashboard' );
    }
public function getpdf(){
    $pdf = \App::make('dompdf.wrapper');

    $pdf->loadHTML(view('users.index_pdf',['user'=>auth()->user()]));
    return $pdf->stream();
}
}
