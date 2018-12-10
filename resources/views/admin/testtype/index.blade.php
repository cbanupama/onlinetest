@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Test Types</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testTypes as $type)
                                <tr>
                                    <td>{{ $type->name }}</td>
                                    <td>{{ $type->slug }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
