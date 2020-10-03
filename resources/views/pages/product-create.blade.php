@extends('layouts.main')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$data['section_title']}}
        <small>{{$data['page_title']}}</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_produk">Kode Produk</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_produk">Harga Beli Produk</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_produk">Harga Jual Produk</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Kategori Produk</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Kategori Produk</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div> 
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Deskripsi Produk</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <a href="" class="btn btn-danger">Kembali</a>
          <button class="btn btn-primary">Simpan</button>
        </div>
      </div>
      </div>
    </section>
  </div>
@endsection