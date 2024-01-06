@extends('layout')
@section('main')
<textarea id="myTextarea">1 cup rice,
    10 oz chickpeas</textarea>

<p><button type="button" id="submitButton" fdprocessedid="v6gglb">Analyze</button>
<button type="button" class="btnpx-5 calc-analysis-api-new" style="display: inline-block;"
fdprocessedid="y0po5h">New recipe</button>
</p>

<div class="demo-result">
<div class="col-md-12">
<div id="myElement"></div>
</div>
</div>


<div class="col-sm-5 col-demo-facts-auto">
<div class="demo-result-label">
<div class="col-12">
<section class="performance-facts" id="performance-facts">
<div class="performance-facts__header">
<h1 class="performance-facts__title">Nutrition Facts</h1>
</div>
<div id="calories"></div>
<p class="small-info" id="small-nutrition-info">*Percent Daily Values are based on a 2000 calorie
diet</p>
</section>
</div>
</div>
</div>


<script src="{{ asset('js\jquery\dist\jquery.min.js') }}"></script>

<script src="{{ asset('js\Calo.js') }}"></script>
@endsection
