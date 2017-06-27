@extends('admin.layouts.admin')

@section('title', 'Wishes')

@section('header')
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css') }}" />
@endsection

@if (!strpos(request()->path(), 'reported'))
    @section('page_title', 'All Wishes')
@else
    @section('page_title', 'Reported Wishes')
@endif

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                @if (!strpos(request()->path(), 'reported'))
                    <h3 class="box-title">Manage All Wishes</h3>
                @else
                    <h3 class="box-title">Manage Reported Wishes</h3>
                @endif
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