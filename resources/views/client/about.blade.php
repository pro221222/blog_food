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
        <h1 class="hero__title">About us</h1>
    </section>
    <!-- Hero section end -->

    <!-- About section start -->
    <section class="about" style="overflow-x: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="0">
                    <div class="about__content">
                        <h2 class="about__title">About our great team</h2>
                        <p class="about__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut
                            sunt corporis consequuntur iure, eos voluptates officiis illum sapiente ea hic eligendi
                            consequatur? Totam nemo laboriosam enim commodi corporis eveniet, iste veniam soluta
                            officia nostrum quasi veritatis eius odit cupiditate, doloremque, ad ipsa mollitia sequi
                            voluptatibus aperiam. Cum ducimus nesciunt iure facere quae illo nulla reprehenderit
                            voluptas. Blanditiis velit quod, beatae, dolor accusantium labore quae inventore, alias
                            recusandae minima doloribus nostrum.</p>
                        <div class="about__link">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="150">
                    <img class="about__thumbnail" src="./images/about.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- Facts section start -->
    <section class="facts" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
        <div class="container">
            <ul class="facts__list-items">
                <li data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                    <div class="fact-item">
                        <img class="fact-item__image" src="./images/icon/1.png" alt="">
                        <h2 class="fact-item__big-number">1287</h2>
                        <p class="fact-item__name">Amazing Receipies</p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <div class="fact-item">
                        <img class="fact-item__image" src="./images/icon/2.png" alt="">
                        <h2 class="fact-item__big-number">25</h2>
                        <p class="fact-item__name">Wine pairings</p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
                    <div class="fact-item">
                        <img class="fact-item__image" src="./images/icon/3.png" alt="">
                        <h2 class="fact-item__big-number">471</h2>
                        <p class="fact-item__name">Meat Receipies</p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="450">
                    <div class="fact-item">
                        <img class="fact-item__image" src="./images/icon/4.png" alt="">
                        <h2 class="fact-item__big-number">326</h2>
                        <p class="fact-item__name">Desert receipies</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Facts section end -->
</main>
@endsection
