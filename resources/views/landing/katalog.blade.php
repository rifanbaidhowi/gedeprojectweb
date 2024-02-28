@extends('kerangka.master')
@section('content')
   <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="section_tittle">
                    <h2>Katalog</h2>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left_sidebar_area"></div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu d-flex">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center latest_product_inner">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_1.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Kaos Wanita Custom</h4>
                                    <h3>Rp. 50.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_2.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Baju Custom Tulisan & Gambar</h4>
                                    <h3>Rp. 75.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_3.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Kaos Burhan</h4>
                                    <h3>Rp. 60.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_4.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Sweeter Orang Sukses</h4>
                                    <h3>Rp. 120.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_5.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Custom Kaos - Orange</h4>
                                    <h3>Rp. 100.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_6.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Custom Jersey - Full Printing</h4>
                                    <h3>Rp. 170.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_7.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Jersey Green Day</h4>
                                    <h3>Rp. 150.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_8.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Kaos Custom Bebas DTF </h4>
                                    <h3>Rp. 60.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ ('landing/img/product/product_9.png') }}" alt="">
                                <div class="single_product_text">
                                    <h4>Custom Sablon Jaket</h4>
                                    <h3>250.000</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pageination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="ti-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="ti-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection
