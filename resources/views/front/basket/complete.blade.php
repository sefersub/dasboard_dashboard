@extends('layouts.app')
@section('content')

    <!--bottom-header-->
    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">Alışveriş Tamamlama</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--contact-start-->
    <div class="contact">
        <div class="container">
            <div class="contact-top heading">
                <h2>Adres Bilgileri</h2>
            </div>
            @if(session('status'))
                {{session('status')}}
                @endif
            <div class="contact-text">

                <div class="col-md-12 contact-right">
                    <form action="{{route('basket.completeStore')}}" method="POST">
                        {{csrf_field()}}
                        <input type="text" name="adres" placeholder="Adres">
                        @if ($errors->has('adres'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('adres') }}</strong>
                                    </span>
                        @endif
                        <input type="text"  name="telefon" placeholder="Email">
                        @if ($errors->has('telefon'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                    </span>
                        @endif
                        <textarea placeholder="mesaj" required=""></textarea>
                        <div class="submit-btn">
                            <input type="submit" value="TAMAMLA">
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--contact-end-->
    <!--map-start-->

@endsection
