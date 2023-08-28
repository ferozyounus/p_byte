@extends('layouts.dashboard.main')

@section('content')

@php
    $check_months = array( 
        'January' => '01',
        'February' => '02', 
        'March' => '03', 
        'April' => '04', 
        'May' => '05', 
        'June' => '06', 
        'July' => '07', 
        'August' => '08', 
        'September' => '09', 
        'October'=> '10', 
        'November' => '11', 
        'December' => '12'
    );


@endphp

@php
                                               
    if($member->image != Null){
        $userImage = asset('storage/'.$member->image);
    }
    else{
        $userImage = asset('admin/images/users/2.jpg');
    }
@endphp


<!--Page header-->
<div class="page-header" >
    <div class="page-leftheader">
      <h4 class="page-title mb-0">Profile</h4>
      <ol class="breadcrumb">
        
      </ol>
    </div>
    <div class="page-rightheader">
      
    </div>
  </div>
  <!--End Page header-->

<!-- Row -->
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-12">
        <div class="card box-widget widget-user">
            <div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" 
                src="{{ $userImage }}"></div>
            <div class="card-body text-center">
                <div class="pro-user">
                    <h4 class="pro-user-username text-dark mb-1 font-weight-bold"> {{ $member->name . $member->last_name}}</h4>
                    <h6 class="pro-user-desc text-muted">Web Designer</h6>
                    {{-- <div class="wideget-user-rating">
                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                        <a href="#"><i class="fa fa-star-o text-warning mr-1"></i></a> <span>5 (3876 Reviews)</span>
                    </div> --}}
                    {{-- <a href="profile.html" class="btn btn-primary  mt-3"><i class="fa fa-pencil"></i> Edit Profile</a> --}}
                    {{-- <a href="#" class="btn btn-success  mt-3"><i class="fa fa-rss"></i> Follow</a> --}}
                </div>
            </div>
            {{-- <div class="card-footer p-0">
                <div class="row">
                    <div class="col-sm-6 border-right text-center">
                        <div class="description-block p-4">
                            <h5 class="description-header mb-1 font-weight-bold text-dark number-font">689k</h5>
                            <span class="text-muted">Followers</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="description-block text-center p-4">
                            <h5 class="description-header mb-1 font-weight-bold text-dark number-font">3,765</h5>
                            <span class="text-muted">Following</span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Personal Details</h4>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td class="py-2 px-0">
                                    <span class="font-weight-semibold w-50">Name </span>
                                </td>
                                <td class="py-2 px-2"> {{ $member->name . $member->last_name}}</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-0">
                                    <span class="font-weight-semibold w-50">Location </span>
                                </td>
                                <td class="py-2 px-2"> {{ $member->location}}</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-0">
                                    <span class="font-weight-semibold w-50">Languages  </span>
                                </td>
                                <td class="py-2 px-2"> {{ $member->language}} </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-0">
                                    <span class="font-weight-semibold w-50">Website </span>
                                </td>
                                <td class="py-2 px-2"> {{ $member->website_url}}</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-0">
                                    <span class="font-weight-semibold w-50">Email </span>
                                </td>
                                <td class="py-2 px-2"> {{ $member->email}}</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-0">
                                    <span class="font-weight-semibold w-50">Phone </span>
                                </td>
                                <td class="py-2 px-2"> {{ $member->phone}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12">
        <div class="main-content-body main-content-body-profile card">
            <div class="main-profile-body">

                <div class="card-body">
                    
                    <h5 class="font-weight-bold">Biography</h5>
                    <div class="main-profile-bio mb-0">
                        <p>{!! $member->job_description !!}</p> 
                    </div>
                </div>
                <div class="card-body border-top">
                    <h5 class="font-weight-bold">Work & Education</h5>
                    <div class="main-profile-contact-list d-lg-flex">

                        @forelse ($workeexperience as $data)                   
                       

                        @php
                            $startMonth = explode('-' ,$data->working_start_month);
                            $endMonth = explode('-' ,$data->working_end_month);
                            $startFullMonth = array_search($startMonth[1], $check_months);
                            $endFullMonth = array_search($endMonth[1], $check_months);
  
                        
                        @endphp
  
                        <div class="media mr-5">
                            <div class="media-icon bg-success text-white mr-4">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold mb-1">{{ $data->working_title }} </h6>
                                <span>{{ $startMonth[0]}}-{{ $startFullMonth }} --- {{ $endMonth[0] }}-{{ $endFullMonth }} </span>
                                <p>{{ $data->working_description }}</p>
                            </div>
                        </div>
  
                      @empty
                   
                      @endforelse 


                        @forelse ($usereducation as $data)                   
                       

                        @php
                            $startMonth = explode('-' ,$data->education_start_month);
                            $endMonth = explode('-' ,$data->education_end_month);
                            $startFullMonth = array_search($startMonth[1], $check_months);
                            $endFullMonth = array_search($endMonth[1], $check_months);

                        
                        @endphp

                        <div class="media mr-5">
                            <div class="media-icon bg-secondary text-white mr-4">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold mb-1">{{ $data->education_title }} </h6>
                                <span>{{ $startMonth[0]}}-{{ $startFullMonth }} --- {{ $endMonth[0] }}-{{ $endFullMonth }} </span>
                                <p>{{ $data->education_description }}</p>
                            </div>
                        </div>

                      @empty
                      <p >No Data  </p>
                      @endforelse 



                     
                        


                        {{-- <div class="media mr-5">
                            <div class="media-icon bg-success text-white mr-4">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold mb-1">Web Designer at <a href="" class="btn-link">Spruko</a></h6>
                                <span>2018 - present</span>
                                <p>Past Work: Spruko, Inc.</p>
                            </div>
                        </div> --}}

                        {{-- <div class="media mr-5">
                            <div class="media-icon bg-danger text-white mr-4">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold mb-1">Studied at <a href=""  class="btn-link">University</a></h6>
                                <span>2004-2008</span>
                                <p>Graduation: Bachelor of Science in Computer Science</p>
                            </div>
                        </div> --}}

                    </div>
                    <div class="main-profile-contact-list d-lg-flex" style="display:none !important;">

                        @forelse ($workeexperience as $data)                   
                       

                        @php
                            $startMonth = explode('-' ,$data->working_start_month);
                            $endMonth = explode('-' ,$data->working_end_month);
                            $startFullMonth = array_search($startMonth[1], $check_months);
                            $endFullMonth = array_search($endMonth[1], $check_months);
  
                        
                        @endphp
  
                        <div class="media mr-5">
                            <div class="media-icon bg-success text-white mr-4">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold mb-1">{{ $data->working_title }} </h6>
                                <span>{{ $startMonth[0]}}-{{ $startFullMonth }} --- {{ $endMonth[0] }}-{{ $endFullMonth }} </span>
                                <p>{{ $data->working_description }}</p>
                            </div>
                        </div>
  
                      @empty
                   
                      @endforelse 
                    </div>
                </div>
                <div class="card-body border-top">
                    <h5 class="font-weight-bold">Skills</h5>

                    @php
                                               
                        if($member->skills !== null){
                            $skills = explode(',' ,$member->skills);
                        }
                        else{
                            $skills = [];
                        }
                   @endphp



                    @forelse ($skills as $key => $value)                   
                      <a class="btn btn-sm btn-light mt-1" href="javascript:;">{{ $value }}</a>
                    @empty
                    <p >No Skills </p>
                    @endforelse 


                    
                </div>
                <div class="card-body border-top">
                    <h5 class="font-weight-bold">Contact</h5>
                    <div class="main-profile-contact-list d-lg-flex">
                        <div class="media mr-4">
                            <div class="media-icon bg-primary text-white  mr-3 mt-1">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <small class="text-muted">Mobile</small>
                                <div class="font-weight-normal1">
                                    {{ $member->phone}}
                                </div>
                            </div>
                        </div>
                        <div class="media mr-4">
                            <div class="media-icon bg-warning text-white mr-3 mt-1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <small class="text-muted">Stack</small>
                                <div class="font-weight-normal1">
                                    {{ $member->email}}
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-info text-white mr-3 mt-1">
                                <i class="fa fa-map"></i>
                            </div>
                            <div class="media-body">
                                <small class="text-muted">Current Address</small>
                                <div class="font-weight-normal1">
                                    {{ $member->location}}
                                </div>
                            </div>
                        </div>
                    </div><!-- main-profile-contact-list -->
                </div>

                <div class="card-body">
                    
                    <h5 class="font-weight-bold">Payment History</h5>
                    <div class="main-profile-bio mb-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap" id="example1" style="background-color:#efeff1;">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Service Name</th>
                                            <th class="wd-15p border-bottom-0">Start Date</th>
                                            <th class="wd-20p border-bottom-0">End Date</th>
                                            <th class="wd-15p border-bottom-0">Status</th>
                                            <th class="wd-10p border-bottom-0">Package Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tr class="text-center">
                                            <td colspan="5">No Data Found</td>
                                            
                                         </tr> 
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
