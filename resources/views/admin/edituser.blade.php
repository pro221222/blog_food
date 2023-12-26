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
                                        Edituser
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
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
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Edituser</h4>

                        </div>

                    </div>
                    <form accept="route" method="post">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="Johnny Brown" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" value="bootstrap@example.com" type="email" />
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">URL</label>
                            <div class="col-sm-12 col-md-10">
                                <input
                                    class="form-control"
                                    value="https://getbootstrap.com"
                                    type="url"
                                />
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" value="1-(111)-111-1111" type="tel" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" value="password" type="password" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and
                                time</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control datetimepicker" placeholder="Choose Date anf time"
                                    type="text" />
                            </div>
                        </div>
                        <button type="submit">update</button>
                    </form>
                </div>
                <!-- Default Basic Forms End -->
            </div>

        </div>
    </div>
@endsection
