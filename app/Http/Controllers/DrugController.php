<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index(){
        $data = Drug::all();
        //dd($data);
        return view('dataobat', compact('data'));
    }

    public function tambahobat(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Drug::create($request->all());
        return redirect()->route('obat');
    }

    public function tampilkandata($kode){
        $data = Drug::find($kode);
        //dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $kode){
        $data = Drug::find($kode);
        $data->update($request->all());

        return redirect()->route('obat');
    }

    public function delete($kode){
        $data = Drug::find($kode);
        //dd($data);
        $data->delete();

        return redirect()->route('obat');
    }
}
