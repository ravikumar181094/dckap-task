@extends('layouts.app')

@section('content')
     <!-- START BREADCRUMB -->
     <ul class="breadcrumb">
                    <li><a href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="active">Cars</li>
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
                                    <h3 class="panel-title">Cars List</h3>                                    
                                    <ul class="panel-controls">
                                        <a href="{{ route('cars.add') }}" class="btn btn-primary">Add Car</a>                                        
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <strong>Well done!</strong> {{ Session::get('message') }}
                                        </div>
                                    @endif 
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Company</th>
                                                <th>Model</th>
                                                <th>Owner Name</th>
                                                <th>Address</th>
                                                <th>Vehicle Number</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cars as $c => $car)
                                            <tr>
                                                <td>{{ $c+1 }}</td>
                                                <td>{{ ucfirst($car->company) }}</td>
                                                <td>{{ ucfirst($car->model) }}</td>
                                                <td>{{ ucfirst($car->owner_name) }}</td>
                                                <td>{{ $car->address }}</td>
                                                <td>{{ $car->vehicle_number }}</td>
                                                <td>{{ $car->price }}</td>
                                                <td>
                                                    <a class="badge badge-info" href="{{ route('cars.edit', [ 'id' => $car->id ]) }}"><i class="fa fa-edit"></i></a>
                                                    <a class="badge badge-danger" href="{{ route('cars.delete', [ 'id' => $car->id ]) }}"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER --> 
@endsection