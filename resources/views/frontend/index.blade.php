@extends('layouts.frontend')

@section('content')

<!-- Slider Area -->
<section class="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-0">
                <div class="menu-widget">
                    <p><i class="fa fa-bars"></i>All Categories</p>
                    <ul class="list-unstyled">
                        <li><a href=""><img src="{{ asset('public/frontend/images/m-cloth.png') }}" alt="">Men's Clothing<i class="fa fa-angle-right"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="smartphone">
                                            <h6>Smartphones</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Huawei</a>
                                            <a href="">- Asus</a>
                                            <a href="">- Sony</a>
                                            <a href="">- Apple</a>
                                            <a href="">- Xiaomi</a>
                                            <a href="">- Oppo</a>
                                            <a href="">- One Plus</a>
                                            <a href="">- Nokia</a>
                                            <a href="">- Htc</a>
                                            <a href="">- Vivo</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>Tablets</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Huawei</a>
                                            <a href="">- Apple</a>
                                            <a href="">- Xiaomi</a>
                                            <a href="">- Sony</a>
                                            <a href="">- Asus</a>
                                        </div>
                                        <div class="f-phone">
                                            <h6>Feature Phones</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Nokia</a>
                                            <a href="">- Infinix</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="accesories">
                                            <h6>Accessories</h6>
                                            <a href="">- Power Bank</a>
                                            <a href="">- Battery & Charger</a>
                                            <a href="">- Cables & Adapters</a>
                                            <a href="">- Back / Flip Cover</a>
                                            <a href="">- Screen Protector</a>
                                            <a href="">- Earphones</a>
                                            <a href="">- Memory Card</a>
                                            <a href="">- Phone Cases</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mg-bnr">
                                            <img src="{{ asset('public/frontend/images/ipn.png') }}" alt="">
                                            <div class="mg-content text-right">
                                                <h4>Iphone</h4>
                                                <span>Save upto 50% off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/w-cloth.png') }}" alt="">Women's Clothing<i class="fa fa-angle-right"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="smartphone">
                                            <h6>Smartphones</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Huawei</a>
                                            <a href="">- Asus</a>
                                            <a href="">- Sony</a>
                                            <a href="">- Apple</a>
                                            <a href="">- Xiaomi</a>
                                            <a href="">- Oppo</a>
                                            <a href="">- One Plus</a>
                                            <a href="">- Nokia</a>
                                            <a href="">- Htc</a>
                                            <a href="">- Vivo</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>Tablets</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Huawei</a>
                                            <a href="">- Apple</a>
                                            <a href="">- Xiaomi</a>
                                            <a href="">- Sony</a>
                                            <a href="">- Asus</a>
                                        </div>
                                        <div class="f-phone">
                                            <h6>Feature Phones</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Nokia</a>
                                            <a href="">- Infinix</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="accesories">
                                            <h6>Accessories</h6>
                                            <a href="">- Power Bank</a>
                                            <a href="">- Battery & Charger</a>
                                            <a href="">- Cables & Adapters</a>
                                            <a href="">- Back / Flip Cover</a>
                                            <a href="">- Screen Protector</a>
                                            <a href="">- Earphones</a>
                                            <a href="">- Memory Card</a>
                                            <a href="">- Phone Cases</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mg-bnr tab-bnr">
                                            <img src="{{ asset('public/frontend/images/tab.png') }}" alt="">
                                            <div class="mg-content text-right">
                                                <h4>Tablet</h4>
                                                <span>Save upto 50% off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/ele.png') }}" alt="">Electronics<i class="fa fa-angle-right"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="smartphone">
                                            <h6>Smartphones</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Huawei</a>
                                            <a href="">- Asus</a>
                                            <a href="">- Sony</a>
                                            <a href="">- Apple</a>
                                            <a href="">- Xiaomi</a>
                                            <a href="">- Oppo</a>
                                            <a href="">- One Plus</a>
                                            <a href="">- Nokia</a>
                                            <a href="">- Htc</a>
                                            <a href="">- Vivo</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>Tablets</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Huawei</a>
                                            <a href="">- Apple</a>
                                            <a href="">- Xiaomi</a>
                                            <a href="">- Sony</a>
                                            <a href="">- Asus</a>
                                        </div>
                                        <div class="f-phone">
                                            <h6>Feature Phones</h6>
                                            <a href="">- Samsung</a>
                                            <a href="">- Nokia</a>
                                            <a href="">- Infinix</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="accesories">
                                            <h6>Accessories</h6>
                                            <a href="">- Power Bank</a>
                                            <a href="">- Battery & Charger</a>
                                            <a href="">- Cables & Adapters</a>
                                            <a href="">- Back / Flip Cover</a>
                                            <a href="">- Screen Protector</a>
                                            <a href="">- Earphones</a>
                                            <a href="">- Memory Card</a>
                                            <a href="">- Phone Cases</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mg-bnr pw-bnr">
                                            <img src="{{ asset('public/frontend/images/pbank.png') }}" alt="">
                                            <div class="mg-content text-right">
                                                <h4>Powerbank</h4>
                                                <span>Save upto 50% off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/sm.png') }}" alt="">Smartphone & Tablet</a></li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/com.png') }}" alt="">Computer & Office</a></li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/tv.png') }}" alt="">Home Applience</a></li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/shoe.png') }}" alt="">Leather & Shoes</a></li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/kid.png') }}" alt="">Kids & Babies</a></li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/watch.png') }}" alt="">Jewelary & Watches</a></li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/health.png') }}" alt="">Health & Beauty</a></li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/car.png') }}" alt="">Automobiles</a></li>
                        <li><a href=""><img src="{{ asset('public/frontend/images/sport.png') }}" alt="">Sports & Outdoors</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 padding-fix-l20">
                <div class="owl-carousel owl-slider">
                    <div class="slider-item slider-item1">
                        <img src="{{ asset('public/frontend/images/girl-1.png') }}" alt="" class="img1 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                        <div class="slider-box">
                            <div class="slider-table">
                                <div class="slider-tablecell">
                                    <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                        <h5>Big Sale</h5>
                                    </div>
                                    <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                        <h2>New Product Collection</h2>
                                    </div>
                                    <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                        <p>Save Up To 25% Off</p>
                                    </div>
                                    <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item slider-item2">
                        <img src="{{ asset('public/frontend/images/girl-2.png') }}" alt="" class="img2 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                        <div class="slider-box">
                            <div class="slider-table">
                                <div class="slider-tablecell text-right">
                                    <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                        <h5>Home Appliance</h5>
                                    </div>
                                    <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                        <h2>Top Quality Products</h2>
                                    </div>
                                    <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                        <p>Save Up To 50% Off</p>
                                    </div>
                                    <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-btm-box d-flex justify-content-around">
                    <div class="single-box mr-20">
                        <a href=""><img src="{{ asset('public/frontend/images/sb-1.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="single-box mr-20">
                        <a href=""><img src="{{ asset('public/frontend/images/sb-2.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="single-box">
                        <a href=""><img src="{{ asset('public/frontend/images/sb-3.png') }}" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Slider Area -->

<!-- Product Area-->
<section class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bt-deal">
                            <div class="sec-title">
                                <h6>Best Deals</h6>
                            </div>
                            <div class="bt-body owl-carousel">
                                <div class="bt-items">
                                    <div class="bt-box d-flex">
                                        <div class="bt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-1.png') }}" alt=""></a>
                                        </div>
                                        <div class="bt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bt-box d-flex">
                                        <div class="bt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-2.png') }}" alt=""></a>
                                        </div>
                                        <div class="bt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bt-box d-flex">
                                        <div class="bt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-3.png') }}" alt=""></a>
                                        </div>
                                        <div class="bt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bt-box d-flex">
                                        <div class="bt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-4.png') }}" alt=""></a>
                                        </div>
                                        <div class="bt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bt-items">
                                    <div class="bt-box d-flex">
                                        <div class="bt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-2.png') }}" alt=""></a>
                                        </div>
                                        <div class="bt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bt-box d-flex">
                                        <div class="bt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-4.png') }}" alt=""></a>
                                        </div>
                                        <div class="bt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bt-box d-flex">
                                        <div class="bt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-5.png') }}" alt=""></a>
                                        </div>
                                        <div class="bt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bt-box d-flex">
                                        <div class="bt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-1.png') }}" alt=""></a>
                                        </div>
                                        <div class="bt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="ht-offer">
                            <div class="sec-title">
                                <h6>Hot Offer</h6>
                            </div>
                            <div class="ht-body owl-carousel">
                                <div class="ht-item">
                                    <div class="ht-img">
                                        <a href="#"><img src="{{ asset('public/frontend/images/tab-15.png') }}" alt="" class="img-fluid"></a>
                                        <span>- 59%</span>
                                        <ul class="list-unstyled list-inline counter-box">
                                            <li class="list-inline-item">185 <p>Days</p></li>
                                            <li class="list-inline-item">11 <p>Hrs</p></li>
                                            <li class="list-inline-item">39 <p>Mins</p></li>
                                            <li class="list-inline-item">51 <p>Sec</p></li>
                                        </ul>
                                    </div>
                                    <div class="ht-content">
                                        <p><a href="">Items Title Here</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-item">
                                    <div class="ht-img">
                                        <a href="#"><img src="{{ asset('public/frontend/images/tab-14.png') }}" alt="" class="img-fluid"></a>
                                        <span>- 59%</span>
                                        <ul class="list-unstyled list-inline counter-box">
                                            <li class="list-inline-item">185 <p>Days</p></li>
                                            <li class="list-inline-item">11 <p>Hrs</p></li>
                                            <li class="list-inline-item">39 <p>Mins</p></li>
                                            <li class="list-inline-item">51 <p>Sec</p></li>
                                        </ul>
                                    </div>
                                    <div class="ht-content">
                                        <p><a href="">Items Title Here</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="hm-test">
                            <div class="test-body owl-carousel">
                                <div class="test-item text-center">
                                    <img src="{{ asset('public/frontend/images/test-1.jpg') }}"" alt="" class="img-fluid">
                                    <h6>John Doe</h6>
                                    <span>Photographer</span>
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore."</p>
                                </div>
                                <div class="test-item text-center">
                                    <img src="{{ asset('public/frontend/images/test-2.jpg') }}"" alt="" class="img-fluid">
                                    <h6>Eric Shell</h6>
                                    <span>Developer</span>
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="top-rtd">
                            <div class="sec-title">
                                <h6>Top Rated</h6>
                            </div>
                            <div class="rt-slider owl-carousel">
                                <div class="rt-items">
                                    <div class="rt-box d-flex">
                                        <div class="rt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-6.png') }}" alt=""></a>
                                        </div>
                                        <div class="rt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rt-box d-flex">
                                        <div class="rt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-7.png') }}" alt=""></a>
                                        </div>
                                        <div class="rt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rt-box d-flex">
                                        <div class="rt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-8.png') }}" alt=""></a>
                                        </div>
                                        <div class="rt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rt-box d-flex">
                                        <div class="rt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-9.png') }}" alt=""></a>
                                        </div>
                                        <div class="rt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="rt-items">
                                    <div class="rt-box d-flex">
                                        <div class="rt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-10.png') }}" alt=""></a>
                                        </div>
                                        <div class="rt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rt-box d-flex">
                                        <div class="rt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-11.png') }}" alt=""></a>
                                        </div>
                                        <div class="rt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rt-box d-flex">
                                        <div class="rt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-12.png') }}" alt=""></a>
                                        </div>
                                        <div class="rt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rt-box d-flex">
                                        <div class="rt-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-13.png') }}" alt=""></a>
                                        </div>
                                        <div class="rt-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="nw-ltr">
                            <div class="sec-title">
                                <h6>Newsletter</h6>
                            </div>
                            <div class="nw-box">
                                <p>Sign Up And Get Latest News, Updates, Offers & Deals</p>
                                <form class="nw-form" action="#">
                                    <input type="text" name="email" placeholder="Email Here..." required>
                                    <button type="submit" name="button">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <div class="col-md-12 padding-fix-l20">
                        <div class="ftr-product">
                            <div class="tab-box d-flex justify-content-between">
                                <div class="sec-title">
                                    <h5>Feature Product</h5>
                                </div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#all">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#elec">Electronics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#smart">Smartphones</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#shoe">Shoes</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all" role="tabpanel">
                                    <div class="tab-slider owl-carousel">
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-1.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-2.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <span class="sale">Sale</span>
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-3.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-4.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="elec" role="tabpanel">
                                    <div class="tab-slider owl-carousel">
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-5.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-6.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <span class="new">New</span>
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-7.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-8.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="smart" role="tabpanel">
                                    <div class="tab-slider owl-carousel">
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-9.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-10.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <span class="sale">Sale</span>
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-11.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-12.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="shoe" role="tabpanel">
                                    <div class="tab-slider owl-carousel">
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-13.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-14.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <span class="new">New</span>
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-15.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                            </div>
                                            <div class="tab-img">
                                                <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-9.png') }}" alt="">
                                                <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 padding-fix-l20">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner">
                                    <a href="#"><img src="{{ asset('public/frontend/images/banner-1.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner">
                                    <a href="#"><img src="{{ asset('public/frontend/images/banner-2.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 padding-fix-l20">
                        <div class="new-product">
                            <div class="sec-title">
                                <h5>New Product</h5>
                            </div>
                            <div class="new-slider owl-carousel">
                                <div class="new-item">
                                    <div class="tab-heading">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                        </ul>
                                        <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                    </div>
                                    <div class="new-img">
                                        <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-11.png') }}" alt="">
                                        <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-item">
                                    <div class="tab-heading">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                        </ul>
                                        <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                    </div>
                                    <div class="new-img">
                                        <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-12.png') }}" alt="">
                                        <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-item">
                                    <div class="tab-heading">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                        </ul>
                                        <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                    </div>
                                    <div class="new-img">
                                        <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-13.png') }}" alt="">
                                        <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-item">
                                    <div class="tab-heading">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                        </ul>
                                        <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                    </div>
                                    <div class="new-img">
                                        <img class="main-img img-fluid" src="{{ asset('public/frontend/images/tab-14.png') }}" alt="">
                                        <img class="sec-img img-fluid" src="{{ asset('public/frontend/images/tab-16.png') }}" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('public/frontend/images/it-comp.png') }}" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('public/frontend/images/it-fav.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('public/frontend/images/it-cart.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 padding-fix-l20">
                        <div class="banner-two">
                            <a href="#"><img src="{{ asset('public/frontend/images/banner-3.png') }}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-md-12 padding-fix-l20">
                        <div class="top-slr">
                            <div class="sec-title">
                                <h5>Top Seller</h5>
                            </div>
                            <div class="slr-slider owl-carousel">
                                <div class="slr-items">
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-6.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-7.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-8.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="slr-items">
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-9.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-10.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-11.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="slr-items">
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-12.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-13.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-14.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="slr-items">
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-6.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-4.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slr-box d-flex">
                                        <div class="slr-img">
                                            <a href="#"><img src="{{ asset('public/frontend/images/sbar-2.png') }}" alt=""></a>
                                        </div>
                                        <div class="slr-content">
                                            <p><a href="">Items Title Here</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 padding-fix-l20">
                        <div class="hm-blog">
                            <div class="sec-title">
                                <h5>Latest News</h5>
                            </div>
                            <div class="blog-slider owl-carousel">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href="#"><img src="{{ asset('public/frontend/images/news-1.jpg') }}"" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h6><a href="">Sint eius inventore magni quod.</a></h6>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">John</a></li>
                                            <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Feb, 2020</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href="#"><img src="{{ asset('public/frontend/images/news-2.jpg') }}"" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h6><a href="">Sint eius inventore magni quod.</a></h6>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">John</a></li>
                                            <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Mar, 2020</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href="#"><img src="{{ asset('public/frontend/images/news-3.jpg') }}"" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h6><a href="">Sint eius inventore magni quod.</a></h6>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">John</a></li>
                                            <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Jan, 2020</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href="#"><img src="{{ asset('public/frontend/images/news-4.jpg') }}"" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h6><a href="">Sint eius inventore magni quod.</a></h6>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">John</a></li>
                                            <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Feb, 2020</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tp-bnd owl-carousel">
                    <div class="bnd-items">
                        <a href="#"><img src="{{ asset('public/frontend/images/brand-01.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="{{ asset('public/frontend/images/brand-02.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="{{ asset('public/frontend/images/brand-03.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="{{ asset('public/frontend/images/brand-04.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="{{ asset('public/frontend/images/brand-05.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="{{ asset('public/frontend/images/brand-06.png') }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="images/brand-07.png') }}" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Area -->
@endsection