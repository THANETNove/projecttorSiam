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
                                <label for="price">ราคา</label>
                                <input type="text" class="form-control  @error('price') is-invalid @enderror"
                                    id="price" name="price" placeholder="Enter Account Name">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">สถานะ</label>
                                <input type="text" class="form-control  @error('availability') is-invalid @enderror"
                                    id="availability" name="availability" placeholder="Enter Account Name">
                                @error('availability')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="brand">ยี่ห่อ</label>
                                <input type="text" class="form-control  @error('brand') is-invalid @enderror"
                                    id="brand" name="brand" placeholder="Enter Account Name">
                                @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="catalog">ไฟล์ Catalog</label>
                                <input type="text" class="form-control  @error('catalog') is-invalid @enderror"
                                    id="catalog" name="catalog" placeholder="Enter Account Name">
                                @error('catalog')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="catalog">DESCRIPTION</label>
                                <textarea name="editor1" id="editor1" rows="10" cols="80">
                                </textarea>
                                @error('catalog')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="catalog">SPECIFICATION</label>
                                <textarea name="editor1" id="editor2" rows="10" cols="80">
                                </textarea>
                                @error('catalog')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <h4>SCREEN SIZE CALCULATOR</h4>

                            <div class="row">
                                <div class="form-group">
                                    <label for="brand">throw ratio min</label>
                                    <input type="text" class="form-control  @error('brand') is-invalid @enderror"
                                        id="brand" name="brand" placeholder="Enter Account Name">
                                    @error('brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="brand">throw ratio max</label>
                                    <input type="text" class="form-control  @error('brand') is-invalid @enderror"
                                        id="brand" name="brand" placeholder="Enter Account Name">
                                    @error('brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
