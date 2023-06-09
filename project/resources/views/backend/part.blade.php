@extends('master')

@section('content')

<div class="grey-fill lol">
    <div class="fs-xs"></div>

    <div class="container">
        @if (session('alert'))
            <div class="alert alert-warning">
                {{ session('alert') }}
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="fs-xs"></div>
            <div class="margin-left2">
                <h4 class="dashboard-title"><strong>{{ $comp }}</strong></h4>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="fs-m"></div>
            <form action="{{ route('comp.create', $type_id) }}" class="action">
                <button class="btn-success btn btn-lg add-btn">Add new</button>
            </form>

        </div>
    </div>

    <div class="fs-s"></div>

    <div class="container2">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Specs</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($parts as $part)
                <tr>
                    <th scope="row">{{$part->id}}</th>
                    <td>{{$part->name}}</td>
                    <td>{{$part->description}}</td>
                    <td>€{{$part->price}}</td>
                    <td>{{$part->specs}}</td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-1">
                                    <form action="{{ route('comp.edit', $part->id) }}" class="actions">
                                        @csrf
                                        <input type="hidden" value="{{$type_id}}" name="type_id" class="hidden">
                                        <button type="submit" class="btn-sm btn-warning">Edit</button>
                                    </form>
                                </div>
                                <div class="col-xs-1">
                                    <form action="{{ route('comp.destroy', $part->id) }}" class="actions">
                                        @csrf
                                        <button type="submit" class="btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="fs-s"></div>
@endsection
