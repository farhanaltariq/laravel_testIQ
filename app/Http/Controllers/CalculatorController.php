<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\N1Import;
use App\Models\N1;
use App\Models\Key_N1;
class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test_n1()
    {
        $n1 = N1::all();
        $key = Key_N1::all();
        return view('dashboard.calculator.test-n1', compact('n1', 'key'));
    }
    public function ans_n1(Request $request){
        // validate file
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);
        Excel::import(new N1Import, $request->file('file'));
        return redirect()->route('test-n1')->with('success', 'Data imported successfully.');
    }
    public function data_n1(){
        $n1 = N1::all();
        return DataTables::of($n1)->make(true);
    }
}
