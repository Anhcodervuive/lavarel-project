@extends('admin.layouts.app')
@section('title', 'Create role')
@section('content')
    <div class="card">
        <h1>Create role</h1>
        <div>
            <form action="{{ route('roles.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="">Name</label>
                    <Input name="name" type="text" value="{{ old('name') }}" class="form-control"></Input>      

                </div>

                <div class="form-group">
                    <label for="">Display Name</label>
                    <Input name="display_name" type="text" value="{{ old('display_name') }}" class="form-control"></Input>
                    @error('display_name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Group</label>
                    <select name="group" type="text" class="form-control">
                        <option value="system">System</option>
                        <option value="user">User</option>
                    </select>
                    @error('group')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Permission</label>
                    <div class="row">
                        @foreach ($permissions as $groupName => $permission)
                            <div class="col-5">
                                <h4>{{ $groupName }}</h4>
                                <div>
                                    @foreach ($permission as $item)
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="permission_ids[]" value="{{ $item->id }}">
                                            <label class="">{{ $item->display_name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <input type="submit" class="btn btn-submit btn-primary" value="submit">
            </form>
        </div>
    </div>
@endsection