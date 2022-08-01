<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(){
        $data = Film::all();
        // dd($data);
        return view('datafilm',compact('data'));
    }

    public function tambahdata(){
        $data = Film::all();
        // dd($data);
        return view('tambahdata',compact('data'));
    }

    public function insertdata(Request $request){
        // dd($request->all());
        Film::create($request->all());
        return redirect()->route('datafilm')->with('Success','Berhasil Menambahkan Review! :D');
    }

    public function tampildata($id){
        $data = Film::find($id);
        // dd($data);
        return view('editdata',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Film::find($id);
        $data->update($request->all());
        return redirect()->route('datafilm')->with('Success','Berhasil Mengedit Review! :D');
    }

    public function delete($id){
        $data = Film::find($id);
        $data->delete();
        return redirect()->route('datafilm')->with('Success','Berhasil Menghapus Review! :D');
    }
}
