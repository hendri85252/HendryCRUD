<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PenontonController extends Controller
{
    public function index(){
        $penonton = DB::table('tblpenonton')->get();

        return view('index',['penonton'=>$penonton ]);


        return view('index',['penonton'=>$penonton]);
    }

    public function tambah(){
        return view('tambah');
   
        return redirect('/penonton');
    }
   

    public function store(Request $request){
        DB::table('tblpenonton')->insert([
            'nama'=> $request->nama,
            'asal'=> $request->asal,
            'tahun'=> $request->tahun

        ]);

        return redirect('/penonton');
    }


    public function edit($id){
        $penonton = DB::table('tblpenonton')->where('id',$id)->get();
        
        return view('edit',['penonton' =>$penonton]);
        return redirect('/penonton');
  }

  public function update(Request $request){
    DB::table('tblpenonton')->where('id',$request->id)->update([
        'nama'=> $request->nama,
        'asal'=> $request->asal,
        'tahun'=> $request->tahun,
        ]);
        return redirect('/penonton');
}

    public function hapus($id){
        DB::table('tblpenonton')->where('id',$id)->delete();
        return redirect('/penonton');
    }





}
 
   
  





   
   // public function index($nama){
     //   return $nama;
// }
//public function penonton(){
  //      return view('penonton');
//}

 //public function proses(Request $request){
   // $nama = $request->input('nama');
    //$alamat = $request->input('alamat');
    //return "Nama : ".$nama.", Alamat : ".$alamat;
// }

//}
