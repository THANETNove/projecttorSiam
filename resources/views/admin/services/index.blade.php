@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="page-inner">



            <div class="row">

                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <div class="card-title">services</div>
                                <div class="card-tools">
                                    {{--   <a href="{{ url('service/create') }}"
                                        class="btn btn-label-success btn-round btn-sm me-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        เพิ่มสินค้า
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ลำดับ</th>
                                            <th scope="col">รายละเอียด</th>
                                            <th scope="col">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp

                                        @foreach ($data as $da)
                                            <tr>
                                                <th scope="row">
                                                    {{ $i++ }}
                                                </th>
                                                <td>{!! $da->description !!}</td>

                                                <td>

                                                    <a href="{{ url('service/edit', $da->id) }}" style="width: 80px"
                                                        class="btn btn-warning">เเก้ไข</a>

                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                            {{-- <div class="mt-5 ml-3">
                                {!! $data->links() !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
