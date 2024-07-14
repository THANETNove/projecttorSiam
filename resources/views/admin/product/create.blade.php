@extends('layouts.appAdmin')

@section('content')
    <div class="page-inner mt-64">
        <div class="card">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card-header">
                        <div class="card-title">เพิ่มสินค้า</div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('account_bank') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="product_name">ชื่อสินค้า</label>
                                        <input type="text"
                                            class="form-control @error('product_name') is-invalid @enderror"
                                            id="product_name" name="product_name" placeholder="Enter Product Name">
                                        @error('product_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">ราคา</label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                                            id="price" name="price" placeholder="Enter Price">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="display">Display</label>
                                        <input type="text" class="form-control @error('display') is-invalid @enderror"
                                            id="display" name="display" placeholder="Enter Display">
                                        @error('display')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contrast_ratio">Contrast Ratio</label>
                                        <input type="text"
                                            class="form-control @error('contrast_ratio') is-invalid @enderror"
                                            id="contrast_ratio" name="contrast_ratio" placeholder="Enter Contrast Ratio">
                                        @error('contrast_ratio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="resolution">Resolution</label>
                                        <input type="text" class="form-control @error('resolution') is-invalid @enderror"
                                            id="resolution" name="resolution" placeholder="Enter Resolution">
                                        @error('resolution')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brightness">Brightness</label>
                                        <input type="text" class="form-control @error('brightness') is-invalid @enderror"
                                            id="brightness" name="brightness" placeholder="Enter Brightness">
                                        @error('brightness')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">สถานะ</label>
                                        {{--   <input type="text"
                                            class="form-control  @error('availability') is-invalid @enderror"
                                            id="availability" name="availability" placeholder="Enter Product Name"> --}}
                                        <select class="form-select" name="availability" aria-label="Default select example">

                                            <option value="In Stock">In Stock</option>
                                            <option value="Out of stock">Out of stock</option>
                                        </select>
                                        @error('availability')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand">Brand</label>
                                        <input type="text" class="form-control  @error('brand') is-invalid @enderror"
                                            id="brand" name="brand" placeholder="Enter Brand">
                                        @error('brand')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="catalog">ไฟล์ Catalog</label>
                                <input type="file" class="form-control  @error('catalog') is-invalid @enderror"
                                    id="catalog" name="catalog" placeholder="Enter file Catalog" accept=".pdf">
                                @error('catalog')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">DESCRIPTION</label>
                                <textarea name="description" id="editor1" placeholder="Enter Description">
                                </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="specification">SPECIFICATION</label>
                                <textarea name="specification" id="editor2" placeholder="Enter Specification">
                                </textarea>
                                @error('specification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <h4>SCREEN SIZE CALCULATOR</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="brand">Ratio screen</label>
                                        <input type="text"
                                            class="form-control  @error('ratio_screen') is-invalid @enderror"
                                            id="ratio_screen" name="ratio_screen" placeholder="Enter Ratio screen 16:9">
                                        @error('ratio_screen')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="throw_ratio_min">throw ratio min</label>
                                        <input type="text"
                                            class="form-control  @error('throw_ratio_min') is-invalid @enderror"
                                            id="throw_ratio_min" name="throw_ratio_min"
                                            placeholder="Enter Throw ratio min">
                                        @error('throw_ratio_min')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="throw_ratio_max">throw ratio max</label>
                                        <input type="text"
                                            class="form-control  @error('throw_ratio_max') is-invalid @enderror"
                                            id="throw_ratio_max" name="throw_ratio_max"
                                            placeholder="Enter Product Throw ratio max">
                                        @error('throw_ratio_max')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="bank_image">รูปภาพ</label>
                                <input type="file" class="form-control @error('bank_image') is-invalid @enderror"
                                    id="bank_image" name="image[]" multiple>
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
