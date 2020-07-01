@extends('admin.layouts.master')

@section('title')
    Kategorijas
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center my-5">Kategorijas</h2>
                        <div class="card my-5">
                            <!-- ./card-header -->
                            <div class="card-body">
                                <table class="table expandable-table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nr.</th>
                                        <th>Nosaukums</th>
                                        <th>Datums</th>
                                        <th>Izdzēst</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)

                                        <tr class="expandable-header">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <form action="{{ route('admin.delete.category', $category->id) }}" method="POST">
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
                                <a href="{{ route('admin.add.new.category') }}" class="btn btn-success my-3">Pievienot jaunu kategoriju</a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
@endsection
