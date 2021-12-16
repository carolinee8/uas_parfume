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
                          <th><b>Tag id</b></th>
                          <th><b>Tag Name</b></th>
                          <th>
                            <center>
                              <a href="/admin/admin-tag/create">
                              <button type="button" class="btn btn-success text-white btn-lg">
                                  <i class="fas fa-plus"></i>
                              </button>
                              </a>
                            </center>
                          </th>
                      </thead>
                      <tbody>
                        @foreach ($tags as $tags_item)
                          <tr>
                            <td>{{ $tags_item->tag_id }}</td>
                            <td>{{ $tags_item->tag_name }}</td>
                            <td>
                              <center>
                              <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-sliders-h"></i>
                                </button>
                                <div class="dropdown-menu" style="margin: 0px;">
                                  <a class="dropdown-item" href="/admin/admin-tag/{{ $tags_item->tag_id }}/edit">
                                    <i class="fas fa-edit"></i>Edit
                                  </a>
                                  <form action="/admin/admin-tag/{{ $tags_item->tag_id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                      <button class="dropdown-item">
                                          <i class="fas fa-cut"></i> Hapus
                                      </button>
                                  </form>
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