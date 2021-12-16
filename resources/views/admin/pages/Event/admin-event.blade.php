@extends('admin.layouts.main')
@section('content')
        <div class="row"> 
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Event</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                    @if(session()->has('edit_success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('edit_success') }}
                    </div>
                  @endif

                  @if(session()->has('create_success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                      {{ session('create_success') }}
                    </div>
                  @endif

                  @if(session()->has('delete_success'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session('delete_success') }}
                    </div>
                  @endif
                    <div class="comment-footer">
                      <thead>
                        <tr>
                          <th><b>Images</b></th>
                          <th><b>Events Title</b></th>
                          <th><b>Descriptions</b></th>
                          <th><b>Date</b></th>
                          <th>
                            <center>
                              <a href="/admin/admin-event/create">
                              <button type="button" class="btn btn-success text-white btn-lg">
                                  <i class="fas fa-plus"></i>
                              </button>
                              </a>
                            </center>
                          </th>
                      </thead>
                      <tbody>
                        @foreach ($acara as $acara_item)
                          <tr>
                            <td>
                              @if ($acara_item->acara_image != '')
                                  <img src="{{ asset('admin_assets/images/Events/' . $acara_item->acara_image) }}" alt="Gambar Event" width="50px" height="35px">
                              @else
                                  <img src="{{ asset('admin_assets/images/Events/event.png') }}" alt="Gambar Event" width="50px" height="35px">
                              @endif
                            </td>
                            <td>{{ $acara_item->acara_title }}</td>
                            <td>{{ $acara_item->acara_desc }}</td>
                            <td>{{ $acara_item->created_at }}</td>
                            <td>
                              <center>
                              <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-sliders-h"></i>
                                </button>
                                <div class="dropdown-menu" style="margin: 0px;">
                                  <a class="dropdown-item" href="/admin/admin-event/{{ $acara_item->acara_id }}/edit">
                                    <i class="fas fa-edit"></i>Edit
                                  </a>
                                  <form action="/admin/admin-event/{{ $acara_item->acara_id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                      <button class="dropdown-item">
                                          <i class="fas fa-cut"></i> Hapus
                                      </button>
                                  </form>
                                  <a class="dropdown-item" href="/admin/admin-event/{{ $acara_item->acara_id }}"><i class="fas fa-info"></i> Detail</a>
                                </div>
                              </div>
                              </center>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                      </div>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection