@extends('admin.layouts.admin')

@section('title', 'Payment Settings')

@section('header')
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/bower_components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page_title', 'Payment Settings')

@section('content')
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h3>Emails</h3>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-info-circle"></i></span>
                    <input type="text" class="form-control" placeholder="info@getmestuff.domain" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" placeholder="business@getmestuff.domain" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-at"></i></span>
                    <input type="text" class="form-control" placeholder="support@getmestuff.domain" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
                    <input type="text" class="form-control" placeholder="noreply@getmestuff.domain" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xs-12">
            <h3>Social Media</h3>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-facebook"></i></span>
                    <input type="text" class="form-control" placeholder="getmestuff" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-vk"></i></span>
                    <input type="text" class="form-control" placeholder="getmestuff" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-twitter"></i></span>
                    <input type="text" class="form-control" placeholder="getmestuff" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-instagram"></i></span>
                    <input type="text" class="form-control" placeholder="getmestuff" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xs-12">
            <h3>Other</h3>
        </div>
        <div class="col-md-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Globally Banned Words</h3>
                <select multiple data-role="tagsinput">
                    <option value="Word1">Word1</option>
                    <option selected value="Word2">Word2</option>
                    <option value="Word3">Word3</option>
                    <option value="Word4">Word4</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 col-xs-12">
            <h3>Site status</h3>
        </div>
        <div class="col-md-12 col-xs-12">
            <div class="white-box">
                <div class="form-group">
                    <label class="control-label">Turn on/off website</label>
                    <input type="checkbox" checked class="js-switch" data-color="#99d683" data-size="small" />
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-font"></i></span>
                        <select class="form-control select2">
                            <option value="updating">Updating</option>
                            <option value="fix">Fixing bugs</option>
                            <option value="soon">Back soon</option>
                        </select>
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