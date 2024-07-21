@extends('layouts.app')

@section('content')
    <div class="row">
        <div class=" col-sm-12 col-md-6">
            <div class="untree_co-section2">
                <div class="container d-flex justify-content-center">
                    <div class="col-md-12 mb-4 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Register Details</h2>
                        <div class="p-3 p-lg-5 border bg-white">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="fname" class="text-black">First Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control  @error('fname') is-invalid @enderror"
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
                                            value="{{ old('email') }}" id="email" name="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="password" class="text-black">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" id="password" name="password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="new-password" class="text-black">Confirm Password <span
                                                class="text-danger">*</span></label>

                                        <input id="password-confirm" type="password" class="form-control"
                                            value="{{ old('password_confirmation') }}" name="password_confirmation"
                                            autocomplete="new-password">
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
                                            value="{{ old('fax') }}" placeholder="Company">
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
                                        <label for="company" class="text-black">Address 1 <span
                                                class="text-danger">*</span></label>
                                        <textarea name="address_1" id="address_1" cols="30" rows="5"
                                            class="form-control @error('address_1') is-invalid @enderror" placeholder="Address 1...">{{ old('address_1') }}</textarea>
                                        @error('address_1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="company" class="text-black">Address 2 <span
                                                class="text-danger"></span></label>
                                        <textarea name="address_2" id="address_2" cols="30" rows="5" class="form-control"
                                            placeholder="Address 2...">{{ old('address_2') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
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
                                        <label for="c_postal_zip" class="text-black">Post Code <span
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
                                        <label for="Country" class="text-black">Country <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('country') is-invalid @enderror"
                                            value="{{ old('country') }}" id="country" name="country"
                                            placeholder="Thailand">
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
                                        <input type="text" class="form-control @error('region') is-invalid @enderror"
                                            value="{{ old('region') }}" id="region" name="region"
                                            placeholder="Region / State">
                                        @error('region')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">

            <div class="p-3 p-lg-5 border bg-white buyItemAll-cart-item">

                <div>
                    <img src="http://localhost:8000/assets/images/product/1721055169_s1.jpg" alt="Acer H6805BDa"
                        class="buyItemAll-item-image">
                    <span class="buyItemAll-item-name">Acer H6805BDa</span>
                    <span class="buyItemAll-item-brand">ACER</span>
                    <span class="buyItemAll-item-ratio">16:9</span>
                </div>
                <div class="">
                    <span class="buyItemAll-item-price">$35,900</span>

                    <span class="buyItemAll-item-quantity"> x 1</span>
                    <button class="buyItemAll-increment-btn" data-index="0">+</button>
                    <span class="buyItemAll-item-total">= $35,900</span>
                    <button class="buyItemAll-remove-btn" data-index="0">Remove</button>
                </div>


            </div>
            {{--        <div class="buyItemAll-cart-item">
                    <div class="buyItemAll-item-details">
                        <div>
                            <img src="http://localhost:8000/assets/images/product/1721056087_Portable screen-502x502.jpg"
                                alt="Gygar Pop Up 60" "="" class="buyItemAll-item-image">
                        <span class="buyItemAll-item-name">Gygar Pop Up 60" </span>
                            <span class="buyItemAll-item-brand">GYGAR</span>
                            <span class="buyItemAll-item-ratio"></span>
                        </div>
                        <div class="">
                            <span class="buyItemAll-item-price">$5,300</span>

                            <span class="buyItemAll-item-quantity"> x 1</span>
                            <button class="buyItemAll-increment-btn" data-index="1">+</button>
                            <span class="buyItemAll-item-total">= $5,300</span>
                            <button class="buyItemAll-remove-btn" data-index="1">Remove</button>
                        </div>
                    </div>



                </div>
                <div class="buyItemAll-cart-item">
                    <div class="buyItemAll-item-details">
                        <div>
                            <img src="http://localhost:8000/assets/images/product/1721055868_Led touch pc-75b-502x502.jpg"
                                alt="Razr LED Touch P-75B" class="buyItemAll-item-image">
                            <span class="buyItemAll-item-name">Razr LED Touch P-75B</span>
                            <span class="buyItemAll-item-brand">RAZR</span>
                            <span class="buyItemAll-item-ratio"></span>
                        </div>
                        <div class="">
                            <span class="buyItemAll-item-price">$169,000</span>
                            <button class="buyItemAll-decrement-btn" data-index="2">-</button>
                            <span class="buyItemAll-item-quantity"> x 2</span>
                            <button class="buyItemAll-increment-btn" data-index="2">+</button>
                            <span class="buyItemAll-item-total">= $338,000</span>
                            <button class="buyItemAll-remove-btn" data-index="2">Remove</button>
                        </div>
                    </div>



                </div>
                <div class="buyItemAll-cart-item">
                    <div class="buyItemAll-item-details">
                        <div>
                            <img src="http://localhost:8000/assets/images/product/1721055527_IMG_1206-502x502.jpg"
                                alt="PCER HDMI to VGA 1 m" class="buyItemAll-item-image">
                            <span class="buyItemAll-item-name">PCER HDMI to VGA 1 m</span>
                            <span class="buyItemAll-item-brand">PCER</span>
                            <span class="buyItemAll-item-ratio"></span>
                        </div>
                        <div class="">
                            <span class="buyItemAll-item-price">$830</span>
                            <button class="buyItemAll-decrement-btn" data-index="3">-</button>
                            <span class="buyItemAll-item-quantity"> x 8</span>
                            <button class="buyItemAll-increment-btn" data-index="3">+</button>
                            <span class="buyItemAll-item-total">= $6,640</span>
                            <button class="buyItemAll-remove-btn" data-index="3">Remove</button>
                        </div>
                    </div>



                </div>
                <div class="buyItemAll-cart-item">
                    <div class="buyItemAll-item-details">
                        <div>
                            <img src="http://localhost:8000/assets/images/product/1721054949_a1.jpg"
                                alt="Cinema Fixed 100" 16:9"="" class="buyItemAll-item-image">
                            <span class="buyItemAll-item-name">Cinema Fixed 100" 16:9</span>
                            <span class="buyItemAll-item-brand">CINEMA</span>
                            <span class="buyItemAll-item-ratio"></span>
                        </div>
                        <div class="">
                            <span class="buyItemAll-item-price">$20,000</span>
                            <button class="buyItemAll-decrement-btn" data-index="4">-</button>
                            <span class="buyItemAll-item-quantity"> x 8</span>
                            <button class="buyItemAll-increment-btn" data-index="4">+</button>
                            <span class="buyItemAll-item-total">= $160,000</span>
                            <button class="buyItemAll-remove-btn" data-index="4">Remove</button>
                        </div>
                    </div>



                </div> --}}

            <span>Total:</span>
            <span class="buyItemAll-total-price">$545,840</span>
        </div>
    </div>

    <div style="text-align: center; margin: 20px;">
        <button class="buyItemAll-checkout-btn">Checkout</button>
    </div>
@endsection
