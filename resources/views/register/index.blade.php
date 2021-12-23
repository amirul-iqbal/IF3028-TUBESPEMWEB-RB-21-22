<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/register.css">
  </head>

<body>
<div class="register">
  <form action="/register" method="POST">
    @csrf
    <div class="container">
      <h1 class="text">Register</h1>
      <p class="text">Please fill in this form to create an account.</p>
      <hr>

      <label for="name"><b>Nama</b></label>
      <input type="text" placeholder="Enter Nama" name="name" id="name" value="{{ old('name') }}">
      @error('name')
      <div>
        {{ $message }}
        <br>
      </div>
      @enderror

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" value="{{ old('username') }}">
      @error('username')
      <div>
        {{ $message }}
        <br>
      </div>
      @enderror

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

      <hr>

      <button type="submit" class="registerbtn">Register</button>
    </div>
    
    <div class="container signin">
      <button type="button" class="cancelbtn" onclick="window.location.href='/'">Cancel</button>
      <p>Already have an account? <a href="/login">Login</a>.</p>
    </div>
  </form>
</div>

</body>
</html>