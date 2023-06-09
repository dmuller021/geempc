@extends('master')

@section('content')
    <div class="grey-fill lol">
        <div class="row">
            <div class="col-sm-6">
                <div class="fs-m"></div>
                <div class="margin-left2">
                    <h4 class="dashboard-title"><strong>Edit your {{ $type_name->name }}</strong></h4>
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
            <form action="{{ route('comp.update', $comp->id) }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">{{ $type_name->name }} name :</label>
                    <input type="text" name="name" class="form-control" value="{{ $comp->Name }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                    <input type="text" name="desc" class="form-control" value="{{ $comp->Description }}"  id="exampleInputPassword1">
                    <small id="emailHelp" class="form-text text-muted">Describe the product.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $comp->Price }}" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Specs</label>
                    <input type="text" name="specs" class="form-control" value="{{ $comp->Specs }}"  id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Category change</label>
                    <select class="form-control" id="exampleFormControlSelect2" size="4">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="type_id" value="{{$type_id}}" class="hidden">
                <button type="submit" class="btn btn-lg btn-warning">Edit</button>
            </form>
        </div>
    <div class="fs-m"></div>
@endsection
