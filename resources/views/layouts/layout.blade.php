<!DOCTYPE html>
<html>
<head>
    <title> Create a sample Laravel project to CRUD companies profiles with MySQL DB </title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
          <!-- Scripts -->
  <script type="text/javascript"  src="{{ asset('Datatable/jquery-3.5.1.js') }}" ></script>
  <script  type="text/javascript" src="{{ asset('Datatable/jquery.dataTables.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('Datatable/dataTables.responsive.min.js') }}" ></script>
  <!-- Styles -->
  <link href="{{ asset('Datatable/jquery.dataTables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Datatable/responsive.dataTables.min.css') }}" rel="stylesheet">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
     <style>
       .container {
	box-shadow: 0px 4px 10px #e8e8e8;
    background: #fff;
    padding: 30px;
    margin: 20px auto;
    border-radius: 5px;
}

.container h3 {
    margin-top: 30px;
    margin-bottom: 50px;
    font-weight: 400;
    color: #464646;
}

     </style>
 
</head>
<body class="">
  
       <div class="container">
           <div class="row">

              <!-- Plug Bootstrap Nav Bar code here -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">  <b class="text-primary"> NTRA </b> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/"> <b> Home</b> <span class="sr-only">(current)</span></a>
                </li>
               
            </div>
          </nav>

           </div>

       </div>

          
<div class="container">
    @yield('content')
</div>
   
<script >

    function  confirmDelete(item ){
        return confirm(`Sure delete ${item} `);
    }
 
   
</script>

</body>
</html>