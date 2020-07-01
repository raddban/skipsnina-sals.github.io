@extends('admin.layouts.master')

@section('title')
    Contacts
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 my-5">
                        <p class="text-center my-5"></p>
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Kontakti</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('admin.save.contacts') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">E-pasts</label>
                                        <div class="col-sm-10">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="E-pasts...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-2 col-form-label">Telefona nummurs</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="number" class="form-control" id="phone" placeholder="Telefona numurs">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Saglabāt</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
