@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="page-inner">



            <div class="row">

                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <div class="card-title">สินค้าทั้งหมด</div>
                                <div class="card-tools">
                                    <a href="{{ url('product/product_all/create') }}"
                                        class="btn btn-label-success btn-round btn-sm me-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        เพิ่มสินค้า
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
                                            <th scope="col">ลำดับ</th>
                                            <th scope="col">ชื่อ</th>
                                            <th scope="col">ชื่อบัญชี</th>
                                            <th scope="col">เลขที่บัญชี</th>
                                            <th scope="col">ภาพ</th>
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
                                                <td>{{ $da->product_name }}</td>
                                                <td>
                                                    {{--  @foreach (json_decode($da->image) as $imageUrl)
                                                        <img src="{{ URL::asset($imageUrl) }}" alt="Bank Image"
                                                            style="width: 50px; height: auto;" class="image-clickable">
                                                    @endforeach --}}
                                                    <img src="{{ URL::asset('assets/images/product1720952433_i-1.jpg') }}"
                                                        alt="Image 1" style="width: 50px; height: auto;"
                                                        class="image-clickable">
                                                    <img src="{{ URL::asset('assets/images/product1720952433_i-2.jpg') }}"
                                                        alt="Image 2" style="width: 50px; height: auto;"
                                                        class="image-clickable">
                                                    <img src="{{ URL::asset('assets/images/product1720952433_i-3.jpg') }}"
                                                        alt="Image 3" style="width: 50px; height: auto;"
                                                        class="image-clickable">
                                                    <img src="{{ URL::asset('assets/images/product1720952433_i-4.jpg') }}"
                                                        alt="Image 4" style="width: 50px; height: auto;"
                                                        class="image-clickable">



                                                </td>
                                                {{--      <td>{{ $da->account_name }}</td>
                                                <td>{{ $da->account_number }}</td>
                                                <td>
                                                    <img src="{{ URL::asset($da->bank_image) }}" alt="Bank Image"
                                                        style="width: 50px; height: auto;" class="image-clickable">
                                                </td>
                                                <td>

                                                    <a href="{{ url('components/bank/destroy', $da->id) }}"
                                                        class="btn btn-danger">ลบ</a>

                                                </td> --}}
                                            </tr>
                                        @endforeach

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
