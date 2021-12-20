<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
     <style>
    body{
        background-color: #eeeeee;
    }
    .card {
        position: relative;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .1875rem
    }
    .card-body {
        padding: 1.25rem;
        text-align: center
    }
    a{
        color: #fff;
    }
    </style>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body id="app-layout">
<div class="container d-flex justify-content-center mt-50 mb-50">
    <!-- Logout -->
    <a style="float:right;color:blue;" class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <!-- Content -->
    <h2><center><u>Products List</u></center></h2><br>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="row">
        @foreach($products as $pro)
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h3 class="font-weight-semibold mb-2">{{ $pro->name }}</h3>
                    </div>
                    <h4 class="mb-0 font-weight-semibold">${{ $pro->price }}</h4> 
                    <button type="button" class="btn btn-danger"><i class="fa fa-cart-plus mr-2"></i><a href="{{ route('create', ['id' => $pro->id]) }}">Buy Now</a></button>
                </div>
            </div>
        </div>  
            @endforeach
    </div>
</div><br>
</body>
</html>