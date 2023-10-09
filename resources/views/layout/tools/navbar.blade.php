<div class="{{ $navbar }}">

    <!-- header section strats -->

    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo-ispat.png" alt="Logo" />
                    <span>
                        ISPAT INDO
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" type="button" data-toggle="dropdown">Company</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="profilindo">Profile</a>
                                    <a class="dropdown-item" href="bod">Board od Directors</a>
                                    <a class="dropdown-item" href="vision">Visin, Mision & Value</a>
                                    <a class="dropdown-item" href="highlight">Achivements</a>
                                    <a class="dropdown-item" href="milestone">Management System</a>
                                    <a class="dropdown-item" href="she">Safety, Healty and Environment</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="customer-center">
                                <span>
                                    Customer Center
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" type="button" data-toggle="dropdown">Industrial Process</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="fasilitas">Facilities</a>
                                    <a class="dropdown-item" href="steelmaking">Process Flowchart of Steel Making</a>
                                    <a class="dropdown-item" href="rolling">Process Flowchart of Wire Rod Rolling</a>
                                    <a class="dropdown-item" href="fasilitaspancaputra">Process Ispat Panca Putera Facilities</a>
                                    <a class="dropdown-item" href="fasilitasbukitnaja">Process Ispat Bukit Baja Facilities</a>
                                    <a class="dropdown-item" href="fasilitaswire">Process Ispat Wire Products Facilities</a>
                                </div>
                            </div>
                        </li>

                        </form>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" type="button" data-toggle="dropdown">Subsidiaries</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="ispatwireproduct">PT Ispat Wire Product</a>
                                    <a class="dropdown-item" href="ispatpancaputra">PT Ispat Panca Putera</a>
                                    <a class="dropdown-item" href="ispatbukitbaja">PT Ispat Bukit Baja</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span>
                                News
                              </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="karir">
                                <span>
                                    Careers
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                              <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">
                                <img src="assets/img/Web.png" alt="logo" style="max-width: 2rem; position: relative; bottom: 7px; left: 0px;">
                                {{ $sub }}
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ $url }}">ENGLISH</a>
                                <a class="dropdown-item" href="{{ $url }}_indo">INDONESIAN</a>
                              </div>
                              </div>
                          </li>
                        {{-- <li class="topnav">
                            <div class="login-container">
                                <a href="{{ $url }}_indo" ">ENGLISH</a>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </header>
