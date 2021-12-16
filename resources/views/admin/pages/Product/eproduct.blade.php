@extends('admin.layouts.main')

@section('content')
    <div class="col-md-20">
              <div class="card">
                <form class="form-horizontal" action="/admin/admin-product/{{ $data->product_id }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  
                  <div class="card-body">
                      <h4 class="card-title">Edit Product</h4>
                      <div class="form-group row">
                          <label for="eproductname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="eproductname" name="productname" value="{{ $data->product_name }}">
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
                      <div class="form-group row">
                          <label for="edesc" class="col-sm-3 text-end control-label col-form-label">Description</label>
                          <div class="col-sm-9">
                              <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;"
                                  name="desc">{{ $data->product_desc }}</textarea>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="eprice" class="col-sm-3 text-end control-label col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="eprice" name="price" value="{{ $data->product_price }}" placeholder="Price...">
                        </div>
                    </div>
                   <div class="form-group row">
                        <label for="ctag" class="col-sm-3 text-end control-label col-form-label">Tag</label>
                       <div class="col-sm-9">
                            <select class="form-control" id="ctag" name="tagname">
                            <option value="{{ $data->tag_id }}">{{ $data->tag->tag_name }}</option>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->tag_id }}">{{ $tag->tag_name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                      
              </form>
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
              </div>
@endsection

{{-- @extends('admin.layouts.main')
@section('content')
<div class="col-md-20">
              <div class="card">
                <form class="form-horizontal" action="/admin/admin-product/{{ $data->product_id }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <h4 class="card-title">Edit Product</h4>
                    <div class="form-group row">
                      <label for="productname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="productname" name ="productname" value="{{ $data->product_name }}">
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
                      <select class="form-control" id="ctag" name="tagname">
                        <option selected="true" disabled="disabled">--Choose Option--</option>
                            {{-- @foreach($tags as $tag)
                                <option value="{{ $tag->tag_id }}">{{ $tag->tag_name }}</option>
                            @endforeach --}}
                      {{-- </select>
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
@endsection --}}