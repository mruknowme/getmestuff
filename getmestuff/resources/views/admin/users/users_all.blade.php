@extends('admin.layouts.admin')

@section('title', 'Users')

@section('header')
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css') }}" />
@endsection

@if (!strpos(request()->path(), 'active'))
    @section('page_title', 'All Users')
@else
    @section('page_title', 'Most Active Users')
@endif

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                @if (!strpos(request()->path(), 'active'))
                    <h3 class="box-title">Manage All Users</h3>
                @else
                    <h3 class="box-title">Manage Most Active Users</h3>
                @endif
                <div id="exampleCustomGridField"></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Editable -->
    <script src="{{ asset('admin/plugins/bower_components/jsgrid/db.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid.min.js') }}"></script>
    <script src="{{ asset('admin/js/jsgrid-init.js') }}"></script>
@endsection