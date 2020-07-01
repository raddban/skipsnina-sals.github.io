@extends('admin.layouts.master')

@section('title')
    Admin Receptes
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center my-5">Receptes</h2>
                        <div class="card my-5">
                            <!-- ./card-header -->
                            <div class="card-body">
                                <table class="table expandable-table table-bordered">
                                    {{ $recipes->links() }}
                                    <thead>
                                    <tr>
                                        <th>Nr.</th>
                                        <th>Bilde</th>
                                        <th>Nosaukums</th>
                                        <th>Datums</th>
                                        <th>Izdzēst</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($recipes as $recipe)
                                        <tr class="expandable-header">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td><img style="width: 50px" src="{{'storage/' . $recipe->picture_path }}" alt="{{ $recipe->title }}"></td>
                                            <td>{{ $recipe->title }}</td>
                                            <td>{{ $recipe->created_at }}</td>
                                            <form action="{{ route('admin.delete.recipe', $recipe->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <td>
                                                    <button type="submit" class="btn btn-danger">Izdzēst</button>
                                                </td>
                                            </form>
                                        </tr>
                                        <tr class="expandable-body" data-expandable-table="collapsed">
                                            <td colspan="5">
                                                <p>
                                                    {!! $recipe->description !!}
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ route('admin.add.new.recipe') }}" class="btn btn-success my-3">Pievienot jaunu recepti</a>
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
