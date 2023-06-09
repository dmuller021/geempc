@extends('master')

@section('content')
    <div class="grey-fill lol">
        <div class="row">
            <div class="col-sm">
                <div class="fs-m"></div>
                <div class="margin-left2">
                    <h4 class="dashboard-title"><strong>Component management</strong></h4>
                    <div class="fs-s"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm bg-dark text-white">
            <a class="anti-deco" href="{{ route('comp.part', ['type_id' => 1]) }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Processors</strong></h1>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>

        <div class="col-sm bg-secondary">
            <a class="anti-deco" href="{{ route('comp.part', ['type_id' => 2])  }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Graphics cards</strong></h1>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm bg-secondary">
            <a class="anti-deco" href="{{ route('comp.part', ['type_id' => 3])  }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Motherboards</strong></h1>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>

        <div class="col-sm bg-dark text-white">
            <a class="anti-deco" href="{{ route('comp.part', ['type_id' => 4])  }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Cases</strong></h1>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm bg-dark text-white">
            <a class="anti-deco" href="{{ route('comp.part', ['type_id' => 5])  }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Power supplies</strong></h1>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>

        <div class="col-sm bg-secondary">
            <a class="anti-deco" href="{{ route('comp.part', ['type_id' => 6])  }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>RAM sticks</strong></h1>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm bg-secondary">
            <a class="anti-deco" href="{{ route('comp.part', ['type_id' => 7])  }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Fans</strong></h1>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>

        <div class="col-sm bg-dark text-white">
            <a class="anti-deco" href="{{ route('comp.part', ['type_id' => 8])  }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Storage</strong></h1>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>
    </div>

@endsection
