<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function index(){
        $record = Record::all();
        return response()->json($record);
    }
}
