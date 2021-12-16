@extends('layouts.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}">  <i class="fa fa-arrow-left"></i>  Back</a>
            </div>

            <div class="pull-left">
                <h2> Show student</h2>
            </div>
         
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $student->Name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $student->description }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date :</strong>
                {{ $student->Date }}
            </div>
        </div>


    </div>
@endsection