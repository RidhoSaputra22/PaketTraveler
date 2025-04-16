<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Kategori;
use App\Models\PaketTravel;
use App\Models\Project;
use App\Models\Transaksi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function homepage(Request $request)
    {
        $pakets = PaketTravel::all();
        $lokasis = $pakets->where('lokasi_212396')->groupBy('lokasi_212396');
        $durasis = $pakets->where('durasi_212396')->groupBy('durasi_212396');
        $kategoris = Kategori::all();

        if ($request->filled('lokasi')) {
            $pakets = $pakets->where('lokasi_212396', $request->lokasi);
        }

        if ($request->filled('kategori')) {
            $pakets = $pakets->where('id_kategori_212396', $request->kategori);
        }

        if ($request->filled('durasi')) {
            $pakets = $pakets->where('durasi_212396', $request->durasi);
        }

        return view('home', compact('pakets', 'lokasis', 'request', 'durasis', 'kategoris'));
    }

    public function detail(PaketTravel $paketTravel)
    {
        $paket = $paketTravel;
        $pakets = PaketTravel::all();

        return view('detail', compact('paket', 'pakets'));
    }

    public function paket(Request $request)
    {

        $pakets = PaketTravel::all();
        $kategori = Kategori::all();

        if ($request->filled('search')) {
            $pakets = PaketTravel::where('nama_212396', 'like', '%' . $request->search . '%')->get();
        }

        if ($request->filled('kategori')) {
            $pakets = $pakets->where('id_kategori_212396', $request->kategori);
        }

        // dd($pakets);

        return view('paket', compact('request', 'pakets', 'kategori'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function payment(Request $request)
    {
        $request->validate([
            "paket" => "required",
            "qty" => "required|min:1",
            "name" => "required",
            "email" => "required",
            "hp" => "required",
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-k9nnXRxaAWrALfNk3WPuJC7_';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $harga = PaketTravel::findOrFail($request->paket)['harga_212396'] * $request->qty;
        $kode = rand();

        $params = array(
            'transaction_details' => array(
                'order_id' => $kode,
                'nama' => $request->name,
                'email' => $request->email,
                'hp' => $request->hp,
                'gross_amount' => $harga,
                )
            );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // dd($request->all(), $params, $snapToken);
        $user = Auth::user();

        Transaksi::create([
            'id_paket_212396' => $request->paket,
            'id_user_212396' => $user['id_user_212396'],
            'status_212396' => 'Pending',
            'kode_212396' => $kode,
            'kode_midtrans_212396' => $snapToken,
            'jumlah_orang_212396' => $request->qty,
            'total_harga_212396' => $harga
        ]);

        return redirect()->back()->with('token', [
            'snap' => $snapToken
        ]);






    }
}
