@extends('admin.layouts.admin')

@section('header')
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css') }}" />
@endsection

@section('page_title', 'All Achievements')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title">Manage All Achievements</h3>
                <div id="basicgrid"></div>
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