@extends('layouts.app')

@section('content')
    @include('frontEndWeb.slideHomes')


    <div class="why-choose-section">
        <div class="container">


            <div class="row my-5">
                <div class="col-6 col-md-6 col-lg-6 mb-6">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ URL::asset('/assets/images/truck.svg') }}" alt="Image" class="imf-fluid">
                        </div>
                        <h3>วิธีการจัดส่งสินค้า</h3>
                        {!! $dataServ[0]->description !!}
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-6 mb-6">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ URL::asset('/assets/images/bag.svg') }}" alt="Image" class="imf-fluid">
                        </div>
                        <h3>วิธีการชำระเงิน</h3>
                        <table class="table">
                            <tbody>
                                @foreach ($data as $da)
                                    <tr>
                                        <th>
                                            {{--     <img src="{{ URL::asset('/assets/images/bag.svg') }}" alt="Image"
                                                class="imf-fluid"> --}}
                                            <img src="{{ URL::asset($da->bank_image) }}" alt="Bank Image"
                                                style="width: 50px; height: auto;" class="imf-fluid">
                                        </th>
                                        <td>{{ $da->bank_name }}</td>
                                        <td>{{ $da->account_name }}</td>
                                        <td>{{ $da->account_number }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>

        </div>
    </div>
@endsection
