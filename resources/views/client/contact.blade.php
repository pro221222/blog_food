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
        <h1 class="hero__title">Contact</h1>
    </section>
    <!-- Hero section end -->

    <!-- Contact section start -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                    <h2 class="contact__title">Leave a comment</h2>
                    <form class="contact__form">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input required type="text" class="conatact__form-name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input required type="email" class="contact__form-email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="contact__form-subject" placeholder="Subject">
                                </div>

                                <div class="form-group">
                                    <textarea required class="contact__form-message" name="subject" id="subject"
                                        cols="30" rows="10" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="contact__form-btn">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">
                    <div class="contact__logo">
                        <img src="./images/logo.svg" alt="">
                    </div>
                    <div class="contact__info">
                        <ul class="contact__info-list">
                            <li>
                                <h3>Address:</h3>
                                <p>481 Creekside Lane Avila</p>
                                <p>Beach, CA 93424</p>
                            </li>
                            <li>
                                <h3>Phone:</h3>
                                <p>+53 345 7953 32453</p>
                                <p>+53 345 7557 822112</p>
                            </li>
                            <li>
                                <h3>Email:</h3>
                                <p>yourmail@gmail.com</p>
                            </li>
                        </ul>

                        <ul class="contact__info-social">
                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
