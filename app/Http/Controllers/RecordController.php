<?php

namespace App\Http\Controllers;

use App\Models\records;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function getRecord(){
        return view('records',[
            "title" => "Records",
            "records" => records::all()
        ]);
    }
}
