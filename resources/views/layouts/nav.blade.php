  <!-- Navbar -->
  <style>
      .main-header{
        margin-left: 0px !important;
      }
  </style>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('post_create')}}" class="nav-link">Post</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('logout.perform')}}" class="nav-link">
          
            <p>
                Logout
            </p>
        </a>
        
    </li>
    </ul>
    </nav>