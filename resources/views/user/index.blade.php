@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>List of Users</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role/s</th>
                                <th colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach ($users as $user)
                                
                                    <tr>
                                        <th>{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @isset($user->roles[0]->name)
                                                {{ $user->roles[0]->name}}
                                            @endisset
                                            @empty($user->roles[0]->name)
                                                <p>N/A</p>
                                            @endempty
                                        </td>
                                        <td>
                                            @can('view', [$user, ['user.show','userown.show']])
                                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-light btn-sm">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('update', [$user, ['user.edit','userown.edit']])
                                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess', 'user.destroy')
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            @endcan
                                        </td>
                                        <td></td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                    <hr>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


