@extends('admin.layouts.main')
@section('content')
<div class="col-md-20">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Create New Product</h4>
                    <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fname" placeholder="Product Name. . .">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Image</label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required="">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">
                          Example invalid custom file feedback
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email1" class="col-sm-3 text-end control-label col-form-label">Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="email1" placeholder="Price. . .">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Tag</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="cono1" placeholder="Tag. . .">
                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body">
                    <a href="admin-product">
                        <button type="button" class="btn btn-secondary btn-lg">
                            <i class="fas fa-reply"></i><span> Back</span>
                        </button>
                      </a>
                      <a href="#">
                        <button type="button" class="btn btn-success text-white btn-lg">
                            <i class="fas fa-file"></i><span> Save</span>
                        </button>
                      </a>
                    </div>
                  </div>
                </form>
              </div>
@endsection