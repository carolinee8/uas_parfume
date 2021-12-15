@extends('admin.layouts.main')

@section('content')
    <div class="col-md-20">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Event</h4>
                <div class="form-group row">
                    <div class="col-md-9">
                        @if ($data->brand_image != '')
                            <img src="{{ asset('admin_assets/images/Products/' . $data->product_image) }}" alt="Gambar Event"
                                style="display:block; margin:auto;" width="200px" height="175px">
                        @else
                            <img src="{{ asset('admin_assets/images/Products/imgproductdefault.png') }}" alt="Gambar Event" width="200px"
                                style="display:block; margin:auto;" height="175px">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dproductname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $data->product_name }}" disabled >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc" class="col-sm-3 text-end control-label col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;" disabled >
                            {{ $data->product_desc }}
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dprice" class="col-sm-3 text-end control-label col-form-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $data->product_price }}" disabled >
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="etag" class="col-sm-3 text-end control-label col-form-label">Tag</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $data->tag_id }}" disabled >
                    </div>
                </div> --}}
                <div class="border-top">
                    <div class="card-body">
                        <a href="/admin/admin-product">
                            <button type="button" class="btn btn-secondary btn-lg">
                                <i class="fas fa-reply"></i><span> Back</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
