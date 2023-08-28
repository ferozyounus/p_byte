@extends('layouts.dashboard.main')

@section('content')


<!--Page header-->
<div class="page-header" >
    <div class="page-leftheader">
      <h4 class="page-title mb-0">Categories</h4>
      <ol class="breadcrumb">
        <li class=""><a href="{{route('category.create')}}" class="btn btn-primary">Add New Categories </a></li>
        <li class="ml-3"><a href="#" class="btn btn-info"><i class="fe fe-filter mr-1"></i>Filter </a></li>
        {{-- <li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ $page_title }}</a></li> --}}
      </ol>
    </div>
    <div class="page-rightheader">
        <div class="">
            <a href="#" class="">Total Categories: <b style="color:black;">{{ $members->count() }}</b></a>
        </div>
        <div class="">
            <a href="#" class="">Current Used: <b style="color:black;">{{ $members->count() }}</b></a>
        </div>
      {{-- <div class="btn btn-list">
        <a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
        <a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
        <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> 
      </div> --}}
    </div>
  </div>
  <!--End Page header-->


<!-- Row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Members List</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">ID</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Author</th>
                                <th class="wd-10p border-bottom-0">Current Status</th>
                                <th class="wd-10p border-bottom-0">Change Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($members as $data)   
                            <tr>
                                <td>#{{$loop->index+1}}</td>
                               
                                <td>{{ $data->category_name }}</td>
                                <td>{{ $data->user_id }}</td>
                                <td> @if ($data->status == 'approve')
                                     Active
                                    @else
                                    Deactive
                                    @endif
                                    </td>

                                    <td> @if ($data->status == 'approve')
                                        <a href="{{ route('category.change_status', ['category' => $data->id, 'status' => 'unapprove']) }}" class="btn btn-success btn-sm btn-style-sold">Make Deactive</a>
                                        @else
                                        <a href="{{ route('category.change_status', ['category' => $data->id, 'status' => 'approve']) }}" class="btn btn-success btn-sm btn-style-sold">Make Active</a>

                                        @endif
                                    </td>


                              

                                <td>
                                    <a href="{{route('category.edit', $data->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <a class="btn btn-danger btn-sm delete" href="javascript:;" data-url="{{ route('members.delete', $data->id) }}">Delete</a>

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

@section('scripts')
  <!-- Page JS Plugins -->

  @include('admin.includes.js-delete')

  <!-- Page JS Code -->

@endsection