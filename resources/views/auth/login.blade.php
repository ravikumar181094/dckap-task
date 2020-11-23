<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>DCKAP - Car Rental</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ url('joli-admin/css/theme-default.css') }}"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="car-rent">Car Rental</div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form action="{{ route('login') }}" class="form-horizontal" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="email" placeholder="Email"/>
                            @error('email')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                            @error('password')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-block">Log In</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    </form>
                </div>
            </div>
            
        </div>
        
    </body>
</html>

<style>
    .error{
        color: red;
    }
    .car-rent{
        font-size: 26px;
        text-align: center;
        color: lemonchiffon;
        text-transform: uppercase;
        font-weight: bold;
        margin: 16px;
    }
</style>