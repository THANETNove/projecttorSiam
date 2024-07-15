@extends('layouts.appAdmin')

@section('content')
    <div class="page-inner mt-64" style="height: 100vh">
        <div class="card">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="card-header">
                        <div class="card-title">Slide Home</div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('imageSlide') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="slide_image">รูปภาพ</label>
                                <input type="file" class="form-control @error('slide_image') is-invalid @enderror"
                                    id="slide_image" name="slide_image" accept="image/*">
                                @error('slide_image')
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
