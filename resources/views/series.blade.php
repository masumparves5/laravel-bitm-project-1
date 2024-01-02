@extends('master')

@section('bitm')
    Contact Page
@endsection
@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body border-0 bg-transparent shadow">
                        <form action="{{route('makeSeries')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first_name" value="{{session('firstName')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last_name" value="{{session('lastName')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" value="Odd" name="choice">Odd</label>
                                    <label><input type="radio" value="even" name="choice">Even</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{session('message')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-danger" name="" value="Make Full Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


