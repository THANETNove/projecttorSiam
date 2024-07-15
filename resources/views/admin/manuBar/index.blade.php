@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">

                @php
                    // กรอง id ที่ไม่ซ้ำกัน
                    $uniqueData = $data->unique('id');
                @endphp
                @foreach ($uniqueData as $item)
                    @php
                        // กรองรายการที่ use เท่ากับค่าของ $item->use
                        $useCount = $data
                            ->filter(function ($entry) use ($item) {
                                return $entry->use == $item->use;
                            })
                            ->count();
                    @endphp

                    <div class="col-sm-6 col-md-3">
                        <a href="{{ url('components/manuBar/create', $item->id) }}">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div
                                                class="icon-big text-center bubble-shadow-small -mt-2
                                                @if ($item->id == 1) icon-primary
                                                @elseif ($item->id == 2)
                                                    icon-info
                                                @elseif ($item->id == 3)
                                                    icon-success
                                                @elseif ($item->id == 4)
                                                    icon-secondary
                                                @else
                                                    icon-warning @endif
                                                ">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ms-3 ms-sm-0">
                                            <div class="numbers">
                                                <p class="card-category">{{ $item->name_manu }}</p>
                                                <h4 class="card-title">
                                                    {{ $useCount }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

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
                                            <th scope="col">หัวข้อเเถบ</th>
                                            <th scope="col">หัวข้อเเถบย่อ</th>
                                            <th scope="col">ชื่อ</th>
                                            <th scope="col">เเก้ไข</th>
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
                                                    {{ $da->feature }}
                                                </td>

                                                <td>
                                                    {{ $da->itemId }}
                                                    <a href="{{ url('components/slideHome/edit', $da->itemId) }}"
                                                        class="btn btn-warning">เเก้ไข</a>
                                                </td>
                                                <td>

                                                    <a onclick="confirmDelete('{{ url('components/slideHome/destroy', $da->itemId) }}')"
                                                        class="btn btn-danger">ลบ</a>
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
