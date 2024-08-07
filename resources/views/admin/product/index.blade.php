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
                                            <th scope="col">ราคา</th>
                                            <th scope="col">ราคา sale</th>
                                            <th scope="col">ลดราคา</th>
                                            <th scope="col">กำลังขาย</th>
                                            <th scope="col">ภาพ</th>
                                            <th scope="col">เเก้ไข</th>
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
                                                <td>{{ number_format($da->price) }}</td>
                                                <td>{{ number_format($da->price_sale) }}</td>
                                                <td>{{ $da->status_sale }}</td>
                                                <td>{{ $da->status_sell }}</td>

                                                <td>
                                                    @if ($da->image)
                                                        @foreach (json_decode($da->image) as $imageUrl)
                                                            <img src="{{ URL::asset($imageUrl) }}" alt="Product Image"
                                                                style="width: 50px; height: auto;" class="image-clickable">
                                                        @endforeach
                                                    @endif




                                                </td>
                                                <td>

                                                    <a href="{{ url('product/edit', $da->id) }}" style="width: 80px"
                                                        class="btn btn-warning">เเก้ไข</a>

                                                </td>
                                                <td>

                                                    <a href="#"
                                                        onclick="confirmDelete('{{ url('product/destroy', $da->id) }}')"
                                                        class="btn btn-danger">ลบ</a>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                            <div class="mt-5 ml-3">
                                {!! $data->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
