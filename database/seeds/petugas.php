<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Anggota_model::insert([
          [
            "nama_anggota"=>'rafi',
            "alamat"=>'jalan halo',
            "telp"=>'0812623',
            "username"=>'hai',
            "password"=>'123',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            "nama_anggota"=>'yzh',
            "alamat"=>'jalan tes',
            "telp"=>'0812981',
            "username"=>'hai',
            "password"=>'123',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            "nama_anggota"=>'cpa',
            "alamat"=>'jalan hai',
            "telp"=>'0812912',
            "username"=>'hai',
            "password"=>'123',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            "nama_anggota"=>'gdn',
            "alamat"=>'jalan jalan',
            "telp"=>'081272',
            "username"=>'hai',
            "password"=>'123',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            "nama_anggota"=>'raihan',
            "alamat"=>'jalan hai',
            "telp"=>'082532',
            "username"=>'hai',
            "password"=>'123',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ]
    }
}
