@extends('admin.layouts.main')
@section('content')
<div class="col-md-20">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Create New Event</h4>
                    <div class="form-group row">
                      <label for="etitle" class="col-sm-3 text-end control-label col-form-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="etitle" placeholder="Title. . .">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="eimage" class="col-sm-3 text-end control-label col-form-label">Image</label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required="">
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
                        <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 50px;"></textarea>
                      </div>
                    </div>
                    <div class="bootstrap-iso">
                        <div class="container-fluid">
                         <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                       
                           <!-- Form code begins -->
                           <form method="post">
                             <div class="form-group"> <!-- Date input -->
                               <label class="control-label" for="date">Date</label>
                               <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                             </div>
                            </form>
                            <!-- Form code ends --> 
                       
                           </div>
                         </div>    
                        </div>
                       </div>
                       <script>
                        $(document).ready(function(){
                          var date_input=$('input[name="date"]'); //our date input has the name "date"
                          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                          var options={
                            format: 'mm/dd/yyyy',
                            container: container,
                            todayHighlight: true,
                            autoclose: true,
                          };
                          date_input.datepicker(options);
                        })
                    </script>
                  <div class="border-top">
                    <div class="card-body">
                    <a href="admin-event">
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