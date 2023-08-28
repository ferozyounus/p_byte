@extends('layouts.dashboard.main')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header align-content-end">
                        Subscription Name
                    </div>
                    <div class="card-body">
                        <form action="{{ route('plan.update') }}" method="POST">
                            @foreach ($plan as $plans)
                                @csrf
                                <input type='hidden' class="form-control" name='id' value={{ $plans->id }}>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="">Name of Package</label>
                                            <input type="text" name='name' class="form-control"  value="{{ $plans->name }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <hr>
                                        <input type="submit" value="Save Changes" class="btn btn-primary">
                                    </div>
                                </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="/new_product/">Create New Produc</a> --}}
@endsection
