@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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

           
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">Insert Advertisements</h4>
            <p class="card-description"> Basic form elements </p>
          <form class="forms-sample" method="POST" action="{{route('store.ads')}}" enctype="multipart/form-data">
          @csrf

              <div class="form-group" >
                <label for="exampleInputName1">Advertisement Link</label>
                <input type="text" class="form-control" name="link" id="exampleInputName1" >
              </div>
              
            <div class="form-group">
                    <label for="abcde">Image Upload</label>
                    <input type="file" name="ads" class="form-control" id="ads">
            </div>

            <div class="form-group ">
              <label for="exampleSelectGender">Advertisement Type</label>
                <select class="form-control" name="type" id="exampleSelectGender">
                  <option value="1">Vertical</option>
                  <option value="2">Horizontal</option>
                  
                </select>
              </div>

                                
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
  </div>

  <!-- This is for category ajax -->




@endsection