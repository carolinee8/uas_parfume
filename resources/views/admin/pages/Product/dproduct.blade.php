@extends('admin.layouts.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Detail Product</h6>
            <div class="card-tools">
                <a href="/admin/admin-product" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- Main content -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan="2">
                                    <center><i class="fas fa-image"></i> <strong>Image<strong></center>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="2">
                                    <center>
                                        @if ($data->product_image != '')
                                            <img src="{{ asset('admin_assets/images/Products/' . $data->product_image) }}" alt="Gambar Product"
                                            style="display:block; margin:auto;" width="200px" height="175px">
                                        @else
                                            <img src="{{ asset('admin_assets/images/Products/imgproductdefault.png') }}" alt="Gambar Product" width="200px"
                                            style="display:block; margin:auto;" height="175px">
                                        @endif
                                    </center>
                                </th>
                            </tr>
                            <tr>
                                <td width="20%"><strong>Product Name<strong></td>
                                <td>{{ $data->product_name }}</td>
                            </tr>
                            <tr>
                                <td width="20%"><strong>Description<strong></td>
                                <td>{{ $data->product_desc }}</td>
                            </tr>
                            <tr>
                                <td width="20%"><strong>Price (Rp)<strong></td>
                                <td>{{ $data->product_price }}</td>
                            </tr>
                            <tr>
                                <td width="20%"><strong>Tag<strong></td>
                                <td>{{ $data->tag_name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>
        </div>
      </div>
@endsection
