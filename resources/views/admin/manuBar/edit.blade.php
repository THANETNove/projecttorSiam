@extends('layouts.appAdmin')

@section('content')
    <div class="page-inner mt-64">
        <div class="card">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="card-header">
                        <div class="card-title">Manu Bar</div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update_manuBar', $manu->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="use">หัวข้อ</label>
                                <input type="text" class="form-control  @error('use') is-invalid @enderror"
                                    id="use" name="use" placeholder="Enter Bank Name" value="{{ $manu->use }}">
                                @error('bank_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="feature">ชื่อ manu</label>
                                <input type="text" class="form-control  @error('feature') is-invalid @enderror"
                                    value="{{ $manu->feature }}" id="feature" name="feature"
                                    placeholder="Enter Account Name">
                                @error('feature')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="account_number">เลือก</label>

                                <select class="form-select form-select-lg mb-3" name="resolution"
                                    aria-label="Large select example" required>
                                    @if ($manu->use == 1)
                                        <option value="1" @selected($manu->resolution == 1)>By Use</option>
                                        <option value="2" @selected($manu->resolution == 2)>By Feature</option>
                                        <option value="3" @selected($manu->resolution == 3)>By Resolution</option>
                                    @elseif ($manu->use == 2)
                                        <option value="1" @selected($manu->resolution == 1)>By Type</option>
                                        <option value="2" @selected($manu->resolution == 2)>By Format</option>
                                        <option value="3" @selected($manu->resolution == 3)>By Diagonal Size</option>
                                    @elseif ($manu->use == 3)
                                        <option value="1" @selected($manu->resolution == 1)>By Feature</option>
                                        <option value="2" @selected($manu->resolution == 2)>By Diagonal Size</option>
                                        <option value="3" @selected($manu->resolution == 3)>By Manufacturer</option>
                                    @elseif ($manu->use == 4)
                                        <option value="1" @selected($manu->resolution == 1)>Sound System</option>
                                    @elseif ($manu->use == 5)
                                        <option value="1" @selected($manu->resolution == 1)>HDMI Cable</option>
                                    @endif
                                </select>
                                @error('account_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>
                            <div class="row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('บันทึก') }}
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
