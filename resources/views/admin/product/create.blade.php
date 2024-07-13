@extends('layouts.appAdmin')

@section('content')
    <div class="page-inner mt-64">
        <div class="card">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="card-header">
                        <div class="card-title">เพิ่มสินค้า</div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('account_bank') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="product_name">ชื่อสินค้า</label>
                                <input type="text" class="form-control  @error('product_name') is-invalid @enderror"
                                    id="product_name" name="product_name" placeholder="Enter Bank Name">
                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="account_name">ชื่อบัญชี</label>
                                <input type="text" class="form-control  @error('account_name') is-invalid @enderror"
                                    id="account_name" name="account_name" placeholder="Enter Account Name">
                                @error('account_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="account_number">เลขที่บัญชี</label>
                                {{-- <input type="text" class="form-control @error('account_number') is-invalid @enderror"
                                    id="account_number" name="account_number" placeholder="Enter Account Number"> --}}
                                <textarea name="editor1" id="editor1" rows="10" cols="80">
                                        
                                    </textarea>
                                @error('account_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bank_image">รูปภาพ</label>
                                <input type="file" class="form-control @error('bank_image') is-invalid @enderror"
                                    id="bank_image" name="bank_image">
                                @error('bank_image')
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
