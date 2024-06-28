@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">

                <div class="col-sm-6 col-md-3">
                    <a href="{{ url('components/manuBar/create', '1') }}">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Projectors</p>
                                            <h4 class="card-title">
                                                @php
                                                    // กรองรายการที่ use == 1
                                                    $useCount = $data
                                                        ->filter(function ($item) {
                                                            return $item->use == 1;
                                                        })
                                                        ->count();
                                                @endphp
                                                {{ $useCount }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-sm-6 col-md-3">
                    <a href="{{ url('components/manuBar/create', '2') }}">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Screens</p>
                                            <h4 class="card-title">
                                                @php
                                                    // กรองรายการที่ use == 1
                                                    $useCount = $data
                                                        ->filter(function ($item) {
                                                            return $item->use == 2;
                                                        })
                                                        ->count();
                                                @endphp
                                                {{ $useCount }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-sm-6 col-md-3">
                    <a href="{{ url('components/manuBar/create', '3') }}">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Displays</p>
                                            <h4 class="card-title">
                                                @php
                                                    // กรองรายการที่ use == 1
                                                    $useCount = $data
                                                        ->filter(function ($item) {
                                                            return $item->use == 3;
                                                        })
                                                        ->count();
                                                @endphp
                                                {{ $useCount }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-sm-6 col-md-3">
                    <a href="{{ url('components/manuBar/create', '4') }}">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">AV Solutions</p>
                                            <h4 class="card-title">
                                                @php
                                                    // กรองรายการที่ use == 1
                                                    $useCount = $data
                                                        ->filter(function ($item) {
                                                            return $item->use == 4;
                                                        })
                                                        ->count();
                                                @endphp
                                                {{ $useCount }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-sm-6 col-md-3">
                    <a href="{{ url('components/manuBar/create', '5') }}">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-warning bubble-shadow-small">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Accessories</p>
                                            <h4 class="card-title"> @php
                                                // กรองรายการที่ use == 1
                                                $useCount = $data
                                                    ->filter(function ($item) {
                                                        return $item->use == 5;
                                                    })
                                                    ->count();
                                            @endphp
                                                {{ $useCount }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>



            <div class="row">

                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <div class="card-title">Manu Bar</div>

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ลำดับ</th>
                                            <th scope="col">ภาพ</th>
                                            <th scope="col">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data as $da)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    @if ($da->use == 1)
                                                        Projectors
                                                    @elseif ($da->use == 2)
                                                        Screens
                                                    @elseif ($da->use == 3)
                                                        Displays
                                                    @elseif ($da->use == 4)
                                                        AV Solutions
                                                    @else
                                                        Accessories
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $da->feature }}
                                                </td>
                                                <td>
                                                    @php
                                                        $label = '';

                                                        switch (true) {
                                                            // Group 1
                                                            case $da->use == 1 && $da->resolution == 1:
                                                                $label = 'By Use';
                                                                break;
                                                            case $da->use == 1 && $da->resolution == 2:
                                                                $label = 'By Feature';
                                                                break;
                                                            case $da->use == 1 && $da->resolution == 3:
                                                                $label = 'By Resolution';
                                                                break;

                                                            // Group 2
                                                            case $da->use == 2 && $da->resolution == 1:
                                                                $label = 'By Type';
                                                                break;
                                                            case $da->use == 2 && $da->resolution == 2:
                                                                $label = 'By Format';
                                                                break;
                                                            case $da->use == 2 && $da->resolution == 3:
                                                                $label = 'By Diagonal Size';
                                                                break;

                                                            // Group 3
                                                            case $da->use == 3 && $da->resolution == 1:
                                                                $label = 'By Feature';
                                                                break;
                                                            case $da->use == 3 && $da->resolution == 2:
                                                                $label = 'By Diagonal Size';
                                                                break;
                                                            case $da->use == 3 && $da->resolution == 3:
                                                                $label = 'By Manufacturer';
                                                                break;

                                                            // Group 4
                                                            case $da->use == 4 && $da->resolution == 1:
                                                                $label = 'Sound System';
                                                                break;

                                                            // Group 5
                                                            case $da->use == 5 && $da->resolution == 1:
                                                                $label = 'HDMI Cable';
                                                                break;
                                                        }
                                                    @endphp

                                                    {{ $label }}
                                                </td>
                                                <td>
                                                    <a href="{{ url('components/slideHome/edit', $da->id) }}"
                                                        class="btn btn-warning">เเก้ไข</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
