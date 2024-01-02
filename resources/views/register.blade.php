<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('checkregister') }}" class="sign-up-form" method="POST">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username"
                            name="userName"style="border-top-right-radius: 30px; border-bottom-right-radius: 30px" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="DisplayName" name="DisplayName"
                            style="border-top-right-radius: 30px; border-bottom-right-radius: 30px" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email"
                            name="email"style="border-top-right-radius: 30px; border-bottom-right-radius: 30px" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="number" placeholder="Phone"
                            name="phoneNumber"style="border-top-right-radius: 30px; border-bottom-right-radius: 30px" required/>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password"
                            name="password"style="border-top-right-radius: 30px; border-bottom-right-radius: 30px"required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="confirmPassword" placeholder="confirmPassword"
                            name="confirmPassword"style="border-top-right-radius: 30px; border-bottom-right-radius: 30px" required/>
                    </div>
                    <div>
                     @if (isset($successMessage))
                     <span style="color: red">{{ $successMessage }}</span>
                     @endif
                     @if (isset($success))
                     <span style="color: red">{{ $success}}</span>
                     @endif
                    </div>
                    <a href="{{ route('login') }}" style="color: black; margin-left: 250px">Sign in</a>
                    <input type="submit" value="Sign Up" class="btn solid" />

                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="{{ route('login') }}" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel right-panel">

                <div class="content">
                    <h3>One of us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>

                </div>
                <img src="{{ asset('storage\image\R-removebg-preview.png') }}" class="image" alt="">
            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>
