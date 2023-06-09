@extends('master')

@section('content')
<div class="grey-fill lol">
    <div class="row">
        <div class="col-sm">
            <div class="fs-l"></div>
            <div class="margin-left">
                <h1 class="dashboard-title"><strong>Welcome, {{ Auth::user()->name }}</strong></h1>
                <h4 class="welcome-title">Bring home the next lvl.</h4>
                <div class="fs-l"></div>
            </div>
        </div>
    </div>
<div class="fs-xs"></div>
    <h4 class="welcome-text margin-left">Here are some more options ↓ ↓ ↓</h4>
    <div class="row">
        <div class="col-sm bg-dark text-white">
            <a class="anti-deco" href="{{ url('/order-history') }}">
            <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Order History</strong></h1>
                    <h4 class="welcome-text">What magic lies underneath?</h4>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>

        <div class="col-sm bg-secondary">
            <a class="anti-deco" href="{{ url('/bill-history') }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Bill history</strong></h1>
                    <h4 class="welcome-text">Sometimes it's important to check the <u>bills.</u></h4>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm bg-secondary">
            <a class="anti-deco" href="{{ url('/customer-service') }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Customer service</strong></h1>
                    <h4 class="welcome-text">Need some help?</h4>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>

        <div class="col-sm bg-dark text-white">
            <a class="anti-deco" href="{{ url('/user-settings') }}">
                <div class="margin-left expadding">
                    <div class="fs-s"></div>
                    <h1 class="welcome-title"><strong>Settings</strong></h1>
                    <h4 class="welcome-text">Let's switch it up.</h4>
                    <div class="fs-s"></div>
                </div>
            </a>
        </div>
    </div>
@endsection
