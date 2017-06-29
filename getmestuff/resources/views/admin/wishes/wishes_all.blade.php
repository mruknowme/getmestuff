@extends('admin.layouts.admin')

@section('title', 'Wishes')

@section('header')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.2/css/select.bootstrap.min.css"/>

    <style>
        label {
            text-transform: capitalize;
        }

        .panel {
            position: absolute;
            top: 20px;
            right: 5%;
            z-index: 100;
            width: 50%;
            margin: 70px auto;
            border: 1px solid #000;
            box-shadow: 20px 20px rgba(100, 100, 100, 0.3);
            max-height: 750px;
            overflow: scroll;
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

        .panel-heading span:hover {
            opacity: 1;
        }
    </style>
@endsection

@section('page_title', 'All Wishes')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title">Manage All Wishes</h3>
                <my-table url="/admin/api/wishes"
                          :columns="[
                          { data: 'item' },
                          { data: 'current_amount' },
                          { data: 'amount_needed' },
                          {
                            data: 'validated',
                            render: (data) => {
                                if (data == 0) {
                                    return '<input type=\'checkbox\' disabled/>';
                                } else {
                                    return '<input type=\'checkbox\' checked disabled/>';
                                }
                            }
                          },
                          {
                            data: 'completed',
                            render: (data) => {
                                if (data == 0) {
                                    return '<input type=\'checkbox\' disabled/>';
                                } else {
                                    return '<input type=\'checkbox\' checked disabled/>';
                                }
                            }
                          },
                          { data: 'created_at' }
                     ]">
                    <template slot="table_head">
                        <tr>
                            <th>Item</th>
                            <th>Current Amount</th>
                            <th>Amount Needed</th>
                            <th>Validated</th>
                            <th>Completed</th>
                            <th>Created At</th>
                        </tr>
                    </template>
                </my-table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap.min.js"></script>
{{--    <script type="text/javascript" src="{{ asset('admin/editor/js/dataTables.editor.min.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('admin/editor/js/editor.bootstrap.js') }}"></script>--}}
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js"></script>
@endsection