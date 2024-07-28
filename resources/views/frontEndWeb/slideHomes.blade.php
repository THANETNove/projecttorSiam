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
