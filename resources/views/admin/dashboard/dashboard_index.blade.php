

@extends('admin.layouts.main')

@section('content')
    {{-- <div class="col-md-20">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profile</h4>
                <div class="form-group row">
                    <div class="col-md-9">
                        @if ("{{ auth()->user()->user_image }}" != '')
                            <img src="{{ auth()->user()->user_image }}" alt="Gambar Event"
                                style="display:block; margin:auto;" width="200px" height="175px">
                        @else
                            <img src="{{ asset('admin_assets/images/Users/imgusersdefault.png') }}" alt="Gambar Event" width="200px"
                                style="display:block; margin:auto;" height="175px">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="etitle" class="col-sm-3 text-end control-label col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="edesc" class="col-sm-3 text-end control-label col-form-label">Username</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;" disabled >
                          {{ auth()->user()->username }}
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="edesc" class="col-sm-3 text-end control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;" disabled >
                          {{ auth()->user()->email }}
                        </textarea>
                    </div>
                </div>
                <div class="d-flex align-items-end flex-column" style="height: 200px;">
                  <div class="p-2">
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="btn btn-primary btn-lg">
                          <i class="fas fa-sign-out-alt"></i><span> Log out</span>
                      </button>
                    </form>
                  </div>
                  <div class="mt-auto p-2">
                    <form action="/admin/dashboard/{{ auth()->user()->user_id }}" method="post">
                      @csrf
                      @method('DELETE')
                        <button class="btn btn-danger btn-lg">
                            <i class="fas fa-trash-alt"></i> Hapus Akun
                        </button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex justify-content-between align-items-center">
          <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
      </div>
      <!-- Main content -->
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <table class="table table-bordered">
                      <tbody>
                          <tr>
                              <th colspan="2">
                                  <center><i class="fas fa-image"></i> <strong>Foto Profil<strong></center>
                              </th>
                          </tr>
                          <tr>
                              <th colspan="2">
                                  <center>
                                    @if ("{{ asset('admin_assets/images/users/' . auth()->user()->user_image) }}" != '')
                                        <img src="{{ asset('admin_assets/images/users/' . auth()->user()->user_image) }}" alt="Gambar Profil"
                                            style="display:block; margin:auto;" width="200px" height="175px">
                                    @else
                                        <img src="{{ asset('admin_assets/images/Users/imgusersdefault.png') }}" alt="Gambar Profil" width="200px"
                                            style="display:block; margin:auto;" height="175px">
                                    @endif
                                  </center>
                              </th>
                          </tr>
                          <tr>
                              <td width="20%"><strong>Nama<strong></td>
                              <td>{{ auth()->user()->name }}</td>
                          </tr>
                          <tr>
                              <td width="20%"><strong>Email<strong></td>
                              <td>{{ auth()->user()->email }}</td>
                          </tr>
                          <tr>
                              <td width="20%"><strong>Username<strong></td>
                              <td>{{ auth()->user()->username }}</td>
                          </tr>
                      </tbody>
                  </table>
              </table>
              <div class="d-flex align-items-end flex-column" style="height: 200px;">
                <div class="p-2">
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-sign-out-alt"></i><span> Log out</span>
                    </button>
                  </form>
                </div>
                <div class="mt-auto p-2">
                  <form action="/admin/dashboard/{{ auth()->user()->user_id }}" method="post">
                    @csrf
                    @method('DELETE')
                      <button class="btn btn-danger btn-lg">
                          <i class="fas fa-trash-alt"></i> Hapus Akun
                      </button>
                  </form>
                </div>
              </div>
          </div>
      </div>
    </div>
    @endsection

