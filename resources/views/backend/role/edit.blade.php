@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="{{asset('backend/assets/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Welcome to khwopa News..</h4>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="{{route('home')}}" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Visit Frontend ?</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit User Role</h4>
                    <form method="POST" action="{{route('update.writer',$user->id)}}" class="forms-sample">
                        @csrf  
                        <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" value="{{$user->name}}" name="name" >
                        </div>

                        <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="email" class="form-control" value="{{$user->email}}" name="email" >
                        </div>

                          

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="category" value="1"
                                            @if ($user->category==1)
                                            checked=""
                                            @endif
                                            > category <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="district" value="1"
                                            @if ($user->district==1)
                                            checked=""
                                            @endif
                                            > district <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="post" value="1"
                                            @if ($user->post==1)
                                            checked=""
                                            @endif
                                            > post <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check form-check-danger">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="setting" value="1"
                                            @if ($user->setting==1)
                                            checked=""
                                            @endif
                                            > setting <i class="input-helper"></i></label>
                                        </div>
                                        
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="website" value="1"
                                            @if ($user->website==1)
                                            checked=""
                                            @endif
                                            > website <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="gallery" value="1"
                                            @if ($user->gallery==1)
                                            checked=""
                                            @endif
                                            > gallery <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="advertisement" value="1"
                                            @if ($user->advertisement==1)
                                            checked=""
                                            @endif
                                            > advertisement <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check form-check-danger">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="role" value="1"
                                            @if ($user->role==1)
                                            checked=""
                                            @endif
                                            > role <i class="input-helper"></i></label>
                                        </div>
                                        
                                    </div>
                                </div>
                            
                            
                            </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>






@endsection