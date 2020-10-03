
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
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">
          Informasi Produk
        </h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <div class="box-body">
      </div>
    </div>
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">
          Detail Pembelian
        </h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered">
          <head>
            <tr>
              <td>No</td>
              <td>Nama Produk</td>
              <td>QTY</td>
              <td>Harga</td>
              <td>Discount</td>
              <td>Subtotal</td>
              <td>Pilihan</td>
            </tr>
          </head>
          <tbody>
            @for($i = 0; $i < 5; $i++)
            <tr>
              <td>1</td>
              <td>Indomie Goreng Rasa Rendang</td>
              <td>10</td>
              <td>Rp. 250.000</td>
              <td>Tidak Discount</td>
              <td>Rp. 25.000</td>
              <td>
                <a href="/" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                <a href="/" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
    <div class="box">
      <div class="box-body">
        <button class="btn btn-success"><i class="fa fa-check"></i> Selesai</button>
      </div>
    </div>
  </section>
</div>
@endsection
