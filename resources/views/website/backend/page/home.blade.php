@extends('website.layout.index')
@section('content')



<div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid w-100 h-100 overflow-hidden" src="{{ asset('asset/img/bannerrq.jpeg')}}"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
                <h5>Penerimaan Santri Baru</h5>
                <p>Mulia Dengan Al Quran</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img-fluid w-100 h-100 overflow-hidden" src="{{ asset('asset/img/banner2.jpeg')}}"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
                <h5>Penerimaan Santri Baru</h5>
                <p>Mulia Dengan Al Quran</p>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>




<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">
        <div class="container-fluid">
            <h2 class="h1-responsive font-weight-bold text-center my-2">PROFILE RUMAH QURAN</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-1">Sebuah pendidikan Al-Quran yang bertujuan untuk memberikan
                kesempatan
                bagi kaum muslimin yang ingin putra-putrinya belajar
                Al Quran dan menghafalnya dengan baik, serta menanamkan kecintaan-Nya terhadap Al Quranul karim.

                Seperti sabda Rasulullah Shallalahu alaihi wa sallam , berikut :
                “Sesungguhnya Allah mempunyai keluarga diantara manusia, para sahabat bertanya,
                “ Siapakah mereka ya Rasulullah? “ Rasul menjawab, “ Para ahli Al Quran merekalah keluarga Allah dan
                pilihan-pilihan-Nya. “
                (HR. Ahmad).</p>
            <div class="container">
                <div class="row  pt-5 pb-5">

                    <div class="col-lg-5 " style=>

                        <div class=""><a class="gdlr-core-lightgallery gdlr-core-js "
                                data-lightbox-group="gdlr-core-img-group-2"><img data-lazyloaded="1"
                                    src="{{ asset('asset/img/profil.jpeg')}}" alt="11" width="510" height="350"
                                    title="Tasmi" data-ll-status="loaded" class="entered litespeed-loaded"><span
                                    class="gdlr-core-image-overlay "><i
                                        class="gdlr-core-image-overlay-icon  gdlr-core-size-22 icon_zoom-in_alt"></i></span></a>
                        </div>

                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>Tentang Rumah Quran</h3>
                            <p>Rumah Quran Khairo Assyarifiyah merupakan Yayasan Lembaga Pendidikan Tahfidz Quran.</p>
                            <p class="font-italic">
                                Lokasinya terletak Puri Nirwana 2 Blok AF 33, Rt 07/12, Jl Apel 5, Kelurahan Harapan
                                Jaya, Kecamatan Cibinong, Kabupaten Bogor.
                            </p>
                            <p>Rumah Quran Khairo Assyarifiyah dibangun diatas pondasi Taqwa dengan asas Al Qur’an dan
                                As Sunnah berdasarkan Manhaj As-Salaf
                                Ash-Shalih Ahlu Sunnah Wal Jama’ah. Berupaya memberikan kemudahan dan manfaat kepada
                                anak-anak usia dini dan remaja untuk mempelajari, mentadaburi dan menghafal Al-Quran
                                ,sehingga melahirkan santri Qur’ani yang Berilmu, Bertaqwa, Berakhlak Mulia, Berjiwa
                                Mandiri dan Bermanfaat untuk Umat.</p>
                        </div>

                    </div>
                    <div class="text">
                        <p>

                        </p>
                        <p>Pada tanggal 26 Maret 2020, Rumah Quran Khairo Assyarifiyah dinyatakan secara resmi mulai
                            beroprasi dengan diterbitkannya Surat Keputusan
                            Ketua Yayasan dan Pembina Yayasan Rumah Quran Khairo Assyarifuyah NO.
                            004/KY/SK/Yayasan-AMB/IV/2020. Bercita-cita untuk membentuk Santri Qur’ani penghafal Quran
                            Yang Berilmu, Bertaqwa, Berakhlak Mulia, Berjiwa Mandiri dan bermanfaat untuk Ummat.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <section>
        <div class="container course pb-5 pt-5">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Youtube Top 3</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Santri berprestasi dengan hafalan terbaik di live streaming youtube : </p>
            <div class="row">
            @foreach ($data as $t)
                <div class="col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $t->judul_youtube }}</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" style="width: 100%; height: 400px;"
                                src="https://www.youtube.com/embed/{{ $t-> url}}" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
                @endforeach





            </div>
        </div>

        <div class="wpo-about-area section-padding">
            <div class="wpo-case-wrap">
                <div class="wpo-case-slinder owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s;">
                    </div>
                </div>
            </div>
    </section>

        <div class="container course pb-5 pt-5">
            <h2 class="h1-responsive font-weight-bold text-center my-4">News / Event Terkini</h2>
            <!--Section description-->

            <div class="row">
            @foreach($news as $item)
                <div class="col-md-4">
                    <div class="card box">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    
                            <img src="{{ Storage::url('uploads/' . $item->photo) }}" class="img-fluid" />
                           <!-- <img src="{{ ('storage/app/public/uploads/' . $item->photo) }}" class="img-fluid" />-->
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul_news }}</h5>
                            <p class="card-text">{{ Str::limit($item->isi_news, 100) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <div class="wpo-about-area section-padding">
            <div class="wpo-case-wrap">
                <div class="wpo-case-slinder owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s;">
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container course pb-5 pt-5">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Program Unggulan</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Beberapa Program Unggulan yang diberikan Rumah Quran Khairo
                Assyarifiyah ialah sebagai berikut:</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card box">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ asset('asset/img/tahfidz.jpeg')}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tahfidz Quran</h5>
                            <p class="card-text">Program menghafal Al-Qur'an untuk anak usia 6 - 18 tahun yang
                                memungkinkan pembentukan
                                keterampilan, pengetahuan, dan sikap secara maksimal dalam menghafal Al-Qur'an..</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card box">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ asset('asset/img/tahsin.jpeg')}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tahsin Quran</h5>
                            <p class="card-text">Merupakan program belajar Al Qur’an mulai belajar mengenal huruf sampai
                                bisa membaca
                                Al Qur`an dengan izin Allah SWT dan juga meliputi belajar Tahsin dan Tajwid</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card box">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ asset('asset/img/tasmi 1 (8).jpeg')}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tasmi Quran</h5>
                            <p class="card-text">Tasmi' Al Qur'an yaitu memperdengarkan hafalan yang dimiliki tiap
                                santri di hadapan ustadzah dan santri lainnya dalam sekali duduk. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wpo-about-area section-padding">
            <div class="wpo-case-wrap">
                <div class="wpo-case-slinder owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s;">
                    </div>
                </div>
            </div>
    </section>
    <section>

        <!-- <div class="container">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Program</h2>
                 Section description
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                 Gallery
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="https://cdn.pixabay.com/photo/2016/06/25/12/52/laptop-1478822_960_720.jpg"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    </div>
                </div>
                Gallery
            </div> -->

    </section>


    <section>
        <div class="container mb-5">
            <!--Section: Contact v.2-->
            <section class="mb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Kontak Kami</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Silahkan Hubungi atau Kontak kami jika ada yang ingin
                    ditanyakan. Terima Kasih</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="https://formsubmit.co/araarsy16@gmail.com"
                            method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Nama</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="nohp" name="nohp" class="form-control">
                                        <label for="email" class="">No Hp</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2"
                                            class="form-control md-textarea"></textarea>
                                        <label for="message">Message</label>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                        </form>

                        <div class="text-center text-md-left">
                            <a class="btn btn-primary"
                                onclick="document.getElementById('contact-form').submit();">Send</a>
                        </div>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15857.898230755696!2d106.
                                8414708!3d-6.4614022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb247cbda867%3A0xca3bbda49dff3910!2sRumah%20Qur&#39;
                                an%20Khairo%20Assyarifiyah!5e0!3m2!1sid!2sid!4v1695872345477!5m2!1sid!2sid" width="600"
                            height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>"
                        </iframe>
                    </div>
                    <!--Grid column-->

                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>
    </section>

    @endsection
