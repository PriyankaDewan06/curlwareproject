@extends('master.master')
@section('title')
    Manager DashBoard
@endsection


<body>
    
    
      @section('content')
      <div class="container-fluid">
        <h1> Welcome {{ Auth::user()->name }}</h1>
      </div>
              
      @endsection
  
    
</body>
</html>