@extends('admin.layouts.main')

@section('content')
    <div class="col-md-20">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail User</h4>
                <div class="form-group row">
                    <div class="col-md-9">
                        @if ($data->user_image != '')
                            <img src="{{ asset('admin_assets/images/Users/' . $data->user_image) }}" alt="Gambar User"
                                width="50px" height="35px">
                        @else
                            <img src="{{ asset('admin_assets/images/Users/imguserdefault.png') }}" alt="Gambar User" width="50px"
                                height="35px">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $data->name }}" disabled >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dusername" class="col-sm-3 text-end control-label col-form-label">Username</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;" disabled >
                            {{ $data->product_desc }}
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="demail" class="col-sm-3 text-end control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $data->email }}" disabled >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="drole" class="col-sm-3 text-end control-label col-form-label">Role</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $data->role }}" disabled >
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <a href="/admin/admin-management">
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
