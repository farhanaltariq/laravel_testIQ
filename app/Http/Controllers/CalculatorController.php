<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\VImport;
use App\Models\V;
use App\Models\Key_V;

use App\Imports\N1Import;
use App\Models\N1;
use App\Models\Key_N1;

use App\Imports\N2Import;
use App\Models\N2;
use App\Models\Key_N2;

use App\Imports\N3Import;
use App\Models\N3;
use App\Models\Key_N3;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // V
    public function test_v(Request $request)
    {
        if($request->search)
            $v = V::where('nama', 'like', '%'.$request->search.'%')->orWhere('created_at', 'like', '%'.$request->search.'%')->orderBy('id', 'desc')->paginate(15);
        else
            $v = V::orderBy('id', 'desc')->paginate(15);
        $keys = Key_V::all();
        $answer[0] = '';
        $type[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
            $type[] = $key->type;
        }
        return view('dashboard.calculator.test-v', compact('v', 'answer', 'type'));
    }
    public function key_v(){
        $keys = Key_V::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.keys.v', compact('answer'));
    }

    public function create_v(){
        return view('dashboard.calculator.test-v-create');
    }
    public function ans_v(Request $request){
        // validate file
        try{
            $this->validate($request, [
                'file' => 'required|mimes:xls,xlsx'
            ]);
            Excel::import(new VImport, $request->file('file'));
            return redirect()->route('test-v')->with('success', 'Data imported successfully.');
        } catch (\Exception $e){
            return redirect()->route('test-v')->with('error', 'invalid answer format');
        }
    }
    public function store_v(Request $request){
        try{
            v::create($request->all());
        } catch (\Exception $e){
            return redirect()->back()->withInput()->with('error', 'invalid answer format');
        }
    }
    public function show_v($id){
        $v = v::find($id);
        $keys = Key_v::all();
        $answer[0] = '';
        $type[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
            $type[] = $key->type;
        }
        return view('dashboard.calculator.test-v-show', compact('v', 'answer', 'type'));
    }
    public function update_v(Request $request, $id){
        v::find($id)->update($request->all());
        return redirect()->route('test-v', $id)->with('success', 'Data updated successfully.');
    }
    public function destroy_v($id){
        $v = v::find($id);
        $v->delete();
        return redirect()->route('test-v')->with('success', 'Data deleted successfully.');
    }
    
    // N1
    public function test_n1(Request $request)
    {
        if($request->search)
            $n1 = N1::where('nama', 'like', '%'.$request->search.'%')->orWhere('created_at', 'like', '%'.$request->search.'%')->orderBy('id', 'desc')->paginate(15);
        else
            $n1 = N1::orderBy('id', 'desc')->paginate(15);
        $keys = Key_N1::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.calculator.test-n1', compact('n1', 'answer'));
    }
    public function key_n1(){
        $keys = Key_N1::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.keys.n1', compact('answer'));
    }

    public function create_n1(){
        return view('dashboard.calculator.test-n1-create');
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
    public function store_n1(Request $request){
        try{
            N1::create($request->all());
        } catch (\Exception $e){
            return redirect()->back()->withInput()->with('error', 'invalid answer format');
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
    public function update_n1(Request $request, $id){
        N1::find($id)->update($request->all());
        return redirect()->route('test-n1', $id)->with('success', 'Data updated successfully.');
    }
    public function destroy_n1($id){
        $n1 = N1::find($id);
        $n1->delete();
        return redirect()->route('test-n1')->with('success', 'Data deleted successfully.');
    }

     // N2
    public function test_n2(Request $request)
    {
        if($request->search)
            $n2 = N2::where('nama', 'like', '%'.$request->search.'%')->orWhere('created_at', 'like', '%'.$request->search.'%')->orderBy('id', 'desc')->paginate(15);
        else
            $n2 = N2::orderBy('id', 'desc')->paginate(15);
        $keys = Key_N2::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.calculator.test-n2', compact('n2', 'answer'));
    }
    public function key_n2(){
        $keys = Key_N2::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.keys.n2', compact('answer'));
    }

    public function create_n2(){
        return view('dashboard.calculator.test-n2-create');
    }
    public function ans_n2(Request $request){
        // validate file
        try{
            $this->validate($request, [
                'file' => 'required|mimes:xls,xlsx'
            ]);
            Excel::import(new N2Import, $request->file('file'));
            return redirect()->route('test-n2')->with('success', 'Data imported successfully.');
        } catch (\Exception $e){
            return redirect()->route('test-n2')->with('error', $e->getMessage());
        }
    }
    public function store_n2(Request $request){
        try{
            N2::create($request->all());
        } catch (\Exception $e){
            return redirect()->back()->withInput()->with('error', 'invalid answer format');
        }
    }
    public function show_n2($id){
        $n2 = N2::find($id);
        $keys = Key_N2::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.calculator.test-n2-show', compact('n2', 'answer'));
    }
    public function update_n2(Request $request, $id){
        N2::find($id)->update($request->all());
        return redirect()->route('test-n2', $id)->with('success', 'Data updated successfully.');
    }
    public function destroy_n2($id){
        $n2 = N2::find($id);
        $n2->delete();
        return redirect()->route('test-n2')->with('success', 'Data deleted successfully.');
    }

    // N3
    public function test_n3(Request $request)
    {
        if($request->search)
            $n3 = N3::where('nama', 'like', '%'.$request->search.'%')->orWhere('created_at', 'like', '%'.$request->search.'%')->orderBy('id', 'desc')->paginate(15);
        else
            $n3 = N3::orderBy('id', 'desc')->paginate(15);
        $keys = Key_N3::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.calculator.test-n3', compact('n3', 'answer'));
    }
    public function key_n3(){
        $keys = Key_N3::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.keys.n3', compact('answer'));
    }
    public function ans_n3(Request $request){
        // validate file
        try{
            $this->validate($request, [
                'file' => 'required|mimes:xls,xlsx'
            ]);
            Excel::import(new N3Import, $request->file('file'));
            return redirect()->route('test-n3')->with('success', 'Data imported successfully.');
        } catch (\Exception $e){
            return redirect()->route('test-n3')->with('error', 'invalid answer format');
        }
    }
    public function show_n3($id){
        $n3 = N3::find($id);
        $keys = Key_N3::all();
        $answer[0] = '';
        foreach($keys as $key){
            $answer[] = $key->answer;
        }
        return view('dashboard.calculator.test-n3-show', compact('n3', 'answer'));
    }
    public function update_n3(Request $request, $id){
        N3::find($id)->update($request->all());
        return redirect()->route('test-n3', $id)->with('success', 'Data updated successfully.');
    }
    public function destroy_n3($id){
        $N3 = N3::find($id);
        $N3->delete();
        return redirect()->route('test-n3')->with('success', 'Data deleted successfully.');
    }
}
