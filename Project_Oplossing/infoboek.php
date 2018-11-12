<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>






<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<section id="banner">
        <div class="container">
            <div class="jumbotron jumbotron-fluid mt-3">
                <div class="container mb-3">
                    <h1 class="display-4 text-centre">Fluid jumbotron</h1>
                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its
                        parent.</p>
                </div>
            </div>
        </div>
    </section>
<section id="page-content">
        <div class="container">
            <div class="creation">
                <div class="content">
                    <div class="row">
                        <div class=" col-md-5"><img src=""
                                alt="foto1" width="100%"></div>
                        <div class=" col-md-7 hidden-lg">
                            <h1>naam boek</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum numquam corporis
                                veritatis blanditiis amet sed, repudiandae est. Quo itaque officiis nihil id provident
                                voluptas eveniet, ipsam, autem velit consequatur cupiditate!</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo iste saepe nisi
                                perspiciatis ab eos sint expedita! Molestias delectus excepturi, sit doloremque
                                expedita autem non enim alias corporis quos fuga.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="accordion container" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Korte Omschrijving
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
</body>
<?php include_once 'views/shared/_footer.inc';?>