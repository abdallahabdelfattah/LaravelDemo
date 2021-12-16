
@extends('layouts.layout')
  
@section('content')

<style>

body{
  padding: 2rem 0rem;
}

button{
    display: inline-block;
    float: right; 
}

</style>
<div class="container">

    <div class="row justify-content-between">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2> Show Comments </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
        <div class="col-12 col-md-6 offset-md-3 ">       
            <form action="{{ route('Comments.store') }}" method="POST">
                @csrf
            
                 <div class="row">
                    <input type="hidden" name="student_id" class="form-control"  value="{{$student_id}}">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <strong>comment:</strong>
                            <textarea class="form-control" style="height:150px" name="comment" placeholder="comment"></textarea>
                        </div>
                    </div>
            
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>       
      </div>
      <div class="w-100"></div>
      <div class="col-12 col-md-6 offset-md-3">
        <h6 class="text-muted">List Comments </h6> 
        <ul class="list-group">
            @foreach ($comments as $comment)
            <li class="list-group-item">{{$comment->comment}}  
            <br>
            <span class="p-5">  <i class="fas fa-clock"></i> {{$comment->created_at}}</span>
            <form action="{{ route('Comments.destroy',$comment->id) }}" method="POST">   
                @csrf
                @method('DELETE')      
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>  </button>
               

            </form>

            </li>
            @endforeach
       
        </ul>
      </div>


    </div>


  
  </div>
      
  @endsection