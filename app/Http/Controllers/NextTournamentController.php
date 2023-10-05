<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NextTournamentController extends Controller
{
    // public function index() {
    //     $tournaments = Tournament::all();
    //     $result = Tournament::Where('date', '>', Carbon::now())->orderBy('date', 'ASC')->get();
    //     return view('next')
    //         ->with('next',$result);
    // }

    public function index() {
        $tournaments = Tournament::Where('date', '>', Carbon::now())
            ->orderBy('date', 'ASC')
            // ->get()
            ->first();

        return view('upcoming/next')
            ->with('tournaments', $tournaments);
    }
}
