<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan_Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TiketController extends Controller
{
    public function index()
    {
        return view('user.pemesanantiket');
    }

    public function pemesananPost(Request $request)
    {
        Pemesanan_Tiket::create([
            'name' => $request->name,
            'email' => $request->email,
            'hp' => $request->hp,
            'tiket' => 'KONSER-' . auth()->user()->id,
            'status' => 'Belum Check In',
        ]);
        return redirect()->back()->with('success', 'menambahkan');
    }

    public function lihattiket()
    {   
        $lihat = Pemesanan_Tiket::where(['name' => auth()->user()->name])->get();
        return view('user.lihattiket', compact('lihat'));
    }

    public function daftar()
    {   
        $daftar = Pemesanan_Tiket::all();
        return view('admin.daftarpemesanan', compact('daftar'));
    }

    public function daftarUpdate($id)
    {
        Pemesanan_Tiket::where('id', $id)->update(['status' => 'Sudah Check In']);
        return redirect()->back()->with('success', 'menambahkan');
    }

    public function daftarDelete($id)
    {
        $delete = Pemesanan_Tiket::find($id);
        $delete -> delete();
        return redirect()->back()->with('success', 'menghapuskan');
    }

    public function laporan()
    {
        $laporan = Pemesanan_Tiket::all();
        return view('admin.laporanpemesanan', compact('laporan'));
    }

    public function checkin()
    {
        $checkin = Pemesanan_Tiket::all();
        return view('admin.checkin', compact('checkin'));
    }

    public function checkinUpdate($id)
    {
        Pemesanan_Tiket::where('id', $id)->update(['status' => 'Sudah Check In']);
        return redirect()->back()->with('success', 'menambahkan');
    }

}
