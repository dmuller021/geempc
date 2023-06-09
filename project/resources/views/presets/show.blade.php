@extends('master')

@section('content')
<div class="grey-fill">
    <div class="row">
        <div class="col-sm-4">
            <div class="fs-s"></div>
            <div class="margin-left2">
                <div class="rounded-fill">
                    <div class="fs-s"></div>

                    <div class="margin-left">
                        <h1 class="welcome-title"><strong>{{$presets->preset_name }}</strong></h1>
                        <h4 class="welcome-text">DESC</h4>
                        <div class="fs-xs"></div>
                        <h2 class="welcome-title"><strong>.....</strong></h2><br>
                        <a class="btn-lg" href="{{ url('/cart') }}">Add to cart</a>
                        <a href="{{ url('/cart') }}"></a>

                    </div>

                </div>
            </div>
        </div>

                </div>
                <div class="col-sm-4">
                    <div class="grey-fill">
                        <div class="row">
                            <div class="col-sm">
                                <div class="fs-s"></div>
                                <div class="rounded-fill">
                                    <div class="fs-s"></div>
                                    <img class="preset-picture center" src="{{ asset('assets/PC01.jpg') }}"
                                         alt="a picture of a computer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fs-m"></div>
            </div>

       </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629166.8406556869!2d5.432112623383298!3d51.97620436280167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7a3c3b4ce56e3%3A0xad5e740e54e033c!2sMediaMarkt%20Duiven!5e0!3m2!1snl!2snl!4v1656923223719!5m2!1snl!2snl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                <div class="col-sm">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629166.8406556869!2d5.432112623383298!3d51.97620436280167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7c758a9f4d7d9%3A0xc1ba54616663d56c!2sMediaMarkt%20Apeldoorn!5e0!3m2!1snl!2snl!4v1656923381618!5m2!1snl!2snl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                <div class="col-sm">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629204.1929528363!2d5.432106042963212!3d51.97354447338948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c79392eb948c8d%3A0x4360612e8bc766fa!2sBlokker%20Warnsveld!5e0!3m2!1snl!2snl!4v1656923425603!5m2!1snl!2snl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>
        </div>
    </div>
</div>
@endsection
