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
                        <form method="POST" action="{{ route('product/update', $product['id']) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="product_name">ชื่อสินค้า <span class="required-click">*</span></label>
                                        <input type="text"
                                            class="form-control @error('product_name') is-invalid @enderror"
                                            value="{{ $product['product_name'] }}" id="product_name" name="product_name"
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
                                            value="{{ $product['price'] }}" id="price" name="price"
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
                                            value="{{ $product['price_sale'] }}" id="price_sale" name="price_sale"
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
                                                @if ($product['status_sale'] == 'on') checked @endif id="flexCheckChecked">
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
                                                @if ($product['status_sell'] == 'on') checked @endif id="flexCheckChecked"
                                                checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                on
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">สถานะ</label>
                                        <select class="form-select" name="availability" aria-label="Default select example">

                                            <option value="In Stock" @if ($product['availability'] == 'In Stock') selected @endif>In
                                                Stock</option>
                                            <option value="Out of stock" @if ($product['availability'] == 'Out of stock') selected @endif>
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
                                            value="{{ $product['brand'] }}">
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
                                            value="{{ $product['product_code'] }}">
                                        @error('product_code')
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
                                <label class="mt-3">ชื่อไฟล์เดิมไฟล์ </label>
                                <?php
                                $path = 'assets/images/pdf/1721050821_Acer H6518STi.pdf';
                                $filename = basename($path);
                                ?>
                                <a href="{{ asset($product['catalog']) }}" target="_blank">{{ $filename }}</a>
                            </div>
                            <div class="form-group">
                                <label for="description">DESCRIPTION</label>
                                <textarea name="description" id="editor1" placeholder="Enter Description">
                                    {{ $product['description'] }}
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
                                    {{ $product['specification'] }}
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
                                            value="{{ $product['ratio_screen'] }}">
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
                                            value="{{ $product['throw_ratio_min'] }}"
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
                                            value="{{ $product['throw_ratio_max'] }}"
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
                                        value="{{ $product['link_lazada'] }}">
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
                                        value="{{ $product['link_shopee'] }}">
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
                                        value="{{ $product['other_links'] }}">
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
                        <br>
                        @if ($product['image'])
                            <div id="image-edit">
                                @foreach (json_decode($product['image']) as $imageUrl)
                                    <img src="{{ URL::asset($imageUrl) }}" alt="Product Image"
                                        style="width: 100px; height: auto;" class="image-clickable">
                                @endforeach
                            </div>
                        @endif


                        <div id="imagePreview"></div>


                    </div>


                    {{--        <div class="form-group">
                        <span class="required-click"> * (เลือกอย่างน้อย 1 อัน)</span></h5>
                        @foreach ($data->unique('use') as $item)
                            <h5>{{ $item->name_manu }}
                                <div class="row">
                                    @foreach ($data->where('use', $item->use) as $detail)
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input @error('check_manu') is-invalid @enderror"
                                                    name="check_manu[]" type="checkbox" value="{{ $detail->feature }}"
                                                    id="check_manu_{{ $detail->id }}"
                                                    @if (is_array(old('check_manu')) && in_array($detail->feature, old('check_manu'))) checked @endif
                                                    @if ($detail->feature == $product['check_manu']) checked @endif>
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
 --}}
                    {{ $product['check_manu'] }}
                    @php
                        $checkedManus = json_decode($product['check_manu']);
                    @endphp
                    <div class="form-group">
                        <span class="required-click"> * (เลือกอย่างน้อย 1 อัน)</span>
                        @foreach ($data->unique('use') as $item)
                            <h5>{{ $item->name_manu }}</h5>
                            <div class="row">
                                @foreach ($data->where('use', $item->use) as $detail)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input @error('check_manu') is-invalid @enderror"
                                                name="check_manu[]" type="checkbox" value="{{ $detail->feature }}"
                                                id="check_manu_{{ $detail->id }}"
                                                @if (is_array($checkedManus) && in_array($detail->feature, $checkedManus)) checked @endif>
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
