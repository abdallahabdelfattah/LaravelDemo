
@extends('layouts.layout')
  
@section('content')

<style>

body{
  padding: 2rem 0rem;
}

.add{
    display: inline-block;
    float: right; 
}

</style>
<div class="container">

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

    
    <div class="row justify-content-between">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ route('company.index') }}">  <i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <div class="pull-left">
                <h3> Show websites   {{$company->name }}   </h3>
            </div>
           
        </div>
        <div class="col-12 col-md-6 offset-md-3  ">       

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
            <form action="{{ route('Websites.store') }}" method="POST">
                @csrf
            
                 <div class="row">
                    <input type="hidden" name="company_id" class="form-control"  value="{{$company->id}}">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <strong>site name :</strong>
                            <input class="form-control"  name="title" placeholder="title" />
                        </div>
                    </div>
            
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <strong>  Url : </strong>
                            <input type="" class="form-control"  name="link" placeholder="Enter Url " />
                        </div>
                    </div>

                    <div  class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                            <button type="submit" class="btn btn-success my-3">Add WebSite </button>
                    </div>
                </div>
            </form>       
      </div>
     
    </div>

      

      <div class="col-12 col-md-6 offset-md-3">
          @if ( count($company->websites)> 0 )   
          <h2> Count of list  {{count($company->websites)}}   </h2>
          <ul class="list-group">
              @foreach ($company->websites as $website)
              <li class="list-group-item"> <b>   {{$website->title}}   </b>
          
              <br>
              <a href="{{$website->link}}" target="_blank">   {{$website->link}}  </a>
              <form action="{{ route('Websites.destroy',$website->id) }}" method="POST">   
                  @csrf
                  @method('DELETE')      
                  <button type="submit" class=" add btn btn-danger" onclick="return confirmDelete('{{ $website->title }}')"><i class="fas fa-trash-alt" ></i> Delete </button>
          
  
              </form>
  
              </li>
              @endforeach
         
          </ul>
           @else 
           <h6 class="text-muted"> No data available  </h6> 
          @endif
      
      </div>


    </div>


  
  </div>
      
  @endsection