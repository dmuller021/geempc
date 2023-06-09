@extends('master')

@section('content')
    <style>
        body{
            background:#eee;
        }

        .card{
            border:none;

            position:relative;
            overflow:hidden;
            border-radius:8px;
            cursor:pointer;
        }

        .card:before{

            content:"";
            position:absolute;
            left:0;
            top:0;
            width:4px;
            height:100%;
            background-color: #ffffff;
            transform:scaleY(1);
            transition:all 0.5s;
            transform-origin: bottom
        }

        .card:after{

            content:"";
            position:absolute;
            left:0;
            top:0;
            width:4px;
            height:100%;
            background-color: #343a40;
            transform:scaleY(0);
            transition:all 0.5s;
            transform-origin: bottom
        }

        .card:hover::after{
            transform:scaleY(1);
        }


        .fonts{
            font-size:11px;
        }

        .social-list{
            display:flex;
            list-style:none;
            justify-content:center;
            padding:0;
        }

        .social-list li{
            padding:10px;
            color: #343a40;
            font-size:19px;
        }


        .buttons button:nth-child(1){
            border:1px solid #343a40 !important;
            color: #343a40;
            height:40px;
        }

        .buttons button:nth-child(1):hover{
            border:1px solid #343a40 !important;
            color:#fff;
            height:40px;
            background-color: #343a40;
        }

        .buttons button:nth-child(2){
            border:1px solid #343a40 !important;
            background-color: #343a40;
            color:#fff;
            height:40px;
        }
    </style>
    @foreach($users as $User);
    <div class="container mt-5">

        <div class="row d-flex justify-content-center">

            <div class="col-md-7">

                <div class="card p-3 py-4">



                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span>
                        <h5 class="mt-2 mb-0">{{$User->name}}</h5>
                        <span>email: {{$User->email}}</span><br>
                        <span>address: {{$User->address}}</span><br>
                        <span>postcode: {{$User->postcode}}</span>

                        <div class="px-4 mt-1">
                            <p class="fonts">{{$User->created_at}} </p>

                        </div>

                        <ul class="social-list">
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-dribbble"></i></li>
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-google"></i></li>
                        </ul>

                        <div class="buttons">

                            <button class="btn btn-outline-primary px-4">edit profile</button>

                        </div>


                    </div>




                </div>

            </div>

        </div>

    </div>
    @endforeach
@endsection



