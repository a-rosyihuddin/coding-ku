@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center pesan">
                <h1>Krusty Krab</h1>
                <h2>restourant penyedia makanan laut dan juga darat</h2>
                <div>
                    <a href="login" class="button">
                        <button>Pesan</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="img/logo/landing-page.png" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Rekomendasi Menu</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="img/menu/menu1.png" class="img-fluid" alt="" />
                        </div>
                        <div class="row member-info">
                            <h4>Salad</h4>
                            <span>Rp. 20.0000</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="img/menu/menu2.png" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                            <h4>Ayam Bakar Potong</h4>
                            <span>Rp. 30.000</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="img/menu/menu3.png" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                            <h4>Chili Rose</h4>
                            <span>Rp. 25.000</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="img/menu/menu4.png" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                            <h4>Ayam Prostos</h4>
                            <span>Rp. 35.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
</main>
<!-- End #main -->

@endsection
