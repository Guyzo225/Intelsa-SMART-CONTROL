<?php

namespace App\Http\Controllers;

use App\Rapports;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SimulatorController extends Controller
{


    public function rapportImport(Request  $request){
        if ($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();

            $data = Excel::load($path,function ($reader){})->get();

            if (!empty($data) && $data->count()){
                foreach ($data as $key => $value){
                  $rapports = new Rapports();

                  $rapports->date = $value->date;
                    $rapports->kwh = $value->kwh;
                    $rapports->save();



                }
            }
        }
    }

}
