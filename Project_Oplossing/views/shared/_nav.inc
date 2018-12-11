<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">De boeken hoek</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li id="hover" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Boeken info
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="book_view.php">Boeken tonen</a>
                    <a class="dropdown-item" href="infoboek.php">Alle boeken informatie</a>
                    <!--<a class="dropdown-item" href="book_create.php">boeken toevoegen</a>-->
        </div>
      </li>
      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Boek vinden
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="show_bib.php">Biblotheken</a>
                    <a class="dropdown-item" href="show_boeken_winkel.php">Boeken Winkels</a>
                    
                    
                    <!--<a class="dropdown-item" href="bib_winkel_add.php">Winkel/Bib toevoegen</a>-->
                </div>
            </li>
    </ul>
    <form id="form" class="form-inline my-2 my-lg-0 text-center" >
    <ul class="navbar-nav mr-auto" style="margin-left: 60px;" >
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ontspannings hoek
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="nut_van_lezen.php">Algemeen nut van lezen</a>
                    <a class="dropdown-item" href="weetjes.php">Boeken Weetjes</a>
                    <a class="dropdown-item" href="contact.php">Contact</a>
                    <!--<a class="dropdown-item" href="book_create.php">boeken toevoegen</a>-->
        </div>
      </li>
     
    </ul>
    <div>
        <button class="btn btn-outline-info my-2 my-sm-0 m-4" type="submit" > <a href="klanttoevoegen.php">Registreer <i class="fas fa-user-plus"></i></a> </button>
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" > <a href="login.php">Login <i class="fas fa-sign-in-alt"></i></a> </button>
    </form>
  </div>
</nav>
 