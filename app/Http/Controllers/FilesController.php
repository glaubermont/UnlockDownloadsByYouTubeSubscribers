<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files; // necessario adicionar
use Illuminate\Support\Facades\DB;

class FilesController extends Controller
{
  

    public function index()	
    {
  
      $files= Files::all();
      return view ('files')->with('files',$files);
  
    }
	
	  

	
}
