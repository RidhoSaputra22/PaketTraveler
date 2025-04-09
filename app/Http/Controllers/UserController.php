<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $datas = User::with('departement')->whereNot('role', 'admin')->get();

        return view('admin.anggota.index', compact('datas', 'request'));
    }
    public function print(Request $request)
    {
        $datas = Project::all();

        $start = null;
        $end = null;

        if ($request->has('hari') && $request->has('bulan') && $request->has('tahun') && $request->has('pilihan')) {
            $start = $request->hari != 0 ? Carbon::create($request->tahun, $request->bulan, $request->hari)->startOfDay() : Carbon::create($request->tahun, $request->bulan, 1)->startOfDay();

            switch($request->pilihan){
                case 1:
                $end = $start->copy()->endOfDay();
                $datas = Project::whereBetween('created_at', [$start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s')]);
                break;
                case 2:
                $end = $start->copy()->addDay(7)->endOfDay();
                $datas = Project::whereBetween('created_at', [$start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s')]);
                break;
                case 3:
                $start = Carbon::create($request->tahun, $request->bulan, 1)->startOfDay();
                $end = $start->copy()->endOfMonth()->endOfDay();
                $datas = Project::whereBetween('created_at', [$start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s')]);
                break;
            }
        }



        // $datas = $datas->get();



        return view('admin.print', compact('datas', 'request'));
    }

    public function dashboard(Request $request)
    {
        // $datas = User::with('departement')->whereNot('role', 'admin')->get();

        // $laporan = [
        //     'pegawai' => User::where('role', 'pegawai')
        //                       ->count(),
        //     'manajer' => User::where('role', 'manajer')
        //                       ->count(),
        //     'today' => $datas->whereBetween('created_at', [now()->startOfDay()->format('Y-m-d H:i:s'), now()->endOfDay()->format('Y-m-d H:i:s')])->count(),
        //     'selesai' => $datas->where('status', 'submited')->count(),
        //     'semua' => $datas->count(),
        // ];


        // return view('admin.dashboard', compact('datas', 'laporan', 'request'));
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departement = Departement::all();
        return view('admin.anggota.create', compact('departement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            "nama" => 'required',
            "alamat" => 'required',
            "hp" => 'required',
            "email" => 'required',
            "password" => 'required',
            "departement" => 'required',
            "role" => 'required|in:pegawai,manajer',
        ]);

        // dd($request->all());

        User::create([
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "hp" => $request->hp,
            "email" => $request->email,
            "role" => $request->role,
            "password" => Hash::make($request->password),
            "id_departement" => $request->departement,
        ]);

        return redirect()->route('anggota.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $departement = Departement::all();
        $pegawai = User::findOrFail($id);

        return view('admin.anggota.show', compact('pegawai', 'departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {


        $request->validate([
            "nama" => 'required',
            "alamat" => 'required',
            "hp" => 'required',
            "email" => 'required',
            "departement" => 'required',
            "role" => 'required|in:pegawai,manajer',
        ]);




        User::findOrFail($id)->update([
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "hp" => $request->hp,
            "email" => $request->email,
            "role" => $request->role,
            "id_departement" => $request->departement,
        ]);
        // dd($request->all(), $pegawai);



        return redirect()->route('anggota.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index');

    }
}
