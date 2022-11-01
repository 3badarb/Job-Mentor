<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="./style/st2.css" />
  </head>
  <body>
    <div class="layout">
        @include('old.upbar')
    </div>
    <div class="form">
      <p class="p1">Log In</p>
      <p class="p2">You don't have an account? Then please <a href="/sign-up">Sign Up</a></p>
      <form method="POST" action="/log-in" class="form-f">
          @csrf
        <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}">

        <input type="password" name="password" id="password" placeholder="Password">

        <input type="submit" id="submit" value="Log In">
          @error('email')
          <small style="color: lightcoral">

              The email or password is wrong
          </small>
          @enderror
      </form>
    </div>

  </body>
</html>
