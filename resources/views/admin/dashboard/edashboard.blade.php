@extends('admin.layouts.main')
@section('content')
<div class="col-md-20">
              <div class="card">
                <form class="form-horizontal" action="/admin/dashboard/{{ auth()->user()->user_id }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  
                  <div class="card-body">
                      <h4 class="card-title">Edit Product</h4>
                      <div class="form-group row">
                          <label for="ename" class="col-sm-3 text-end control-label col-form-label">Name</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="ename" name="name" value="{{ auth()->user()->name }}">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="eusername" class="col-sm-3 text-end control-label col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="eusername" name="username" value="{{ auth()->user()->username }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="eemail" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="eemail" name="email" value="{{ auth()->user()->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="input-group col-sm">
                            <label for="epassword" class="col-sm-3 text-end control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="epassword" name="password" value="{{ auth()->user()->password }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                            </div>
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
                    <div class="border-top">
                        <div class="card-body">
                            <a href="/admin/dashboard">
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