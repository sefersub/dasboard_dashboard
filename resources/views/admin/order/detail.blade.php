@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @if(session("status"))
                            <div class="alert alert-primary" role="alert">
                                {{session("status")}}
                            </div>
                        @endif
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Sipariş Detayı</h4>

                        </div>
                        <div class="card-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Alıcı: {{\App\User::getField($data[0]['userid'],'name')}}</label>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Adres: {{$data[0]['adres']}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Telefon: {{$data[0]['telefon']}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Mesaj: {{$data[0]['mesaj']}}</label>
                                    </div>
                                </div>
                            </div>

                            @foreach(json_decode($data[0]['json'],true) as $key=>$value)
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kitap Adı:  {{$value['name']}}</label><br>
                                            <label class="control-label">Kitap Fiyat: {{$value['fiyat']}}</label><br>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
