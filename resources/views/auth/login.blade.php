<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: grid;
            place-items: center;
            background: #dde1e7;
            text-align: center;
        }

        .content {
            width: 350px;
            padding: 40px 30px;
            background: #dde1e7;
            border-radius: 10px;
            box-shadow: -3px -3px 7px #ffffff73, 2px 2px 5px rgba(94, 104, 121, 0.288);
        }

        .content .text {
            font-size: 33px;
            font-weight: 600;
            margin-bottom: 35px;
            color: #595959;
        }

        .field {
            height: 50px;
            width: 100%;
            display: flex;
            position: relative;
        }

        .field:nth-child(2) {
            margin-top: 20px;
        }

        .field input {
            height: 100%;
            width: 100%;
            padding-left: 45px;
            outline: none;
            border: none;
            font-size: 18px;
            background: #dde1e7;
            color: #595959;
            border-radius: 25px;
            box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #ffffff73;
            transition: box-shadow 0.3s ease-in-out;
        }

        .field input:focus {
            box-shadow: inset 1px 1px 2px #BABECC, inset -1px -1px 2px #ffffff73;
        }

        .field span {
            position: absolute;
            color: #595959;
            width: 50px;
            line-height: 50px;
        }

        .field label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 45px;
            pointer-events: none;
            color: #666666;
        }

        .field input:valid~label {
            opacity: 0;
        }

        .forgot-pass {
            text-align: left;
            margin: 10px 0 10px 5px;
        }

        .forgot-pass a {
            font-size: 16px;
            color: #3498db;
            text-decoration: none;
        }

        .forgot-pass a:hover {
            text-decoration: underline;
        }

        button {
            margin: 15px 0;
            width: 100%;
            height: 50px;
            font-size: 18px;
            line-height: 50px;
            font-weight: 600;
            background: #dde1e7;
            border-radius: 25px;
            border: none;
            outline: none;
            cursor: pointer;
            color: #595959;
            box-shadow: 2px 2px 5px #BABECC, -5px -5px 10px #ffffff73;
            transition: color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        button:focus {
            color: #3498db;
            box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #ffffff73;
        }

        .sign-up {
            margin: 10px 0;
            color: #595959;
            font-size: 16px;
        }

        .sign-up a {
            color: #3498db;
            text-decoration: none;
        }

        .sign-up a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="text">
            Welcome Back 😊
        </div>
        <form action="/login" method="post">
        @csrf
            <div class="field">
                <input type="text" required aria-label="Email" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                <span class="fas fa-user"></span>
                <label>Email</label>
                @error('email')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="field">
                <input id="password" type="password" type="password" name="password" required autocomplete="current-password" required aria-label="Password">
                <span class="fas fa-lock"></span>
                <label>Password</label>
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="forgot-pass">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
            <button type="submit">Sign in</button>
            <div class="sign-up">
                Not a member? <a href="{{ route('register') }}">Sign up now</a>
            </div>
        </form>
    </div>
</body>

</html>