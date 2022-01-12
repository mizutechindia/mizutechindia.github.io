<?php
if(isset($_POST['subscribe'])){
$email=$_POST['email'];
$subject,$message,$headers;
	mail($to,$subject,$message,$headers);
}
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="icon" href="./images/logo/logo.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&family=Open+Sans&display=swap" rel="stylesheet">
        <script src="./js/nav.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <style>
            body {
                font-family: 'Baloo Bhai 2', cursive;
            }
            
            .psv {
                padding: 50px;
                /* background-color: green; */
                transition: transform .2s;
                width: 50px;
                height: 70px;
                margin: 0 auto;
            }
            
            .psv1 img:hover {
                -ms-transform: scale(1.5);
                /* IE 9 */
                -webkit-transform: scale(1.5);
                /* Safari 3-8 */
                transform: scale(1.5);
                border: 2px solid black;
            }
            
            .rounded-circle {
                border-radius: 20px !important;
            }
            
            .row {
                margin-right: 0px!important;
            }
            
            .step-text {
                display: none;
            }
            
            .psv1:hover+.step-text {
                display: inline;
            }
            
            .mineralwaterplant {
                background-image: url("./images/card_bg/istockphoto-1272800955-612x612.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            .pulpjuiceplant {
                background-image: url("./images/card_bg/istockphoto-1130104948-612x612.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            .carbonatedsoftdrink {
                background-image: url("./images/card_bg/istockphoto-854175316-612x612.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            .watertreatmentplant {
                background-image: url("./images/card_bg/istockphoto-453481431-612x612.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                height: 348px;
            }
            
            .wastewaterplant {
                background-image: url("./images/card_bg/istockphoto-187108475-612x612.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            .waterharvesting {
                background-image: url("./images/card_bg/istockphoto-1153091127-612x612.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                height: 348px;
            }
            
            .card-body {
                height: 348px;
                background-repeat: no-repeat;
                background-size: cover;
            }
            /* .aftersales {
      background-image: url("./images/istockphoto-864255126-612x612.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    } */
            /* .card-body:hover{
      color: white;
      background:#212529;
    } */
            
            .phone {
                color: white;
                font-weight: 600;
            }
            
            .mail {
                color: white;
                font-weight: 600;
            }
            
            .linkedin:hover {
                background: rgba(0, 0, 0, 0.3);
                color: white;
            }
            
            .linkedin {
                color: blue;
                font-weight: 600;
            }
            
            @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            #team {
                background: #eee !important;
            }
            
            .btn-primary:hover,
            .btn-primary:focus {
                background-color: #108d6f;
                border-color: #108d6f;
                box-shadow: none;
                outline: none;
            }
            
            .btn-primary {
                color: #fff;
                background-color: #007b5e;
                border-color: #007b5e;
            }
            
            section {
                padding: 60px 0;
            }
            
            section .section-title {
                text-align: center;
                color: #007b5e;
                margin-bottom: 50px;
                text-transform: uppercase;
            }
            
            #team .card {
                border: none;
                background: #ffffff;
            }
            
            .image-flip:hover .backside,
            .image-flip.hover .backside {
                -webkit-transform: rotateY(0deg);
                -moz-transform: rotateY(0deg);
                -o-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                transform: rotateY(0deg);
                border-radius: .25rem;
            }
            
            .image-flip:hover .frontside,
            .image-flip.hover .frontside {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg);
            }
            
            .mainflip {
                -webkit-transition: 1s;
                -webkit-transform-style: preserve-3d;
                -ms-transition: 1s;
                -moz-transition: 1s;
                -moz-transform: perspective(1000px);
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                transition: 1s;
                transform-style: preserve-3d;
                position: relative;
            }
            
            .frontside {
                position: relative;
                -webkit-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                z-index: 2;
                margin-bottom: 30px;
            }
            
            .backside {
                position: absolute;
                top: 0;
                left: 0;
                background: white;
                -webkit-transform: rotateY(-180deg);
                -moz-transform: rotateY(-180deg);
                -o-transform: rotateY(-180deg);
                -ms-transform: rotateY(-180deg);
                transform: rotateY(-180deg);
                -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            }
            
            .frontside,
            .backside {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -ms-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-transition: 1s;
                -webkit-transform-style: preserve-3d;
                -moz-transition: 1s;
                -moz-transform-style: preserve-3d;
                -o-transition: 1s;
                -o-transform-style: preserve-3d;
                -ms-transition: 1s;
                -ms-transform-style: preserve-3d;
                transition: 1s;
                transform-style: preserve-3d;
            }
            
            .frontside .card,
            .backside .card {
                min-height: 312px;
            }
            
            .backside .card a {
                font-size: 18px;
                color: white !important;
            }
            
            .frontside .card .card-title {
                color: white !important;
            }
            
            .backside .card .card-title {
                color: green !important;
            }
            
            .frontside .card .card-body img {
                width: 120px;
                height: 120px;
                border-radius: 50%;
            }
            
            footer {
                /* background-image: url("./images/istockphoto-181987625-612x612.jpg");
                background-repeat: no-repeat;
                background-size: cover; */
            }
            
            .footer {
                background-color: #214196;
            }
            .footer a{
                color: #ffffff;
                text-decoration: none;
                text-align: left;
                font-size: 20px;
            }
            
            .head1 {
                background-color: #000d1785;
            }
            .subscribe{
                background-image: url("https://exomac-react.netlify.app/images/bg/newsletter.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                color: white;
            }
            .subscribe2{
                background-color: #00265296;
            }
        </style>
    </head>

    <body>
        <header class="fixed-top">
            <!-- <div id="header" class="head1">
      <div class="d-none d-sm-none d-lg-block d-xl-block d-md-none" style="margin-left:110px">
        <div class="row">
          <div class="col-5">
            <img src="./images/logo/logo.png" height="100px" width="100px" alt="" >
          </div>
          <div class="col-7 phone" style="margin-top:16px">
            <a href="tel:+917599545497"><i class="fa fa-phone" style="font-size:24px;color:white"></i></a>
            +91 75995 45497
            <a href="mailto:info.mizutechindia@gmail.com" target="blank"><i class="fa fa-envelope"
                style="font-size:24px;color:white"></i></a>
                info@mizutechindia.com
            <a href="https://www.facebook.com/MizutechEngineersIndia" target="blank">
              <i class="fa fa-facebook" style="width:50px;font-size:24px;color:white"></i></a>
              <a href="https://www.instagram.com/mizutechindia/" target="blank">
              <i class="fa fa-instagram" style="width:50px;font-size:24px;color:white"></i></a>
              <a href="https://www.linkedin.com/company/74242661/" target="blank">
              <i class="fa fa-linkedin" style="width:50px;font-size:24px;color:white"></i></a>
              <br>
          </div>
        </div>
      </div>
    </div> -->
            <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" role="navigation" id="mainNav">
                <a class="navbar-brand" href="./index.php">
                    <img src="./images/logo/logo.png" alt="" style="width: 170px;height:auto" class="d-inline-block align-text-top">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Turnkey Projects
          </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#084298c7">
                                <li><a class="dropdown-item" style="color:white" href="mineral-water-plant.php">Mineral water Plant </a></li>
                                <li><a class="dropdown-item" style="color:white" href="pulp-juice-plant.php">Pulp Juice Plant</a></li>
                                <li><a class="dropdown-item" style="color:white" href="carbonated-soft-drink.php">Carbonated Soft Drink</a></li>
                                <li><a class="dropdown-item" style="color:white" href="water-treatment-projects.php">Water Treatment Projects</a></li>
                                <li><a class="dropdown-item" style="color:white" href="waste-water-treatment.php">Waste Water Treatment project
</a></li>
                                <li><a class="dropdown-item" style="color:white" href="water-harvesting-system.php">Water Harvesting System</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <!-- <li class="nav-item d-none d-lg-block" style="position: absolute; right: 0px">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Quick Enquiry</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Quick Enquiry</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
<!--                         <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <label for="query">Ask your query</label>
                                <textarea rows="4" cols="50" name="query" class="form-control" placeholder="Ask your query" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button> -->
<!--                             <?php
//                 if($sqlquery){
                  ?>
                                <script>
                                    alert("Your query is submitted successfully");
                                </script>
                                <?php
//                 }
                ?> -->
<!--                         </form> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/slider/Untitled design (1).jpg" height="710" class="d-block w-100" alt="">
                    <div class="carousel-caption d-block">
                        <font size="40">Innovative Utilities Solutions & Services</font>
                        <h4>We as Technovita working as a team to deliver trouble free energy saving, effective & best Utilities Solution Through innovation and design
                        </h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/slider/Untitled design.jpg" style="background-repeat: no-repeat; background-size: cover" height="710" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <font size="40">Energy Saving Utilities Solution & Service</font>
                        <h4>Technovita Service team work all around the clock to give best service for smooth running of your production and plant
                        </h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/slider/Untitled design (2).jpg" height="710" class="d-block w-100" alt="">
                    <div class="carousel-caption d-block">
                        <font size="40">Effective Utilities Solution & Service</font>
                        <h4>We have a technical team qualify enough to provide you best air and water solution.
                        </h4>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br><br>
        <div class="row my-5" style="text-align: center;">
            <h2 style="font-size: 42px;">
                We are a full-service creative agency
            </h2>
            <p style="color:#8c89a2;font-size:18px">Our team of designers, developers and creatives are<br/> perfectionists who love what they do and love</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-xl-6 col-lg-6">
                    <div class="image-stack">
                        <div class="image-stack__item image-stack__item--top">
                            <img src="https://exomac-react.netlify.app/images/about/home-one-about/home_agency_about_2.jpg">
                        </div>
                        <div class="image-stack__item image-stack__item--bottom">
                            <img src="https://exomac-react.netlify.app/images/about/home-one-about/home_agency_about_1.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-xl-6 col-lg-6">
                    <div class="section-title-two aos-init aos-animate">
                        <span class="sub-title">Every day brings new challenges</span>
                        <hr style="height: 2px;
    width: 81px;
    color: #42a8f1;
    background-color: #42a8f1;
    margin-top: -20px;">
                        <h3 class="title">Team focused on <br>product, service and solution</h3>
                        <p style="font-size: 18px;font-weight:400;line-height:1.74;color:#748494">We’re boldly as a team always original <br> refreshingly easy-going. Our vision, passion and ideas <br> matched with focus, expertise and innovation.</p>
                        <a class="btn btn-primary btn-hover-secondary mt-xl-8 mt-lg-8 mt-md-6 mt-4" href="/about">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <section id="team" class="pb-5">
            <div class="container">
                <div class="row">
                    <h2 style="text-align:center;font-size: 42px;font-weight:600;color: #030f27;line-height:1;margin:0;">We create a unique action plan for utilities</h2>
                    <p style="font-size: 18px;font-weight:400;line-height:1.74;color:#748494;text-align:center">Get your utilities solution & service heading in the right direction with our <br/>expertise and team</p>
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body mineralwaterplant text-center">

                                            <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Project Planning</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Project Planning</h4>
                                            <p class="card-text">Our Project management team is well planned at working with complex timelines and deadlines. We ensure the process flows smoothly from project inception through final delivery</p>
                                            <a href="mineral-water-plant.php" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body pulpjuiceplant text-center">
                                            <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Project Site Visit</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Project Site Visit</h4>
                                            <p class="card-text">Our mission is to work with competence, honesty and transparency. We visit your project and production site and analyze your needs, starting from your goal and its sustainability. Then we discuss with you the
                                                possible solutions to make your business perform in the best way.</p>
                                            <a href="pulp-juice-plant.php" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body carbonatedsoftdrink text-center">
                                            <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Design and Development</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Design and Development</h4>
                                            <p class="card-text">Our engineers design and develop a tailored-made solution for your production needs and objectives. It can include complete lines or single machines, which can be easily integrated with your habits and daily
                                                work, making it more efficient and automatic</p>
                                            <a href="carbonated-soft-drink.php" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body watertreatmentplant text-center">
                                            <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Testing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Testing</h4>
                                            <p class="card-text">We test your machines in our production sites and verify equipment functionality with your cans/bottles. Lastly, we deliver and install the equipment</p>
                                            <a href="water-treatment-projects.php" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body wastewaterplant text-center">
                                            <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Ed-tech Commissioning</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Ed-tech Commissioning</h4>
                                            <p class="card-text">We commissioned the project with trained team which have the dedication and value to transfer the knowledge and educated your team, operator for operations and regular maintenance of equipment.</p>
                                            <a href="waste-water-treatment.php" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body waterharvesting text-center">
                                            <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Strong Knit Service Network</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Strong Knit Service Network</h4>
                                            <p class="card-text">You can rely on us also after the installation: we have pan India existence that guarantee a fast and efficient after-sales, spare parts & maintenance assistance with trained personnel.</p>
                                            <a href="water-harvesting-system.php" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->

                </div>
            </div>
        </section>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-xl-6 col-lg-6">
                    <div class="image-stack2">
                        <div class="image-stack__item image-stack__item--top2">
                            <img src="https://exomac-react.netlify.app/images/skill/skill-2.jpg">
                        </div>
                        <div class="image-stack__item image-stack__item--bottom2">
                            <img src="https://exomac-react.netlify.app/images/skill/skill-1.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-xl-6 col-lg-6">
                    <div class="section-title-two aos-init aos-animate">
                        <span class="sub-title">Your smile is our success</span>
                        <hr style="height: 2px;
    width: 81px;
    color: #42a8f1;
    background-color: #42a8f1;
    margin-top: -20px;">
                        <h3 class="title">Innovation, design, <br/>manufacturing & team that get results</h3>
                        <ul style="font-size: 18px;">
                            <li>Passionate toward customer satisfaction.</li>
                            <li>PAN India presence and strong service network</li>
                            <li>Flexible and customized solutions</li>
                            <li>Create enduring relationship.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <h1>After Sales Services</h1>
            <div class="row aftersales" style="font-size:20px">
                <!-- <div class="col-lg-4">
    <img src="./images/after-sales/istockphoto-864255126-612x612.jpg" width="100%" alt="">
    </div>
    <div class="col-lg-8"> -->
                <div class="col-lg-2">
                    <br><img src="./images/after-sales/consulting.png" alt="" style="margin-top:25px">
                </div>
                <div class="col-lg-10">
                    <br><b>Consulting & Training</b><br>
                    <p align="justify">At your side, whenever you need our advice! We aim to establish long-lasting business relationships with our customers, thanks to our Customer Service Department (performance assessment, training, safety assessment, certification updates,
                        upgrade, overhauls).</p>
                </div>
                <div class="col-lg-2">
                    <br><img src="./images/after-sales/spare.png" alt="" style="margin-top:14px">
                </div>
                <div class="col-lg-10">
                    <b>Spare Parts</b><br>
                    <p align="justify">Our plants and machineries are designed to ensure the highest level of reliability and performance. To guarantee an optimal lifecycle management of all the assets, our worldwide Spare Parts Service provides options for all types of
                        equipment, as well as upgrades for older machine versions and obsolete parts with a dedicated service. All spares are provided with outstanding level of quality and carefully checked by our Quality Control Department.</p>
                </div>
                <div class="col-lg-2">
                    <img src="./images/after-sales/onsite.png" alt="" style="margin-top:42px">
                </div>
                <div class="col-lg-10">
                    <b>On-site and remote assistance</b><br>
                    <p align="justify">Effective interventions on site, in every market worldwide! Our Server Engineers Department provides you the best support to find and fit the solution to you specific issues (diagnostic visits, maintenance programs, emergency service,
                        supervision, predictive maintenance). We can also assure you our best effort to keep your lines and equipments always on-line. We will stay connected with your machines and operators at any time thanks to teleservice, predictive
                        maintenance and condition-based monitoring</p>
                    <br><br>
                </div>
            </div>
        </div>
        <br><br>
        <section id="team" class="pb-5">
        <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-5 col-lg-5">
                        <p style="font-size: 20px;
    line-height: 1.5;
    font-weight: 400;
    color: #748494;margin-left: 81px;">Portfolios
<hr style="height: 2px;
    width: 81px;
    color: #42a8f1;
    background-color: #42a8f1;
    margin-top: -20px;">    
</p>
<h3 class="title">Selected Works</h3>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-7 col-lg-7">
            <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Product')">Product</button>
  <button class="tablinks" onclick="openCity(event, 'Service')">Service</button>
  <button class="tablinks" onclick="openCity(event, 'annual-maintenance')">Annual Maintenance</button>
  <button class="tablinks" onclick="openCity(event, 'spare-parts')">Spare Parts</button>
  <button class="tablinks" onclick="openCity(event, 'consultancy')">Consultancy</button>
  <button class="tablinks" onclick="openCity(event, 'training')">Training</button>
</div>

            </div>
            <div id="Product" class="tabcontent">
                <h2>Products</h2>
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->
</div>

<div id="Service" class="tabcontent">
  <h3>Service</h3>
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->
</div>

<div id="annual-maintenance" class="tabcontent">
  <h3>Annual Maintenance</h3>
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->
</div>
<div id="spare-parts" class="tabcontent">
  <h3>Spare Parts</h3>
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->
</div>
<div id="consultancy" class="tabcontent">
  <h3>Consultancy</h3>
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->
</div>
<div id="training" class="tabcontent">
  <h3>Training</h3>
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->
</div>

            </div>
        </div>
        </section>
        <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<div class="subscribe">
    <div class="subscribe2">
    <div class="container">
    <br><br><br>
        <div class="row">
            <br>
            <h2 style="text-align:center;">Let’s find out how to work together</h2>
            <p style="text-align:center;"><b>Ready to start your project?  The contact information <br>collected through this form will only be used to send a <br>response to your inquiry.</b></p>
            <div class="newsletter-form aos-init aos-animate">
                <form style="text-align: center;" action="" method="post" enctype="text/plain">
                    <input class="email" type="email" placeholder="Ente your email" name="email">
                    <button type="submit" name="subscribe" class="btn btn-primary btn-hover-secondary">Subscribe</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row my-5" style="text-align: center;">
            <h2 style="font-size: 42px;">
                We are a full-service creative agency
            </h2>
            <p style="color:#8c89a2;font-size:18px">Our team of designers, developers and creatives are<br/> perfectionists who love what they do and love</p>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6"><div class="col mb-6 aos-init aos-animate" data-aos="fade-up"><div class="contact-info"><div class="icon"><div id="contactsvg-1" class=""><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M1,59L22,51L42,59L63,51L63,5L42,13L22,5L
		1,13Z" style="stroke-dasharray: 225, 227; stroke-dashoffset: 0;"></path>
	<g>
		<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M22,5L22,51" style="stroke-dasharray: 46, 48; stroke-dashoffset: 0;"></path>
	</g>
	<g>
		<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M42,13L42,59" style="stroke-dasharray: 46, 48; stroke-dashoffset: 0;"></path>
	</g>
</g>
</svg></div></div><div class="info"><h4 class="title">Our Locations</h4><span class="info-text"> K-139 Site-V Kasna <br>Greater Noida UP-201306</span></div></div></div><div class="col mb-6 aos-init aos-animate" data-aos="fade-up"><div class="contact-info"><div class="icon"><div id="contactsvg-2" class=""><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M10,16L54,16" style="stroke-dasharray: 44, 46; stroke-dashoffset: 0;"></path>
<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M10,26L54,26" style="stroke-dasharray: 44, 46; stroke-dashoffset: 0;"></path>
<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M10,36L54,36" style="stroke-dasharray: 44, 46; stroke-dashoffset: 0;"></path>
<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,47L63,47L63,5L1,5L1,47L18,47L18,59Z" style="stroke-dasharray: 225, 227; stroke-dashoffset: 0;"></path>
</svg></div></div><div class="info"><h4 class="title">Give Us A Call</h4><span class="info-text">+91-9311611742 <br> 9311611743</span></div></div></div><div class="col mb-6 aos-init aos-animate" data-aos="fade-up"><div class="contact-info"><div class="icon"><div id="contactsvg-3" class=""><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M36,9L45,9" style="stroke-dasharray: 9, 11; stroke-dashoffset: 0;"></path>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M19,17L45,17" style="stroke-dasharray: 26, 28; stroke-dashoffset: 0;"></path>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M19,25L45,25" style="stroke-dasharray: 26, 28; stroke-dashoffset: 0;"></path>
	<g>
		<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M1,26L32,45.434L63,26" style="stroke-dasharray: 74, 76; stroke-dashoffset: 0;"></path>
		<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M11.334,21.667L1,26L1,63L63,63L63,26L
			63,26L52.666,21.667" style="stroke-dasharray: 159, 161; stroke-dashoffset: 0;"></path>
		<path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M11,32L11,1L53,1L53,32" style="stroke-dasharray: 104, 106; stroke-dashoffset: 0;"></path>
	</g>
</g>
</svg></div></div><div class="info"><h4 class="title">Help Desk</h4><span class="info-text">info@technovita.in <br> technovita@hotmail.com</span></div></div></div></div>
        
        <br><br><br>
        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark" style="color: #ffffff">
        <br><br>
            <div class="footer">

                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Content -->
                            <img src="./images/logo/logo.png" alt="" style="width:156px;height:auto">
                            <p align="justify">Mobile: <a href="tel:+917599545497" style="text-decoration:none">7599545497</a><br> Email: info@technovita.in
                            </p>
                            <hr>

                            <!-- Call to action -->
                            <!-- Call to action -->

                            <hr>
                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow us on</h5> -->
                            <h2>Services</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">AMC</a>
                                </li>
                                <li><a href="#">Maintenance</a></li>
                                <li><a href="#">Spare Parts</a></li>
                                <li><a href="#">Consultancy</a></li>
                                <li><a href="#">Training and Ed-tech</a></li>
                            </ul>

                        </div>
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow us on</h5> -->
                            <h2>Products</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Air Solution</a>
                                </li>
                                <li><a href="#">Water Solution</a></li>
                                <li><a href="#">HVAC Solution</a></li>
                                <li><a href="#">Fire Solution</a></li>
                                <li><a href="#">Consultancy</a></li>
                            </ul>

                        </div>

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <ul class="list-unstyled">
                            <li>
          <a href="https://wa.me/+919311611742 " style="position:fixed; width:60px; height:60px; bottom:40px; right:40px; background-color:#25d366; color:#FFF; border-radius:50px; text-align:center; font-size:30px; box-shadow: 2px 2px 3px #999; z-index:100;" target="blank"><i style="margin-top:12px; padding:0px; padding-right:6px;" class="fa fa-whatsapp"></i></a>
          </li>
                            </ul>
                            <h2>Follow Us</h2>

                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://www.facebook.com/MizutechEngineersIndia" target="blank"><i class="fa fa-facebook" style="background: #3B5998;color: white"></i></a>
                                    <a href="https://www.instagram.com/mizutechindia/" target="blank"><i class="fa fa-instagram" style="background-color:#df435e; color:white"></i></a>
                                    <a href="https://www.linkedin.com/company/74242661/"><i class="fa fa-linkedin" style="color: white; background-color:blue"></i></a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="www.technovita.in" style="text-decoration:none"> technovita.in</a><br> Developed and maintained By <a href="https://www.github.com/grgauravweb" style="text-decoration:none" target="blank">Gaurav Rai</a>
                </div>
                <!-- Copyright -->
            </div>

        </footer>
        <!-- Footer -->
    </body>

    </html>