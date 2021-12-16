@extends('layouts.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
          
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ route('company.index') }}"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <div class="pull-left">
                <h3>Edit Company </h3>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('company.update',$company->id) }}" method="post">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name :</strong>
                    <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email  :</strong>
                    <input type="" name="email" value="{{ $company->email }}" class="form-control" placeholder="Email">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>mobile  :</strong>
                    <input type="number" name="mobile" value="{{ $company->mobile }}" class="form-control" placeholder="Mobile">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection