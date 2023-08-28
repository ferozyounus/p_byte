@extends('layouts.dashboard.main')

@section('content')




<!--Page header-->
<div class="page-header" >
    <div class="page-leftheader">
      <h4 class="page-title mb-0">Subscription</h4>
    </div>
    <div class="page-rightheader">
        
    </div>
  </div>
  <!--End Page header-->


<!-- Row -->
<div class="row">

@forelse ($subscriptions as $data)


    <div class="col-md-6 col-xl-4">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="d-flex align-items-center mt-auto">
                    {{ $data->name }}
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="text-muted">
                        @if(in_array($data->id , $subscriptionCheck))
                        <h3>Purchased</h3>
                        @else
                        <a class="btn btn-warning get-subscription-custom" type="button" data-subsciption-id="{{ $data->id }}" href="">Get Subscription</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-md-12 col-xl-12 text-center">
        <h4>No Subscriptions Found</h4>
    </div>

    @endforelse

</div>


@endsection
@section('scripts')
<script type="text/javascript">
    $(".get-subscription-custom").click(function (e) {
        e.preventDefault();
        var subsciption_id=jQuery(this).attr('data-subsciption-id');
        $.ajax({
            url : '{{ URL::route('subscription.insert') }}',
            type: "POST",
            data: {_token:'{{ csrf_token() }}','subsciption_id':subsciption_id},
            success:function(response){
                window.location=response.redirect_url;
            },
            error: function(response) {
            }

        })  
    });
</script>
@endsection