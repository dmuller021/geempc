        @extends('master')

@section('content')
<div class="fs-xs"></div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <h4>Name:</h4>
            </div>

            <div class="col-3">
                <h4>Desc:</h4>
            </div>

            <div class="col-3">
                <h4>Price:</h4>
            </div>

            <div class="col-3">
                <h4 >Action:</h4>
            </div>
        </div>
        <div class="fs-xs"></div>
        @foreach($components as $component)
            <form method="get" action="/addComponent">
                <input type="hidden" name="id" value="{{ $component->id }}">
                <input type="hidden" name="type_id" value="{{ $component->type_id }}">
                <div class="row">
                    <div class="col-3">
                        <h5>
                        @if($component->recommended == 1)
                               <span style="color: red"> ! ! </span>
                        @endif
                                {{ $component->name }}</h5>
                    </div>

                    <div class="col-3">
                        <h5>{{ $component->specs }}</h5>
                    </div>

                    <div class="col-3">
                        <h5>{{ $component->price }}</h5>
                    </div>

                    <div class="col-3">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        @endforeach
        </div>
    </div>
    <div class="fs-s"></div>

<div class="container">
    <h5><span style="color: red">! !*</span> = Recommended part.</h5>
</div>

@endsection
