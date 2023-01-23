<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="">
        @csrf
        <div class="txt_field">
          <input type="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Don't have account? <a href="/register" style="text-decoration: none">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
