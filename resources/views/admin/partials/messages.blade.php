@extends('admin.layouts.master')

@section('title')
    Ziņas
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 my-5">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Inbox</h3>

                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>

                                    @foreach($messages as $message)
                                        <tr>
                                            <td>
                                            <form action="{{ route('admin.delete.message', $message->id) }}" method="POST">
                                                @csrf
                                                @method(' DELETE')

                                                    <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>

                                            </form>
                                            </td>
                                            <td class="mailbox-name"><a href="{{ route('admin.read.mail', $message->id) }}">{{ $message->name }}</a></td>
                                            <td class="mailbox-subject"><b> {{ $message->subject }}</b></td>
                                            <td class="mailbox-date">{{ $message->created_at }}</td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
