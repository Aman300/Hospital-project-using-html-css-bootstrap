<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- <link rel="stylesheet" type="text/css" href="darktheam.css"> -->
  </style>
  <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
  <!--<style>
    .carousel-caption{
      transform: translateY(-50%);
      bottom: initial;
      top:  50%;
      color: white;
      font-size: 30px;
    }
  </style>-->
</head>
<body>
 
<header>
  <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light  shadow">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">
    <img src="logo.png" width="30" height="30" alt="">
  </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Apna hospital<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#About">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target="_blank">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#rule">rule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Contact">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="email" placeholder="E-mail" aria-label="email">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button>
    </form>
  </div>
</nav>
</header>
<main>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height:auto" src="cov.jpg" alt="First slide">
      <div class="carousel-caption" style="font-family: 'Bree Serif';font-size: 22px;"  >
          <h3>Covid Test</h3>
          <p>A viral test tells you if you have a current infection. Two types of viral tests can be used: nucleic acid amplification tests (NAATs) and antigen tests. An antibody test (also known as a serology test) might tell you if you had a past infection. Antibody tests should not be used to diagnose a current infection.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height:auto" src="doc.jpg" alt="Second slide">
      <div class="carousel-caption" style="font-family: 'Bree Serif';font-size: 22px;">
          <h3>Doctor</h3>
          <p>A physician, medical practitioner, medical doctor, or simply doctor, is a professional who practices medicine, which is concerned with promoting, maintaining or restoring health through the study, diagnosis, prognosis and treatment of disease, injury, and other physical and mental impairments. </p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height:auto" src="vacc.jpg" alt="Third slide">
      <div class="carousel-caption" style="font-family: 'Bree Serif';font-size: 22px;">
          <h3>Vaccination</h3>
          <p>Vaccination is the administration of a vaccine to help the immune system develop protection from a disease. Vaccines contain a microorganism or virus in a weakened, live or killed state, or proteins or toxins from the organism.</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</main>
<hr>
<!--main form-->
<div class="container">
   <h1 style="text-align: center;">Form</h1><br>
  <div class="row d-flex justify-content-center m-5">
    <div class="col-md-6 col-12">
      <h2>Registration  form</h2><br>
      <div class="form-group">
        <label for="Firstname">Firstname
          <input type="text" name="name" placeholder="Enter your Firstname" class="form-control">
        </label>
        <label for="Lastname">Lastname
          <input type="text" name="name" placeholder="Enter your lastname" class="form-control">
        </label>
        <label for="Age">Age
          <input type="number" name="age" placeholder="Enter your age" class="form-control">
        </label>
        <label for="phonenumber">Phonenumber
          <input type="number" name="phonenumber" placeholder="Enter your phonenumber" class="form-control">
        </label>
        <br><label for="comment">Address:</label>
        <textarea class="form-control" rows="2" id="comment" placeholder="Enter you address"></textarea>
        <div style="text-align: center;">
        <br><button class="btn btn-primary w-50">Singup</button>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12 p-4" style="margin-right: ;">
      <img src="pexels-matthias-zomer-618158.jpg" width="100%" class="rounded">
    </div>
  </div>
</div>
<hr>
<div class="container">
  <h1 style="text-align: center;">Covid record</h1><br>
  <div class="row">
    <div class="col-md-4 col-12">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="hosbg.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Covid-hospital</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-md-4 col-12">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="cov.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Covid-case</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-md-4 col-12">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="doctor.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Covid-doctor</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
</div>
<div class="container text-center">
  <h1 style="text-align: center;">Covid record Live update</h1><br>
  <div class="row p-4">
    <div class="col-md-12 col-12">
      <iframe width="460" height="215" src="https://www.youtube.com/embed/NMre6IAAAiU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>
<footer>
    <div class="jumbotron-fluid p-2 bg-dark" style="margin: 0px;">
      <div class="container-fluid">
        <div class="row text-center" style="color: white;">
          <div class="col-md-12 col-12">
            <p><strong>@ copyright reserved 2021 Aman kumar from L.S College</strong></hp>
          </div>
        </div>
      </div>
    </div>
</footer>

</body>
</html>
