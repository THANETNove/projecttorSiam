@extends('layouts.appAdmin')

@section('content')
    <div class="page-inner mt-64">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">บัญชีธนาคาร</div>
                </div>
                <div class="card-body  d-flex justify-content-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="email2">ธนาคาร</label>
                                <input type="text" class="form-control" id="email2" placeholder="Enter Email">
                                <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="email2">ชื่อบัญชี</label>
                                <input type="text" class="form-control" id="email2" placeholder="Enter Email">
                                <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="email2">เลขที่บัญชี</label>
                                <input type="text" class="form-control" id="email2" placeholder="Enter Email">
                                <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="email2">รูปภาพ</label>
                                <input type="file" class="form-control" id="email2" placeholder="Enter Email">
                                <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
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
@endsection
