<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
        <div class="container" align="center" style="background-color: #ccff00;border-radius: 50px;border:solid #ccff00;max-width: 700px">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="logo">
                <h1 class="text-center head">Login</h1>
</div>
                <div class="">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-8">
                                <input style="border-radius: 30px;height: 50px;max-width: 700px" id="username" type="text" class="form-control" name="username" value="{{ old('name') }}" required autofocus>

                            </div>
                        </div>
<br>
                        <div class="row">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-8">
                                <input style="border-radius: 30px;height: 50px;max-width: 700px" id="password" type="password" class="form-control" name="password" required>

                               
                            </div>
                        </div>
                        <br>
                            <div class="col-md-6 col-md-offset-4" >
                                <div class="checkbox">
                                    <label style="font-weight: bold;">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
 <div class="form-group">
                            <div class="row">
                             <div class="col-lg-8">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                             </div>
                                <div class="col-lg-4">
                                <a href="{{route('register')}}">Create New Account</a>
                            </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                        
<br><br>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    </div>
</div>

