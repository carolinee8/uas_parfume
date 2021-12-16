@extends('admin.layouts.main')

@section('content')
    <div class="col-md-20">
        <div class="card">
            <form class="form-horizontal" action="/admin/admin-event/{{ $data->acara_id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="card-body">
                    <h4 class="card-title">Edit Event</h4>
                    <div class="form-group row">
                        <label for="etitle" class="col-sm-3 text-end control-label col-form-label">Event Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="etitle" name="title" value="{{ $data->acara_title }}" placeholder="Title. . .">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="eimage" class="col-sm-3 text-end control-label col-form-label">Image</label>
                        <div class="col-md-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
                                <label class="custom-file-label" for="validatedCustomFile"></label>
                                <div class="invalid-feedback">
                                    Example invalid custom file feedback
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="edesc" class="col-sm-3 text-end control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;"
                                name="desc">{{ $data->acara_desc }}</textarea>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <a href="/admin/admin-event">
                                <button type="button" class="btn btn-secondary btn-lg">
                                    <i class="fas fa-reply"></i><span> Back</span>
                                </button>
                            </a>
                            <button type="submit" class="btn btn-success text-white btn-lg">
                                    <i class="fas fa-file"></i><span> Save</span>
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    @endsection
