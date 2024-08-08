@extends('layouts.app')

@section('content')
    {{--  --}}
    <form method="POST" action="{{ route('confirm-purchase') }}" id="purchaseForm">
        @csrf
        <div class="row">
            <div class=" col-sm-12 col-md-6">
                <div class="untree_co-section2">
                    <div class="container d-flex justify-content-center">
                        <div class="col-md-12 mb-4 mb-md-0">
                            <h2 class="h3 mb-3 text-black">กรอกรายละเอียด</h2>
                            <div class="p-3 p-lg-5 border bg-white">

                                <input type="text" class="form-control" id="itemCart" name="itemCart[]" value=""
                                    style="display: none">


                                @if ($data->isEmpty())
                                    <!-- ฟอร์มอินพุตสำหรับกรณีไม่มี $data -->
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="fname" class="text-black">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('fname') is-invalid @enderror"
                                                id="fname" name="fname" value="{{ old('fname') }}"
                                                placeholder="First Name">
                                            @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lname" class="text-black">Last Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('lname') is-invalid @enderror"
                                                value="{{ old('lname') }}" id="lname" name="lname"
                                                placeholder="Last Name">
                                            @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="email" class="text-black">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" id="email" name="email"
                                                placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <div class="col-md-6">
                                            <label for="phone" class="text-black">Phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                value="{{ old('phone') }}" id="phone" name="phone"
                                                placeholder="Phone Number">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fax" class="text-black">Fax <span
                                                    class="text-danger"></span></label>
                                            <input type="text" class="form-control" id="fax" name="fax"
                                                value="{{ old('fax') }}" placeholder="Fax">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="company" class="text-black">Company <span
                                                    class="text-danger"></span></label>
                                            <input type="text" class="form-control" id="company" name="company"
                                                value="{{ old('company') }}" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="address_1" class="text-black">ชื่อ ที่อยู่ จัดสั่งสินค้า <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="address_1" id="address_1" cols="30" rows="5"
                                                class="form-control @error('address_1') is-invalid @enderror" placeholder="ชื่อ ที่อยู่ จัดสั่งสินค้า">{{ old('address_1') }}</textarea>
                                            @error('address_1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="address_2" class="text-black">ชื่อ ที่อยู่ เลขประจำตัวผู้เสีภาษี
                                                สำหรับเปิดใบกำกับภาษี <span class="text-danger"></span></label>
                                            <textarea name="address_2" id="address_2" cols="30" rows="5" class="form-control"
                                                placeholder="ชื่อ ที่อยู่ เลขประจำตัวผู้เสีภาษี">{{ old('address_2') }}</textarea>
                                        </div>
                                    </div>
                                    {{--     <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="state_city" class="text-black">City <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('state_city') is-invalid @enderror"
                                                value="{{ old('state_city') }}" id="state_city" name="state_city">
                                            @error('state_city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="postal_zip" class="text-black">Post Code <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('postal_zip') is-invalid @enderror"
                                                value="{{ old('postal_zip') }}" id="postal_zip" name="postal_zip">
                                            @error('postal_zip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="country" class="text-black">Country <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('country') is-invalid @enderror"
                                                value="{{ old('country') }}" id="country" name="country"
                                                placeholder="Country">
                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <div class="col-md-12">
                                            <label for="region" class="text-black">Region / State <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('region') is-invalid @enderror"
                                                value="{{ old('region') }}" id="region" name="region"
                                                placeholder="Region / State">
                                            @error('region')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> --}}
                                @else
                                    @foreach ($data as $da)
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="fname" class="text-black">First Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('fname') is-invalid @enderror"
                                                    id="fname" name="fname" value="{{ old('fname', $da->fname) }}"
                                                    placeholder="First Name">
                                                @error('fname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lname" class="text-black">Last Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('lname') is-invalid @enderror"
                                                    value="{{ old('lname', $da->lname) }}" id="lname" name="lname"
                                                    placeholder="Last Name">
                                                @error('lname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="email" class="text-black">Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email', $da->email) }}" id="email" name="email"
                                                    placeholder="Email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-5">
                                            <div class="col-md-6">
                                                <label for="phone" class="text-black">Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    value="{{ old('phone', $da->phone) }}" id="phone" name="phone"
                                                    placeholder="Phone Number">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="fax" class="text-black">Fax <span
                                                        class="text-danger"></span></label>
                                                <input type="text" class="form-control" id="fax" name="fax"
                                                    value="{{ old('fax', $da->fax) }}" placeholder="Fax">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="company" class="text-black">Company <span
                                                        class="text-danger"></span></label>
                                                <input type="text" class="form-control" id="company" name="company"
                                                    value="{{ old('company', $da->company) }}" placeholder="Company">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="address_1" class="text-black">Address 1 <span
                                                        class="text-danger">*</span></label>
                                                <textarea name="address_1" id="address_1" cols="30" rows="5"
                                                    class="form-control @error('address_1') is-invalid @enderror" placeholder="Address 1...">{{ old('address_1', $da->address_1) }}</textarea>
                                                @error('address_1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="address_2" class="text-black">Address 2 <span
                                                        class="text-danger"></span></label>
                                                <textarea name="address_2" id="address_2" cols="30" rows="5" class="form-control"
                                                    placeholder="Address 2...">{{ old('address_2', $da->address_2) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="state_city" class="text-black">City <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('state_city') is-invalid @enderror"
                                                    value="{{ old('state_city', $da->state_city) }}" id="state_city"
                                                    name="state_city">
                                                @error('state_city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="postal_zip" class="text-black">Post Code <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('postal_zip') is-invalid @enderror"
                                                    value="{{ old('postal_zip', $da->postal_zip) }}" id="postal_zip"
                                                    name="postal_zip">
                                                @error('postal_zip')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="country" class="text-black">Country <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('country') is-invalid @enderror"
                                                    value="{{ old('country', $da->country) }}" id="country"
                                                    name="country" placeholder="Country">
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-5">
                                            <div class="col-md-12">
                                                <label for="region" class="text-black">Region / State <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('region') is-invalid @enderror"
                                                    value="{{ old('region', $da->region) }}" id="region"
                                                    name="region" placeholder="Region / State">
                                                @error('region')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
                                @endif




                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 buyItemAll-cart">

                <div class="bg-white">
                    <p class="purchase-details pseudo-content">Purchase details </p>
                    <br>
                    <div id="cartItemsContainer" class="buyItemAll-cart-item "></div>
                </div>
                <p class="all-item"> Total <span class="buyItemAll-total-price"></span></p>
                <p class="all-item-free"> Delivery (free shipping) <span>0</span></p>
                <p class="all-item-q">All orders <span class="buyItemAll-total-price"></span></p>

                {{--   <div style="text-align: center; margin: 20px;">
                <button class="buyItemAll-checkout-btn">Checkout</button>
            </div> --}}
                <div class="submit-buy-now">
                    {{--   <button type="submit" class="btn btn-primary"
                        style="border-color: #ff4d4d;background-color: #ff4d4d;">
                        Buy Now
                    </button> --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary buy-1"
                            style="border-color: #ff4d4d;background-color: #ff4d4d;" id="submitButton">Submit</button>
                    </div>

                    <!-- Loading message or spinner -->
                    <div id="loadingMessage" style="display: none;" class="btn btn-processing" style="">
                        Processing...</div>
                </div>

            </div>
        </div>
    </form>

    <script>
        document.getElementById('purchaseForm').addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Disable the submit button to prevent multiple submissions
            document.getElementById('submitButton').style.display = 'none';

            // Show the loading message or spinner
            document.getElementById('loadingMessage').style.display = 'block';

            // Submit the form
            this.submit();
        });
    </script>

@endsection
