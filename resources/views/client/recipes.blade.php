@extends('layout')
@section('main')
<style>
    .hero {
    padding-top: 60px;
    padding-bottom: 60px;

    /* background-image: url(../images/page-top-bg.jpg); */
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;

    text-align: center;
}
</style>
<main>
    <!-- Hero section start -->
    <section class="hero">
        <h1 class="hero__title">Recipes</h1>
    </section>
    <!-- Hero section end -->

    <!-- Recipes list section start -->
    <section class="recipes-list">
        <div class="container">
            <div class="recipes-list__heading">
                <h2 class="recipes-list__title">Latest recipes</h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out"
                    data-aos-delay="100">
                    @foreach ($array as $item)
                    <div class="recipes-list__item">
                        <img src="{{ $item['thumbnail'] }}" alt="">
                        <div class="recipes-list__info-background">
                            <div class="recipes-list__info">
                                <h3>{{ $item['nameFood'] }}</h3>
                                <div class="recipes-list__rating">
                                    @for ($i = 0; $i < $item['rating']; $i++)
                           <i class="fas fa-star" style="color: #eee263;"></i>
                           @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="recipes-list__pagination">
                <span>01</span>
                <a href="#">02</a>
                <a href="#">03</a>
            </div>
        </div>
    </section>
    <!-- Contact section end -->
</main>
@endsection
