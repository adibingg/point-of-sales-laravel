
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
      <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">
                <a href="{{route('create_category')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Buat Kategori </a>
                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf-o"></i> Export PDF</a>
                <a href="" class="btn btn-success btn-sm"><i class="fa fa-file-excel-o"></i> Export Excel</a>
            </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool " data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool " data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
         
            <div class="box-body">
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Kategori Produk</th>
                            <th>Nama Kategori Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        @foreach($data['categories'] as $category)
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td>{{$category->category_code}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>20</td>
                            <td class="text-right">
                                <a href="" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>
           
        </div>
        
      </div>
      </div>
    </section>
  </div>
@endsection
