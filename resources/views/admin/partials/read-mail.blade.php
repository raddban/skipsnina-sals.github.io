@extends('admin.layouts.master')
@section('title')
    Read mail
@endsection

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <!-- /.col -->
                <div class="col-md-12 my-5">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">E-pasts</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>Tēma: {{ $single->subject }}</h5>
                                <h6>From: {{ $single->email }}
                                    <span class="mailbox-read-time float-right">{{ $single->created_at }}</span></h6>
                            </div>
                            <div class="mailbox-read-message">
                                {{ $single->message }}
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
{{--                        <div class="card-footer">--}}
{{--                            <div class="float-right">--}}
{{--                                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>--}}
{{--                                <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>--}}
{{--                            </div>--}}
{{--                            <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>--}}
{{--                            <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>--}}
{{--                        </div>--}}
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <a href="{{ url()->previous() }}">Atpakaļ</a>
                <!-- /.col -->
            </div>
        </section>
    </div>

@endsection
