<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    //
    public function index($id)
    {
        $items = JawabanModel::get_jawaban($id);

        return view('content.isijawaban', compact('items'));
    }
    public function create($id)
    {
        $items = PertanyaanModel::get_pertanyaan($id);
        return view('content.jawaban', compact('items'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['id_pertanyaan'] = $id;
        $item = JawabanModel::save_jawaban($data);

        if ($item) {
            return redirect('pertanyaan');
        }
    }
}
