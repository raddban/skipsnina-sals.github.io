@extends('user.layouts.master')

@section('title')
    Receptes
@endsection

@section('content')
    <div class="container">
    <div class="row">
        @foreach($recipes as $recipe)
        <div class="col-md-6">
            <!-- Box Comment -->
            <div class="card card-widget">
                <div class="card-header">
                    <div class="user-block">
                        <span class="username"><a href="#"> {{ $recipe->title }}</a></span>
                        <span class="description float-right"> {{ $recipe->created_at }} </span>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ route('user.single.dish', $recipe->id) }}"><img style="width: 500px; height: 500px;" class="img-fluid pad" src="{{ URL::to('storage/' . $recipe->picture_path)}}" alt="Photo"></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        @endforeach
    </div>
    <!-- /.row -->
    </div>
@endsection
