@extends('layouts.dashboard.main')
@section('content')
<style>
    .result.list{
        list-style: auto;
        padding: 0 20px;
        line-height: 30px;
    }
    ul.result-list {
    display: grid;
    grid-template-columns: 33% 33% 33%;
}

ul.result-list li {
    font-size: 16px;
    border: 1px solid;
    padding: 20px 20px;
    margin: 20px 10px;
    text-align: center;
    font-weight: 600;
}
.result-list-head {
    justify-content: center;
}
.result-list-head h4 {
    font-size: 26px;
    font-weight: bold;
    color: #705ec8;
}
</style>
    <!--Page header-->
    <script>window.location = "/user/ocupation/recommend";</script>
    <div class="page-header result-list-head">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">You can choose below fields</h4>
            <ol class="breadcrumb">
            </ol>
        </div>
        <!-- <div class="page-rightheader">
            <div class="">
            </div>

        </div> -->
    </div>
    <ul class="result-list">
        @foreach ($answers as $key => $response)
            <li> {{ $response['title'] }}</li>
            <?php $key++; ?>
        @endforeach
    </ul>
@endsection
