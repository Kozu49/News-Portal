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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">SubCategory Page</h4>
                    
                    <div class="template-demo">
                    <a href="{{route('add.subdistrict')}}"><button type="button" class="btn btn-primary btn-fw" style="float:right;">Add SubDistrict</button></a>
                    </div>
                    
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> SN </th>
                          
                            <th> SubDistrict English </th>
                            <th> SubDistrict Nepali </th>
                            <th> District Name </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($subdistricts as $subdistrict)
                          <tr>
                          <td> {{$i++}} </td>
                            <td> {{$subdistrict->subdistrict_eng}} </td>
                            <td> {{$subdistrict->subdistrict_nep}} </td> 
                            <td>  {{$subdistrict->district->district_eng}} | {{$subdistrict->district->district_nep}}</td>   
                            <td>  
                                <a href="{{route('edit.subdistrict',$subdistrict->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{route('delete.subdistrict',$subdistrict->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                            </td>                           
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{$subdistricts->links('pagination-link')}}
                    </div>
                  </div>
                </div>
              </div>

              


@endsection