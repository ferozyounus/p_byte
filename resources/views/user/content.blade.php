@extends('layouts.dashboard.main')

@section('style')
  <!-- Page JS Plugins CSS -->
  <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">

@endsection
@section('content')

<!-- Page Content -->
<div class="content">
  <!-- Table -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Prayers <small>listing</small></h3>
      </div>
      <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Title</th>
              <th >Thumbnails</th>
              <th class="text-center">Video link</th>
            </tr>
          </thead>
          <tbody>
            
            @forelse ($videos as $video)
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$video->snippet->title}}</td>
              <td><img src="{{$video->snippet->thumbnails->default->url}}" alt="" srcset=""></td>
              <td class="text-center"><a href="https://www.youtube.com/watch?v={{$video->id->videoId}}" target="_blank">Watch</a></td>
            </tr>
        @empty
           <p> No Videos Availiabe </p>
        @endforelse
          </tbody>
        </table>
      </div>
    </div>
  <!-- END Table -->

      </div>
<!-- END Page Content -->
@endsection
@section('script')
  <!-- Page JS Plugins -->
  <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
  @include('admin.includes.js-delete')

  <!-- Page JS Code -->

  <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection
