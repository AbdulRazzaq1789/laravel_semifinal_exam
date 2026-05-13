<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: block;
            width: 400px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="{{ route('login.store') }}" method="POST" class="form">
            @csrf

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" autofocus>
                @error('email')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
                @error('password')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="checkbox-group">
                <label style="display: flex; gap: 8px; align-items: center;">
                    <input type="checkbox" name="remember" value="1">
                    Remember me
                </label>
            </div>

            <button type="submit" class="btn btn-add">Login</button>
        </form>
    </div>
</body>

</html>
