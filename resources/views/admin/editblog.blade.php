@extends('layoutadmin')
@section('main')
<?php
 session_start();
?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    post
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a
                                class="btn btn-primary dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="html-editor pd-20 card-box mb-30">
                <h4 class="h4 text-blue">post</h4>
                <label for="">tiêu đề</label>
                <input type="text" style="border:1px solid rgb(227, 225, 225) ">
                <br>
                <label for="">ảnh</label>
                <input type="fide" style="border:1px solid rgb(227, 225, 225) ">
                <textarea
                    class="textarea_editor form-control border-radius-0"
                    placeholder="Enter text ..."
                ></textarea>
            </div>
        </div>

    </div>
</div>
@endsection
