<link rel="stylesheet" type="text/css" href="css/admin.css">
<!DOCTYPE html>
<html lang = "en" dir = "ltr"

<head>
  <meta charset = "utf-8"
  </head>
  <body>
    <!-- @if(isset(Auth::user()->email))
        <script>window.location="/main/home";</script>
    @endif -->

    @if($message=Session::get('error'))
    <div class = "alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class = "box" action = "{{url('/main/checkLogin')}}" method = "post">
    {{csrf_field()}}

      <h1>EduCare</h1>
      <input type = "text" name = "email" placeholder="Email">
      <input type = "password" name = "password" placeholder="Password">
      <input type = "submit" name = "submit" value="Login">
      </form>

      </body>
      <html>    