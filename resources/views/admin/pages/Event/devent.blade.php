@extends('admin.layouts.main')

@section('content')
    <div class="col-md-20">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Event</h4>
                <div class="form-group row">
                    <div class="col-md-9">
                        @if ($data->acara_image != '')
                            <img src="{{ asset('admin_assets/images/Events/' . $data->acara_image) }}" alt="Gambar Event"
                                width="50px" height="35px">
                        @else
                            <img src="{{ asset('admin_assets/images/Events/event.png') }}" alt="Gambar Event" width="50px"
                                height="35px">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dtitle" class="col-sm-3 text-end control-label col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $data->acara_title }}" disabled >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ddesc" class="col-sm-3 text-end control-label col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;" disabled >
                            {{ $data->acara_desc }}
                        </textarea>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <a href="/admin/admin-event">
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
