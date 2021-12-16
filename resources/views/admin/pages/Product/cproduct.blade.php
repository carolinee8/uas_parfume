@extends('admin.layouts.main')
@section('content')
<div class="col-md-20">
              <div class="card">
                <form class="form-horizontal" action="/admin/admin-product" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <h4 class="card-title">Create New Product</h4>
                    <div class="form-group row">
                      <label for="productname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="productname" name ="productname" placeholder="Product Name...">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Image</label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" required>
                        <label class="custom-file-label" for="validatedCustomFile"></label>
                        <div class="invalid-feedback">
                          Example invalid custom file feedback
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="form-group row">
                      <label for="cdesc" class="col-sm-3 text-end control-label col-form-label">Description</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="cdesc" name="desc" style="margin-top: 0px; margin-bottom: 0px; height: 50px;"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cprice" class="col-sm-3 text-end control-label col-form-label">Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="cprice" name="price" placeholder="Price">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="ctag" class="col-sm-3 text-end control-label col-form-label">Tag</label>
                     <div class="col-sm-9">
                      <select class="form-control" id="ctag" name="ctag">
                        <option selected="true" disabled="disabled">--Choose Option--</option>
                        @foreach($tags as $tag)
                        <option value="{{ $tag->tag_id }}">{{ $tag->tag_name }}</option>
                        @endforeach
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body">
                    <a href="/admin/admin-product">
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