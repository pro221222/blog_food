@extends('layoutadmin')
@section('main')
<?php
 session_start();
?>
    <style>
        .switch-btn {
            display: none;
            /* Hide the actual checkbox */
        }

        .switchery {
            cursor: pointer;
            display: inline-block;
            position: relative;
            width: 30px;
            height: 15px;
            margin: 0;
            border-radius: 15px;
            background-color: #e5e5e5;
            transition: background-color 0.4s ease;
        }

        .switchery>small {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #fff;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
            transition: left 0.2s ease, background-color 0.4s ease;
        }

        /* Additional style for checked state */
        .switchery-checked {
            background-color: #0099ff;
        }

        .switchery-checked small {
            left: 15px;
            background-color: #fff;
        }
    </style>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <!-- basic table  Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">User</h4>
                        </div>

                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">user-name</th>
                                <th scope="col">email</th>
                                <th scope="col">phone</th>
                                <th scope="col">role</th>
                                <th scope="col">edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                {{-- <input class="id" value=" {{$item['id']  }} " /> --}}
                            <tr>
                                <th scope="row"></th>
                                <td>{{ $item['displayName'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>{{ $item['phoneNumber'] }}</td>

                                <td>

                                    <input type="checkbox" checked class="switch-btn" data-color="#0099ff" />

                                </td>
                                <td>
                                    <div class="table-actions">
                                        {{-- <a href="#" data-color="#265ed7"><i class="icon-copy bi bi-pencil"></i></a> --}}
                                        <a href="#" data-color="#e95959"><i class="icon-copy bi bi-trash"></i></a>
                                    </div>
                                </td>

                            </tr>

                              @endforeach
                            </div>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var switchBtn = document.querySelector('.switch-btn');
            var switchery = document.querySelector('.switchery');
            var clickCount = 0;

            switchery.addEventListener('click', function() {
                clickCount++;

                // Toggle the checkbox every two clicks
                if (clickCount % 2 === 0) {
                    switchBtn.checked = !switchBtn.checked;

                    // Toggle the switchery style
                    switchery.classList.toggle('switchery-checked');
                } else {
                    // Reset click count after the first click
                    setTimeout(function() {
                        clickCount = 0;
                    }, 300);
                }
            });
        });
    </script>
@endsection
