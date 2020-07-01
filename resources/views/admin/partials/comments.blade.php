@extends('admin.layouts.master')

@section('title')
    Komentāri
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12 my-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Komentāri</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Nr.</th>
                                        <th>Receptes Nosaukums</th>
                                        <th>Vārds</th>
                                        <th>E-pasts</th>
                                        <th>Datums</th>
                                        <th>Izdzēst</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($comments as $comment)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $comment->recipe_title }}</td>
                                            <td>{{ $comment->name }}</td>
                                            <td>{{ $comment->email }}</td>
                                            <td>{{ $comment->created_at }}</td>
                                            <form action="{{route('admin.delete.comment', $comment->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <td>
                                                    <button type="submit" class="btn btn-danger">Izdzēst</button>
                                                </td>
                                            </form>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
    </div>
@endsection
