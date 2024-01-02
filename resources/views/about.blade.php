@extends('master')

@section('bitm')
    About Page
@endsection
@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{asset($blog['image'])}}" alt="" height="300px">
                            <div class="card-body">
                                <h3>{{$blog['title']}}</h3>
                                <p>{{$blog['discription']}}</p>
                                <hr/>
                                <a href="{{route('detail', ['id' =>$blog['id']])}}" class="btn btn-success"> Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

