

@extends('layouts.layout')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
    
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('students.create') }}">  <i class="fas fa-plus-circle"></i> New Student </a>
        </div>

        <div class="pull-left">
            <h3>   Students  </h3>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered display" id="example"  style="width:100%">
  <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Date </th>
        <th>Details</th>
        <th width="">Action</th>
        
    </tr>
  </thead>
    @foreach ($data as $key => $value)
 <tbody>
        <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->Name }}</td>
        <td>{{ $value->Date }}</td>
        <td>{{ \Str::limit($value->description, 100) }}</td>
        <td>
            <form action="{{ route('students.destroy',$value->id) }}" method="POST">   
                <a class="btn btn-secondary m-3" href="{{ route('students.show',$value->id) }}"> <i class="fas fa-eye"></i> Show </a>    
                <a class="btn btn-primary m-3" href="{{ route('students.edit',$value->id) }}"> <i class="fas fa-edit"></i>  Edit</a>   
                @csrf
                @method('DELETE')      
                <button type="submit" class="btn btn-danger" onclick="return confirmDelete('{{ $value->Name }}')"> <i class="fa fa-trash-alt"></i> Delete</button>
                <a class="btn btn-info" href="/get-comments/{{$value->id}}">  <i class="fas fa-align-justify"></i>  comments </a>    

            </form>

       

         

        </td>
    </tr>
 </tbody>
    @endforeach
</table>  
  
<script >

  
    $(document).ready(function() {
     $('#example').DataTable();
} );

   
</script>

 
@endsection

