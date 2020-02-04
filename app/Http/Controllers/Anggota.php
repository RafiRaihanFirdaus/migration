<?php

namespace App\Http\Controllers;
use App\Anggota_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class Anggota extends Controller
{
    public function store(Request $req)
  {
      $validator=Validator::make($req->all(),
      [
          'nama_anggota'=>'required',
          'alamat'=>'required',
          'telp'=>'required'
      ]);
      if($validator->fails()){
          return Response()->json($validator->errors());
      }

      $simpan=Anggota_model::create([
          'nama_anggota'=>$req->nama_anggota,
          'alamat'=>$req->alamat,
          'telp'=>$req->telp
      ]);
      if($simpan){
          return Response()->json(['status'=>1,'message'=>"Data pelanggaran berhasil ditambahkan!"]);
      }else{
          return Response()->json(['status'=>0]);
      }
  }

  public function update($id_anggota,Request $req)
  {
      $validator=Validator::make($req->all(),
      [
          'nama_anggota'=>'required',
          'alamat'=>'required',
          'telp'=>'required'
      ]);

      if($validator->fails()){
          return Response()->json($validator->errors());
      }
      $ubah=Anggota_model::where('id', $id_anggota)->update([
          'nama_anggota'=>$req->nama_anggota,
          'alamat'=>$req->alamat,
          'telp'=>$req->telp
      ]);
      if($ubah){
          return Response()->json(['status'=>1,'message'=>"Data pelanggaran berhasil diubah!"]);
      }else{
          return Response()->json(['status'=>0]);
      }
  }
  public function destroy($id_anggota)
  {
      $hapus=Anggota_model::where('id',$id_anggota)->delete();
      if($hapus){
          return Response()->json(['status'=>1,'message'=>"Data pelanggaran berhasil dihapus!"]);
      }else{
          return Response()->json(['status'=>0]);
      }
  }
  public function tampil_anggota()
    {
        $data_anggota=Anggota_model::All();
        return Response()->json($data_anggota);
    }
}
