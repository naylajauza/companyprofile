@extends('user.main')
@section('content')

{{-- @php
    $kurikulum=App\Models\Kurikulum::orderBy('id', 'asc')->get();
@endphp --}}
<main>
    <!-- page title start -->
    <section class="hero-slider hero-style-1 section-notch">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-overlay slide-bg-image" style="background-image: url('{{ asset('images/p.jpg')}}">
                        <div class="container">
                            <div class="col-xl-12">
                                <div class="page-title">
                                    <h2>SMPN 1 Margahayu</h2>
                                    <div class="breadcrumb-list text-left">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-slide">
                    <div class="slide-inner slide-overlay slide-bg-image" data-background="assets/img/slider/slide-02.jpg">
                        <div class="container">
                            <div data-swiper-parallax="200" class="slide-span">
                                <span>A New Approach to</span>
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Kids Education</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>The Universe is one great kindergarten for man. Everything that exists has brought with it its own peculiar lesson.</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="slider-btn">
                                <a data-swiper-parallax="500" class="thm-btn thm-btn-2" href="contact.html">Admissaion
                                    Now</a>
                                <a data-swiper-parallax="550" class="thm-btn" href="classes.html">Our Classes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> --}}
                    {{-- <div class="slide-inner slide-overlay slide-bg-image" data-background="assets/img/slider/slide-03.jpg">
                        <div class="container">
                            <div data-swiper-parallax="200" class="slide-span">
                                <span>A New Approach to</span>
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Kids Education</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>The Universe is one great kindergarten for man. Everything that exists has brought with it its own peculiar lesson.</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="slider-btn">
                                <a data-swiper-parallax="500" class="thm-btn thm-btn-2" href="contact.html">Admissaion
                                    Now</a>
                                <a data-swiper-parallax="550" class="thm-btn" href="classes.html">Our Classes</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="container">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
 <!-- page title end -->

 <!-- teacher area start -->
 <section class="team-area pt-110 pb-120">
     <div class="container">
         <div class="row mt-none-30">
            @foreach ($eskul as $item)
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-team text-center mt-30">
                    <div class="team-thumb">
                       <img src="{{asset('images/eskul/'.$item->cover)}}" alt="">  {{-- $item->gambar --}}
                    </div>
                    <div class="team-info">
                        <h3><a href="teacher-single.html">{{$item->eskul}}</a></h3>
                        <span>{{$item->deskripsi}}</span>
                    </div>
                </div>
            </div>
            @endforeach
         </div>
     </div>


 </section>
 <!-- teacher area end -->

 </main>
@endsection
