@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>List of Roles</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Description</th>
                                <th scope="col">Full-Access</th>
                                <th colspan="3"><a href="{{ route('role.create')}}" class="btn btn-warning  btn-sm float-right">New</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach ($roles as $role)
                                    <tr>
                                        <th>{{ $role->id }}</th>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->slug }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>{{ $role['full-access'] }}</td>
                                        <td><a href="{{ route('role.show', $role->id) }}" class="btn btn-light btn-sm">Show</a></td>
                                        <td><a href="{{ route('role.edit', $role->id) }}" class="btn btn-secondary btn-sm">Edit</a></td>
                                        <td><a href="{{ route('role.destroy', $role->id) }}" class="btn btn-danger btn-sm">Destroy</a></td>
                                    </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                    <hr>
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


