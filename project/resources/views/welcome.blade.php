@extends('master')

@section('content')
    <div class="grey-fill">
        <div class="fs-s"></div>
        <div class="container">
            @if (session('alert'))
                <div class="alert alert-danger">
                    {{ session('alert') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="fs-m"></div>
                <div class="margin-left">
                    <h1 class="welcome-title"><strong>Our Pre-Built PCs</strong></h1>
                    <h4 class="welcome-text">There's no need to spend a lot.</h4>
                    <div class="fs-xs"></div>
                    <a href="{{ url('/presets') }}"><button class="btn-lg">Browse all Pre-Builts</button></a>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="grey-fill">
                    <div class="row">
                        <div class="col-sm">
                            <div class="fs-s"></div>
                            <div class="rounded-fill">
                                {{-- dynamic data starts here --}}
                                <div class="preset-title">
                                    <h2><strong>GeemPC: Entry LVL!</strong></h2>
                                </div>
                                <div class="preset-text">
                                    <h6>AMD Ryzen 5 3400G</h6>
                                    <h6>NVIDIA RTX 3050TI</h6>
                                    <h6>Antec DF700 Flux ATX Mid Tower</h6>
                                </div>
                                <div class="fs-xs"></div>
                                <img class="pc-picture center" src="{{ asset('assets/PC01.jpg') }}"
                                    alt="a picture of a computer">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="fs-s"></div>
                            <div class="rounded-fill">
                                {{-- dynamic data starts here --}}
                                <div class="preset-title">
                                    <h2><strong>GeemPC: High-end</strong></h2>
                                </div>
                                <div class="preset-text">
                                    <h6>AMD Ryzen Threadripper PRO 3955WX</h6>
                                    <h6>NVIDIA RTX 3080TI</h6>
                                    <h6>Thermaltake View 51</h6>
                                </div>
                                <div class="fs-xs"></div>
                                <img class="pc-picture center" src="{{ asset('assets/PC02.jpg') }}"
                                    alt="a picture of a computer">
                            </div>
                        </div>
                    </div>
                    <div class="fs-m"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
