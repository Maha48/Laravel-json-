<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>website</title>
    <meta name="Description" content="Hello ..welcome to my page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/cv.css">
</head>
<body>



<div class="container form-group">
  <div class=" div1">
    <img  src="/images/horse.png" class="rounded-circle mx-auto d-block form-group" >
    <h1 class="form-group"> {{ $username }} </h1>
    <p class="text-center form-group " > {{ $bio }}</p>
    <br>
     <div class="container divlink " >
    <div class="row form-group ">
    <div class="col-sm-4 form-group">
      <ul class="list-unstyled form-group" >
      <li class="form-group"> <span class="glyphicon glyphicon-envelope"></span><a href="mailto:****@gmail.com"> {{ $gmail }}</a> </li>
      <li class="form-group"> <span class="social fa fa-github"></span><a href="https://github.com/maha48"> {{ $github }}</a> </li>

      </ul>
      </div>
      <div class="col-sm-4 form-group">
      <ul class="list-unstyled form-group" >
      <li class="form-group"> <span class="fa fa-phone"></span><a href="#"> {{ $phone }}</a> </li>

        <li class="form-group"> <span class="glyphicon glyphicon-map-marker"></span><a href="#"> {{ $location }}</a> </li>
 
      </ul>
      </div>
      <div class="col-sm-4 form-group">
      <ul class="list-unstyled form-group" >
      <li class="form-group"> <span class="social fa fa-linkedin"></span><a href="https://www.linkedin.com/in/****/"> {{ $linkedin }}</a> </li>
    
      </ul>
      </div>
    </div>
</div>
 
<div class="row">
  <div class="col-sm-6">
    <div class="card border-0">
      <div class="card-body mx-auto">
        <h3 class="card-title"><span class="secicon fa fa-graduation-cap"></span> {{ $education }}</h3>
        <div class="">
        <h5 class="card-text"> {{ $certification }}</h5>
        <h5 class="card-text"> {{ $certification2 }}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 ">
    <div class="card border-0">
      <div class="card-body mx-auto">
        <h3 class="card-title"> <span class="fas fa-clone"></span> EXPERIENCES</h3>
        <div class="float-right">
        <p class="card-text">{{ $experience1 }}</p>
        <p class="card-text">{{ $experience2 }}</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card border-0">
      <div class="card-body mx-auto">
        <h3 class="card-title"><span class="fas fa-star"></span> SKILS </h3>
        <div class="">
        <h5 class="card-text"> {{ $skils1 }}</h5>
        <h5 class="card-text"> {{ $skils2 }}</h5>
        <h5 class="card-text"> {{ $skils3 }}</h5>
        <h5 class="card-text"> {{ $skils4 }}</h5>
        <h5 class="card-text"> {{ $skils5 }}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 ">
    <div class="card border-0">
      <div class="card-body ">
        <h3 class="card-title"> <span class="secicon fa fa-trophy"></span> AWARDS</h3>
        <div class="">
        <p class="card-text">{{ $awards1 }}</p>
        <p class="card-text">{{ $awards2 }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card border-0">
      <div class="card-body mx-auto">
        <h3 class="card-title"><span class="fa fa-clipboard"></span> TRAINING</h3>
        <div class="float-right">
        <h5 class="card-text"> {{ $training1 }}</h5>
        <h5 class="card-text"> {{ $training2 }}</h5>
        <h5 class="card-text"> {{ $training3 }}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 ">
    <div class="card border-0">
      <div class="card-body ">
        <h3 class="card-title"> <span class="secicon fa fa-magic"></span> TECHNICAL SKILLS</h3>
        <div class="card   mx-auto border-0" style="max-width: 540px; ">
      <div class="row no-gutters">
        <div class="card-body">
          <div class=" prog">
          <h6>PHP</h6>
            <div class="progress">
              <div class="progress-bar " role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
            <h6>Python</h6>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
            <h6>MySQL</h6>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
            <h6>Front-end</h6>
            <div class="progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  <blockquote class="container float-right">
  <footer class="text-center"> by Maha </footer>
  </blockquote>
</div>

</body>
