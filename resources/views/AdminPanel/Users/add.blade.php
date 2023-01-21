@extends('AdminPanel.Layouts.app')

@section('page_title')
    @lang('app.ADD USER')
@endsection

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">@lang('app.ADD NEW')</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">@lang('app.USER_NAME')</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                        id="exampleInputEmail1" placeholder="@lang('app.Enter') @lang('app.USER_NAME')">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputEmail1">@lang('app.EMAIL')</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                        id="exampleInputEmail1" placeholder="@lang('app.Enter') @lang('app.EMAIL')">
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputPassword1">@lang('app.Password')</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                        id="exampleInputPassword1" placeholder="@lang('app.Password')">
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>@lang('app.ADD ROLES')</label>
                </div>
                @foreach ($allRoles as $singleRole)
                    <div class="form-check">
                        <input class="form-check-input" {{ $singleRole->name == 'user' ? 'checked' : '' }}
                            value="{{ $singleRole->name }}" type="radio" name="user_role">
                        <label class="form-check-label">{{ $singleRole->display_name }}</label>
                    </div>
                @endforeach
                <div class="form-group">
                    <label>@lang('app.ADD PERMISSIONS')</label>
                </div>
                @foreach ($allPermissions as $singlePerm)
                    <div class="form-check">
                        <input class="form-check-input" value="{{ $singlePerm->name }}" type="checkbox" name="perms[]">
                        <label class="form-check-label">{{ $singlePerm->display_name }}</label>
                    </div>
                @endforeach


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">@lang('app.ADD')</button>
                <a href="{{ url('/user') }}" class="btn btn-success">@lang('app.CANCEL')</a>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection

@section('page_title', 'users')

@section('page_style')
    <!-- SpecialStyles -->
    <link rel="stylesheet" href="{{ asset('first/styles/showData.css') }}">
@endsection
