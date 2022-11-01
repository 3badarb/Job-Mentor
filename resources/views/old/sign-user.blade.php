<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="./style/st5.css" />
  </head>
  <body>
    <div class="layout">

            @include('old.upbar')
    </div>
    <div class="form">
      <p class="p1">Sign Up</p>

      <form method="POST"  action="/sign-as-user" class="form-f">
          @csrf
        <input type="text" name="name" id="name" placeholder="Your Name" value="{{old('name')}}">

        <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}">

        <input type="password" name="password" id="password" placeholder="Password">

        <input type="password" name="password_confirmation" id="password_confirmation"
               placeholder="Retype password">
        <input type="submit" id="submit" value="Sign Up">

          @if($errors->any())
              @foreach($errors->all() as $error)

              <p>
                  <small style="color: lightcoral">

                      @if($error === "The email has already been taken.")
                          You did sign before ,You have an account try to login
                        @break
                      @else
                          {{$error}}
                      @endif
                  </small>

              </p>
              @endforeach
          @endif
      </form>
    </div>
  </body>
</html>
