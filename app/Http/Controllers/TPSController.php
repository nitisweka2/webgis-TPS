<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TPSModels;

class TPSController extends Controller
{
    //
    public function __construct()
    {
        // Apply the 'auth' middleware to all methods except 'index' and 'ambildata'
        $this->middleware('auth')->except(['index', 'ambildata', 'getLocations', 'getNonFullBesarLocations','search2nd']);
        
        // Apply additional middleware or checks based on your requirements
    }
    public function index()
    {
        $tb_tps = TPSModels::paginate(10);
        return view('/layout.v_informasi_sampah', compact('tb_tps'));
    }

    public function indexdua()
    {
        $tb_tps = TPSModels::paginate(10);
        return view('/tps.tps_index', compact('tb_tps'));
    }

    public function ambildata()
    {
        // Mengambil semua data dari tabel tb_tps
        $tb_tps = TPSModels::all();

        // Mengambil data dari kolom longitude dan latitude
        //$lokasiData = $tb_tps->pluck([ 'latitude']);

        // Anda dapat mengakses $lokasiData di dalam view atau melakukannya sesuai kebutuhan Anda
        return view('/layout.v_home', compact('tb_tps'));
    }

    public function getLocations()
    {
        $locations = TPSModels::all();
        return response()->json($locations);
    }

    public function getNonFullBesarLocations()
    {
        // Ambil data TPS dengan kelas 'besar' dan keadaan tidak 'penuh'
        $nonFullBesarLocations = TPSModels::where('kelas_tps', 'besar')
            ->where('keadaan', '!=', 'penuh')
            ->get();

        return response()->json($nonFullBesarLocations);
    }

    public function tampilkanPeta()
    {
        $data = TPSModels::all();
        return view('tes', compact('data'));
    }

    //CRUD
    // Create Form
    public function create()
    {
        return view('tps.create');
    }

    // Store Data
    public function store(Request $request)
    {
        $request->validate([
            'nama_tps' => 'required',
            'jenis_tps' => 'required',
            'kelas_tps' => 'required',
            'status_tanah' => 'required',
            'volume' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'alamat' => 'required',
            'pelayanan' => 'required',
            'keadaan' => 'required|string|max:255',
        ]);

        TPSModels::create($request->all());

        return redirect()->route('tps.index')->with('success', 'Data TPS berhasil ditambahkan!');
    }

    // Edit Form
    public function edit($no_tps)
    {
        $tps = TPSModels::findOrFail($no_tps);
        return view('tps.edit', compact('tps'));
    }

    // Update Data
    public function update(Request $request, $no_tps)
    {
        $request->validate([
            'nama_tps' => 'required',
            'jenis_tps' => 'required',
            'kelas_tps' => 'required',
            'status_tanah' => 'required',
            'volume' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'alamat' => 'required',
            'pelayanan' => 'required',
            'keadaan' => 'required|string|max:255',
        ]);

        $tps = TPSModels::findOrFail($no_tps);
        $tps->update($request->all());

        return redirect()->route('tps.index')->with('success', 'Data TPS berhasil diperbarui!');
    }

    // Delete Data
    public function destroy($no_tps)
    {
        $tps = TPSModels::findOrFail($no_tps);
        $tps->delete();

        return redirect()->route('tps.index')->with('success', 'Data TPS berhasil dihapus!');
    }

    //search data
    public function search(Request $request)
    {
        $search = $request->input('search');

        $tb_tps = $search
            ? TPSModels::where(function ($query) use ($search) {
                $query->where('nama_tps', 'LIKE', '%' . $search . '%')
                    ->orWhere('jenis_tps', 'LIKE', '%' . $search . '%')
                    ->orWhere('kelas_tps', 'LIKE', '%' . $search . '%')
                    ->orWhere('status_tanah', 'LIKE', '%' . $search . '%')
                    ->orWhere('volume', 'LIKE', '%' . $search . '%')
                    ->orWhere('alamat', 'LIKE', '%' . $search . '%')
                    ->orWhere('pelayanan', 'LIKE', '%' . $search . '%')
                    ->orWhere('keadaan', 'LIKE', '%' . $search . '%');
            })
            ->paginate(10)
            : TPSModels::paginate(10);

        return view('tps.tps_index', compact('tb_tps', 'search'));
    }

    public function search2nd(Request $request)
    {
        $search = $request->input('search');

        $tb_tps = $search
            ? TPSModels::where(function ($query) use ($search) {
                $query->where('nama_tps', 'LIKE', '%' . $search . '%')
                    ->orWhere('jenis_tps', 'LIKE', '%' . $search . '%')
                    ->orWhere('kelas_tps', 'LIKE', '%' . $search . '%')
                    ->orWhere('status_tanah', 'LIKE', '%' . $search . '%')
                    ->orWhere('volume', 'LIKE', '%' . $search . '%')
                    ->orWhere('alamat', 'LIKE', '%' . $search . '%')
                    ->orWhere('pelayanan', 'LIKE', '%' . $search . '%')
                    ->orWhere('keadaan', 'LIKE', '%' . $search . '%');
            })
            ->paginate(10)
            : TPSModels::paginate(10);

        return view('layout\v_informasi_sampah', compact('tb_tps', 'search'));
    }

}
