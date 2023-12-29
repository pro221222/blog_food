<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('checklogin') }}" class="sign-in-form" method="post">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username"
                            style="border-top-right-radius: 30px; border-bottom-right-radius: 30px" required/>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password"
                            style="border-top-right-radius: 30px; border-bottom-right-radius: 30px" required/>
                    </div>
                    <input type="submit" value="Login" class="btn solid" />

                    <p class="social-text">Or Sign in with social platforms</p>
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
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                   <a href="{{ route('register') }}"><button class="btn transparent">Sign Up</button></a>
                </div>
                <img src="{{ asset('storage\image\scaletowidth-removebg-preview.png') }}" class="image" alt="">
            </div>

            {{-- <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="{{ asset('storage\image\R-removebg-preview.png') }}" class="image" alt="">
            </div> --}}
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
