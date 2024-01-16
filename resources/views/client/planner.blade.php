@extends('layout')
@section('main')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <style>
    .tooltip-inner{
        background-color: #f12260;
        color:black;
    }
    .container {
    max-width: 1200px;
    margin: 20px auto;
  }

  /* Header styles */
  .r-title {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    position: relative;
  }



  /* Meal planner title styles */
  .r-title span {
    margin-left: 15px;
    font-size: 18px;
    align-content: center;
  }

  /* Day title styles */
  .day-title {
    background-color: #ff2a6b;
    color: #fff;
    text-align: center;
    padding: 10px;
    font-weight: bold;
  }

  /* Key title styles */
  .key-title {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 10px;
    font-weight: bold;
  }

  /* Nutrient block styles */
  .nutr-block {
    border: 1px solid #dee2e6;
    margin-bottom: 20px;
    padding: 15px;
  }

  /* Recipe title styles */
  .recipe-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  /* Recipe icon styles */
  .recipe-ico {
    width: 50px;
    height: 50px;
    background-color: #ffffff;
    margin-right: 10px;
  }

  /* Serving styles */
  .serv {
    font-weight: bold;
  }

  /* Daily calorie area styles */
  .daily-cal-area {
    background-color: #fff;
    color: #000000;
    text-align: center;
    padding: 5px;
    margin-top: 10px;
  }

  /* Nutrition left styles */
  .nutr-left {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .nutr-left li {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
  }



  /* Responsive styles for smaller screens */
  @media (max-width: 768px) {
    .col-md-1,
    .col-md-11 {
      width: 100%;
    }
  }


  </style>

</head>


<body>

  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card-header" id="heading1">
          <h2><b>Bước 1:</b> đặt bữa ăn trong ngày</h2>
          <h5 class="mb-0">
            <button class="btn btn-link" fdprocessedid="9u14zn">các bữa ăn mỗi ngày</a>
          </h5>
        </div>
        <div class="card-header" id="heading2" style="display: block;">
          <h2><b>Step 2:</b> bộ lọc cho tất cả bữa ăn</h2>
          <h5 class="mb-0">
            <button class="btn btn-link" fdprocessedid="ppj92k">dị ứng</button>
          </h5>
        </div>
        <div class="card-header" id="heading3" style="display: block;">
          <h5 class="mb-0">
            <button class="btn btn-link" fdprocessedid="akhoi">chế độ ăn kiêng</button>
          </h5>
        </div>
        <div class="card-header" id="heading4" style="display: block;">
          <h5 class="mb-0">
            <button class="btn btn-link" fdprocessedid="x1t9sk">Calo</button>
          </h5>
        </div>
      </div>
      <div class="col" style="margin-top: 100px;">
        <div id="setmeals"></div>

      </div>
    </div>
  </div>

      <a class="btn btn-primary analyze-demo" style="background-color: #f12260; cursor: pointer;color:rgb(255, 255, 255);margin-left:180px;padding:5px 10px;border-radius:20px" >Search</a>
      <div class="result-area" style="border: solid 2px #f12260; margin-top:10px"></div>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    });
  </script>
  <script src="{{ asset('js\meal.js') }}"></script>
</body>

@endsection
