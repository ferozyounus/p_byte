@extends('layouts.dashboard.main')

@section('content')




<!--Page header-->
<div class="page-header" >
    <div class="page-leftheader">
      <h4 class="page-title mb-0">Jobs</h4>
      <ol class="breadcrumb">
        @if (Auth::user()->role_id == 1)
         <li class=""> <a href="{{route('jobs.create')}}" class="btn btn-primary">Create New Job </a></li>
        @endif
       
      </ol>
    </div>
    <div class="page-rightheader">
        
    </div>
  </div>
  <!--End Page header-->


<!-- Row -->
<div class="row">
{{-- @dd($response['job_url']) --}}
@foreach ($apiData as  $data)
    

    <div class="col-md-6 col-xl-4">
        {{-- <div class="card overflow-hidden"> --}}
            {{-- <div data-target="#modaldemo1" data-toggle="modal" class="card overflow-hidden" style="cursor: pointer;"> --}}
            <div class="card overflow-hidden">


            <div class="card-body">
                <div class="d-flex align-items-center mt-auto">
                   <div class="avatar brround avatar-xl mr-3" style="background-image: url(/storage/uploads/jobs/16833079802023-05-05.jpg)"></div>
                    {{-- onclick="viewModal({{ $data->id }})" --}}
                    <div>
                        {{-- <h3> <b> --}}
                            {{-- <a href="@if (Auth::user()->role_id == 1) {{route('jobs.show',$data->id)}} @else {{route('jobs.detail',$data->id)}} @endif" class="comment" >{{ $data->job_title }}</a></b></h3> --}}
                        <small class="font-weight-semibold " style="font-size: 24px;font-weight: 900;" ><a href="{{$data->job_url}}" target="blank" class="comment" >{{ $data->job_title }}</a></small>
                        <small class="d-block text-muted"><i class="fe fe-map-pin fs-10 text-icon"></i> {{ $data->job_location }}</small>
                    </div>
                </div>
            </div>

                <div class="card-body d-flex flex-column">
                    <h4> Company Name: <a href="{{$data->company_url}}" target="blank"> {{ $data->company_name }} </a></h4>
                    {{-- <div class="text-muted">{!! $data->job_description !!}</div> --}}
                </div>
            
                <div class="card-body">
                    <div class="d-flex align-items-center mt-auto">
                        <div class="" >
                            
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3" style="color:black !important;"><i class="fe fe-clock  fs-16 text-icon"></i> {{ \Carbon\Carbon::parse($data->posted_date)->diffForHumans() }} </a>
                        </div>
                        <div class="ml-auto" >
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3" style="color:black !important;">  </a>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
       
    </div>
    {{-- @empty
    <div class="col-md-12 col-xl-12 text-center">
        <h4>No Jobs Found</h4>
    </div> --}}

    @endforeach

</div>
<!--End Row-->
{{-- {{ $apiData->links() }} --}}


<!-- Large Modal -->
<div id="modalViewData" class="modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            {{-- <div class="modal-header pd-x-20">
                <h6 class="modal-title">Message Preview</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> --}}
            <div class="modal-body">
                
               
               


            </div>


            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-secondary" onclick="closeModal()">Close</a>
            </div>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->

@endsection
@section('scripts')
  <!-- Page JS Plugins -->

  @include('admin.includes.js-delete')

  <!-- Page JS Code -->

<script>
    

    $(".comment").click(function() {
       
      alert("ascascas")

   });

    // $(document).ready(function(){
    //     $(".comment").click(function(){
            
    //         alert("ascascac");
    //     });
    // });


    // $('.comment').on('click', function(e) {

    //     alert("ascascac");
    // });

  function viewModal(id){
        // alert(id);
        // $("#modalViewData").show();

                    // var data = $(form).serialize();

                        $.ajax({
                            url: '{{ URL::route('jobs.data') }}',
                            type:"POST",
                            data: {id:id}
                            success:function(response){


                                console.log("response",response);

                                // $("#tab23").removeClass("active");
                                // $("#tab24").addClass("active");                               

                                // $("#btntab23").removeClass("active");
                                // $("#btntab24").addClass("active"); 
                                // // 
                                // $("#closeEducationModal").trigger( "click" );

                                // $("#successModal").show();
                                // $("#appendNextButton").empty();
                                // $("#appendNextButton").append('<a href="#tab24" onclick="goToNextThree()" data-toggle="tab" class="btn btn-primary">Next </a> ');


                            },
                            error: function(response) {
                                // alert("failed")
                            }
                        });

    }

    function closeModal(){
        // alert(id);
        $("#modalViewData").hide();
    }

</script>
@endsection