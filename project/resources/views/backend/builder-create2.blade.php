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
            <form method="post" action="{{ route('presets.store') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Build name :</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="the name of the part">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Build description</label>
                    <input type="text" name="desc" class="form-control" id="exampleInputPassword1" placeholder="it's very good">
                    <small id="emailHelp" class="form-text text-muted">Describe the product.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Build price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="500">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Capability level</label>
                        <select class="form-control" name="level" id="exampleFormControlSelect2" size="3">
                            <option value="1">Level 1</option>
                            <option value="2">Level 2</option>
                            <option value="3">Level 3</option>
                        </select>
                    </div>
                </div>
                <div class="fs-xs"></div>
                <button type="submit" class="btn btn-success">Add builder</button>
            </form>
        </div>
@endsection
