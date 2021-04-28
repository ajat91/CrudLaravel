<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PageController extends Controller
{


    public function index(){
        return view('page.index');
        }


    
    public function post(Request $request){
    //     if($request->isMethod('post')){
    //         $data=$request->all();
    //         $pegawai=new Pegawai;
    //         $pegawai->name=$data['nama'];
    //         $pegawai->nip=$data['nip'];
    //         $pegawai->departemen=$data['departemen'];
    //         $pegawai->Save();

    //         return redirect()->back();
        $this->validate($request,[
            'name'=>'required',
            'nip'=>'required|unique:pegawais|max:9',
            'departemen'=>'required',
        ]);
        Pegawai::create([
            'name'=>$request->input('name'),
            'nip'=>$request->input('nip'),
            'departemen'=>$request->input('departemen')
        ]);
        return redirect()->back()->with('flash_message_success','Insert Berhasil');
    }
    public function pegawai(){
        $pegawai=Pegawai::all();
        return view('page.pegawai',compact('pegawai'));
    }
}
