@extends('AdminPanel.Layouts.app')

@section('page_title')
    @lang('app.ADD') @lang('app.CONTACT') @lang('app.ICONS')
@endsection

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">@lang('app.ADD') @lang('app.CONTACT') @lang('app.ICONS')</h3>
            <img id="img-preview" class="card-image" src="{{ asset('uploads/contactIcons/website01.png') }}" alt="Icon_Image"
                srcset="">
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('contactIcon.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Icon_Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" onchange="showPreview(event)" class="custom-file-input" name="icon_image"
                                id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                        </div>
                    </div>
                </div>
                @error('icon_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputEmail1">@lang('app.NAME')</label>
                    <input type="text" name="icon_link" value="{{ old('icon_link') }}" class="form-control"
                        id="exampleInputName" placeholder="@lang('app.Enter') @lang('app.NAME')">
                </div>
                @error('icon_link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">@lang('app.ADD')</button>
                    <a href="{{ url('/contactIcon') }}" class="btn btn-success">@lang('app.CANCEL')</a>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection

@section('page_title', 'Contact Icon')

@section('page_style')
    <!-- SpecialStyles -->
    <link rel="stylesheet" href="{{ asset('first/styles/showData.css') }}">

@endsection

@section('page_js')
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById('img-preview');
                preview.src = src;
            }
        }
    </script>
@endsection