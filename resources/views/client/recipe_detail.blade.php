@extends('layout')
@section('main')

<main>
    <!-- Hero section start -->
    <section class="hero"></section>

        <img src="{{ asset('') }}" alt="" style="width: 100%; height: 500px;" >

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

                <div class="col-12 col-lg-7"> <?php echo $array['content'] ?> </div>

            </div>
        </div>

    </section>
    <style>

.fa-thumbs-up{
    color:black;
    font-size: 40px
}
#likeButton {
  background-color: #ffffff;
  color: #fff;
  padding: 5px 10px;
  border: none;
  cursor: pointer;
}

#likeButton.liked {
    .fa-thumbs-up{
        color: #003ffc;
    }

}

    </style>
    <a href="{{ route('unlike') }}">fdssdvdsdvds</a>
   <div class="post">
            <button id="likeButton"  data-bind="css: like() === true ? 'liked':'d' ">
                <i data-bind="click:toggleLike" class="fa-solid fa-thumbs-up"  ></i>
            </button>
            <span data-bind="text:cout()"></span>
          </div>
    <!-- Recipe-detail section end -->






        <!-- Comment Section -->


            <template class="reply-input-template">
                <div class="reply-input container">
                  <img src="images/avatars/image-juliusomo.webp" alt="" class="usr-img">
                  <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
                  <button class="bu-primary">SEND</button>
                </div>
              </template>

              <template class="comment-template">
                <div class="comment-wrp">
                  <div class="comment container">
                    <div class="c-score">
                      <img src="images/icon-plus.svg" alt="plus" class="score-control score-plus">
                      <p class="score-number">5</p>
                      <img src="images/icon-minus.svg" alt="minus" class="score-control score-minus">
                    </div>
                    <div class="c-controls">
                      <a  class="delete"><img src="images/icon-delete.svg" alt="" class="control-icon">Delete</a>
                      <a  class="edit"><img src="images/icon-edit.svg" alt="" class="control-icon">Edit</a>
                      <a  class="reply"><img src="images/icon-reply.svg" alt="" class="control-icon">Reply</a>
                    </div>
                    <div class="c-user">
                      <img src="images/avatars/image-maxblagun.webp" alt="" class="usr-img">
                      <p class="usr-name">maxblagun</p>
                      <p class="cmnt-at">2 weeks ago</p>
                    </div>
                    <p class="c-text">
                      <span class="reply-to"></span>
                      <span class="c-body"></span>
                    </p>
                  </div><!--comment-->
                  <div class="replies comments-wrp">
                  </div><!--replies-->
                </div>
              </template>
            <main>
              <div class="comment-section">

                <div class="comments-wrp">

                </div> <!--commentS wrapper-->
              <div class="reply-input container">
                  <img src="images/avatars/image-juliusomo.webp" alt="" class="usr-img">
                  <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
                  <button class="bu-primary">SEND</button>
                </div> <!--reply input-->
              </div> <!--comment sectio-->

              <div class="modal-wrp invisible">
                <div class="modal container">
                  <h3>Delete comment</h3>
                  <p>Are you sure you want to delete this comment? This will remove the comment and cant be undone</p>
                  <button class="yes">YES,DELETE</button>
                  <button class="no">NO,CANCEL</button>
                </div>
              </div>
            </main>





            <!-- Existing Comments will be added here -->



</main>
<script>









      // Hàm thiết lập nội dung cho thẻ div#content
      function set_content()
      {
        document.getElementById("content").innerHTML = {{ $array['content']}};
      }

      // Hàm lấy nội dung cho thẻ div#content
    //   function get_content()
    //   {
    //     var html = document.getElementById("content").innerHTML;
    //     alert("Nội dung cần lấy là: " + html);
    //   }


</script>
@endsection
