@extends('layouts.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ route('company.index') }}"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <div class="pull-left m-2">
                <h2> Show company</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $company->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                {{ $company->mobile }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                {{ $company->email }}
            </div>
        </div>


    </div>
@endsection