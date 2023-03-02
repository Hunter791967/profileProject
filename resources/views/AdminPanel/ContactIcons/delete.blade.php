@extends('AdminPanel.Layouts.app')

@section('page_title')
    @lang('app.DELETE') @lang('app.CONTACT') @lang('app.ICON')
@endsection

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">@lang('app.ARE')</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('contactIcon.destroy', ['contactIcon' => $contactIcon->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Icon_Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" onchange="showPreview(event)" class="custom-file-input" name="icon_image"
                                id="exampleInputFile" value="{{ $contactIcon->icon_image }}">
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                        </div>
                    </div>
                </div>
                @error('icon_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputEmail1">@lang('app.NAME')</label>
                    <input type="text" name="icon_link" value="{{ $contactIcon->icon_link }}" class="form-control"
                        id="exampleInputName" placeholder="@lang('app.Enter') @lang('app.NAME')">
                </div>
                @error('icon_link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="" class="btn btn-primary">DELETE</button>
                    <a href="{{ url('/contactIcon') }}" class="btn btn-success">CANCEL</a>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection

{{-- @section('page_title', 'About') --}}

@section('page_style')
    <!-- SpecialStyles -->
    <link rel="stylesheet" href="{{ asset('first/styles/showData.css') }}">
@endsection
