@extends('master')

@section('content')


    <form method="post" action="{{route('kortingcode')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">code</label>
            <input type="text" class="form-control" name="code" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="code">
            <small id="emailHelp" class="form-text text-muted">gebruik hoofdletters!</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">korting</label>
            <input type="text" name="korting" class="form-control" id="exampleInputPassword1" placeholder="korting">
        </div>

        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </form>

@endsection
