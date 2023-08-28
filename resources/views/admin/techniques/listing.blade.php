@extends('layouts.dashboard.main')

@section('content')


<!--Page header-->
<div class="page-header" >
    <div class="page-leftheader">
      <h4 class="page-title mb-0">Techniques</h4>
      <ol class="breadcrumb">
        <li class=""><a href="{{route('technique.create')}}" class="btn btn-primary">Add New Technique </a></li>
        <!-- <li class="ml-3"><a href="#" class="btn btn-info"><i class="fe fe-filter mr-1"></i>Filter </a></li> -->
        {{-- <li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ $page_title }}</a></li> --}}
      </ol>
    </div>
    <div class="page-rightheader">
        <div class="">
            <a href="#" class="">Total Techniques: <b style="color:black;">{{ $members->count() }}</b></a>
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
                <div class="card-title">Techniques List</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">ID</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Category</th>
                                <th class="wd-10p border-bottom-0">Author</th>

                                <th class="wd-15p border-bottom-0">Resource</th>
                                <th class="wd-10p border-bottom-0">Tag</th>
                                <th class="wd-10p border-bottom-0">Description</th>
                                <th class="wd-10p border-bottom-0">Snippet</th>

                              {{--  <th class="wd-25p border-bottom-0">View</th> --}}
                                <th class="wd-25p border-bottom-0">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($members as $data)   
                            <tr>
                                <td>#{{$loop->index+1}}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ \App\Models\Category::find($data->category)->category_name }}</td>
                                <td>{{ $data->user_id }}</td>
                                <td> {{ $data->resources }}</td>
                                <td> {{ $data->tags }}</td>
                                <td> {{ $data->description }}</td>
                                <td> {{ $data->snippet }}</td>
                               {{-- <td>
                                    <a href="{{route('technique.edit',$data->id)}}" class="btn btn-sm btn-primary">View Profile </a>
                                </td> --}}

                                <td>
                                    <a href="{{route('technique.edit', $data->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <a class="btn btn-danger btn-sm delete" href="javascript:;" data-url="{{ route('technique.delete', $data->id) }}">Delete</a>

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