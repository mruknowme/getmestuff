<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/plugins/images/favicon.png') }}">
<!-- Bootstrap Core CSS -->
<link href="{{ asset('admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
<!-- Menu CSS -->
<link href="{{ asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
<!-- color CSS -->
<link href="{{ asset('admin/css/colors/default.css') }}" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--DataTables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.15/cr-1.3.3/se-1.2.2/datatables.min.css"/>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
</script>

<style>
    .alert-error-custom {
        position: fixed;
        top: 10px;
        left: 10px;
        z-index: 10;
    }

    label {
        text-transform: capitalize;
    }

    .panel {
        position: absolute;
        top: -70px;
        right: 5%;
        z-index: 100;
        width: 50%;
        margin: 70px auto;
        border: 1px solid #000;
        box-shadow: 20px 20px rgba(100, 100, 100, 0.3);
    }

    .panel-heading {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .panel-heading span {
        font-size: 2rem;
        opacity: 0.5;
        cursor: pointer;
    }

    .panel-body {
        max-height: 300px;
        overflow: scroll;
    }

    .panel-heading span:hover {
        opacity: 1;
    }

    input[type=checkbox].gms-checkbox {
        display: block;
        margin: 0 auto;
    }

    .flex {
        display: flex;
    }

    .start {
        justify-content: flex-start;
        align-items: flex-start;
    }

    .wrap {
        flex-wrap: wrap;
    }

    .search-list .label {
        font-size: 1.5rem;
        margin: 0 5px 5px 0;
    }

    .delete {
        cursor: pointer;
        opacity: 0.5;
        font-size: 1.2rem;
        margin-left: 5px;
    }

    .delete:hover {
        opacity: 1;
    }

    .between {
        align-items: center;
        justify-content: space-between;
    }

    .a-end {
        align-items: flex-end;
    }
</style>