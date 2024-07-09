@extends('user.main')
@section('content')

{{-- @php
    $kurikulum=App\Models\Kurikulum::orderBy('id', 'asc')->get();
@endphp --}}
<main>
    <!-- page title start -->
    <div class="page-title-area section-notch pt-170 pb-170" style="background-image: url('{{ asset('images/person_1-min.jpg')}}">

        <div class="banner-overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title">
                    <h2>Meet Our Staffs</h2>
                    <div class="breadcrumb-list text-left">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Teacher</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- page title end -->

 <!-- teacher area start -->
 <section class="team-area pt-110 pb-120">
     <div class="container">
         <div class="row mt-none-30">
            {{-- @foreach ($guru as $item)

                    <div class="about_card">
                        <div class="about-detail">
                            <div class="about_img-box">
                                <img src="{{ asset('/storage/gurus/'. $item->foto) }}" class="rounded"
                                    style="width: 150px">
                            </div>
                            <div class="card_detail-ox">
                                <h4>{{ $item->nama }}</h4>
                                <p class="tmt-3">
                                    <small>TTL</small> <br>
                                    {{ $item->tempat_lahir }} , {{ $item->tanggal_lahir }} <br>
                                    <small>Agama</small> <br>
                                    {{ $item->agama }} <br>
                                    <small>Jenis kelamin</small> <br>
                                    @if ( $item->jenis_kelamin === 0 )
                                    Laki-laki
                                    @else
                                    Perempuan
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="aboute_button">
                            <a href="{{ route('guru.show', $item->id) }}" class="about_btn " >
                                Read More
                            </a>
                        </div>
                    </div>
                @endforeach --}}
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-team text-center mt-30">
                    <div class="team-thumb">
                       <img src="{{asset('images/person_1-min.jpg')}}" alt="">  {{-- $item->gambar --}}
                    </div>
                    <div class="team-info">
                        <h3><a href="teacher-single.html">Broklyn Doel</a></h3>
                        <span>Sains Teacher</span>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
             <div class="col-xl-3 col-lg-3 col-md-6">
                 <div class="single-team text-center mt-30">
                     <div class="team-thumb">
                         <img src="{{asset('images/person_2-min.jpg')}}" alt="">
                     </div>
                     <div class="team-info">
                         <h3><a href="teacher-single.html">Alex Jhonson</a></h3>
                         <span>Art Teacher</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6">
                 <div class="single-team text-center mt-30">
                     <div class="team-thumb">
                         <img src="{{asset('images/person_3-min.jpg')}}" alt="">
                     </div>
                     <div class="team-info">
                         <h3><a href="teacher-single.html">Janaton Doe</a></h3>
                         <span>English Teacher</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6">
                 <div class="single-team text-center mt-30">
                     <div class="team-thumb">
                         <img src="{{asset('images/person_4-min.jpg')}}" alt="">
                     </div>
                     <div class="team-info">
                         <h3><a href="teacher-single.html">Robot Jhonson</a></h3>
                         <span>Math Teacher</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6">
                 <div class="single-team text-center mt-30">
                     <div class="team-thumb">
                         <img src="{{asset('images/person_5-min.jpg')}}" alt="">
                     </div>
                     <div class="team-info">
                         <h3><a href="teacher-single.html">Helam Lie</a></h3>
                         <span>Sains Teacher</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6">
                 <div class="single-team text-center mt-30">
                     <div class="team-thumb">
                         <img src="{{asset('images/person_5-min.jpg')}}" alt="">
                     </div>
                     <div class="team-info">
                         <h3><a href="teacher-single.html">Alex Lia</a></h3>
                         <span>Art Teacher</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6">
                 <div class="single-team text-center mt-30">
                     <div class="team-thumb">
                         <img src="{{asset('images/person_2-min.jpg')}}" alt="">
                     </div>
                     <div class="team-info">
                         <h3><a href="teacher-single.html">Jonson Rabe</a></h3>
                         <span>English Teacher</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6">
                 <div class="single-team text-center mt-30">
                     <div class="team-thumb">
                         <img src="{{asset('images/person_5-min.jpg')}}" alt="">
                     </div>
                     <div class="team-info">
                         <h3><a href="teacher-single.html">Robin Doe</a></h3>
                         <span>Math Teacher</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>


 </section>
 <!-- teacher area end -->

 </main>
@endsection
