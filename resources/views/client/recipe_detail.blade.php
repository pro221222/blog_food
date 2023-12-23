@extends('layout')
@section('main')

<main>
    <!-- Hero section start -->
    <section class="hero"></section>
    <!-- Hero section end -->

    <!-- Recipe-detail section start -->
    <section class="recipe-detail" style="overflow-x: hidden;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="recipe-detail__header" data-aos="fade-up" data-aos-easing="ease-in-out"
                        data-aos-delay="0">
                        <h1 class="recipe-detail__heading">{{ $array['title']['nameFood'] }}</h1>
                        <p class="recipe-detail__date">{{ $array['title']['date'] }}</p>
                        <ul class="recipe-detail__rating">
                            @for ($i = 0; $i < $array['title']['rating']; $i++)
                           <i class="fas fa-star" style="color: #eee263;"></i>
                           @endfor
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-5" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
                    <div class="recipe-detail__box">
                        <div class="recipe-detail__summary">
                            <p>Prep: 15 mins</p>
                            <p>Cook: 30 mins</p>
                            <p>Yields: 8 Servings</p>
                        </div>
                        <h2 class="recipe-detail__title">Ingredients</h2>
                            <ul class="recipe-detail__check-box-list">
                                <li class="recipe-detail__check-box-item">
                                    <div class="form-group">
                                        @foreach ($array['ingredients'] as $item)
                                            <label for="">{{ $item}}</label>
                                            <br>
                                        @endforeach

                                    </div>
                                </li>
                            </ul>

                    </div>
                </div>

                <div class="col-12 col-lg-7">{{ $array['content']}}  </div>
            </div>
        </div>

    </section>

    <!-- Recipe-detail section end -->
    <div class="comment-container">

        <!-- Comment Form -->
        <div class="comment-form">
            <h2> Comment</h2>
            <form id="commentForm">

                <div class="content">
                    <img src="images/about.jpg" alt="Avatar" class="avatar">
                    <textarea id="commentText" name="commentText" rows="4" required></textarea>
                </div>

                <button type="button" onclick="submitComment()">Submit</button>

            </form>
        </div>

        <!-- Comment Section -->
        <div class="comment-section" id="commentSection">
            <!-- Existing Comments will be added here -->
        </div>

    </div>
</main>
@endsection