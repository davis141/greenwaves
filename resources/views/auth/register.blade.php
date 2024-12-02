<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        /* Your existing styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html, body {
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
            box-shadow: -3px -3px 7px #ffffff73, 2px 2px 5px rgba(94,104,121,0.288);
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

        .field:nth-child(2), .field:nth-child(3) {
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

        .field input:valid ~ label {
            opacity: 0;
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

        .sign-in {
            margin-top: 10px;
            color: #595959;
            font-size: 16px;
        }

        .sign-in a {
            color: #3498db;
            text-decoration: none;
        }

        .sign-in a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: left;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="text">
            Get Started 😊
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Username -->
            <div class="field">
                <input type="text" name="username" value="{{ old('username') }}" required aria-label="Username">
                <span class="fas fa-user"></span>
                <label>Username</label>
                @error('username')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="field">
                <input type="email" name="email" value="{{ old('email') }}" required aria-label="Email">
                <span class="fas fa-envelope"></span>
                <label>Email</label>
                @error('email')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="field" style="margin-top:10px;">
                <input type="password" name="password" required aria-label="Password">
                <span class="fas fa-lock"></span>
                <label>Password</label>
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="field" style="margin-top:10px;">
                <input type="password" name="password_confirmation" required aria-label="Confirm Password">
                <span class="fas fa-lock"></span>
                <label>Confirm Password</label>
                @error('password_confirmation')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Sign Up</button>
            <div class="sign-in">
                Already a member? <a href="{{ route('signin') }}">Sign in now</a>
            </div>
        </form>
    </div>
</body>
</html>
