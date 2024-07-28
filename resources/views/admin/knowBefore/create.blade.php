@extends('layouts.appAdmin')

@section('content')
    <div class="page-inner mt-64">
        <div class="card">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card-header">
                        <div class="card-title">รายละเอียด น่ารู้ก่อนซื้อ</div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('services/knowBefore/store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="specification">รายะลเอียด</label>
                                <textarea name="description" id="editor2" placeholder="Enter Specification">
                                    {{ old('description') }}
                                </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




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
