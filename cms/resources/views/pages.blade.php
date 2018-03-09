<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Application</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">SCISHUB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-md-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Web Application</a>
                        <a class="dropdown-item" href="#">Mobile Application</a>
                        <a class="dropdown-item" href="#">Desktop Application</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">High Flyer <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="container-fluid banner-webApp">
           <div class="row banner-overlay">

           </div>
        </div>
    </section>
    <section>
        <div class="container-fluid web-project">
            <div class="row mr-md-5">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-right">
                    <h1>Philippine Startup Challenge</h1>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="container card-container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 my-md-5">
                        <div class="card" style="width: 18rem;">
                            <div class="hover-effect">
                                <a href="{{ url('/project') }}">
                                    <img class="card-img-top" src="../images/asset1.png" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Project title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                     <div class="ccol-sm-12 col-md-4 my-md-5">
                        <div class="card" style="width: 18rem;">
                            <div class="hover-effect">
                                <a href="#">
                                    <img class="card-img-top" src="../images/asset2.jpeg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body">
                                 <h5 class="card-title">Project title</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 my-md-5">
                            <div class="card" style="width: 18rem;">
                            <div class="hover-effect">
                                <a href="#">
                                    <img class="card-img-top" src="../images/asset3.jpeg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Project title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-12 col-md-4 my-md-5">
                            <div class="card" style="width: 18rem;">
                                <div class="hover-effect">
                                    <a href="#">
                                        <img class="card-img-top" src="../images/asset4.jpeg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Project title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-12 col-md-4 my-md-5">
                            <div class="card" style="width: 18rem;">
                                <div class="hover-effect">
                                    <a href="#">
                                         <img class="card-img-top" src="../images/asset5.jpeg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body">
                                     <h5 class="card-title">Project title</h5>
                                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
            <div class="col-sm-12 col-md-4 my-md-5">
                    <div class="card" style="width: 18rem;">
                        <div class="hover-effect">
                            <a href="#">
                                <img class="card-img-top" src="../images/asset6.jpeg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Project title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                     </div>
                </div>
                </div>
        </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 test">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h3 class="display-4 scishub-footer">SCISHUB</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-left">
                                    <h3 class="display-5 scis-inpire">Create.Inspire</h3>
                            </div>
                        </div>
                <div class="col-md-6 test2">
            
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>