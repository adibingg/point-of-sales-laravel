@extends('layouts.main')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bg-white">
      <h1 style="font-size: 12pt; width: 100% !important; background: white; padding : 10px;" class="bg-white">
        <i class="fa fa-tags"></i> {{$data['section_title']}}
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
        <form action="{{url('/category/store')}}" method="POST">
        <div class="box-body">
          <div class="row">
            
              @csrf
              @method('POST')
              <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_produk">Kode Kategori</label>
                    <input type="text" class="form-control" name="category_code" placeholder="Kode Kategori">
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="nama_produk">Nama Kategori</label>
                      <input type="text" class="form-control" name="category_name" placeholder="Nama Kategori">
                  </div>
              </div>
            
          </div>
        </div>
        <div class="box-footer">
          <a href="" class="btn btn-danger">Kembali</a>
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
        </form>
      </div>
      </div>
    </section>
  </div>
@endsection