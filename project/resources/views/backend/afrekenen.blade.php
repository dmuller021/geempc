@extends('master')

@section('content')

<style>
    body {
        background-image: linear-gradient(-90deg, #ffffff 0%, #343a40 100%);
    }

    .component {
        position: relative;
        width: 30%;
        margin: 5rem auto;
        padding: 1rem;

        box-shadow: 2px 2px 10px #454545;
        background-color: #FFFFFF;

        text-align: center;
    }

    .credit-card h2 {
        color: rgba(4,99,128,1);
    }

    .component .credit-card form {
        display:flex;
        flex-direction: column;
    }

    .component .credit-card .line {
        display: flex;
    }

    .component .credit-card .line input {
        width: 20%; /* on définit une taille plus petite qu'il le faut, le flex-grow fera le reste */
        flex: 1;
        margin: 0.4rem 0.3rem;
    }

    input {
        border: none;
        border-bottom: 1px solid rgba(0,0,0,.12);
        margin: 1rem 0;
        padding: 4px;
        font-size: 1rem;
        outline: none;
    }

    input::-webkit-input-placeholder {
        color: #AAAAAA;
    }

    .valid-button {
        border: 0;
        padding: 1rem 2rem;
        background-color: rgb(52, 58, 64);
        color: #EFECCA;
        font-weight:bold;
        margin-top:2rem;
        box-shadow: 1px 1px 1px black;
    }

    .valid-button:hover {
        background-color: rgba(4,99,128,1);
        box-shadow: none;
    }

    .total {
        position: absolute;
        top: 3em;
        left: -8em;
        z-index: -1;

        background: #002F2F;
        color: #A7A37E;

        width: 100px;
        transform: rotate(-35deg);
        display:flex;
        flex-wrap: wrap;
        justify-content:center;
        align-items:center;
        padding-right: 2rem;

        box-shadow: 1px 1px 5px black;
    }

    .total p {
        font-size: 1.5rem;
    }
</style>
    <section class="component">

        <div class="credit-card">
            <h2>checkout</h2>
            <form method="post" action="{{route('cart.pay')}}" enctype="multipart/form-data" >
                @csrf
                <input type="text" name="naam" placeholder="NAAM" />
                <input type="email" name="email" placeholder="EMAIL" />
                <input type="number" name="house_address" placeholder="house address" />
                <div class="line"><input type="text" name="adress" placeholder="ADRESS" /> <input type="text" placeholder="POSTCODE" />  </div>

                <select>
                    <option>paypal</option>
                    <option>mastercard</option>
                    <option>ideal</option>
                    <option>klarna</option>
                </select>

                <div class="line"><input type="number" placeholder="CARD" /> <input type="number" placeholder="NUMBER" /> <input type="number" /> <input type="number" /></div>
                <div class="line">
                    <input class="litle" type="number" placeholder="EXPIRY" />
                    <input class="tall" type="number" placeholder="CCV" />
                </div>
                <div class="row">
                <div class="col-4">
                <button type="submit" class="valid-button">BUY</button>
                </div>
                <div class="col-1 text-center">
                    <div class="fs-xs"></div>
                <h3>€{{ Session::get('total_price_builder') }}</h3>
                </div>
                </div>
                </form>
{{--            <div class="credit-card">--}}
        </div>
    </section>

@endsection

