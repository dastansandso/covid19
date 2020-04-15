<!DOCTYPE html>

<head>
    <title>Covid 19</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.theme.default.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousel.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.min.css" media="screen,handheld">
    <link rel="stylesheet" href="css/style.css" media="screen,handheld">
    <script src="https://kit.fontawesome.com/732e70d8dd.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
</head>

<body ng-app="myApp" ng-controller="myCtrl">

    <!-- Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Loader -->

    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow w-100">
            <div class="container">

                <div class="logo">
                    <a class="navbar-brand" href="http://www.shapoorji-joyville-virar.com/">
                        <img src="images/favicon.png" style="height:52px;"> COVID-19
                    </a>

                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="main">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="selection-block">Get Tour</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <article>
        <section id="main" class=" py-5 text-center">

            <div class="container mt-5">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-9  wow fadeInUp ">
                        <h3 class=" text-white">Coronavirus disease (COVID-19) Pandemicas stats as  of  <p>{{updated | date: 'd MMM \'yyyy h:mm:ss a'}}</p></h3>

                    </div>
                </div>
                <div class="row row-eq-height justify-content-center align-items-botttom feature-boxes ">
                    <div class="col-6 col-md-3 wow fadeInUp mb-2">
                        <div class="card wow infinite pulse  shadow rounded-0 bg-warning p-2 d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-head-side-virus"></i>
                            <p>Confiremed</p>
                            <h4>{{cases}}</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow fadeInUp mb-2">
                        <div class="card bg-success shadow rounded-0 p-2 d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-head-side-mask"></i>
                            <p>Recovered</p>
                            <h4>{{recovered}}</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow fadeInUp mb-2">
                        <div class="card wow infinite pulse bg-danger shadow rounded-0 p-2 d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-biohazard"></i>
                            <p>Active</p>
                            <h4>{{active}}</h4>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 wow fadeInUp mb-2">
                        <div class="card bg-dark text-white shadow  rounded-0 p-2 d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-lungs-virus"></i>
                            <p>Died</p>
                            <h4 bg-bind="deaths">{{deaths}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6  wow fadeInLeft text-center">
                        <img src="images/covid.png" class="img-fluid w-50 wow infinite pulse">
                    </div>
                    <div class="col-md-6 wow fadeInRight">
                        <h4>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.</h4>
                        <p>The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p>
                        
                    </div>

                </div>
            </div>
        </section>
        <section id="selection-block" class="py-5 bg-light">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <label>Select Country</label>
                        <select class="form-control text-center" ng-Change="showstats()" ng-model="selectedCountry" ng-options="x for x in countries" >
                        </select>
                    </div>
                </div>
                <div class="section-title text-center mt-4 mb-2" ng-if="selectedCountry">
                    <h3>In {{selectedCountry}} as of {{con_updated | date: 'd MMM \'yyyy h:mm:ss a'}}</h3>

                </div>

                <div class="row row-eq-height justify-content-center align-items-botttom feature-boxes " ng-if="selectedCountry">
                    <div class="col-6 col-md-3 wow fadeInUp mb-2">
                        <div class="card wow infinite pulse  shadow rounded-0 bg-warning p-2 d-flex flex-column justify-content-center align-items-center" >
                            <i class="fas fa-head-side-virus"></i>
                            <p>Confiremed</p>
                            <h4>{{con_cases}}</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow fadeInUp mb-2">
                        <div class="card bg-success shadow rounded-0 p-2 d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-head-side-mask"></i>
                            <p>Recovered</p>
                            <h4>{{con_recovered}}</h4>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow fadeInUp mb-2">
                        <div class="card wow infinite pulse bg-danger shadow rounded-0 p-2 d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-biohazard"></i>
                            <p>Active</p>
                            <h4>{{con_active}}</h4>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 wow fadeInUp mb-2">
                        <div class="card bg-dark text-white shadow  rounded-0 p-2 d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-lungs-virus"></i>
                            <p>Died</p>
                            <h4 bg-bind="deaths">{{con_deaths}}</h4>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="py-5 bg-dark">

        </section>

    </article>

    <!-- Modal -->
    <div class="modal fade" id="floorselection" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Select Floor for Tour</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="chart" id="stats"></div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script>
        $ = jQuery.noConflict();
    </script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/angular-custom.js"></script>

</body>

</html>