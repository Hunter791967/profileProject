@extends('AdminPanel.Layouts.app')

@section('page_title')
    @lang('app.USERS')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>@lang('app.SHOWING ALL') @lang('app.USERS')</h4>
            @if (Auth::user()->hasPermission('users-create'))
                <button type="button" class="btn btn-block btn-primary add_btn"><a class="formButton"
                        href="{{ url('/user/create') }}">@lang('app.ADD USER')</a></button>
            @else
                <button disabled type="button" class="btn btn-block btn-primary add_btn">@lang('app.ADD USER')</button>
            @endif
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">@lang('app.ID')
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">
                                        @lang('app.USER_NAME')
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                        @lang('app.EMAIL')</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Engine version: activate to sort column ascending">
                                        @lang('app.ROLES')
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                        @lang('app.PERMISSIONS')
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                        @lang('app.OPTIONS')
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="tbody_font">
                                @foreach ($showData as $singleData)
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">{{ $singleData->id }}</td>
                                        <td>{{ $singleData->name }}</td>
                                        <td>{{ $singleData->email }}</td>
                                        <td>
                                            @foreach ($singleData->Roles as $role)
                                                {{ $role->display_name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="form-group">

                                                <select class="form-control">
                                                    <option>PERMISSIONS</option>
                                                    @foreach ($singleData->Permissions as $permission)
                                                        <option>{{ $permission->display_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td class="option_ud col_width">
                                            @if (Auth::user()->hasPermission('users-delete'))
                                                <a href="{{ url("/user/$singleData->id") }}"
                                                    class="btn btn-danger update_btn" type="submit">Delete</a>
                                            @else
                                                <button disabled class="btn btn-danger update_btn"
                                                    type="button">Delete</button>
                                            @endif
                                            @if (Auth::user()->hasPermission('users-update'))
                                                <a href="{{ route('user.edit', ['user' => $singleData->id]) }}"
                                                    type="submit"
                                                    class="btn
                                                        btn-primary update_btn">Update</a>
                                            @else
                                                <button disabled class="btn btn-primary update_btn"
                                                    type="button">Update</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">@lang('app.ID')</th>
                                    <th rowspan="1" colspan="1">@lang('app.USER_NAME')</th>
                                    <th rowspan="1" colspan="1">@lang('app.EMAIL')</th>
                                    <th rowspan="1" colspan="1">@lang('app.ROLES')</th>
                                    <th rowspan="1" colspan="1">@lang('app.PERMISSIONS')</th>
                                    <th rowspan="1" colspan="1">@lang('app.OPTIONS')</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@section('page_title', 'Users')
@section('page_style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminPanel/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminPanel/plugins/datatabels-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('first/styles/showData.css') }}">
@endsection
@section('page_js')
    <!-- DataTables -->
    <script src="{{ asset('AdminPanel/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminPanel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminPanel/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminPanel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                @if (App::getLocale() == 'ar')
                    "language": {
                        "url": '//cdn.datatables.net/plug-ins/1.13.1/i18n/ar.json'
                    },
                @endif
            });
        });
    </script>
@endsection
