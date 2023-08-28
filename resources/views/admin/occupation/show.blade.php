@extends('layouts.dashboard.main')

@section('content')


<!-- Row -->
<div class="row">
   
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="main-content-body main-content-body-profile">
            <div class="main-profile-body">

                <div class="card-body">
                    
                    <h4 class="font-weight-bold">{{ $occupations->title }}</h4>
                    <p class="font-weight-bold">{{ $occupations->onetsoc_code  }}</p>
                    <div class="main-profile-bio mb-0">
                        <p>{{ strip_tags($occupations->description) }}</p>

                        </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection
