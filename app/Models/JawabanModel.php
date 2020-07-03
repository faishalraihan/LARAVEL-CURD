<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel
{
        public static function get_jawaban($id_pertanyaan)
        {
                $jawaban = DB::table('jawaban')
                        ->where('id_pertanyaan', $id_pertanyaan)
                        ->first();

                return $jawaban;
        }
        public static function save_jawaban($data)
        {
                $new_jawaban = DB::table('jawaban')->insert($data);
                return $new_jawaban;
        }
}
