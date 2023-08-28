@extends('layouts.dashboard.main')

@section('content')


<!-- Row-3 -->
<div class="row" >
  
  <div class="col-xl-4  col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-end justify-content-between">
          <div>
            <p class=" mb-1 fs-14">Total no. of Members</p>
            <h2 class="mb-0"><span class="number-font1">0</span></h2>
          </div>
         
          <span class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary">
            <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#705ec8">
              <path d="M0 0h24v24H0z" fill="none"/><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
            </svg>
          </span>
        </div>
        
      </div>
    </div>
    
  </div>
  <div class="col-xl-4  col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-end justify-content-between">
          <div>
            <p class=" mb-1 fs-14">Total no. of jobs</p>
            <h2 class="mb-0"><span class="number-font1">0</span></h2>
          </div>
          <span class="text-secondary fs-35 dash1-iocns bg-secondary-transparent border-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="36px" viewBox="0 0 20 20" width="36px" fill="#f72d66"><g><rect fill="none" height="20" width="20"/></g><g><g>
              <path d="M2.5,7H1v9.5C1,17.33,1.67,18,2.5,18H16v-1.5H2.5V7z"/>
              <path d="M15,4V2.5C15,1.67,14.33,1,13.5,1h-4C8.67,1,8,1.67,8,2.5V4H4v9.5C4,14.33,4.67,15,5.5,15h12c0.83,0,1.5-0.67,1.5-1.5V4 H15z M9.5,2.5h4V4h-4V2.5z M10,12.5v-5,3L10,12.5z"/>
              </g></g></svg>
            </span>
          
        </div>
        
      </div>
    </div>
  </div>
  <div class="col-xl-4  col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-end justify-content-between">
          <div>
            <p class=" mb-1 fs-14">Job Submission</p>
            <h2 class="mb-0"><span class="number-font1">0</span></h2>

          </div>
          <span class="text-info fs-35 bg-info-transparent border-info dash1-iocns">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="36px" viewBox="0 0 20 20" width="36px" fill="#5b7fff"><g><rect fill="none" height="20" width="20" x="0" y="0"/><g><path d="M4,16h10v1H4c-0.55,0-1-0.45-1-1V6h1V16z M17,4v9c0,0.55-0.45,1-1,1H7c-0.55,0-1-0.45-1-1V4c0-0.55,0.45-1,1-1h9 C16.55,3,17,3.45,17,4z M15.04,6.38l-0.71-0.71l-4.24,4.24L8.67,8.5L7.96,9.21l2.12,2.12L15.04,6.38z"/>
            </g>
          </g>
        </svg>
          </span>
        </div>
      </div>
    </div>
    
  </div>
</div>


<div class="row">
  <div class="col-xl-8 col-lg-8 col-md-12">
    <div class="">
      <div class="card-header">
        <h3 class="card-title">Recommendation Occupation For You</h3>
        
      </div>
          
      <div class="row">

        <div class="col-md-6 col-xl-4">
              <div class="card overflow-hidden" >
                  <div class="card-body d-flex flex-column">
                      <h6> Finance Manager & Health</h6>
                      <div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences,
                           or one who avoids a pain that produces.</div>
                  </div>
              </div>
        </div>
    </div>

    </div>
  </div>



  <div class="col-xl-4 col-lg-4 col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Recent Activity</h3>
        <div class="card-options">
          <a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Today</a>
            <a class="dropdown-item" href="#">Last Week</a>
            <a class="dropdown-item" href="#">Last Month</a>
            <a class="dropdown-item" href="#">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="latest-timeline scrollbar3" id="scrollbar3">
          <ul class="timeline mb-0">
            <li class="mt-0">
              <div class="d-flex"><span class="time-data">Task Finished</span><span class="ml-auto text-muted fs-11">09 June 2020</span></div>
              <p class="text-muted fs-12"><span class="text-info">Joseph Ellison</span> finished task on<a href="#" class="font-weight-semibold"> Project Management</a></p>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- End Row-3 -->
 
@endsection
