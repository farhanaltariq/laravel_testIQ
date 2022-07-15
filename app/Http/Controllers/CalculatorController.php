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
    public function test_n1(Request $request)
    {
        if($request->search)
            $n1 = N1::where('nama', 'like', '%'.$request->search.'%')->orderBy('id', 'desc')->paginate(5);
        else
            $n1 = N1::orderBy('id', 'desc')->paginate(5);
        $keys = Key_N1::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.calculator.test-n1', compact('n1', 'answer'));
    }
    public function ans_n1(Request $request){
        // validate file
        try{
            $this->validate($request, [
                'file' => 'required|mimes:xls,xlsx'
            ]);
            Excel::import(new N1Import, $request->file('file'));
            return redirect()->route('test-n1')->with('success', 'Data imported successfully.');
        } catch (\Exception $e){
            return redirect()->route('test-n1')->with('error', 'Invalid answer format.');
        }
    }
    public function show_n1($id){
        $n1 = N1::find($id);
        $keys = Key_N1::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.calculator.test-n1-show', compact('n1', 'answer'));
    }
    public function destroy_n1($id){
        $n1 = N1::find($id);
        $n1->delete();
        return redirect()->route('test-n1')->with('success', 'Data deleted successfully.');
    }
}
