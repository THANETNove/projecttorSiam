@extends('layouts.app')

@section('content')
    @php
        $imgSlide = DB::table('slide_homes')->get();
    @endphp
    <div class="hero2">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav" aria-label="Carousel Navigation" tabindex="0">
                        <span class="prev" data-controls="prev" aria-controls="tns1" tabindex="-1"><span
                                class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next" aria-controls="tns1" tabindex="-1"><span
                                class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="tns-outer" id="tns1-ow">

                        <div id="tns1-mw" class="tns-ovh">
                            <div class="tns-inner" id="tns1-iw">
                                <div class="testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                    id="tns1" style="transform: translate3d(-80%, 0px, 0px);">

                                    @foreach ($imgSlide as $slide)
                                        <div class="item tns-item" aria-hidden="true" tabindex="-1">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12 mx-auto">
                                                    <img src="{{ URL::asset($slide->slide_image) }}" class="bannerImage"
                                                        alt="Slide Image">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


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
