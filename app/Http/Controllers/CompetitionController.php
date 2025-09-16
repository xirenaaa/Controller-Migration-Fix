<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Menampilkan daftar semua lomba.
     */
    public function index()
    {
        // Mengambil semua data lomba dari database
        $competitions = Competition::all();

        // Mengirim data ke view
        return view('competitions', ['competitions' => $competitions]);
    }
}