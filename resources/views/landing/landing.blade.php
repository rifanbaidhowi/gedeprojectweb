@extends('kerangka.master')
@section('content')
 <!-- banner part start-->
 <section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">
                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Gede Everlast</h1>
                                        <p>"Kreasimu Terwujud, Warna Impianmu Terabadikan!"</p>
                                        <a href="#" class="btn_2">Cek Harga</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{ ('landing/img/banner_2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                        <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Pusat Kaos Wonosobo</h1>
                                        <p>Kaos Custom & Sablon Wonosobo</p>
                                        <a href="#" class="btn_2">Cek Harga</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{ ('landing/img/banner_1.png') }}" alt="">
                            </div>
                        </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

 <!-- product_list part start-->
 <section class="product_list best_seller section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    <div class="single_product_item">
                        <img src="{{ ('landing/img/product/product_1.png') }}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{ ('landing/img/product/product_2.png') }}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{ ('landing/img/product/product_3.png') }}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{ ('landing/img/product/product_4.png') }}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{ ('landing/img/product/product_5.png') }}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part end-->
@endsection
