@extends('master')

@section('content')

    <div class="grey-fill lol">

        <div class="container">
            @if (session('alert'))
                <div class="alert alert-warning">
                    {{ session('alert') }}
                </div>
            @endif
        </div>

        <div class="grey-fill lol">
            <div class="row">
                <div class="col-sm-9">
                    <div class="fs-m"></div>
                    <div class="margin-left2">
                        <h4 class="dashboard-title"><strong>part(s) selection</strong></h4>
                        <div class="fs-xxs"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fs-s"></div>

        <div class="container2">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">part name</th>
                    <th scope="col">part description</th>
                    <th scope="col">part price</th>
                    <th scope="col">part specs</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($parts as $part)
                    <tr>
                        <th scope="row">{{$part->id}}</th>
                        <td>{{$part->name}}</td>
                        <td>{{$part->description}}</td>
                        <td>{{$part->price}}</td>
                        <td>{{$part->specs}}</td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-1">
                                        <form action="{{ route('builder.selected') }}" class="actions">
                                            @csrf
                                            <input type="hidden" value={{ $part->id }} name="type_id" class="hidden">
                                            <button type="submit" class="btn-sm btn-warning">Edit</button>
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
