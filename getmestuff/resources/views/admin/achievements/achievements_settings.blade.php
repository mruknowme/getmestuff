@extends('admin.layouts.admin')

@section('header')
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page_title', 'Achievement Settings')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="m-b-0 box-title">Manage achievements</h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 m-t-30">
                        <h5 class="box-title">Disabled</h5>
                        <select id='pre-selected-options' multiple='multiple'>
                            <option value='elem_1'>elem 1</option>
                            <option value='elem_2'>elem 2</option>
                            <option value='elem_3'>elem 3</option>
                            <option value='elem_4'>elem 4</option>
                            <option value='elem_5'>elem 5</option>
                            <option value="elem_6">elem 6</option>
                            <option value="elem_7">elem 7</option>
                            <option value="elem_8">elem 8</option>
                            <option value="elem_9">elem 9</option>
                            <option value="elem_10">elem 10</option>
                            <option value="elem_11">elem 11</option>
                            <option value="elem_12">elem 12</option>
                            <option value="elem_13">elem 13</option>
                            <option value="elem_14">elem 14</option>
                            <option value="elem_15">elem 15</option>
                            <option value="elem_16">elem 16</option>
                            <option value="elem_17">elem 17</option>
                            <option value="elem_18">elem 18</option>
                            <option value="elem_19">elem 19</option>
                            <option value="elem_20">elem 20</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-sm-6 m-t-30">
                        <h5 class="box-title">Non-refreshable</h5>
                        <select multiple id="optgroup" name="optgroup[]">
                                <option value="1">Yoda</option>
                                <option value="2">Obiwan</option>
                                <option value="3">Palpatine</option>
                                <option value="4">Darth Vader</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-sm-6 m-t-30">
                        <h5 class="box-title">Refreshable monthly</h5>
                        <select id='pre-selected-options-2' multiple='multiple'>
                            <option value='elem_1'>elem 1</option>
                            <option value='elem_2'>elem 2</option>
                            <option value='elem_3'>elem 3</option>
                            <option value='elem_4'>elem 4</option>
                            <option value='elem_5'>elem 5</option>
                            <option value="elem_6">elem 6</option>
                            <option value="elem_7">elem 7</option>
                            <option value="elem_8">elem 8</option>
                            <option value="elem_9">elem 9</option>
                            <option value="elem_10">elem 10</option>
                            <option value="elem_11">elem 11</option>
                            <option value="elem_12">elem 12</option>
                            <option value="elem_13">elem 13</option>
                            <option value="elem_14">elem 14</option>
                            <option value="elem_15">elem 15</option>
                            <option value="elem_16">elem 16</option>
                            <option value="elem_17">elem 17</option>
                            <option value="elem_18">elem 18</option>
                            <option value="elem_19">elem 19</option>
                            <option value="elem_20">elem 20</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-sm-6 m-t-30">
                        <h5 class="box-title">Refreshable instantly</h5>
                        <select multiple id="public-methods" name="public-methods[]">
                            <option value="elem_1">elem 1</option>
                            <option value="elem_2">elem 2</option>
                            <option value="elem_3">elem 3</option>
                            <option value="elem_4">elem 4</option>
                            <option value="elem_5">elem 5</option>
                            <option value="elem_6">elem 6</option>
                            <option value="elem_7">elem 7</option>
                            <option value="elem_8">elem 8</option>
                            <option value="elem_9">elem 9</option>
                            <option value="elem_10">elem 10</option>                                
                        </select>
                        <div class="button-box m-t-20"> <a id="select-all" class="btn btn-danger btn-outline" href="#">select all</a> <a id="deselect-all" class="btn btn-info btn-outline" href="#">deselect all</a> <a id="add-option" class="btn btn-success btn-outline" href="#">Add option</a> <a id="refresh" class="btn btn-warning btn-outline" href="#">refresh</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xs-12">
            <div class="white-box">
                <div class="form-group">
                    <label class="control-label">Disable achievements</label>
                    <input type="checkbox" checked class="js-switch" data-color="#99d683" data-size="small" />
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-font"></i></span>
                        <input type="text" class="form-control" placeholder="Reason" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
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
            $('#pre-selected-options-2').multiSelect();
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