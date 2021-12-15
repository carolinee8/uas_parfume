@extends('admin.layouts.main')

@section('content')
    <div class="col-md-20">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Brand</h4>
                <div class="form-group row">
                    <div class="col-md-9">
                        @if ($data->brand_image != '')
                            <img src="{{ asset('admin_assets/images/Brand/' . $data->brand_image) }}" alt="Logo Brand"
                                width="50px" height="35px">
                        @else
                            <img src="{{ asset('admin_assets/images/Brand/brand.jpg') }}" alt="Logo Brand" width="50px"
                                height="35px">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="etitle" class="col-sm-3 text-end control-label col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $data->brand_judul }}" disabled >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="edesc" class="col-sm-3 text-end control-label col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;" disabled >
                            {{ $data->brand_desc }}
                        </textarea>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <a href="/admin/admin-brand">
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
