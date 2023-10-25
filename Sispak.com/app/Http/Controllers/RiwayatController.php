<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    // public function __construct()
    // {
    //     $this->authorizeResource(Riwayat::class, 'riwayat');
    // }


    public function index()
    {
        if (auth()->check()) {
            if (auth()->user()->hasRole('Admin')) {
                $riwayat = Riwayat::with('penyakit')
                    ->latest()
                    ->paginate(10);
            } else {
                $riwayat = auth()->user()
                    ->riwayats()
                    ->with('penyakit')
                    ->latest()
                    ->paginate(10);
            }
        } else {
            $riwayat = Riwayat::with('penyakit')
                ->latest()
                ->paginate(10);
        }

        return view('admin.riwayat.index', compact('riwayat'));
    }
    public function show(Riwayat $riwayat)
    {
        return view('admin.riwayat.show', compact('riwayat'));
    }

}
