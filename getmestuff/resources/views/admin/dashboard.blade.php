@extends('admin.layouts.admin')

@section('header')
    <!-- vector map CSS -->
    <link href="{{ asset('admin/vector/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('admin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />--}}
{{--    <link href="{{ asset('admin/plugins/bower_components/css-chart/css-chart.css') }}" rel="stylesheet">--}}
@endsection

@section('title', 'Dashboard')

@section('page_title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="white-box">
                <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% &gt; last month</small> Wishes</h3>
                <div class="stats-row">
                    <div class="stat-item">
                        <h6>Total</h6> <b>1 357</b>
                    </div>
                    <div class="stat-item">
                        <h6>Completed</h6> <b>854</b>
                    </div>
                    <div class="stat-item">
                        <h6>In progress</h6> <b>503</b>
                    </div>
                </div>
                <div id="sparkline8"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box">
                <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% &gt; last month</small>Cashflow</h3>
                <div class="stats-row">
                    <div class="stat-item">
                        <h6>Volume</h6> <b>X</b>
                    </div>
                    <div class="stat-item">
                        <h6>Inflows</h6> <b>X</b>
                    </div>
                    <div class="stat-item">
                        <h6>Payables</h6> <b>X</b>
                    </div>
                </div>
                <div id="sparkline9"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box">
                <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% &gt; last month</small>Profit</h3>
                <div class="stats-row">
                    <div class="stat-item">
                        <h6>Total</h6> <b>1 254 632.44</b></div>
                    <div class="stat-item">
                        <h6>This month</h6> <b>X</b></div>
                    <div class="stat-item">
                        <h6>Today</h6> <b>X</b></div>
                </div>
                <div id="sparkline10"></div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Site Visits</h3>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <my-map></my-map>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($visits as $group => $visit)
        <div class="col-md-6">
            <div class="white-box countries-list">
                <h3 class="box-title">{{ $group }}</h3>
                <div class="row">
                    <ul class="country-state slimscrollcountry col-md-12">
                        @foreach($visit as $country => $data)
                            <li>
                                <h2>{{ $data['count'] }}</h2> <small>From {{ $country }}</small>
                                <div class="pull-right">{{ calculatePercent($data['count'], $data['total']) }}%</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-{{ $colors[rand(0, 5)] }}"
                                         role="progressbar"
                                         aria-valuenow="{{ calculatePercent($data['count'], $data['total']) }}"
                                         aria-valuemin="0"
                                         aria-valuemax="100"
                                         style="width:{{ calculatePercent($data['count'], $data['total']) }}%;">
                                        <span class="sr-only">{{ calculatePercent($data['count'], $data['total']) }}% Complete</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <!-- Flot Charts JavaScript -->
    <script src="{{ asset('admin/plugins/bower_components/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <!-- google maps api -->
    {{--<script src="{{ asset('admin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>--}}
{{--    <script src="{{ asset('admin/plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>--}}
    <script src="{{ asset('admin/vector/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('admin/vector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Sparkline charts -->
    <script src="{{ asset('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- EASY PIE CHART JS -->
    <script src="{{ asset('admin/plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/js/dashboard2.js') }}"></script>
    <script>
//        $(function(){
//            $('#visits-map').vectorMap({
//                map: 'world_mill_en',
//                backgroundColor: '#FFFFFF',
//                regionStyle: {
//                    initial: {
//                        fill: '#FFCA4A',
//                        'fill-opacity': 1,
//                        stroke: 'none'
//                    },
//                    hover: {
//                        "fill-opacity": 0.8,
//                        cursor: 'pointer'
//                    },
//                },
//                series: {
//                    regions: [{
//                        values: {
//                            AF:123
//                        },
//                        scale: ['#C8EEFF', '#0071A4'],
//                        normalizeFunction: 'polynomial'
//                    }]
//                },
//                onRegionTipShow: function(e, el, code){
//                    el.html(el.html()+' (GDP - '+gdpData[code]+')');
//                }
//            });
//        });
    </script>
@endsection