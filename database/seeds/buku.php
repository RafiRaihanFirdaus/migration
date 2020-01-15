<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
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
            "judul"=>'rafi',
            "penerbit"=>'hai',
            "pengarang"=>'sue',
            "foto"=>'-',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            "judul"=>'yzh',
            "penerbit"=>'jadi',
            "pengarang"=>'gyun',
            "foto"=>'-',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            "judul"=>'cpa',
            "penerbit"=>'gimana',
            "pengarang"=>'odx',
            "foto"=>'-',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            "judul"=>'rafi',
            "penerbit"=>'kalau',
            "pengarang"=>'ylx',
            "foto"=>'-',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            "judul"=>'rafi',
            "penerbit"=>'jalan jalan',
            "pengarang"=>'slx',
            "foto"=>'-',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ]
      ]);
    }
}
