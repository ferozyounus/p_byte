@extends('layouts.dashboard.main')
@section('head')
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endsection
@section('content')




<!-- Row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Job</h3>
            </div> 
            <div class="card-body">

                <form id="blogForm" action="{{route('jobs.update', $job->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

               
                <div class="row row-sm mb-4">
                    <div class="col-lg-6">
                        <label class="form-label">Image</label>
                        {{-- <input class="" type="file" name="image"> --}}
                        <input type="file" class="dropify" data-height="180" id="image" name="image" />
                    </div>

                    

                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Company Name</label>
                        <input class="form-control" placeholder="Company Name" type="text"  value="{{ $job->company_name }}" name="company_name" required>
                    </div>

                    <div class="col-lg">
                        <label class="form-label">Job Title</label>
                        <input class="form-control" placeholder="Job Title" type="text" value="{{ $job->job_title }}" name="job_title" required>
                    </div>

                </div>


                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Location</label>
                      
                        <input class="form-control" value="{{ $job->location }}" required id="location" name="location" placeholder="Location" type="text">
                                               
                        <input type="hidden" value="{{ $job->latitude }}" name="latitude" id="latitude" class="form-control" />
                        <input type="hidden" value="{{ $job->longitude }}" ame="longitude" id="longitude" class="form-control" />

                        <div id="map"></div>

                    </div>

                    <div class="col-lg">
                        <label class="form-label">Job Type</label>
                        <select  id="select-countries" class="form-control custom-select select2" name="job_type" required>
                            <option value="1" {{ $job->job_type === 0 ? 'selected':'' }}>Full Time</option>
                            <option value="2" {{ $job->job_type === 1 ? 'selected':'' }}>Part Time</option>
                            <option value="3" {{ $job->job_type === 2 ? 'selected':'' }}>Temporary</option>
                            <option value="4" {{ $job->job_type === 3 ? 'selected':'' }}>Contract</option>
                            <option value="5" {{ $job->job_type === 4 ? 'selected':'' }}>Internship</option>
                        </select>
                    </div>

                    <div class="col-lg">
                        <label class="form-label">Job Category</label>
                        <select  id="select-countries" class="form-control custom-select select2" name="job_category" required>
                            <option value="1" {{ $job->job_category === 0 ? 'selected':'' }}>Category 1</option>
                        </select>
                    </div>

                    

                </div>

                <div class="row row-sm mb-4">
                    

                    <div class="col-lg">
                        <label class="form-label">Rate</label>
                        <select  id="select-countries" class="form-control custom-select select2" name="job_rate" required>
                            <option value="1" {{ $job->job_rate === 1 ? 'selected':'' }} data-data='{"image": "./../../assets/images/flags/br.svg"}'>Per Hour</option>
                        </select>
                    </div>
                    <div class="col-lg">
                        <label class="form-label">Minimum Rate</label>
                        <input class="form-control" placeholder="Minimum Rate" value="{{ $job->minimum_rate }}" type="text" name="minimum_rate" required onkeypress="return isNumber(event)">
                    </div>
                    <div class="col-lg">
                        <label class="form-label">Maximum Rate</label>
                        <input class="form-control" placeholder="Maximum Rate" value="{{ $job->maximum_rate }}" type="text" name="maximum_rate" required onkeypress="return isNumber(event)">
                    </div>
                    <div class="col-lg">
                        <label class="form-label">Commission/Bonus</label>
                        <input class="form-control" placeholder="Commission/Bonus" value="{{ $job->commission_bonus }}" type="text" name="commission_bonus" required onkeypress="return isNumber(event)">
                    </div>

                </div>


                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Job Description</label>
                        <textarea class="content" name="job_description">{{ $job->job_description }}</textarea>
                    </div>

                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Job Responsibility</label>
                        <textarea class="content2" name="job_responsibility">{{ $job->job_responsibility }}</textarea>
                    </div>
                </div>


                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Benifits</label>
                        <textarea class="content3" name="job_benifits">{{ $job->job_benifits }}</textarea>
                    </div>
                </div>
                

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Will you supply references for an applicant to contact to learn more about your company culture?</label>
                        <input type="checkbox"  name="job_references" value="1" {{ $job->job_references === 1 ? 'checked':'' }}>
                    </div>
                </div>


                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Requirements</label>
                       
                        @php
                                               
                        if($job->working_skills !== null){
                            $working_skills = explode(',' ,$job->working_skills);
                        }
                        
                    @endphp

                        <select class="form-control select2" data-placeholder="Choose Requirements" multiple required id="working_skills" name="working_skills[]">
                            <option value="Firefox" {{(($job->working_skills !== null) && (in_array("Firefox", $working_skills))) ? 'selected':''}}>
                                Firefox
                            </option>
                            <option value="Chrome" {{(($job->working_skills !== null) && (in_array("Chrome", $working_skills))) ? 'selected':''}}>
                                Chrome
                            </option>
                            <option value="Safari" {{(($job->working_skills !== null) && (in_array("Safari", $working_skills))) ? 'selected':''}}>
                                Safari
                            </option>
                            <option value="Opera" {{(($job->working_skills !== null) && (in_array("Opera", $working_skills))) ? 'selected':''}}>
                                Opera
                            </option>
                            <option value="Internet Explorer" {{(($job->working_skills !== null) && (in_array("Internet Explorer", $working_skills))) ? 'selected':''}}>
                                Internet Explorer
                            </option>
                            <option value="Frontend Developer" {{(($job->working_skills !== null) && (in_array("Frontend Developer", $working_skills))) ? 'selected':''}}>
                                Frontend Developer
                            </option>
                            <option value="Backend Developer" {{(($job->working_skills !== null) && (in_array("Backend Developer", $working_skills))) ? 'selected':''}}>
                                Backend Developer
                            </option>
                            <option value="Visual Studio" {{(($job->working_skills !== null) && (in_array("Visual Studio", $working_skills))) ? 'selected':''}}>
                                Visual Studio
                            </option>
                            <option value="Sublime" {{(($job->working_skills !== null) && (in_array("Sublime", $working_skills))) ? 'selected':''}}>
                                Sublime
                            </option>
                            <option value="Atom" {{(($job->working_skills !== null) && (in_array("Atom", $working_skills))) ? 'selected':''}}>
                                Atom
                            </option>
                        </select>

                    </div> 
                    <div class="row row-sm mb-4">
                        <div class="col-lg">
                            <input type="text" value="{{ $job->working_skills }}" name="working_skills" placeholder="Enter Skills" data-role="tagsinput">
                        </div>
                    </div>
                </div>

                

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                      <input type="submit" class="btn btn-primary" value="Submit"/>
                      <a href="{{route('members.listing')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>

                
                </form>
            
            </div>

        </div>
    </div>
</div>
<!-- End Row -->


<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6BmocvpwcxPuvHXiN8-2NC_ISxYKeYzc&callback=initAutocomplete&libraries=places&v=weekly"
    async
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>


@include('admin.includes.google-map')


@endsection
