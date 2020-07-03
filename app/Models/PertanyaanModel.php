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
                $pertanyaan = DB::table('pertanyaan')->where("id", $id)->first();
                return $pertanyaan;
        }
}
