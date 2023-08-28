@extends('layouts.dashboard.main')

@section('content')



<!-- Row -->
<div class="row">

{{--     
<div class="col-md-12">
    <div class="form-group">
      <div class="text-left">
        <a href="{{route('jobs.create')}}" class="btn btn-primary">Job Detail </a>
      </div>
    </div>
</div> --}}
<div class="col-md-12">

    <div class="d-flex align-items-center mt-auto">
        <div class="avatar brround avatar-xl mr-3" style="background-image: url({{ asset('storage/'.$job->image) }})"></div>
        <div>
            <small class="font-weight-semibold">{{ $job->job_title }}</small>
            <small class="d-block text-muted"><i class="fe fe-map-pin fs-10 text-icon"></i> {{ $job->location }}</small>
        </div>
        <div class="ml-auto text-muted">
            <div>
                <small class="d-block text-muted"><i class="fe fe-briefcase fs-16 text-icon"></i> 
                    @if ($job->job_type == 1)
                    Full Time
                    @elseif($job->job_type == 2)
                    Part Time
                    @elseif($job->job_type == 3)
                    Temporary
                    @elseif($job->job_type == 4)
                    Contract
                    @elseif($job->job_type == 5)
                    Internship
                    @else

                    @endif
                </small>
                <small class="d-block text-muted"><i class="fe fe-clock fs-16 text-icon"></i> {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</small>
                <small class="d-block text-muted"><i class="fe fe-dollar-sign fs-16 text-icon"></i>  $ {{ $job->minimum_rate }} - $ {{ $job->maximum_rate }}/hr</small>
            </div>
        </div>
    
        <div class="ml-5 text-muted">
            <div>
                @if (Auth::user()->role_id == 1)

                  <a href="{{route('jobs.edit',$job->id)}}" class="btn btn-primary">Edit Now</a>

                @endif
            </div>
        </div>
    </div>
    <div class="card-body d-flex flex-column">
        <h4> Job Title: {{ $job->job_title }}</h4>
        
    </div>
    <div class="card-body d-flex flex-column">
        <h4> {{ $job->company_name }}</h4>
        <div class="text-muted">{!! $job->job_description !!}</div>
    </div>
    
    <div class="card-body d-flex flex-column">
        <h4>Job Description</h4>
        <div class="text-muted">{!! $job->job_description !!}</div>
    </div>
    
    
    <div class="card-body d-flex flex-column">
        <h4> Job Responsibility</h4>
        <div class="text-muted">{!! $job->job_responsibility !!}</div>
    </div>
    
    
    <div class="card-body d-flex flex-column">
        <h4>Job Benifits</h4>
        <div class="text-muted">{!! $job->job_benifits !!}</div>
    </div> 
    
    <div class="card-body d-flex flex-column">
        <h4>Will you supply references for an applicant to contact to learn more about your company culture?</h4>
        <div class="text-muted">
                @if ($job->job_references == 1)
                 Yes
                @else
                 No
                @endif
        </div>
    </div> 


    <div class="card-body d-flex flex-column">
        <h4>Job Requirements</h4>
        <div class="text-muted">
               {{ $job->working_skills }}
        </div>
    </div> 

    
</div>
</div>
<!--End Row-->



@endsection
@section('scripts')
  <!-- Page JS Plugins -->

@endsection