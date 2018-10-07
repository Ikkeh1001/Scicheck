<?php

require_once ("config.php");
require_once ("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Scicheck</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <link rel="manifest" href="manifest.json">

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">

  <!--link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png"-->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/home.js"></script>
  <script src="js/content.js"></script>

  <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-1 py-md-2">
    <a class="navbar-brand pl-2" href="index.php">Scicheck</a>
    <button class="navbar-toggler px-2 py-0" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-2 ml-md-5">
        <li class="nav-item site-header px-md-3">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item site-header dropdown px-md-3">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <main role="main" class="container justify-content-center pt-5">

    <div id="maincarousel" class="carousel slide mx-2 pt-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#maincarousel" data-slide-to="0" class="active"></li>
        <li data-target="#maincarousel" data-slide-to="1"></li>
        <li data-target="#maincarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner homecarouselinner">

        <!--div class="carousel-item active">
          <div class="row">
            <div class="col-9 col-md-6">
              <div class="mx-3 mt-3">
                <a class="lead article-title" href="#" >Title of this thing, which turns out te be long for some reason...</a>
                <hr class="my-1 horizontallinearticle"></hr>
              </div>
              <div class="m-0 row">
                <div class="col-12">
                  <div class="sfibox mx-0 mt-1 row">
                    <div class="col-6">
                      <p class="sfititle m-0 p-1">S.F.I.</p>
                      <div class="sfi">
                        <p class="m-0 p-1">3/5</p>
                      </div>
                      <p class="my-1">Updated: 07-10-2018</p>
                    </div>
                    <div class="col-6 pl-0 sfiboxsecond">
                      <p class="sfiboxacc1 m-0 pb-2 pt-4 pt-sm-4 pt-md-4 mt-lg-2">Accuracy:</p>
                      <p class="m-0">Medium / High</p>
                    </div>
                  </div>
                  <ul class="list-group sfilist pt-4 pb-5">
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Category: </p><p class="m-0 p-0">Aids</p></div></li>
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">P-hacking:</p><p class="m-0 p-0">No</p></div></li>
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 pl-0 pb-5 d-none d-md-block">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit, est non mattis placerat, turpis diam vulputate tellus, sit amet porta nibh nisi vitae ipsum. Nunc non sem vel erat luctus tristique. Donec justo diam, pellentesque a eros id, gravida dignissim justo. Integer blandit lorem nec luctus consectetur. Aliquam auctor mattis arcu vitae posuere. Aliquam condimentum laoreet orci ac lacinia. Sed venenatis enim justo, at pharetra lacus dictum nec. In sed tortor porta, porttitor orci vitae, rutrum mi. Vivamus auctor nunc nec tortor pulvinar feugiat. Suspendisse potenti.</p>
            </div>
            <div class="col-3 pictureclass">
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row">
            <div class="col-9 col-md-6">
              <div class="mx-3 mt-3">
                <a class="lead article-title" href="#" >AIDS!</a>
                <hr class="my-1 horizontallinearticle"></hr>
              </div>

              <div class="m-0 row">
                <div class="col-12">
                  <div class="sfibox mx-0 mt-1 row">
                    <div class="col-6">
                      <p class="sfititle m-0 p-1">S.F.I.</p>
                      <div class="sfi">
                        <p class="m-0 p-1">3/5</p>
                      </div>
                      <p class="my-1">Updated: 07-10-2018</p>
                    </div>
                    <div class="col-6 pl-0 sfiboxsecond">
                      <p class="sfiboxacc1 m-0 pb-2 pt-4 pt-sm-4 pt-md-4 mt-lg-2">Accuracy:</p>
                      <p class="m-0">Medium / High</p>
                    </div>
                  </div>
                  <ul class="list-group sfilist pt-4 pb-5">
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Category: </p><p class="m-0 p-0">Aids</p></div></li>
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">P-hacking:</p><p class="m-0 p-0">No</p></div></li>
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
                    <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-3 pl-0 pb-5 d-none d-md-block">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit, est non mattis placerat, turpis diam vulputate tellus, sit amet porta nibh nisi vitae ipsum. Nunc non sem vel erat luctus tristique. Donec justo diam, pellentesque a eros id, gravida dignissim justo. Integer blandit lorem nec luctus consectetur. Aliquam auctor mattis arcu vitae posuere. Aliquam condimentum laoreet orci ac lacinia. Sed venenatis enim justo, at pharetra lacus dictum nec. In sed tortor porta, porttitor orci vitae, rutrum mi. Vivamus auctor nunc nec tortor pulvinar feugiat. Suspendisse potenti.</p>
            </div>
            <div class="col-3 pictureclass">
            </div>
          </div>
        </div-->

      </div>


    <a class="carousel-control-prev" href="#maincarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#maincarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    </div>

    <div class="carousel-item template">
      <div class="row">
        <div class="col-9 col-md-6">
          <div class="mx-3 mt-3">
            <a class="lead article-title" href="#" >Title of this thing, which turns out te be long for some reason...</a>
            <hr class="my-1 horizontallinearticle"></hr>
          </div>
          <div class="m-0 row">
            <div class="col-12">
              <div class="sfibox mx-0 mt-1 row">
                <div class="col-6">
                  <p class="sfititle m-0 p-1">S.F.I.</p>
                  <div class="sfi">
                    <p class="m-0 p-1">3/5</p>
                  </div>
                  <p class="my-1">Updated: 07-10-2018</p>
                </div>
                <div class="col-6 pl-0 sfiboxsecond">
                  <p class="sfiboxacc1 m-0 pb-2 pt-4 pt-sm-4 pt-md-4 mt-lg-2">Accuracy:</p>
                  <p class="m-0">Medium / High</p>
                </div>
              </div>
              <ul class="list-group sfilist pt-4 pb-5">
                <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Category: </p><p class="m-0 p-0">Aids</p></div></li>
                <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">P-hacking:</p><p class="m-0 p-0">No</p></div></li>
                <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
                <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
                <li class="list-group-item px-2 px-md-4 py-2"><div class="d-flex justify-content-between"><p class="m-0 p-0">Cras justo odio</p><p class="m-0 p-0">feef</p></div></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 pl-0 pb-5 pt-3 d-none d-md-block">
          <p class="fattext">Description:</p>
          <p class="descriptiontext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit, est non mattis placerat, turpis diam vulputate tellus, sit amet porta nibh nisi vitae ipsum. Nunc non sem vel erat luctus tristique. Donec justo diam, pellentesque a eros id, gravida dignissim justo. Integer blandit lorem nec luctus consectetur. Aliquam auctor mattis arcu vitae posuere. Aliquam condimentum laoreet orci ac lacinia. Sed venenatis enim justo, at pharetra lacus dictum nec. In sed tortor porta, porttitor orci vitae, rutrum mi. Vivamus auctor nunc nec tortor pulvinar feugiat. Suspendisse potenti.</p>
        </div>
        <div class="col-3 pictureclass">
        </div>
      </div>
    </div>

  </main>
</body>

</html>
