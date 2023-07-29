<style>
  .navbar-custom {
    background-color: #e3f2fd;
  }

  .dropdown:hover > .dropdown-menu .dropright:hover > .dropdown-menu{
    display: block;
  }

  .fontcolor{
    color: black;
  }

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <a class="logo-font" href="#">
      <img src="assets/img/logobiru.png" alt="" width="65" height="50"> Ispat Indo
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Company
            </a>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="#">Profile</a></li>
              <div class="dropdown-item dropright px-2 mx-0">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
