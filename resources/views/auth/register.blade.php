@extends('layouts.app')

@section('content')
    {{-- <div class="untree_co-section2">
        <div class="container d-flex justify-content-center">
            <div class="col-md-8 mb-4 mb-md-0">
                <h2 class="h3 mb-3 text-black">Register Details</h2>
                <div class="p-3 p-lg-5 border bg-white">
                    <div class="form-group">
                        <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                        <select id="c_country" class="form-control">
                            <option value="1">Select a country</option>
                            <option value="2">bangladesh</option>
                            <option value="3">Algeria</option>
                            <option value="4">Afghanistan</option>
                            <option value="5">Ghana</option>
                            <option value="6">Albania</option>
                            <option value="7">Bahrain</option>
                            <option value="8">Colombia</option>
                            <option value="9">Dominican Republic</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_fname" name="c_fname">
                        </div>
                        <div class="col-md-6">
                            <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_lname" name="c_lname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_companyname" class="text-black">Company Name </label>
                            <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_address" name="c_address"
                                placeholder="Street address">
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_state_country" class="text-black">State / Country <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                        </div>
                        <div class="col-md-6">
                            <label for="c_postal_zip" class="text-black">Posta / Zip <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                        </div>
                    </div>

                    <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="c_email_address" class="text-black">Email Address <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                        </div>
                        <div class="col-md-6">
                            <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_phone" name="c_phone"
                                placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="c_create_account" class="text-black" data-bs-toggle="collapse" href="#create_an_account"
                            role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox"
                                value="1" id="c_create_account"> Create an account?</label>
                        <div class="collapse" id="create_an_account">
                            <div class="py-2 mb-4">
                                <p class="mb-3">Create an account by entering the information below. If you are a
                                    returning customer please login at the top of the page.</p>
                                <div class="form-group">
                                    <label for="c_account_password" class="text-black">Account Password</label>
                                    <input type="email" class="form-control" id="c_account_password"
                                        name="c_account_password" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse"
                            href="#ship_different_address" role="button" aria-expanded="false"
                            aria-controls="ship_different_address"><input type="checkbox" value="1"
                                id="c_ship_different_address"> Ship To A Different Address?</label>
                        <div class="collapse" id="ship_different_address">
                            <div class="py-2">

                                <div class="form-group">
                                    <label for="c_diff_country" class="text-black">Country <span
                                            class="text-danger">*</span></label>
                                    <select id="c_diff_country" class="form-control">
                                        <option value="1">Select a country</option>
                                        <option value="2">bangladesh</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">Afghanistan</option>
                                        <option value="5">Ghana</option>
                                        <option value="6">Albania</option>
                                        <option value="7">Bahrain</option>
                                        <option value="8">Colombia</option>
                                        <option value="9">Dominican Republic</option>
                                    </select>
                                </div>


                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_diff_fname" class="text-black">First Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_fname"
                                            name="c_diff_fname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_diff_lname" class="text-black">Last Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_lname"
                                            name="c_diff_lname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_diff_companyname" class="text-black">Company Name </label>
                                        <input type="text" class="form-control" id="c_diff_companyname"
                                            name="c_diff_companyname">
                                    </div>
                                </div>

                                <div class="form-group row  mb-3">
                                    <div class="col-md-12">
                                        <label for="c_diff_address" class="text-black">Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_address"
                                            name="c_diff_address" placeholder="Street address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control"
                                        placeholder="Apartment, suite, unit etc. (optional)">
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_diff_state_country" class="text-black">State / Country <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_state_country"
                                            name="c_diff_state_country">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_postal_zip"
                                            name="c_diff_postal_zip">
                                    </div>
                                </div>

                                <div class="form-group row mb-5">
                                    <div class="col-md-6">
                                        <label for="c_diff_email_address" class="text-black">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_email_address"
                                            name="c_diff_email_address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_diff_phone" class="text-black">Phone <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone"
                                            placeholder="Phone Number">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="c_order_notes" class="text-black">Order Notes</label>
                        <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                            placeholder="Write your notes here..."></textarea>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
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
@endsection
