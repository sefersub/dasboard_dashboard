@extends('layouts.app')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">{{$data[0]['name']}}</li>
                </ol>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                 {{session('status')}}
                </ol>
            </div>
        </div>
        @endif
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-9 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-5 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}">
                                        <div class="thumb-image"> <img src="{{asset($data[0]['image'])}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- FlexSlider -->
                            <script src="{{asset('js/imagezoom.js')}}"></script>
                            <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
                            <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />

                            <script>
                                // Can also be used with $(document).ready()
                                $(window).load(function() {
                                    $('.flexslider').flexslider({
                                        animation: "slide",
                                        controlNav: "thumbnails"
                                    });
                                });
                            </script>
                        </div>
                        <div class="col-md-7 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{$data[0]['name']}}</h2>
                                <div class="star-on">


                                    <div class="clearfix"> </div>
                                </div>

                                <h5 class="item_price">{{$data[0]['fiyat']}} TL</h5>
                                <p>{{$data[0]['aciklama']}}</p>
                                <div class="available">
                                    <ul>
                                        <li class="size-in">Kategoriler:{{\App\Kategoriler::getField($data[0]['kategoriid'],'name')}} </li>
                                        <li class="size-in">YayınEvi:{{\App\YayinEvi::getField($data[0]['yayineviid'],'name')}}  </li>
                                        <li class="size-in">Yazar:{{\App\Yazarlar::getField($data[0]['yazarid'],'name')}} </li>

                                    </ul>
                                </div>
                                <ul class="tag-men">
                                    <li><span>TAG</span>
                                        <span class="women1">: Women,</span></li>
                                    <li><span>SKU</span>
                                        <span class="women1">: CK09</span></li>
                                </ul>
                                <a href="{{route('basket.add',['id'=>$data[0]['id']])}}" class="add-cart item_add">SEPETE EKLE</a>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="latestproducts">
                        <div class="product-one">
                            @foreach(\App\Kitaplar::inRandomOrder()->limit(3)->get() as $key=>$value)
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{route('kitap.detay',['selflink'=>$value['selflink']])}}" class="mask"><img style="width:200px;height:200px;" class="img-responsive zoom-img" src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>{{$value['name']}}</h3>
                                        <p>{{\App\Yazarlar::getField($value['yazarid'],'name')}}</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">{{$value['fiyat']}}</span></h4>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 single-right">
                    <div class="w_sidebar">
                        <section  class="sky-form">
                            <h4>Catogories</h4>
                            <div class="row1 scroll-pane">
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
                                </div>
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids Watches</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men Watches</label>
                                </div>
                            </div>
                        </section>
                        <section  class="sky-form">
                            <h4>Brand</h4>
                            <div class="row1 row2 scroll-pane">
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
                                </div>
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sonata</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Titan</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casio</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Omax</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fastrack</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sports</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fossil</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Maxima</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yepme</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citizen</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diesel</label>
                                </div>
                            </div>
                        </section>
                        <section class="sky-form">
                            <h4>Colour</h4>
                            <ul class="w_nav2">
                                <li><a class="color1" href="#"></a></li>
                                <li><a class="color2" href="#"></a></li>
                                <li><a class="color3" href="#"></a></li>
                                <li><a class="color4" href="#"></a></li>
                                <li><a class="color5" href="#"></a></li>
                                <li><a class="color6" href="#"></a></li>
                                <li><a class="color7" href="#"></a></li>
                                <li><a class="color8" href="#"></a></li>
                                <li><a class="color9" href="#"></a></li>
                                <li><a class="color10" href="#"></a></li>
                                <li><a class="color12" href="#"></a></li>
                                <li><a class="color13" href="#"></a></li>
                                <li><a class="color14" href="#"></a></li>
                                <li><a class="color15" href="#"></a></li>
                                <li><a class="color5" href="#"></a></li>
                                <li><a class="color6" href="#"></a></li>
                                <li><a class="color7" href="#"></a></li>
                                <li><a class="color8" href="#"></a></li>
                                <li><a class="color9" href="#"></a></li>
                                <li><a class="color10" href="#"></a></li>
                            </ul>
                        </section>
                        <section class="sky-form">
                            <h4>discount</h4>
                            <div class="row1 row2 scroll-pane">
                                <div class="col col-4">
                                    <label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
                                    <label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
                                    <label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
                                </div>
                                <div class="col col-4">
                                    <label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
                                    <label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
                                    <label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
