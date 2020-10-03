<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'page_title' => "Dashboard",
            'tasks' => ['Tidur','Makan','Melamun','Ngoding','Kerja','Belajar','Nonton Youtube','Spotify']
        ];
        return view('pages.dashboard', compact('data'));
    }
}
