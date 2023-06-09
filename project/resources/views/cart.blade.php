@extends('master')

@section('content')
    <div class="grey-fill">
        <div class="row">
            <div class="col-sm-4">
                <div class="fs-m"></div>
                <div class="margin-left">
                    <h1 class="welcome-title"><strong>Shopping Cart</strong></h1>
                    <h4 class="welcome-text">Geeming™ starts here.</h4>
                    @isset($alert)
                     <h1>{{ $alert }}</h1>
                    @endisset
                    <form method="post" action="{{ route('discount')}}">
                        @csrf
                    <p>Discount code:</p>
                    <input name="discount_code" class="input_type">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="fs-l"></div>
                    <h4 class="welcome-text">Total: €{{ Session::get('total_price_builder') }}</h4>
                    <hr>
                    @if(Auth::user() == null)
                        <form action="{{url('/afrekenen')}}">
                            <button class="btn-lg">Place order</button>
                        </form>
                    @else
                        <a class="btn-lg" href="{{ url('/afrekenen') }}">place order</a>
                    @endif
                    <div class="fs-s"></div>

                </div>

            </div>

            <div class="col-sm-8">
                <div class="grey-fill">
                    <div class="row">
                        <div class="col-sm">
                            <div class="fs-s"></div>
                            <div class="rounded-fill">
                                {{-- dynamic data starts here --}}
                                <div class="row">
                                    <div class="col-sm">
                                        <h1 class="welcome-title"><strong>Current item(s) :</strong></h1>
                                        <div class="fs-xs"></div>
                                            @if(session()->has('cpu','cpu_fan', 'mobo', 'ram', 'cases', 'fans', 'psu', 'storage'))
                                            <div class="form-border">
                                                <h2><strong>'Custom Built' GeemPC</strong></h2>
                                                    <p>
                                                        {{ Session::get('mobo') }} <br>
                                                        {{ Session::get('cpu') }} <br>
                                                        {{ Session::get('cpu_fan') }} <br>
                                                        {{ Session::get('gpu') }} <br>
                                                        {{ Session::get('ram') }} <br>
                                                        {{ Session::get('cases') }} <br>
                                                        {{ Session::get('fans') }} <br>
                                                        {{ Session::get('psu') }} <br>
                                                        {{ Session::get('storage') }} <br>
                                                    </p>
                                                </div>
                                            </div>
                                                <div class="col-sm">
                                                    <div class="fs-l"></div>
                                                    <img class="pc-picture center" src="{{ asset('assets/PC02.jpg') }}"
                                                         alt="a picture of a computer">
                                                </div>
                                            @else
                                                <div class="fs-xs"></div>
                                                    <h4 class="text-center">Your shopping cart is currently empty :(</h4>
                                                <div class="fs-m"></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="fs-m"></div>
        </div>
@endsection
