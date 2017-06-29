@extends('admin.layouts.admin')

@section('header')
    <!-- vector map CSS -->
    <link href="{{ asset('admin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/css-chart/css-chart.css') }}" rel="stylesheet">
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
                    <div class="col-md-12 col-lg-8">
                        <div id="world-map-marker" style="height: 490px;"></div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <ul class="country-state slimscrollcountry">
                            <li>
                                <h2>6350</h2> <small>From India</small>
                                <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2>3250</h2> <small>From UAE</small>
                                <div class="pull-right">98% <i class="fa fa-level-up text-success"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:98%;"> <span class="sr-only">98% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2>1250</h2> <small>From Australia</small>
                                <div class="pull-right">75% <i class="fa fa-level-down text-danger"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2>1350</h2> <small>From USA</small>
                                <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2>350</h2> <small>From UK</small>
                                <div class="pull-right">68% <i class="fa fa-level-down text-danger"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:68%;"> <span class="sr-only">48% Complete</span></div>
                                </div>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 m-t-20 text-center">
                                <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span>
                                    <br/>
                                    <h4>New Users</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 m-t-20 text-center">
                                <div class="chart easy-pie-chart-1" data-percent="25"> <span class="percent">25</span>
                                    <br/>
                                    <h4>Returning Users</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--row -->
    <div class="row">
        <div class="col-md-12 col-lg-6 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Recent Wishes</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Wish</th>
                            <th>Progress</th>
                            <th>Date</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Lunar probe project</td>
                            <td>
                                <div class="progress progress-xs margin-vertical-10 ">
                                    <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                </div>
                                <h6 class="text-center">35/100</h6>
                            </td>
                            <td>May 15, 2015</td>
                            <td class="text-nowrap">
                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dream successful plan</td>
                            <td>
                                <div class="progress progress-xs margin-vertical-10 ">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </td>
                            <td>July 1, 2015</td>
                            <td class="text-nowrap">
                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Office automatization</td>
                            <td>
                                <div class="progress progress-xs margin-vertical-10 ">
                                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                                </div>
                            </td>
                            <td>Apr 12, 2015</td>
                            <td class="text-nowrap">
                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>The sun climbing plan</td>
                            <td>
                                <div class="progress progress-xs margin-vertical-10 ">
                                    <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                </div>
                            </td>
                            <td>Aug 9, 2015</td>
                            <td class="text-nowrap">
                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Open strategy</td>
                            <td>
                                <div class="progress progress-xs margin-vertical-10 ">
                                    <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                                </div>
                            </td>
                            <td>Apr 2, 2015</td>
                            <td class="text-nowrap">
                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tantas earum numeris</td>
                            <td>
                                <div class="progress progress-xs margin-vertical-10 ">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </td>
                            <td>July 11, 2015</td>
                            <td class="text-nowrap">
                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Feeds</h3>
                <ul class="feeds">
                    <li>
                        <div class="bg-info"><i class="fa fa-bell-o text-white"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                    <li>
                        <div class="bg-success"><i class="ti-server text-white"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                    <li>
                        <div class="bg-warning"><i class="ti-shopping-cart text-white"></i></div> New order received.<span class="text-muted">31 May</span></li>
                    <li>
                        <div class="bg-danger"><i class="ti-user text-white"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                    <li>
                        <div class="bg-inverse"><i class="fa fa-bell-o text-white"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                    <li>
                        <div class="bg-purple"><i class="ti-settings text-white"></i></div> You have 4 pending tasks. <span class="text-muted">27 May</span></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Flot Charts JavaScript -->
    <script src="{{ asset('admin/plugins/bower_components/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <!-- google maps api -->
    <script src="{{ asset('admin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Sparkline charts -->
    <script src="{{ asset('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- EASY PIE CHART JS -->
    <script src="{{ asset('admin/plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/js/dashboard2.js') }}"></script>
@endsection