<?php

namespace App\Http\Controllers;
use App\Files; // necessario adicionar
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Illuminate\Http\Request;


class DownloadController extends Controller
{
    //
     public function post ($id) {
        $name= DB::table('files')->where('id_files', $id)->first();
        if ($name == null){
          echo 'Page not found, please try other download id!';  
        }else{
        return view('download', ['name' => $name->downloaddescription, 'id' => $id]);
        }
    }

    public function getIp(){ // function get ip 
      foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
          if (array_key_exists($key, $_SERVER) === true){
              foreach (explode(',', $_SERVER[$key]) as $ip){
                  $ip = trim($ip); // just to be safe
                  if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                      return $ip;
                  }
              }
          }
      }
      return request()->ip(); 
  }

    public function downloadFile($id){

      $file_name = DB::table('files')->where('id_files', $id)->value('filename');
      $path = storage_path().'/'.'app'.'/files/'.$file_name;            
      return response()->download($path); 
        
    }
}