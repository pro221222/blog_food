@extends('layout')
@section('main')
    <main>
        <!-- Hero section start -->
        <section class="hero" style="position: relative">
            <img src="{{ asset('storage\image\slider-bg-2.jpg') }}" alt="" style="width: 100%; height: 500px; position: absolute" >
            <div class="hero__container">

                <div class="hero__content">
                    <h1>
                        <span>Healthy Recipes</span>
                    </h1>
                    <h2>
                        <span>from the best chefs</span>
                    </h2>
                    <h3>
                        <span>for all the foodies</span>
                    </h3>
                </div>
            </div>
        </section>
        <!-- Hero section end -->

        <!-- Recipes list section start -->
        <section class="recipes-list">
            <div class="container">
                <div class="recipes-list__heading">
                    <h2 class="recipes-list__title">Latest recipes</h2>
                </div>

                <div class="row">
                    @foreach ($array as $item)

                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100">
                        <div class="recipes-list__item">
                            <a href="{{ route('recipe_detail',['id' => $item['postID']])}}">
                                <img src=" {{ asset($item['thumbnail'] ) }}" alt="" style="width: 300px; height: 310px;">
                                <div class="recipes-list__info-background">
                                    <div class="recipes-list__info">
                                        <h3>{{ $item['nameFood'] }}</h3>
                                        <div class="recipes-list__rating">
                                        @for ($i = 0; $i < $item['rating']; $i++)
                                        <i class="fas fa-star" style="color: #eee263;"></i>
                                        @endfor

                                            {{-- <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                @endforeach

                </div>
            </div>
        </section>

        <!-- Recipes-rating section start -->
        <section class="recipes-rating">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out"
                        data-aos-delay="0">
                        <div class="recipes-rating__col">
                            <h2 class="recipes-rating__title">Top rated recipes</h2>
                            <ul class="recipes-rating__top">
                                @foreach ($array as $item)


                                <li>
                                    <div class="recipes-rating__list-items">
                                        <div class="recipes-rating__image">
                                            <a href="{{ route('recipe_detail',['id' => $item['postID']]) }}"><img src="images/thumb/1.jpg" alt=""></a>

                                        </div>
                                        <div class="recipes-rating__info">
                                            <p class="recipes-rating__date"> March 14, 2018 </p>
                                            <a href="{{ route('recipe_detail',['id' => $item['postID']]) }}"><h3 class="recipes-rating__name">{{ $item['nameFood'] }}</h3></a>

                                            <ul class="recipes-rating__stars">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out"
                        data-aos-delay="150">
                        <div class="recipes-rating__col">
                            <h2 class="recipes-rating__title">Most liked recipes</h2>
                            <ul class="recipes-rating__liked">
                                @foreach ($array as $item)


                                <li>
                                    <div class="recipes-rating__list-items">
                                        <div class="recipes-rating__image">
                                            <a href="{{ route('recipe_detail',['id' => $item['postID']]) }}"><img src="images/thumb/6.jpg" alt=""></a>

                                        </div>
                                        <div class="recipes-rating__info">
                                            <p class="recipes-rating__date"> March 14, 2018 </p>
                                            <a href="{{ route('recipe_detail',['id' => $item['postID']]) }}"><h3 class="recipes-rating__name">{{ $item['nameFood'] }}</h3></a>

                                            <ul class="recipes-rating__stars">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                 @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
                        <div class="recipes-rating__blog">
                            <div class="recipes-rating__blog-image">
                                <img src="images/blog/1.jpg" alt="">

                                <div class="recipes-rating__content">
                                    <h3 class="recipes-rating__heading">Italian restaurant Review</h3>
                                    <p class="recipes-rating__author">By Maria Williams</p>
                                    <p class="recipes-rating__description">Donec quam felis, ultricies nec, pellente
                                        sque
                                        eu, pretium quis, sem. Nulla conseq uat massa quis enim. </p>
                                    <p class="recipes-rating__comments">2 comments</p>
                                </div>

                                <a href="#" class="recipes-rating__icon">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Recipes-rating section start -->

        <!-- Testimonials section start -->
        <section class="testimonials" style="overflow-x: hidden;">
            <div class="testimonials__container">
                <div class="row">
                    <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="0">
                        <div class="testimonials__bg">
                            <div class="testimonials__image">
                                <img src="images/thumb/11.jpg" alt="">
                            </div>
                            <div class="testimonials__content">
                                <p class="testimonials__date">March 14, 2018</p>
                                <h3 class="testimonials__title">Feta Cheese Burgers</h3>
                                <ul class="testimonials__rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <div class="testimonials__author">
                                    <img src="images/author.jpg" alt="" class="testimonials__avatar">
                                    <p class="testimonials__name">By Janice Smith</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="200">
                        <div class="testimonials__bg">
                            <div class="testimonials__image">
                                <img src="images/thumb/12.jpg" alt="">
                            </div>
                            <div class="testimonials__content">
                                <p class="testimonials__date">March 14, 2018</p>
                                <h3 class="testimonials__title">Mozarella Pasta</h3>
                                <ul class="testimonials__rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <div class="testimonials__author">
                                    <img src="images/author.jpg" alt="" class="testimonials__avatar">
                                    <p class="testimonials__name">By Janice Smith</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials section end -->

    </main>
    @endsection


