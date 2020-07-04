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
    public function show($id)
    {
        $items = PertanyaanModel::get_pertanyaan($id);

        return view('content.pertanyaan', compact('items'));
    }
    public function edit($id)
    {
        $item = PertanyaanModel::find_pertanyaan($id);
        return view('content.edit', compact('item'));
    }
    public function update($id, Request $request)
    {
        $item = PertanyaanModel::update_pertanyaan($id, $request->all());
        if ($item) {

            return redirect('pertanyaan');
        }
    }
    public function delete($id)
    {
        $item = PertanyaanModel::delete_pertanyaan($id);
        if ($item) {
            return redirect('pertanyaan');
        }
    }
}
