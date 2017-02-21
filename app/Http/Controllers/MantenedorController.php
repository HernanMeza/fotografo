<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MantenedorController extends Controller
{
	public function __construct(){
	}

	public function showFirstAlbum(){
		//consultar album
		
		//consultar sus fotos


		//mostrar las vistas
		return view('mantenedorViews.mantenedorDer');
	}

	public function crearAlbum(){
		return view('mantenedorViews.crearAlbum');
	}


     
}
