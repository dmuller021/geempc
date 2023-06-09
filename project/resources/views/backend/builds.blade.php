    @extends('master')

@section('content')

<div class="grey-fill lol">
    <div class="fs-s"></div>
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
                    <div class="fs-s"></div>
                    <div class="margin-left2">
                        <h4 class="dashboard-title"><strong>Builds management</strong></h4>
                        <form action="{{ route('builds.create') }}" class="action">
                            <button class="btn-success btn btn-lg">Add new</button>
                        </form>
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
                    <th scope="col">Build name</th>
                    <th scope="col">Build price</th>
                    <th scope="col">Build components</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($build as $builds)
                    <tr>
{{--                        {{ dd($builds[0]->id) }}--}}
                        <th scope="row">{{$builds->build_id}}</th>
                        <td>{{$builds->preset_name}}</td>
                        <td>{{$builds->build_price}}</td>
                        <td>{{$builds->components}}</td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-1">
                                        <form action="" class="actions">
                                            @csrf
                                            <input type="hidden" value="" name="type_id" class="hidden">
                                            <button type="submit" class="btn-sm btn-warning">Edit</button>
                                        </form>
                                    </div>
                                    <div class="col-xs-1">
                                        <form action="{{ route('builds.destroy', $builds->id) }}" class="actions">
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
