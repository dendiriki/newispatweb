<div class="{{ $navbar }}">

    <!-- header section strats -->

    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="_indo">
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
                                    <a class="dropdown-item" href="profilindo_indo">Profile</a>
                                    <a class="dropdown-item" href="bod_indo">Board od Directors</a>
                                    <a class="dropdown-item" href="vision_indo">Visin, Mision & Value</a>
                                    <a class="dropdown-item" href="highlight_indo">Achivements</a>
                                    <a class="dropdown-item" href="milestone_indo">Management System</a>
                                    <a class="dropdown-item" href="she_indo">Safety, Healty and Environment</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="customer-center_indo">
                                <span>
                                    Customer Center
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" type="button" data-toggle="dropdown">Industrial Process</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="fasilitas_indo">Facilities</a>
                                    <a class="dropdown-item" href="steelmaking_indo">Process Flowchart of Steel Making</a>
                                    <a class="dropdown-item" href="rolling_indo">Process Flowchart of Wire Rod Rolling</a>
                                    <a class="dropdown-item" href="fasilitaspancaputra_indo">Process Ispat Panca Putera Facilities</a>
                                    <a class="dropdown-item" href="fasilitasbukitnaja_indo">Process Ispat Bukit Baja Facilities</a>
                                    <a class="dropdown-item" href="fasilitaswire_indo">Process Ispat Wire Products Facilities</a>
                                </div>
                            </div>
                        </li>

                        </form>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" type="button" data-toggle="dropdown">Subsidiaries</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="ispatwireproduct_indo">PT Ispat Wire Product</a>
                                    <a class="dropdown-item" href="ispatpancaputra_indo">PT Ispat Panca Putera</a>
                                    <a class="dropdown-item" href="ispatbukitbaja_indo">PT Ispat Bukit Baja</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news_indo">
                              <span>
                                News
                              </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="karir_indo">
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
