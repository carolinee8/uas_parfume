@extends('admin.layouts.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Detail Event</h6>
            <div class="card-tools">
                <a href="/admin/admin-event" class="btn btn-sm btn-warning float-right">
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
                                        @if (!$data->brand_image)
                                        <img src="{{ asset('admin_assets/images/Events/' . $data->acara_image) }}" alt="Gambar Event"
                                            style="display:block; margin:auto;" width="200px" height="175px">
                                        @else
                                            <img src="{{ asset('admin_assets/images/Events/event.png') }}" alt="Gambar Event" width="200px"
                                                style="display:block; margin:auto;" height="175px">
                                        @endif
                                    </center>
                                </th>
                            </tr>
                            <tr>
                                <td width="20%"><strong>Event Title<strong></td>
                                <td>{{ $data->acara_title }}</td>
                            </tr>
                            <tr>
                                <td width="20%"><strong>Description<strong></td>
                                <td>{{ $data->acara_desc }}</td>
                            </tr>
                            <tr>
                                <td width="20%"><strong>Date<strong></td>
                                <td>{{ $data->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>
        </div>
      </div>
@endsection
