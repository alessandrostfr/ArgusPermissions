@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Create New Role</h2>
                </div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <div class="container">
                            
                            <h3>Required data</h3>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{ old('name') }}">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="slug" placeholder="slug" name="slug" value="{{ old('slug') }}">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripcion" >
                                    {{ old('description') }}
                                </textarea>
                            </div>
                            
                            <h4>Full Access</h4>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                                    @if(old('full-access') == "yes")
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label" for="fullaccessyes">Yes</label>
                            </div>
                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 
                                    @if(old('full-access') == 'no')
                                        checked
                                    @endif
                                    @if(!old('full-access'))
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label" for="fullaccessno"  >No</label>
                            </div>
                            
                            <hr>
                            
                            <h4>Permissions</h4>
                            
                            @foreach ( $permissions as $permission)
                                <div class="custom-control custom-checkbox">
                                <input 
                                    type="checkbox" 
                                    class="custom-control-input" 
                                    name="permission[]" 
                                    id="permission_{{ $permission->id }}" 
                                    value="{{ $permission->id }}"
                                    @if(is_array(old('permission')) && in_array("$permission->id", old('permission'))  )
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label" for="permission_{{ $permission->id }}">
                                    {{ $permission->id . " " }}<strong>{{ $permission->name }}</strong> {{  "-" }}<em>{{ $permission->description }}</em>
                                </label>
                                </div>
                            @endforeach
                            
                            <hr>
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-success float-right" value="Save">
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


