<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/login.css">
  </head>

<body>

<h2 class="login">Login Form</h2>

<form action="/login" method="POST">
  @csrf
  <div class="container">
    @if(session()->has('success'))
      {{ session('success') }}
      <br>
    @endif
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" value="{{ old('email') }}">
    @error('email')
    <div>
      {{ $message }}
      <br>
    </div>
    @enderror

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" >
    @error('password')
    <div>
      {{ $message }}
      <br>
    </div>
    @enderror
    
    @if(session()->has('loginError'))
      {{ session('loginError') }}
      <br>
    @endif    
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="window.location.href='/'">Cancel</button>
    <span class="psw">Belum punya akun? <a href="/register">Registrasi sekarang?</a></span>
  </div>
</form>

</body>
</html>