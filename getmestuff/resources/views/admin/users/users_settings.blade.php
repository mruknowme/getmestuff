@extends('admin.layouts.admin')

@section('title', 'Users Settings')

@section('header')
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page_title', 'Users Settings')

@section('content')
    <settings :data="{{ $settings }}"
              :search="['banned_emails','weak_passwords']"
              post="/admin/api/users/settings"
              :group="[
              {'items':1, 'title':'Banned User Emails'},
              {'items':2, 'title':'Passwords'},
              {'items':1, 'title':'Birthday Gifts'}
              ]">
    </settings>
    {{--<div class="row">--}}
        {{--<div class="col-md-12 col-xs-12">--}}
            {{--<h3>Usernames</h3>--}}
        {{--</div>--}}
        {{--<div class="col-md-6 col-xs-6">--}}
            {{--<div class="white-box">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label">Min length</label>--}}
                    {{--<input id="tch3_22" type="text" value="3" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-6 col-xs-6">--}}
            {{--<div class="white-box">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label">Max length</label>--}}
                    {{--<input id="tch3_22" type="text" value="15" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-12 col-xs-12">--}}
            {{--<div class="white-box">--}}
                {{--<h3 class="box-title m-b-0">Banned usernames</h3>--}}
                {{--<select multiple data-role="tagsinput">--}}
                    {{--<option value="Username1">Username1</option>--}}
                    {{--<option value="Username2">Username2</option>--}}
                    {{--<option value="Username3">Username3</option>--}}
                    {{--<option value="Username4">Username4</option>--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-12 col-xs-12">--}}
            {{--<h3>Passwords</h3>--}}
        {{--</div>--}}
        {{--<div class="col-md-6 col-xs-6">--}}
            {{--<div class="white-box">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label">Min length</label>--}}
                    {{--<input id="tch3_22" type="text" value="6" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-6 col-xs-6">--}}
            {{--<div class="white-box">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label">Max length</label>--}}
                    {{--<input id="tch3_22" type="text" value="32" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-12 col-xs-12">--}}
            {{--<div class="white-box">--}}
                {{--<h3 class="box-title m-b-0">Weak passwords</h3>--}}
                {{--<select multiple data-role="tagsinput">--}}
                    {{--<option value="123456">123456</option>--}}
                    {{--<option value="654321">654321</option>--}}
                    {{--<option value="qwerty">qwerty</option>--}}
                    {{--<option value="ytrewq">ytrewq</option>--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-6 col-xs-12">--}}
            {{--<div class="white-box">--}}
                {{--<h3 class="box-title m-b-0">Banned words</h3>--}}
                {{--<select multiple data-role="tagsinput">--}}
                    {{--<option value="Word">Word</option>--}}
                    {{--<option value="Word2">Word2</option>--}}
                    {{--<option value="Word3">Word3</option>--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-6 col-xs-12">--}}
            {{--<div class="white-box">--}}
                {{--<h3 class="box-title m-b-0">Word replacements</h3>--}}
                {{--<select multiple data-role="tagsinput">--}}
                    {{--<option value="iPhone">iPhone</option>--}}
                    {{--<option value="iPad">iPad</option>--}}
                    {{--<option value="iPod">iPod</option>--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-12 col-xs-12">--}}
            {{--<h3>Birthday Gifts</h3>--}}
        {{--</div>--}}
        {{--<div class="col-md-12 col-xs-12">--}}
            {{--<div class="white-box">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label">Number of points to be added</label>--}}
                    {{--<input type="checkbox" checked class="js-switch" data-color="#99d683" data-size="small" />--}}
                    {{--<input id="tch3_22" type="text" value="100" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection

@section('scripts')
    <script src="{{ asset('admin/plugins/bower_components/switchery/dist/switchery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/custom-select/custom-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            // Switchery
//            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
//            $('.js-switch').each(function () {
//                new Switchery($(this)[0], $(this).data());
//            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
                , verticalupclass: 'ti-plus'
                , verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0
                , max: 100
                , step: 0.1
                , decimals: 2
                , boostat: 5
                , maxboostedstep: 10
                , postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000
                , max: 1000000000
                , stepinterval: 50
                , maxboostedstep: 10000000
                , prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre"
                , postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42
                    , text: 'test 42'
                    , index: 0
                });
                return false;
            });
        });
    </script>
@endsection