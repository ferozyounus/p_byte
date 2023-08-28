@extends('layouts.dashboard.main')

@section('content')


<!--Page header-->
<div class="page-header" >
    <div class="page-leftheader">
      <h4 class="page-title mb-0">Subscriptions</h4>
      <ol class="breadcrumb">
        {{-- <li class=""><a href="{{route('members.create')}}" class="btn btn-primary">Add New Member </a></li> --}}
        {{-- <li class="ml-3"><a href="#" class="btn btn-info"><i class="fe fe-filter mr-1"></i>Filter </a></li> --}}
        {{-- <li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ $page_title }}</a></li> --}}
      </ol>
    </div>
    <div class="page-rightheader">
        <div class="">
            <a href="#" class="">Total Subscriptions: <b style="color:black;">{{ $subscriptions->count() }}</b></a>
        </div>
        
    </div>
  </div>
  <!--End Page header-->


<!-- Row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Subscription List</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">ID</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Active/Deactivate</th>
                                <th class="wd-15p border-bottom-0">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscriptions as $data)   
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td> @if ($data->active == 0)
                                    Deactive
                                    @else
                                    Active
                                    @endif
                                </td>
                                <td>{{ $data->created_at }}</td>
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

@section('scripts')
  <!-- Page JS Plugins -->

  @include('admin.includes.js-delete')

  <!-- Page JS Code -->

@endsection