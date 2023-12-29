@extends('layoutadmin')
@section('main')



<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Blog Detail</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('waitlist') }}">waitlist</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Blog Detail
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-img">
                                    <img src="{{ asset($array['title']['thumbnail']) }}" alt="" />
                                </div>
                                <div class="blog-caption">

                                    <h4 class="mb-10">
                                        {{ $array['title']['nameFood'] }}
                                    </h4>
                                    {{-- <p>{{ $item['postID'] }}</p> --}}

                                    <h5 class="mb-10">Nguyên Liệu </h5>
                                    <ul>
                                        @foreach ($array['ingredients'] as $ingre)
                                        <li>
                                            {{ $ingre }}
                                        </li>
                                    @endforeach

                                    </ul>
                                    <h5 class="mb-10">
                                        Nội dung
                                    </h5>
                                    <p>
                                        {{ $array['content']}}
                                    </p>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
