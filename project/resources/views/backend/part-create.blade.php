@extends('master')

@section('content')

    <div class="grey-fill lol">
        <div class="row">
            <div class="col-sm-6">
                <div class="fs-m"></div>
                <div class="margin-left2">
                    <h4 class="dashboard-title"><strong>Create a new {{ $comp }}</strong></h4>
                </div>
            </div>
        </div>
        <div class="fs-s"></div>

        <div class="container2 rounded-fill expadding">
            @if (session('alert'))
                <div class="alert alert-danger">
                    {{ session('alert') }}
                </div>
            @endif
            <form action="{{ route('comp.store') }}" id="form1">
                @csrf
                <div class="form-group">
                    <label for="">{{ $comp }} name :</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="the name of the part">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="desc" class="form-control" id="exampleInputPassword1" placeholder="it's very good">
                    <small id="emailHelp" class="form-text text-muted">Describe the product.</small>
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="500">
                </div>
                <div class="form-group">
                    <label for="">Specs</label>
                    <input type="text" name="specs" class="form-control" id="exampleInputPassword1" placeholder="fast part fr">
                </div>
                @if($type_id == 1 || $type_id == 3)
                    <div class="form-group">
                        <label for="" id="chip">Supported chipset</label>
                            <input id="chipset" class="form-control" name="chipset" type="text"/>

                            <div id="chip_return">
                                @foreach($chipset as $chipy)
                                <a href="#!" class="test">{{ $chipy->chipset }}</a>
                                @endforeach
                            </div>
                    </div>
                @endif
                <div class="form-group">
                    <label for="">Recommendation</label><br>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="recommended" value="1" class="custom-control-input" id="customSwitches">
                        <label class="custom-control-label" for="customSwitches">Recommended</label>
                    </div>
                </div>
                <div class="fs-xs"></div>
                <input type="hidden" name="type_id" value="{{$type_id}}" class="hidden">
                <button type="submit" class="btn btn-lg btn-success">Add</button>
            </form>
        </div>
    <div class="fs-m"></div>

<script>
    $(document).ready(function(){
        $("#chip_return a").click(function(){
            var value = $(this).html();
            var input = $('#chipset');
            input.val(value);
        });
    });

    {{-- source: http://jsfiddle.net/guyzyl/9stgu/ --}}
</script>
@endsection
