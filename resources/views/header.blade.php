<?php
use App\Http\Controllers\ProductController;
$total = 0;

if(Session::has('user'))
{
$total = ProductController::cartItem();
}


?> 

<nav class="navbar navbar-dark bg-success" style="background-color:darkorange">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="text-size=20px: ;font-size: 30px;color:navajowhite ;" href="/">hcMART</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li> 
        <button>
        <a href="/cartlist" class="btn btn-info btn-lg" style = "background-color:darkorange;">
          <span class="glyphicon glyphicon-shopping-cart" style="
    background-color: darkorange;
    margin-block: auto;
"></span> Shopping Cart({{$total}})
        </a>
        </button>
        </li>
        @if(session::has('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" style="color:black;
           font-size: 20px;
           font-family: system-ui;
            }
        " data-toggle="dropdown" href="#" aria-expanded="true">Debraj Kundu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="/logout">Logout</a></li>
       </ul>
       </li>
       @else
       <li><a href="/login" style="color:black;
       font-size: 20px;"
       >Login</a></li>
       @endif
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>