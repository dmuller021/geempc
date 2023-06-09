@extends('master')

@section('content')
    <div class="grey-fill">
        <div class="row">
            @foreach($presets as $o=>$Presets)
                {{--                   {{ dd($Presets) }}--}}
                <div class="col-sm-4">
                    <div class="fs-s"></div>
                    <a href="{{ route('presets.show', $Presets->id) }}">
                        <div class="product-fill margin-right anti-deco">
                            {{-- dynamic data starts here --}}
                            <div class="preset-title">
                                <h2><strong>{{$Presets->preset_name}}</strong></h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="preset-text">
                                        <div class="fs-xs"></div>
                                        @for($i = 0; $i < $count; $i++)
                                            <h6>{{ $components[$o][$i][0]->component }}</h6>
                                        @endfor
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="fs-s"></div>
                                    <img class="pc-picture center" src="{{ asset('assets/PC01.jpg') }}" alt="a picture of a computer">
                                </div>
                            </div>
                            {{--                                        <h6>{{ $components[$i][$i][0]->component }}</h6>--}}
                            {{--                                        <h6>{{ $components[$i]->name }}</h6>--}}
                            <div class="fs-s"></div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="fs-s"></div>
    </div>
@endsection
