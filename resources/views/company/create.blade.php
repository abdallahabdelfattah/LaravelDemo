
@extends('layouts.layout')

@section('content')

<div class="row mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New company </h2>
        </div>
        <div class="pull-right" >
            <a  class="btn btn-dark" href="{{ route('company.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('company.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email :</strong>
                <input type="" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile  :</strong>
                <input type="tel" name="mobile" class="form-control" placeholder="Mobile" value="{{ old('mobile') }}" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-3">
                <button type="submit" class="btn btn-success">Submit <i class="fa fa-arrow-alt-circle-right"></i></button>
        </div>
    </div>
</form>
@endsection