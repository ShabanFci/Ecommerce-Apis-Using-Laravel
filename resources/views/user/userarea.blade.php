<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
     <br><br><br><br>
    <div class="row">
         <div class="container" align="center" style="background-color: #ccff00;border-radius: 50px;border:solid #ccff00;max-width: 700px">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">

                   <h2>Welcome To Our Site</h2> 
                   @if(Auth::user())
                   <a href="{{route('logout')}}">Logout</a>
                   @else
                   <a class="btn btn-primary" href="{{route('login')}}">Login</a>
                   <a class="btn btn-primary" href="{{route('register')}}">Register</a>
                   <br>
                   @endif
             </div>

