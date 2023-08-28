@extends('layouts.dashboard.main')

@section('content')


<!--Page header-->
<div class="page-header" >
    <div class="page-leftheader">
      <h4 class="page-title mb-0">Occupations List</h4>
      <ol class="breadcrumb">
        <!-- <li class=""><a href="{{route('members.create')}}" class="btn btn-light" style="background-color:#fff !important;"><input type="checkbox" /> Select All </a></li> -->
        </br>
        @if (Auth::user()->role_id == 1)
         <li class=""> <a href="{{route('occupations.create')}}" class="btn btn-primary">Create New Occupation </a></li>
        @endif
      </ol>
    </div>
    <div class="page-rightheader">
        <div class="" style="margin-top: 40px;">
            {{-- <a href="{{route('members.create')}}" class="btn btn-light" style="background-color:#fff !important;"> 
                <i class="fa fa-caret-down fs-16 text-icon"></i>
                 Move to 
            </a> --}}
           
           

          
           
        </div>
        <div class="">
           
        </div>
     
    </div>
  </div>
  <!--End Page header-->

<!-- Row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Occupations List</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example1">
                        <thead>
                            <tr>
                                <!-- <th class="wd-10p border-bottom-0"></th> -->
                                {{-- <th class="wd-10p border-bottom-0">ID</th> --}}
                                <th class="wd-20p border-bottom-0">Occupation</th>
                                <th class="wd-30p border-bottom-0">Brief Description</th>
                                <th class="wd-30p border-bottom-0">Category</th>
                                
                                <th class="wd-10p border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($occupations as $data)   
                            <tr>
                                <!-- <td></td> -->
                                {{-- <td>#{{$loop->index+1}}</td> --}}
                                <td>{{ $data->title }}</td>
                                <td>  @php
                                    $str = substr(strip_tags($data->description), 0, 120) . '...';
                                @endphp
                                {{ $str }}</td>
                                <td>--</td>
                                <td>
                                    <a href="{{route('occupations.show',$data->onetsoc_code)}}" class="btn btn-primary">View Detail </a>
                                    @if(Auth::user()->id == 1 )
                                    <a href="{{route('occupations.edit',$data->onetsoc_code)}}" class="btn btn-primary">Edit </a>
                                    <a href="{{route('occupations.delete',$data->onetsoc_code)}}" class="btn btn-primary">Delete </a>
                                   @endif
                                </td>
                            </tr> 
                            @empty
                            @endforelse

                           

                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
</div>
<!-- /Row -->

@endsection
