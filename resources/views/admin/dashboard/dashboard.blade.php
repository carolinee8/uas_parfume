@extends('admin.layouts.main')
@section('content')
            <div class="card card-body printableArea">
                <h3><b>Dashboard</b> <span class="pull-right"></span></h3>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive mt-1" style="clear: both">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Role</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            {{-- <td class="text-center">{{ $auth()->user()->user_image }}</td>
                            <td class="text-center">{{ $auth()->user()->name }}</td>
                            <td class="text-center">{{ $auth()->user()->username }}</td>
                            <td class="text-center">{{ $auth()->user()->email }}</td>
                            <td class="text-center">{{ $auth()->user()->role}}</td> --}}
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="text-end">
                        <a href="#">
                        <button type="button" class="btn btn-success text-white btn-lg">
                            <i class="fas fa-edit"></i><span> Edit</span>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
@endsection