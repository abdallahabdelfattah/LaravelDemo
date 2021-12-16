

@extends('layouts.layout')

@section('content')



<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-success btn-lg" href="{{route('company.create') }}">  <i class="fas fa-plus-circle"></i> New company  </a>
        </div>

        <div class="pull-left">
            <h3>   Comapnies   </h3>
        </div>
      
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table  id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email </th>
        <th>Mobile</th>
        <th width="">Action</th>
        
    </tr>
</thead>
<tbody>
    @foreach ($companies as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->mobile }}</td>
        <td>
            <form action="{{ route('company.destroy',$value->id) }}" method="POST">   
                <a class="btn btn-secondary m-3" href="{{ route('company.show',$value->id) }}"> <i class="fas fa-eye"></i> Show</a>    
                <a class="btn btn-primary m-3" href="{{ route('company.edit',$value->id) }}"> <i class="fas fa-edit"></i> Edit</a>   
                @csrf
                @method('DELETE')      
                <button type="submit" class="btn btn-danger" onclick="return confirmDelete('{{ $value->name }}')"> <i class="fa fa-trash-alt"></i>  Delete</button>
                <a  class="btn "  href="/get-webSites/{{$value->id}}">  <i class="fas fa-align-justify"></i>  Web Sites  </a>    
            </form>

        </td>
    </tr>
    @endforeach
</tbody>
</table>  

</div>


 
<script >

  
    $(document).ready(function() {
     $('#example').DataTable();
} );

   
</script>


@endsection