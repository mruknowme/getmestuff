@extends('admin.layouts.admin')

@section('title', 'Tickets')

@section('header')
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css') }}" />
@endsection

@if (!strpos(request()->path(), 'open'))
    @section('page_title', 'All Tickets')
@else
    @section('page_title', 'Open Tickets')
@endif

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                @if (!strpos(request()->path(), 'open'))
                    <h3 class="box-title">Manage All Tickets</h3>
                @else
                    <h3 class="box-title">Manage Open Tickets</h3>
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