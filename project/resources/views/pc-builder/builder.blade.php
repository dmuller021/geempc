@extends('master')

@section('content')
{{--    {{ Session::get('mobo') }}--}}
{{--    {{ Session::get('gpu') }}--}}
    <div class="grey-fill">
            <div class="fs-xs"></div>
                <div class="container">
                    @if (session('alert'))
                        <div class="alert alert-danger">
                            {{ session('alert') }}
                        </div>
                    @endif
                    <div class="rounded-fill">
                        <div class="row">
                            <div class="col-sm-2">
                                <p>Motherboard:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('mobo'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('mobo') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="3">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="3">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <p>CPU:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('cpu'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('cpu') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="1">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="1">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <p>CPU fan:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('cpu_fan'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('cpu_fan') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="9">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="9">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <p>GPU:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('gpu'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('gpu') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="2">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="2">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <p>RAM:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('ram'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('ram') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="6">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="6">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <p>Case:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('cases'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('cases') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="4">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="4">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <p>Case cooler:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('fans'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('fans') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="7">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>

                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="7">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <p>PSU:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('psu'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('psu') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="5">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>

                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="5">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <p>Storage:</p>
                            </div>
                            <div class="col-sm-10">
                                @if(Session()->has('storage'))
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm">
                                                <h1>{{ Session::get('storage') }}</h1>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="component" value="8">
                                                <button class="btn btn-warning" type="submit">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form method="get" action="/getComponent">
                                        @csrf
                                        <input type="hidden" name="component" value="8">
                                        <button class="btn btn-primary" type="submit">Add component</button>
                                    </form>
                                @endif
                            </div>
                            <div class="col-sm-2">
                                <label for="cars">Operating system:</label>
                            </div>
                            <div class="col-sm-10">
                                <select name="os" id="operating_system">
                                    <option value="Windows 11">Windows 11</option>
                                    <option value="Ubuntu linux">Ubuntu linux</option>
                                    <option value="Temple OS">Temple OS</option>
                                    <option value="amogOS">amogOS</option>
                                </select>
                            </div>

                            <div class="col-sm-2">
                                    <div class="fs-xs"></div>
                                <form action="{{ route('cart.build') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </form>
                            </div>
                    </div>
            </div>
        </div>
    <div class="fs-l"></div>
    </div>

{{--    <script>--}}
{{--        localStorage.setItem({{ $component_type }}, {{ $component_name }});--}}
{{--    </script>--}}
@endsection
