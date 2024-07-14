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
                        <form method="POST" action="{{ route('product/store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="product_name">ชื่อสินค้า <span class="required-click">*</span></label>
                                        <input type="text"
                                            class="form-control @error('product_name') is-invalid @enderror"
                                            value="{{ old('product_name') }}" id="product_name" name="product_name"
                                            placeholder="Enter Product Name">
                                        @error('product_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">ราคา <span class="required-click">*</span></label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            value="{{ old('price') }}" id="price" name="price"
                                            placeholder="Enter Price">
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
                                        <label for="price_sale"> ราคา Sale <span class="required-click">*</span></label>
                                        <input type="number" class="form-control @error('price_sale') is-invalid @enderror"
                                            value="{{ old('price_sale') }}" id="price_sale" name="price_sale"
                                            placeholder="Enter ราคา Sale">
                                        @error('price_sale')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sale">สถานะ Sale</label>
                                        <div class="form-check">
                                            <input class="form-check-input" name="status_sale" type="checkbox"
                                                @if (old('status_sale') == 'on') checked @endif id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                on
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status_sell">กำลังขาย</label>
                                        <div class="form-check">
                                            <input class="form-check-input" name="status_sell" type="checkbox"
                                                @if (old('status_sell') == 'on') checked @endif id="flexCheckChecked"
                                                checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                on
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                {{--  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sale">สถานะ Sale</label>
                                        <div class="form-check">
                                            <input class="form-check-input" name="status_sale" type="checkbox"
                                                @if (old('status_sale') == 'on') checked @endif
                                                value="@if (old('status_sale') == 'on') on
                                            @else
                                                off @endif"
                                                id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                {{ isset($checked) }}
                                                  @if (isset($request->status_sale))
                                                    on
                                                @else
                                                    off
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">สถานะ</label>
                                        {{--   <input type="text"
                                            class="form-control  @error('availability') is-invalid @enderror"
                                            id="availability" name="availability" placeholder="Enter Product Name"> --}}
                                        <select class="form-select" name="availability" aria-label="Default select example">

                                            <option value="In Stock" @if (old('availability') == 'In Stock') selected @endif>In
                                                Stock</option>
                                            <option value="Out of stock" @if (old('availability') == 'Out of stock') selected @endif>
                                                Out of stock</option>
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
                                            id="brand" name="brand" placeholder="Enter Brand"
                                            value="{{ old('brand') }}">
                                        @error('brand')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="product_code">Product Code</label>
                                        <input type="text"
                                            class="form-control  @error('product_code') is-invalid @enderror"
                                            id="product_code" name="product_code" placeholder="Product Code"
                                            value="{{ old('product_code') }}">
                                        @error('product_code')
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
                                            value="{{ old('display') }}" id="display" name="display"
                                            placeholder="Enter Display">
                                        @error('display')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brightness">Brightness</label>
                                        <input type="text"
                                            class="form-control @error('brightness') is-invalid @enderror"
                                            id="brightness" name="brightness" placeholder="Enter Brightness"
                                            value="{{ old('brightness') }}">
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
                                        <label for="contrast_ratio">Contrast Ratio</label>
                                        <input type="text"
                                            class="form-control @error('contrast_ratio') is-invalid @enderror"
                                            value="{{ old('contrast_ratio') }}" id="contrast_ratio"
                                            name="contrast_ratio" placeholder="Enter Contrast Ratio">
                                        @error('contrast_ratio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="resolution">Resolution</label>
                                        <input type="text"
                                            class="form-control @error('resolution') is-invalid @enderror"
                                            value="{{ old('resolution') }}" id="resolution" name="resolution"
                                            placeholder="Enter Resolution">
                                        @error('resolution')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="catalog">ไฟล์ Catalog</label>
                                <input type="file" class="form-control @error('catalog') is-invalid @enderror"
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
                                    {{ old('description') }}
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
                                    {{ old('specification') }}
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
                                            id="ratio_screen" name="ratio_screen" placeholder="Enter Ratio screen 16:9"
                                            value="{{ old('ratio_screen') }}">
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
                                            value="{{ old('throw_ratio_min') }}" placeholder="Enter Throw ratio min">
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
                                            value="{{ old('throw_ratio_max') }}"
                                            placeholder="Enter Product Throw ratio max">
                                        @error('throw_ratio_max')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="link_lazada">ลิงค์ Lazada</label>
                                    <input type="text"
                                        class="form-control  @error('link_lazada') is-invalid @enderror" id="link_lazada"
                                        name="link_lazada" placeholder="Enter link Lazada"
                                        value="{{ old('link_lazada') }}">
                                    @error('link_lazada')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="link_shopee">ลิงค์ shopee</label>
                                    <input type="text"
                                        class="form-control  @error('link_shopee') is-invalid @enderror" id="link_shopee"
                                        name="link_shopee" placeholder="Enter link shopee"
                                        value="{{ old('link_shopee') }}">
                                    @error('link_shopee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="other_links">ลิงค์ อื่นๆ</label>
                                    <input type="text"
                                        class="form-control  @error('other_links') is-invalid @enderror" id="other_links"
                                        name="other_links" placeholder="Enter Other links"
                                        value="{{ old('other_links') }}">
                                    @error('other_links')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                    </div>

                    <div class="form-group">
                        <label for="image">รูปภาพ <span class="required-click"> * (เรียกตามตัวอันษร
                                น้อยไปมาก)</span></label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            onchange="previewImages(event)" name="image[]" multiple accept="image/*">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                    </div>
                    <div class="form-group">
                        <label for="image">ตัวย่างภาพ</label>
                        <div id="imagePreview"></div>


                    </div>


                    <div class="form-group">
                        <span class="required-click"> * (เลือกอย่างน้อย 1 อัน)</span></h5>
                        @foreach ($data->unique('use') as $item)
                            <h5>{{ $item->name_manu }}
                                <div class="row">
                                    @foreach ($data->where('use', $item->use) as $detail)
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input @error('check_manu') is-invalid @enderror"
                                                    name="check_manu[]" type="checkbox" value="{{ $detail->feature }}"
                                                    id="flexCheckDefault"
                                                    @if (is_array(old('check_manu')) && in_array($detail->feature, old('check_manu'))) checked @endif>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{ $detail->feature }}
                                                </label>
                                            </div>
                                            @error('check_manu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    @endforeach
                                </div>
                        @endforeach
                    </div>

                    <br>
                    <div class="row mb-5">
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
@endsection
