<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Transaction extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$data = [
    		'page_title' => "Transaksi",
    		'section_title' => "Buat Transaksi"
    	];

    	return view('pages.transaction', compact('data'));
    }

    public function add_to_cart()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function remove()
    {
    	
    }

}
