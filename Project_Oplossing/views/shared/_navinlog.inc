<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="ingelogt.php">De boeken hoek</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Boeken info
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="book_viewlogin.php">boeken tonen</a>
                    <a class="dropdown-item" href="book_create.php">boeken toevoegen</a>
        </div>
      </li>
      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Boek vinden
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="show_biblogin.php">biblotheken</a>
                    <a class="dropdown-item" href="show_boeken_winkellogin.php">boeken Winkel</a>
                    <a class="dropdown-item" href="winkel_toevoegen.php">Winkel toevoegen</a>
                    <a class="dropdown-item" href="bib_toevoegen.php">Bib toevoegen</a>

                </div>
            </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" > <a href="logout.php">logout <i class="fas fa-sign-out-alt"></i></a> </button>
    </form>
  </div>
</nav>