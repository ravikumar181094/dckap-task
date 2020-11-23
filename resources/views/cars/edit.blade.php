@extends('layouts.app')

@section('content')
         <!-- START BREADCRUMB -->
         <ul class="breadcrumb">
                    <li><a href="">Home</a></li>
                    <li><a href="">Cars</a></li>
                    <li class="active">Edit</li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Cars</h2>
                </div>
                <!-- END PAGE TITLE -->  
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">    
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Edit Car</h3>
                                    <ul class="panel-controls">                                  
                                        <a href="{{ route('cars.list') }}" class="btn btn-primary">Back</a>                               
                                    </ul>           
                                </div>
                                <div class="panel-body">
                                <div class="col-md-6">
                                <form role="form" method="post" class="form-horizontal" action="{{ route('cars.update') }}" novalidate="novalidate">
                                @csrf
                                <input type="hidden" name="id" value="{{ $car->id }}">
                                <div class="panel-body"> 

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Company:</label>  
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="company" value="{{ old('company', $car->company) }}">
                                            @if($errors->has('company'))
                                                <div class="error">{{ $errors->first('company') }}</div>
                                            @endif
                                        </div>
                                    </div>  

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Model:</label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{ old('model', $car->model) }}" name="model" class="form-control">
                                            @if($errors->has('model'))
                                                <div class="error">{{ $errors->first('model') }}</div>
                                            @endif  
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Owner Name:</label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{ old('owner_name', $car->owner_name) }}" name="owner_name" class="form-control">
                                            @if($errors->has('owner_name'))
                                                <div class="error">{{ $errors->first('owner_name') }}</div>
                                            @endif  
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Address:</label>
                                        <div class="col-md-9">
                                            <textarea name="address" class="form-control"  rows="4">{{ old('address', $car->address) }}</textarea>
                                            @if($errors->has('address'))
                                                <div class="error">{{ $errors->first('address') }}</div>
                                            @endif 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Vehicle Number:</label>
                                        <div class="col-md-9">
                                            <input type="text" value="{{ old('vehicle_number', $car->vehicle_number) }}" name="vehicle_number" class="form-control">
                                            @if($errors->has('vehicle_number'))
                                                <div class="error">{{ $errors->first('vehicle_number') }}</div>
                                            @endif  
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Price:</label>
                                        <div class="col-md-9">
                                            <input type="number" value="{{ old('price', $car->price) }}" min="0" name="price" class="form-control">
                                            @if($errors->has('price'))
                                                <div class="error">{{ $errors->first('price') }}</div>
                                            @endif  
                                        </div>
                                    </div>
                                   
                                    <div class="form-group"> 
                                        <div class="col-md-12">   
                                        <label class="col-md-3 control-label"></label>                                
                                            <button class="btn btn-primary pull-center">Update</button></form>
                                            <a href="{{ route('cars.list') }}" class="btn btn-primary">Cancel</a>                                            
                                        </div>
                                    </div>                                                                                
                                </div>                                               
                                
                            <!-- END JQUERY VALIDATION PLUGIN -->
                            </div>
                        </div>
                    </div>
                    <!-- END DEFAULT DATATABLE -->
                </div>
            </div>                                
            
        </div>
        <!-- PAGE CONTENT WRAPPER -->
@endsection