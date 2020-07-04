<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
        public static function get_all_pertanyaan()
        {
                $pertanyaan = DB::table('pertanyaan')->get();
                return $pertanyaan;
        }
        public static function save_pertanyaan($data)
        {
                $new_pertanyaan = DB::table('pertanyaan')->insert($data);
                return $new_pertanyaan;
        }
        public static function get_pertanyaan($id)
        {
                $pertanyaan = DB::table('pertanyaan')->where("id", $id)->get();
                return $pertanyaan;
        }
        public static function find_pertanyaan($id)
        {
                $pertanyaan = DB::table('pertanyaan')->where("id", $id)->first();
                return $pertanyaan;
        }
        public static function update_pertanyaan($id, $data)
        {
                $pertanyaan = DB::table('pertanyaan')
                        ->where("id", $id)
                        ->update([
                                'nama_judul' => $data['nama_judul'],
                                'isi' => $data['isi'],
                                'tanggal_diperbaharui' => $data['tanggal_diperbaharui'],
                                'vote' => $data['vote'],
                                'like' => $data['like'],
                                'dislike' => $data['dislike']
                        ]);
                return $pertanyaan;
        }
        public static function delete_pertanyaan($id)
        {
                $pertanyaan = DB::table('pertanyaan')
                        ->where("id", $id)
                        ->delete();
                return $pertanyaan;
        }
}
