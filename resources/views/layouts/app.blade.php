<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Cars Admin</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="{{ url('joli-admin/css/theme-default.css')}}"/>                          
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="{{ url('admin/dashboard') }}">Car Rental</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{ url('joli-admin/assets/images/users/no-image.jpg') }}" alt="user-image"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{ url('joli-admin/assets/images/users/no-image.jpg') }}" alt="user-image"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">{{ @Auth::user()->name }}</div>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="@if(Route::current()->getName() == 'dashboard') active @endif">
                        <a href="{{ route('dashboard') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>
                    <li class="@if(Route::current()->getName() == 'cars.list' || Route::current()->getName() == 'cars.add' || Route::current()->getName() == 'cars.edit') active @endif">
                        <a href="{{ route('cars.list') }}"><span class="fa fa-car"></span> <span class="xn-text">Cars</span></a>                        
                    </li>
                   
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                   
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button btn-danger pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                                  
                
                <!-- PAGE CONTENT WRAPPER -->          


                @yield('content')


                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="{{ url('logout') }}" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

    <!-- START SCRIPTS -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/jquery/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/bootstrap/bootstrap.min.js') }}"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{ url('joli-admin/js/plugins/icheck/icheck.min.js') }}"></script>        
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>
        
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/morris/raphael-min.js') }}"></script>
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/morris/morris.min.js') }}"></script>       
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/rickshaw/d3.v3.js') }}"></script>
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
        <script type='text/javascript' src="{{ url('joli-admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script type='text/javascript' src="{{ url('joli-admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>                
        <script type='text/javascript' src="{{ url('joli-admin/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>                
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/owl/owl.carousel.min.js') }}"></script>                 
        
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins.js') }}"></script>        
        <script type="text/javascript" src="{{ url('joli-admin/js/actions.js') }}"></script>
        
        <script type="text/javascript" src="{{ url('joli-admin/js/demo_dashboard.js') }}"></script>
        <script type="text/javascript" src="{{ url('joli-admin/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>  
        <!-- END TEMPLATE -->

        
        <!-- Toaster -->
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
		{!! Toastr::message() !!}
		<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        <!-- Toaster -->
<style>
    .error{
        color: red;
    }
</style>
       

    <!-- END SCRIPTS -->  

    </body>
</html>






