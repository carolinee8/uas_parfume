@extends('admin.layouts.main')

@section('content')
    <div class="col-md-20">
        <div class="card">
            <form class="form-horizontal" action="/admin/admin-tag/{{ $data->tag_id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
            <div class="card-body">
                <h4 class="card-title">Edit Tag</h4>
                <div class="form-group row">
                    <label for="etag" class="col-sm-3 text-end control-label col-form-label">Tag Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="etag" name="tagname" value="{{ $data->tag_name }}">
                    </div>
            </div>
            </form>
            <div class="border-top">
                <div class="card-body">
                    <a href="/admin/admin-tag">
                        <button type="button" class="btn btn-secondary btn-lg">
                            <i class="fas fa-reply"></i><span> Back</span>
                        </button>
                    </a>
                    <button type="submit" class="btn btn-success text-white btn-lg">
                            <i class="fas fa-file"></i><span> Save</span>
                    </button>
                </div>
            </div>
        </div>
    @endsection
