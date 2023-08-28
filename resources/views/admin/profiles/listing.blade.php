@extends('layouts.dashboard.main')

@section('content')


<!--Page header-->
<?php /*
<div class="page-header">
    <div class="page-leftheader">
        {{-- <h4 class="page-title mb-0">Free Career Form</h4> --}}
        {{-- <ol class="breadcrumb"> --}}
            {{-- <li class=""><a href="{{route('members.create')}}" class="btn btn-primary">Add New Member </a></li> --}}
            {{-- <li class="ml-3"><a href="#" class="btn btn-info"><i class="fe fe-filter mr-1"></i>Filter </a></li> --}}
            {{-- <li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ $page_title }}</a></li> --}}
        {{-- </ol> --}}
    </div>
    <div class="page-rightheader">
        <div class="">
        </div>

    </div>
</div> */ ?>
<!--End Page header-->

@php
//  echo "<pre>";
//  print_r($questions);
//  echo "</pre>";   

@endphp

{{-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Career Test Form</div>
            </div>
            <!-- modal trigger -->
            <div>
                <a data-target="#careerformModal" data-toggle="modal" class="btn btn-primary"> Add Education Experience </a>
            </div>
        </div>
        <!--/div-->
    </div>
</div> --}}
<!-- /Row -->



{{-- <div id="careerformModal" class="modal fade">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body"> --}}
            @php
                $startDate = App\Models\Subscription::where('user_id',auth()->user()->id)->first();
                if($startDate){
                $createDate = \Carbon\Carbon::createFromDate($startDate->created_at);
                $lastDate = \Carbon\Carbon::createFromDate($startDate->created_at)->addMonth();
                }else{  @endphp
                    <script>window.location = "/user/subscription/listing";</script>
                @php  }
                    
            // dd($createDate->diffInDays($lastDate));     
            @endphp
            @if($startDate)
        @if($createDate->diffInDays($lastDate) > 30)
                <div class="career-form">
                    <h1>Career <span>Test</span></h1>
                    <p>This is the first page of our 5-step online career test. Most visitors complete the test in 5 to 10 minutes. When you're done, we'll provide you recommendations for great new careers that best match your answers. Have fun!</p>
                    <form id="careerTestForm" action="{{route('answers.chose')}}" method="POST">

                        
                        <!-- progressbar -->
                        @csrf
                        <ul id="progressbar">
                            <li class="active">Step 1</li>
                            <li>Step 2</li>
                            <li>Step 3</li>
                            <li>Step 4</>
                            <li>Step 5</>
                        </ul>
                        <!-- progressbar -->

                        <!-- fieldsets 1 -->
                        <div>
                            <fieldset>
                                <div class="form-card">
                                    <h2>Step 1 of 5: SKILLS</h2>
                                    <h6>Rate your skill level for the following attributes:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Strongly Dislike</th>
                                                    <th scope="col">Dislike</th>
                                                    <th scope="col">Unsure</th>
                                                    <th scope="col">Like</th>
                                                    <th scope="col">Strongly Like</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i= 0;
                                                @endphp
                                                @foreach ($questions as $item)
                                           
                                            <p style="display:none">{{$i++}}</p>
                                                    @if ($i <= 12)
                                                        
                                                                                                    

                                                <tr>
                                                    <th>{{$i}} {{$item->text }}</th>
                                                    <td><input type="radio" required name="strong{{$i }}" value="1"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="2"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="3"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="4"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="5"></td>

                                                </tr>
                                                @endif
                                                @endforeach

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Continue to Step 2" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 1 -->

                            <!-- fieldsets 2 -->
                            <fieldset>
                                <div class="form-card">
                                    <h6>Rate your skill level for the following attributes:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Strongly Dislike</th>
                                                    <th scope="col">Dislike</th>
                                                    <th scope="col">Unsure</th>
                                                    <th scope="col">Like</th>
                                                    <th scope="col">Strongly Like</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i= 0;
                                                @endphp
                                                @foreach ($questions as $item)
                                           
                                            <p style="display:none">{{$i++}}</p>
                                                    @if ($i >12 && $i<=24)
                                                        
                                                                                                    

                                                <tr>
                                                    <th>{{$i}} {{$item->text }}</th>
                                                    <td><input type="radio" required name="strong{{$i }}" value="1"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="2"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="3"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="4"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="5"></td>

                                                </tr>
                                                @endif
                                                @endforeach

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Continue to Step 3" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 2 -->

                            <!-- fieldsets 3 -->
                            <fieldset>
                                <div class="form-card">
                                    <h6>Rate your skill level for the following attributes:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Strongly Dislike</th>
                                                    <th scope="col">Dislike</th>
                                                    <th scope="col">Unsure</th>
                                                    <th scope="col">Like</th>
                                                    <th scope="col">Strongly Like</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i= 0;
                                                @endphp
                                                @foreach ($questions as $item)
                                           
                                            <p style="display:none">{{$i++}}</p>
                                                    @if ($i >24 && $i<=36)
                                                        
                                                                                                    

                                                <tr>
                                                    <th>{{$i}} {{$item->text }}</th>
                                                    <td><input type="radio" required name="strong{{$i }}" value="1"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="2"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="3"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="4"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="5"></td>

                                                </tr>
                                                @endif
                                                @endforeach

                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Continue to Step 4" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 3 -->

                            <!-- fieldsets 4 -->
                            <fieldset>
                                <div class="form-card">
                                    <h6>Rate your skill level for the following attributes:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Strongly Dislike</th>
                                                    <th scope="col">Dislike</th>
                                                    <th scope="col">Unsure</th>
                                                    <th scope="col">Like</th>
                                                    <th scope="col">Strongly Like</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i= 0;
                                                @endphp
                                                @foreach ($questions as $item)
                                           
                                            <p style="display:none">{{$i++}}</p>
                                            @if ($i >36 && $i<=48)
                                                        
                                                                                                    

                                                <tr>
                                                    <th>{{$i}} {{$item->text }}</th>
                                                    <td><input type="radio" required name="strong{{$i }}" value="1"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="2"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="3"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="4"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="5"></td>

                                                </tr>
                                                @endif
                                                @endforeach

                                                
                                            </tbody>
                                        </table>
                                   </div>
                                </div>
                                <div class="form-footer">
                                    <input type="button" name="next" class="next action-button" value="Continue to Step 5" />
                                </div>
                            </fieldset>
                            <!-- fieldsets 4 -->

                            <!-- fieldsets 5 -->
                            <fieldset>
                                <div class="form-card">
                                    <h6>Rate your skill level for the following attributes:</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Strongly Dislike</th>
                                                    <th scope="col">Dislike</th>
                                                    <th scope="col">Unsure</th>
                                                    <th scope="col">Like</th>
                                                    <th scope="col">Strongly Like</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i= 0;
                                                @endphp
                                                @foreach ($questions as $item)
                                           
                                            <p style="display:none">{{$i++}}</p>
                                            @if ($i >48 && $i<=60)
                                                        
                                                                                                    

                                                <tr>
                                                    <th>{{$i}} {{$item->text }}</th>
                                                    <td><input type="radio" required name="strong{{$i }}" value="1"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="2"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="3"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="4"></td>
                                                    <td><input type="radio" required name="strong{{$i }}" value="5"></td>

                                                </tr>
                                                @endif
                                                @endforeach

                                                
                                            </tbody>
                                        </table>
                                   </div>
                                </div>
                                <div class="form-footer">
                                    <input type="submit" name="next" class="btn btn-info" value="Submit"/>
                                </div>

                            </fieldset>
                            <!-- fieldsets 5 -->
                        </div>
                    </form>

                </div>
                @endif
                @endif
            {{-- </div>
        </div>
    </div>
</div> --}}

<style>
    div#careerformModal .modal-sm {
        max-width: 80% !important;
    }

    .career-form {
        width: 95%;
        margin: 50px auto;
    }

    .career-form h1 {
        text-align: center;
        font-size: 50px;
        font-family: 'Roboto';
        font-weight: bold;
        line-height: 1.5;
    }

    .career-form h1 span {
        background-color: #4A8B8C;
        padding: 0 5px;
        color: #fff;
        border-radius: 5px;
    }

    .career-form p {
        text-align: center;
        font-size: 20px;
        width: 80%;
        margin: auto;
    }

    #careerTestForm ul#progressbar {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin: 50px 0;
        overflow: hidden;
        counter-reset: count;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }

    #careerTestForm ul#progressbar .active {
        color: #4A8B8C;
    }

    #careerTestForm ul#progressbar li {
        font-size: 20px;
        position: relative;
        font-weight: bold;
        font-family: 'roboto';
        color: #6F717F;
        width: 100%;
        text-align: center;
    }

    #careerTestForm ul#progressbar li:before {
        counter-increment: count;
        content: "" counter(count) " ";
    }

    #careerTestForm ul#progressbar li:before {
        width: 45px;
        height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: #6F717F;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
        box-shadow: 0px 3px 6px #00000029;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
        position: relative;
    }

    #careerTestForm ul#progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: #6f717f;
        position: absolute;
        top: 21px;
        left: 50%;
        z-index: 0;
    }

    #careerTestForm ul#progressbar li.active:before,
    #careerTestForm ul#progressbar li.active:after {
        background: #4A8B8C;
    }

    #careerTestForm ul#progressbar li:last-child:after {
        content: unset;
    }

    .career-form .form-card h2 {
        color: #4A8B8C;
        font-size: 35px;
        font-weight: bold;
        text-align: center;
    }

    .career-form .form-card h6 {
        font-size: 24px;
        color: #2e2e2e;
        text-align: center;
    }

    .career-form .form-card .table-responsive {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .career-form .table>tbody>tr>td,
    .career-form .table>thead>tr>th {
        text-align: center;
        border: 1px solid #fff;
    }

    .career-form .table>thead>tr>th {
        color: #fff;
        min-width: 150px;
    }

    .career-form .table>thead>tr>th:nth-child(2) {
        background-color: #F01A26;
    }

    .career-form .table>thead>tr>th:nth-child(3) {
        background-color: #F89418;
    }

    .career-form .table>thead>tr>th:nth-child(4) {
        background-color: #FFBC0C;
    }

    .career-form .table>thead>tr>th:nth-child(5) {
        background-color: #8EC543;
    }

    .career-form .table>thead>tr>th:nth-child(6) {
        background-color: #029440;
    }

    .career-form .table>tbody>tr:nth-child(odd)>th {
        background-color: #F2F2F2;
    }

    .career-form .table>tbody>tr:nth-child(even)>th {
        background-color: #F8F8F8;
    }

    .career-form .table tbody tr td:nth-child(2) {
        background-color: #FAC8CB;
    }

    .career-form .table tbody tr td:nth-child(3) {
        background-color: #FDDFBD;
    }

    .career-form .table tbody tr td:nth-child(4) {
        background-color: #FFF2CF;
    }

    .career-form .table tbody tr td:nth-child(5) {
        background-color: #DEEDC4;
    }

    .career-form .table tbody tr td:nth-child(6) {
        background-color: #B6DDCA;
    }

    .career-form .form-footer {
        text-align: center;
    }

    .career-form .form-footer input.next {
        padding: 10px 15px;
        color: #fff;
        background-color: #4A8B8C;
        font-size: 20px;
        font-weight: bold;
        outline: none;
        border: 1px solid #4A8B8C;
        transition: all .4s ease-in-out;
    }

    .career-form .form-footer input.next:hover {
        background-color: #fff;
        color: #4A8B8C;
    }

    #careerTestForm fieldset:not(:first-of-type) {
        display: none
    }

    .form-card .last-step {
        width: 80%;
        margin: 50px auto;
    }

    .career-form .form-card .last-step .requirements {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        gap: 5px;
    }

    .career-form .form-card .last-step .requirements h4 {
        width: 80%;
        margin-bottom: 0;
        background-color: #F2F2F2;
        font-size: 14px;
        font-weight: bold;
        color: #2e2e2e;
        height: 50px;
        display: flex;
        align-items: center;
        padding: 0 15px;
    }

    .career-form .form-card .last-step .requirements select {
        width: 20%;
        background-color: #6F717F;
        color: #fff;
        padding: 10px;
        height: 50px;
        outline: none;
    }



    /******************** Responsive Start **********************/


    @media (min-width: 1600px) {}

    @media (max-width: 1440px) {

        .career-form .table>thead>tr>th {
            min-width: 130px;
        }
    }

    @media (max-width: 1350px) {

        .career-form .table>thead>tr>th {
            min-width: 120px;
        }

    }

    @media (max-width: 1199px) {}

    @media (max-width: 991px) {}

    @media (max-width: 767px) {}

    @media (max-width: 575px) {}

    /******************** Responsive End **********************/
</style>

@endsection

@section('scripts')

<script>
    $(document).ready(function() {

        var current_fs, next_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        // setProgressBar(current);

        $(".next").click(function() {

            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            // setProgressBar(++current);
        });

        $("#progressbar li").click(function() {
            var li_index = $(this).index();
            var li_index = li_index + 1
            // var fieldset_to_show = $("fieldset").eq(li_index);

            console.log(li_index, "test")
            // return false;

            $("#progressbar li").removeClass("active");
            $(this).addClass("active");

            $("fieldset").css({
                'display': 'none',
                'position': 'relative',
                'opacity': '0'
            });
            // fieldset_to_show.show();
            jQuery(`fieldset:nth-child(${li_index})`).css({
                'display': 'block',
                'position': 'relative',
                'opacity': '1'
            });


        });

        // $(".previous").click(function() {

        //     current_fs = $(this).parent().parent();
        //     previous_fs = $(this).parent().parent().prev();

        //     //Remove class active
        //     $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //     //show the previous fieldset
        //     previous_fs.show();

        //     //hide the current fieldset with style
        //     current_fs.animate({
        //         opacity: 0
        //     }, {
        //         step: function(now) {
        //             // for making fielset appear animation
        //             opacity = 1 - now;

        //             current_fs.css({
        //                 'display': 'none',
        //                 'position': 'relative'
        //             });
        //             previous_fs.css({
        //                 'opacity': opacity
        //             });
        //         },
        //         duration: 500
        //     });
        //     setProgressBar(--current);
        // });

        // function setProgressBar(curStep) {
        //     var percent = parseFloat(100 / steps) * curStep;
        //     percent = percent.toFixed();
        //     $(".progress-bar")
        //         .css("width", percent + "%")
        // }

        $(".submit").click(function() {
            return false;
        })

    });
</script>
<!-- Page JS Plugins -->

@include('admin.includes.js-delete')

<!-- Page JS Code -->

@endsection