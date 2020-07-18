@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger float-right">Delete</button>
                    </form>
                    <a style="margin-right:15px;" href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-info btn float-right">Edit</a>
                    <h2>Show User {{ $user->id }}</h2>
                    
                </div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            
                            <h3>Required data</h3>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="name" placeholder="name" 
                                    name="name" value="{{ old('name', $user->name) }}"
                                disabled >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="email" placeholder="email" 
                                    name="email" value="{{ old('email', $user->email) }}"
                                disabled >
                            </div>
                            
                            <hr>
                            
                            <h5>Role</h5>
                            <div class="form-group">
                                <select disabled class="form-control" name="roles" id="roles">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @isset($user->roles[0]->name)
                                                @if($role->name == $user->roles[0]->name)
                                                selected
                                                @endif
                                            @endisset
                                        >
                                            @isset($user->roles[0]->name)
                                                {{ $role->name }}
                                            @endisset
                                            @empty($user->roles[0]->name)
                                                <p>N/A</p>
                                            @endempty
                                            
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


