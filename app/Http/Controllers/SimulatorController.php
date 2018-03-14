<?php

namespace App\Http\Controllers;

use App\Rapport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SimulatorController extends Controller
{


    public function rapportImport(Request  $request){
        if ($request->hasFile()){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path,function ($reader){})->get();
            if (!empty($data) && $data->count()){
                foreach ($data as $key => $value){
                  $rapport = new Rapport();
                  
                }
            }
        }
    }

}
