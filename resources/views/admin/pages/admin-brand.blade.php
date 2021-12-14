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
                          <th><b>Brand</b></th>
                          <th><b>Descriptions</b></th>
                          <th>
                            <center>
                              <a href="cbrand">
                              <button type="button" class="btn btn-success text-white btn-lg">
                                  <i class="fas fa-plus"></i>
                              </button>
                              </a>
                            </center>
                          </th>
                      </thead>
                      <tbody>
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
                      </tbody>
                      </div>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection