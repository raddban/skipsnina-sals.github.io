@extends('admin.layouts.master')
@section('title')
    Jauna Kategorija
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->

                    <div class="col-md-12 my-5">
                        <h2 class="text-center mb-5">Pievienot jaunu Kategoriju</h2>
                    @include('admin.partials.alert')
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.save.category') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Kategorijas nosaukums</label>
                                        <input name="title" type="text" class="form-control" id="title" placeholder="Kategorijas nosaukums">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Saglabāt</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                </div>
            </div>
        </section>
    </div>
@endsection
