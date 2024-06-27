@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="page-inner">



            <div class="row">

                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <div class="card-title">บัญชีธนาคาร</div>
                                <div class="card-tools">
                                    <a href="{{ url('components/bank/create') }}"
                                        class="btn btn-label-success btn-round btn-sm me-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        เพิ่มบัญชี
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Payment Number</th>
                                            <th scope="col" class="text-end">Date & Time</th>
                                            <th scope="col" class="text-end">Amount</th>
                                            <th scope="col" class="text-end">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                Payment from #10231
                                            </th>
                                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                            <td class="text-end">$250.00</td>
                                            <td class="text-end">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                Payment from #10231
                                            </th>
                                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                            <td class="text-end">$250.00</td>
                                            <td class="text-end">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                Payment from #10231
                                            </th>
                                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                            <td class="text-end">$250.00</td>
                                            <td class="text-end">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                Payment from #10231
                                            </th>
                                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                            <td class="text-end">$250.00</td>
                                            <td class="text-end">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                Payment from #10231
                                            </th>
                                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                            <td class="text-end">$250.00</td>
                                            <td class="text-end">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                Payment from #10231
                                            </th>
                                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                            <td class="text-end">$250.00</td>
                                            <td class="text-end">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                Payment from #10231
                                            </th>
                                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                            <td class="text-end">$250.00</td>
                                            <td class="text-end">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
