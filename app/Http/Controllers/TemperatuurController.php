<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use App\Dagmeting; 
use Illuminate\Http\Request; 
class TemperatuurController extends Controller 
{ 
    public function index() 
    { 
        return view('selecteer'); 
    } 
    public function detail(Request $request) 
    {
        $maand = $request->input('maand'); 
        $metingen = Dagmeting::where('maandnr', $maand)->orderBy('dagnr', 'asc')->get(); 
        return view('overzicht', array('maand'=>$maand, 'metingen'=>$metingen));    
    } 
}
