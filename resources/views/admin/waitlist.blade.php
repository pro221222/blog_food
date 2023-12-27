@extends('layoutadmin')
@section('main')

    <div class="main-container">
        <div class="pd-ltr-20 height-100-p xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Blog</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Blog
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
                                <div class="blog-list">
                                    <ul>
                                        @foreach ($waitlist as $item)
                                        @if ($item['isFavorite'] == false)
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="{{ $item['thumbnail'] }}" alt="" class="bg_img" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4>
                                                            <a href="#">{{ $item['nameFood'] }}</a>
                                                        </h4>
                                                        <div class="blog-by">
                                                            <p> {{ $item['description'] }} </p>
                                                            <div>
                                                            <div class="pt-10">
                                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                                            </div>
                                                            <div class="pt-10">
                                                                <a href="#" class="btn btn-outline-primary">duyet</a>
                                                            </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                                {{-- <div class="blog-pagination">
                                    <div class="btn-toolbar justify-content-center mb-15">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-outline-primary prev"><i
                                                    class="fa fa-angle-double-left"></i></a>
                                            <a href="#" class="btn btn-outline-primary">1</a>
                                            <a href="#" class="btn btn-outline-primary">2</a>
                                            <span class="btn btn-primary current">3</span>
                                            <a href="#" class="btn btn-outline-primary">4</a>
                                            <a href="#" class="btn btn-outline-primary">5</a>
                                            <a href="#" class="btn btn-outline-primary next"><i
                                                    class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
