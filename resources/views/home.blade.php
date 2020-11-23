@extends('layouts.app')

@section('content')
     <!-- START BREADCRUMB -->
     <ul class="breadcrumb">
                    <li><a >Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Dashboard</h2>
                </div>
                <!-- END PAGE TITLE --> 
                               
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Sales</div>                                                                        
                                        <div class="widget-subtitle">November</div>
                                        <div class="widget-int">Rs. 25690</div>
                                    </div>
                                </div>                           
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-book"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">11368</div>
                                    <div class="widget-title">Bookings</div>
                                    <div class="widget-subtitle">Today: 12</div>
                                </div>  
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='#">
                                <div class="widget-item-left">
                                    <span class="fa fa-car"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">15</div>
                                    <div class="widget-title">Available Cars</div>
                                    <div class="widget-subtitle">Tatal Cars: 45</div>
                                </div>                          
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->  
                </div>
                <!-- END PAGE CONTENT WRAPPER --> 
@endsection
