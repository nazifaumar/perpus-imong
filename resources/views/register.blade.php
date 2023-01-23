<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wikbook</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
  </head>
  <body>
    <div class="center">
      <h1>Register</h1>
      <form method="post" action="{{route('register.post')}}">
        @csrf
        <div class="txt_field">
          <input name="name" type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        
        <div class="txt_field">
            <input name="email" type="email" required>
            <span></span>
            <label>Email</label>
          </div>
          
        <div class="txt_field">
            <input name="address" type="text" required>
            <span></span>
            <label>Address</label>
          </div>
          
        <div class="txt_field">
            <input name="tlp" type="number" required>
            <span></span>
            <label>Number Phone</label>
          </div>

        <div class="txt_field">
          <input name="password" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Don't have account? <a href="/login" style="text-decoration: none">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
