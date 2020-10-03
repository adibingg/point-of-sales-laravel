<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_categories;

class Product_category extends Controller
{
    public function __construct()
    {
        $this->midleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'page_title' => "Kategori Produk",
            'section_title' => "Kategori Produk"
        ];
        return view('pages.category', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tidak digunakan karena menggunakan modal.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Product_category();
        $category->product_name = $request->product_name;
        $category->save();
        $data = [];
        if($category){
            $data = ['result' => true, 'message' => "Berhasil menyimpan kategori"];
        }else{
            $data = ['result' => false, 'message' => "Gagal menyimpan data kategori"];
        }
        return json_encode($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
