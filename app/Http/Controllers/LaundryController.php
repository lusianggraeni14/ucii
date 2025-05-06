<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function index()
    {
        $laundries = Laundry::all();
        return view('laundries.index', compact('laundries'));
    }

    public function create()
    {
        return view('laundries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        Laundry::create($request->all());

        return redirect()->route('laundries.index')->with('success', 'Data laundry berhasil ditambahkan.');
    }

    public function show($id)
    {
        $laundry = Laundry::findOrFail($id);
        return view('laundries.show', compact('laundry'));
    }

    public function edit($id)
    {
        $laundry = Laundry::findOrFail($id);
        return view('laundries.edit', compact('laundry'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $laundry = Laundry::findOrFail($id);
        $laundry->update($request->all());

        return redirect()->route('laundries.index')->with('success', 'Data laundry berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $laundry = Laundry::findOrFail($id);
        $laundry->delete();

        return redirect()->route('laundries.index')->with('success', 'Data laundry berhasil dihapus.');
    }
}
