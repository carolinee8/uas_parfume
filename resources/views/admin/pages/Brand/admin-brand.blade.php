@extends('admin.layouts.main')
@section('content')
        <div class="row"> 
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Brand</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                    <div class="comment-footer">
                      <thead>
                        <tr>
                          <th><b>Images</b></th>
<<<<<<< HEAD
                          <th><b>Brand</b></th>
                          <th><b>Descriptions</b></th>
                          <th>
                            <center>
                              <a href="cbrand">
=======
                          <th><b>Brands</b></th>
                          <th><b>Descriptions</b></th>
                          <th><b>Date</b></th>
                          <th>
                            <center>
                              <a href="/admin/admin-brand/create">
>>>>>>> 66db915ba8950d1042e0104230f896445ad80e9d
                              <button type="button" class="btn btn-success text-white btn-lg">
                                  <i class="fas fa-plus"></i>
                              </button>
                              </a>
                            </center>
                          </th>
                      </thead>
                      <tbody>
<<<<<<< HEAD
                        <tr>
                          <td>Logo brand</td>
                          <td>nama brand</td>
                          <td>deskripsi</td>
                          <td>
                            <center>
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sliders-h"></i>
                              </button>
                              <div class="dropdown-menu" style="margin: 0px;">
                                <a href="" class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cut"></i> Hapus</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-info"></i> Detail</a>
                              </div>
                            </div>
                            </center>
                          </td>
                        </td>
=======
                        @foreach ($brand as $item)
                          <tr>
                            <td>
                              @if ($item->brand_image != '')
                                  <img src="{{ asset('admin_assets/images/Brand/' . $item->brand_image) }}" alt="Logo Brand" width="50px" height="35px">
                              @else
                                  <img src="{{ asset('admin_assets/images/Brand/brand.jpg') }}" alt="Logo Brand" width="50px" height="35px">
                              @endif
                            </td>
                            <td>{{ $item->brand_judul }}</td>
                            <td>{{ $item->brand_desc }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                              <center>
                              <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-sliders-h"></i>
                                </button>
                                <div class="dropdown-menu" style="margin: 0px;">
                                  <a class="dropdown-item" href="/admin/admin-brand/{{ $item->brand_id }}/edit">
                                    <i class="fas fa-edit"></i>Edit
                                  </a>

                                  <form action="/admin/admin-brand/{{ $item->brand_id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                      <button class="dropdown-item">
                                          <i class="fas fa-cut"></i> Hapus
                                      </button>
                                  </form>
                                  <a class="dropdown-item" href="/admin/admin-brand/{{ $item->brand_id }}"><i class="fas fa-info"></i> Detail</a>
                                </div>
                              </div>
                              </center>
                            </td>
                        </tr>
                        @endforeach
>>>>>>> 66db915ba8950d1042e0104230f896445ad80e9d
                      </tbody>
                      </div>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection