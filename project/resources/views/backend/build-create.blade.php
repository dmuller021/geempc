@extends('master')

@section('content')

    <div class="grey-fill lol">
        <div class="row">
            <div class="col-sm-8">
                <div class="fs-m"></div>
                <div class="margin-left2">
                    <h4 class="dashboard-title"><strong>Create a new build.</strong></h4>
                </div>
            </div>
        </div>
        <div class="fs-s"></div>

        <div class="container2 rounded-fill expadding">

                                <div class="row">
                                    <div class="col-sm-3">

                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                        <div class="col-sm-2">
                                            <p>Motherboard:</p>
                                        </div>

{{--                                        <div class="col">--}}
                                        @if(Session()->has('mobo_admin'))
                                            <form method="get" action="/getComponent">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <h1>{{ Session::get('mobo_admin') }}</h1>
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

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>CPU:</p>
                                            </div>

                                            {{--                                        <div class="col">--}}
                                            @if(Session()->has('cpu_admin'))
                                                <form method="get" action="/getComponent">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h1>{{ Session::get('cpu_admin') }}</h1>
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

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>CPU fan:</p>
                                            </div>

                                            {{--                                        <div class="col">--}}
                                            @if(Session()->has('cpu_fan_admin'))
                                                <form method="get" action="/getComponent">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h1>{{ Session::get('cpu_fan_admin') }}</h1>
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

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>GPU:</p>
                                            </div>

                                            {{--                                        <div class="col">--}}
                                            @if(Session()->has('gpu_admin'))
                                                <form method="get" action="/getComponent">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h1>{{ Session::get('gpu_admin') }}</h1>
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

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>RAM:</p>
                                            </div>

                                            {{--                                        <div class="col">--}}
                                            @if(Session()->has('ram_admin'))
                                                <form method="get" action="/getComponent">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h1>{{ Session::get('ram_admin') }}</h1>
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

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>Case:</p>
                                            </div>

                                            {{--                                        <div class="col">--}}
                                            @if(Session()->has('cases_admin'))
                                                <form method="get" action="/getComponent">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h1>{{ Session::get('cases_admin') }}</h1>
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

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>Case cooler:</p>
                                            </div>

                                            {{--                                        <div class="col">--}}
                                            @if(Session()->has('fans_admin'))
                                                <form method="get" action="/getComponent">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h1>{{ Session::get('fans_admin') }}</h1>
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

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>PSU:</p>
                                            </div>

                                            {{--                                        <div class="col">--}}
                                            @if(Session()->has('psu_admin'))
                                                <form method="get" action="/getComponent">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h1>{{ Session::get('psu_admin') }}</h1>
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

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>Storage:</p>
                                            </div>

                                            {{--                                        <div class="col">--}}
                                            @if(Session()->has('storage_admin'))
                                                <form method="get" action="/getComponent">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h1>{{ Session::get('storage_admin') }}</h1>
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

                                        <form method="get" action="{{ route('presets.create') }}">
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

                                        <div class="fs-s"></div>

                                        <button type="submit" class="btn btn-lg btn-success">Next step</button>
                                        <div class="fs-m"></div>
                                        </form>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
<script>
    function ShowModal(id)
    {
        var modal = document.getElementById(id);
        modal.style.display = "block";
    }
    function HideModal(id)
    {
        var modal = document.getElementById(id);
        modal.style.display = "none";
    }
</script>
@endsection
