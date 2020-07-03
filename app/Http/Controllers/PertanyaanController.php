<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index()
    {
        $items = PertanyaanModel::get_all_pertanyaan();

        return view('content.index', compact('items'));
    }
    public function create()
    {
        return view('content.form');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $item = PertanyaanModel::save_pertanyaan($data);

        if ($item) {
            return redirect('pertanyaan');
        }
    }
}
