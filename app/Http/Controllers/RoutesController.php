<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoutesController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function infraestructura(){
    	return view('infraestructura/infraestructura_index');
    }

	public function equipamiento(){
    	return view('equipamiento/equipamiento_index');
    }    
}
