<?php

namespace App\Http\Controllers;

use App\Models\KeluhKesahModels;
use Illuminate\Http\Request;
use App\Models\TPSModels;

class KeluhKesahController extends Controller
{
    //
    public function __construct()
    {
        // Apply the 'auth' middleware to all methods except 'index' and 'ambildata'
        $this->middleware('auth')->except(['create', 'store']);
        
        // Apply additional middleware or checks based on your requirements
    }
    public function index()
{
    $tb_keluhan = KeluhKesahModels::paginate(10); // Adjust the number as needed
    return view('keluh_kesah_index', compact('tb_keluhan'));
}

    public function create()
    {
        return view('keluh_kesah');
    }

    public function store(Request $request)
{
    $request->validate([
        'subjek' => 'required',
        'pesan' => 'required|max:255', // Adjust the maximum length as needed
    ]);

    try {
        KeluhKesahModels::create($request->all());
        return redirect()->route('keluh_kesah.create')->with('success', 'Keluhan Anda telah kami terima. Terima kasih atas partisipasinya.');
    } catch (\Exception $e) {
        return redirect()->route('keluh_kesah.create')->with('error', 'Terjadi kesalahan. Pastikan pesan tidak terlalu panjang.');
    }
}
public function destroy($no)
    {
        try {
            $keluhan = KeluhKesahModels::findOrFail($no);
            $keluhan->delete();

            return redirect()->route('keluh_kesah.index')->with('success', 'Keluhan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('keluh_kesah.index')->with('error', 'Terjadi kesalahan saat menghapus keluhan.');
        }
    }
}
