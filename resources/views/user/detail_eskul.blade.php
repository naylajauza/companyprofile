@extends('user.main')
@section('content')
<main>
        <!-- page title start -->
        <div class="page-title-area section-notch pt-170 pb-170" data-background="assets/img/bg/page-title-bg.jpg">
            <div class="banner-overlay"></div>
            <div class="container">
                <div class="row">
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
        <!-- page title end -->

        <!-- about start -->
        <section class="about-area pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center mt-none-25">
                    <div class="col-lg-6">
                        <div class="about-image mt-25">
                            <img src="{{ asset('images/tari1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-two pl-50 mt-25">
                            <div class="section-title mb-30">
                                <h2 class="title">SMPN 1 Margahayu</h2>
                                SMPN 1 Margahayu adalah sebuah institusi pendidikan SMP negeri
                                yang alamatnya di Jl. Kopo No. 397 Margahayu, Kab. Bandung.
                                SMP negeri ini berdiri sejak 1957. Pada waktu ini SMP Negeri 1
                                Margahayu memakai panduan kurikulum belajar SMP 2013. SMPN 1
                                Margahayu berada di bawah naungan kepala sekolah dengan nama
                                Pardi dan operator sekolah Lucky.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- about end -->
   <section class="counter-area section-bg-two section-notch pt-130 pb-100">
       <div class="container">
           <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6">
                   <div class="single-counter text-center pb-30">
                       <img src="assets/img/icon/c-icon1.png" alt="">
                       <h3><span class="odometer" data-count="2500">00</span><span class="plus">+</span></h3>
                       <p>Students Enrolled</p>
                   </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6">
                   <div class="single-counter text-center pb-30">
                       <img src="assets/img/icon/c-icon2.png" alt="">
                       <h3><span class="odometer" data-count="912">00</span><span class="plus">+</span></h3>
                       <p>Best Awards Won</p>
                   </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6">
                   <div class="single-counter text-center pb-30">
                       <img src="assets/img/icon/c-icon3.png" alt="">
                       <h3><span class="odometer" data-count="370">00</span><span class="plus">+</span></h3>
                       <p>Classes Completed</p>
                   </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6">
                   <div class="single-counter text-center pb-30">
                       <img src="assets/img/icon/c-icon4.png" alt="">
                       <h3><span class="odometer" data-count="648">00</span><span class="plus">+</span></h3>
                       <p>Our Total Courses</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team text-center mt-30">
                    <div class="team-thumb">
                        <img src="{{ asset('images/person_2-min.jpg') }}" alt="">
                    </div>
                    <div class="team-info">
                        <h3><a href="teacher-single.html">Alex Jhonson</a></h3>
                        <span>Art Teacher</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team text-center mt-30">
                    <div class="team-thumb">
                        <img src="{{ asset('images/person_3-min.jpg') }}" alt="">
                    </div>
                    <div class="team-info">
                        <h3><a href="teacher-single.html">Janaton Doe</a></h3>
                        <span>English Teacher</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- video start -->
        <section class="video-area pt-120">
            <div class="container">
                <div class="video-image pos-rel">
                    <img src="{{ asset('images/smp.jpg') }}" alt="">
                    <a class="popup-video video-icon" href="https://www.youtube.com/watch?v=x2SJOTcP2RY"><i
                            class="far fa-play"></i></a>
                </div>
            </div>
        </section>
        <!-- video end -->

        <!-- brand area start -->
        <section class="brand-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-active owl-carousel">
                            <div class="single-brand">
                                <img src="assets/img/brand/brand-01.jpg" alt="brand image">
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/brand/brand-02.jpg" alt="brand image">
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/brand/brand-03.jpg" alt="brand image">
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/brand/brand-04.jpg" alt="brand image">
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/brand/brand-05.jpg" alt="brand image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand area end -->

</main>
@endsection
