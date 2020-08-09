<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dream Fulfiller</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>


    <style>
        @import url("https://fonts.googleapis.com/css?family=Acme|Lobster|Patua+One|Rubik|Sniglet");
* {
  box-sizing: border-box;
}

header,
section {
  overflow-x: hidden;
}

:root {
  --Sniglet-font: "Sniglet", cursive;
  --Rubik: "Rubik", cursive;
  --Patua: "Patua One", cursive;
  --Lobster: "lobster", cursive;
  --light-black: #2e2c2caf;
  --bggradient: linear-gradient(to bottom, #dd2476, #ff512f);
  --light-gray: rgba(255, 255, 255, 0.877);
}

header a {
  font-family: var(--Sniglet-font);
  font-size: 0.9em;
  color: whitesmoke;
}



.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

header .nav-item:last-child {
  padding-right: 10.5em;
}

header .nav-item {
  padding: 0.9em;
}

header .navbar-brand {
  padding-left: 8rem;
}

header .nav-link:hover {
  color: black;
}

header .row .col-md-7 {
  padding: 22vmin 1vmin;
  padding-bottom: 35vmin;
}

header .row .col-md-5 {
  padding: 4.2vmin 1vmin;
}

header .row .col-md-5 img {
  width: 90%;
}

header {
  background: #ff512f;
  /* fallback for old browsers */
  background: var(--bggradient);
}

header .container .col-md-7 {
  font-family: "Rubik", sans-serif;
}

header .container .col-md-7 h6 {
  padding: 1vmin;
  letter-spacing: 4px;
}

header .container .col-md-7 h1 {
  font-size: 8.5vmin;
  font-weight: bold;
  padding: 0.1em 0em;
}

header .container .col-md-7 p {
  padding: 1vmin 5vmin;
}

.primary-btn {
  border-radius: 30px;
  font-weight: bold;
}

/********** section 1 **************/

.section-1 {
  padding: 20vmin 0vmin;
}

.section-1 .row .col-md-6 .pray img {
  opacity: 0.8;
  width: 80%;
  border-radius: 0.2em;
}

.section-1 .row .col-md-6:last-child {
  position: relative;
}

.section-1 .row .col-md-6 .panel {
  position: absolute;
  top: 7vmin;
  left: -18vmin;
  background: white;
  border-radius: 3px;
  text-align: left;
  padding: 13vmin 5vmin 20vmin 10vmin;
  box-shadow: 0px 25px 42px rgba(0, 0, 0, 0.2);
  font-family: var(--Rubik);
  z-index: 1;
}

.section-1 .row .col-md-6 .panel h1 {
  font-weight: bold;
  padding: 0.4em 0;
  font-size: 2em;
}

.section-1 .row .col-md-6 .panel p {
  font-size: 0.9em;
  color: rgba(0, 0, 0, 0.5);
}

/*  Section 2  */

.cover {
  width: 100%;
  height: 55vmin;

  background-position: -24rem -19rem;
  background-size: 150%;
  position: relative;
}

.cover .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 999;
}

.cover .content {
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  padding-top: 19vmin;
}

.cover .content > h1 {
  font-family: var(--Patua);
  font-size: 6vmin;
  color: whitesmoke;
}

.cover .content > p {
  font-family: var(--Rubik);
  font-size: 2vmin;
  color: #e5e5e5;
}

.numbers .rect {
  position: relative;
  z-index: 1;
  background: white;
  width: 17rem;
  height: 12rem;
  padding-top: 3.5vmin;
  margin: 1rem;
  border-radius: 0.5em;
  box-shadow: 1px 2px 50px 0px rgba(255, 0, 0, 0.349);
}

.numbers {
  margin-top: -15vmin;
}

.numbers .rect h1 {
  font-size: 5rem;
  color: tomato;
}

.numbers .rect > p {
  font-family: var(--Patua);
}


/* Section Team */

.section-4 .container h1 {
  font-size: 6vmin;
  padding-top: 14vmin;
}

.section-4 .team {
  padding: 10vmin 4vmin;
}

.section-4 .card {
  width: 22em;
  margin-top: 10vmin;
}

.section-4 .card .card-text {
  padding: 0.5em;
}

.section-4 .card-body > a {
  font-size: 1.5em;
}

.section-4 .carousel-item {
  padding-left: 3rem;
}

.border-radius {
  border-radius: 340px;
  width: 60%;
}

footer {
  background: rgba(0, 0, 0, 0.815);
  overflow-x: hidden;
  padding: 14vmin 18vmin;
}

footer p > span {
  color: #ff512f;
}

footer input {
  border: none !important;
}

footer input::placeholder {
  color: white !important;
}

footer .input-group .input-group-text {
  background: var(--bggradient);
  border: none;
}

footer .column i {
  color: #dd2476;
}

/* It is Adjacent sibling combinator */

footer .column i + i {
  padding: 0 0.5em;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.815);
  z-index: 9999;
  transition: all 1.5s ease;
}
        @media only screen and (max-width: 768px) {
  header .navbar-brand {
    padding-left: 1rem;
  }
  .section-1 .row .col-md-6 .panel {
    position: initial;
    width: initial;
    height: initial;
  }
  .section-2 .cover {
    background-position: -25vmin -10vmin;
  }
  .numbers .rect {
    width: 10rem;
    height: 8rem;
  }
  .numbers .rect h1 {
    font-size: 2rem;
  }

  .section-3 {
    height: inherit;
    padding: 10vmin !important;
  }
  .section-3 .row h1 {
    padding: 6vmin 4vmin;
  }
  .section-3 .platform .col-md-6 {
    text-align: center !important;
  }
  .section-3 .desktop i {
    font-size: 8vmin;
  }

  .section-4 .carousel-item {
    padding-left: 0.6rem;
  }
  footer .row .col-md-2 {
    margin-top: 8vmin;
  }
}

/* screen size 375px */

@media only screen and (max-width: 375px) {
  .section-4 .card {
    width: 18em;
  }
}

@media only screen and (max-width: 320px) {
  .section-4 .carousel-inner {
    margin-left: -4vmin;
  }
}

    </style>
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="About.php">About Us</a>
            </li>
              

            </li>
            <li class="nav-item">
              <a class="nav-link" href="chatbot.php">Talk with us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cont.php">Contact Us</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href=" Gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form.php">Booking</a>
            </li>
              
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feed.php">Feedback</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h6>FOUNDER & CO-FOUNDER : PRASHANT NEGI & APOORVA SHARMA</h6>
          <h1>DREAM FULFILLER</h1>
          <p>
              we start this firm on 15 Feb 2020 to
          service your desire moment or to fills colours in your
          happines.

          </p>

        </div>
        <div class="col-md-5 col-sm-12  h-25">
           <img src='pics/wed10.jpg' alt="book">
        </div>
      </div>
    </div>
  </header>
  
  <main>
    <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src='pics/eve2.jpeg' alt="Pray" class="" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left">
              <h1>Dream FulFiller</h1>
              <p class="pt-4">
                  Dream Fullfiller is full service event management firm based on your dreams we bring a
        fresh unique approach to  the event management industry.With this aim we start this firm on 15 Feb 2020 to
          service your desire moment or to fills colours in your happines
          and for that we provided quality food good decoration and best hospitality.
              </p>
              <p>
               Our team understands that a properly executed event can be leveraged
            to support an organization strategic vision in corporated into a company's
            marketing plan or used to build networks and client loyality.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Some Features That Made Us Unique</h1>
          <p>
            Our best event which we done so far till now......
          </p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1>55</h1>
            <p>Happy Client</p>
          </div>
          <div class="rect">
            <h1>60</h1>
            <p>Event Organised</p>
          </div>
          <div class="rect">
            <h1>8</h1>
            <p>city</p>
          </div>
          <div class="rect">
            <h1>20</h1>
            <p>Special Features</p>
          </div>
        </div>
      </div>




    <!-- Section 4 -->
    <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">Our Team</h1>
        <p class="text-secondary">Our best Leaders and Workers</p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src='pics/prashu.jpg' class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">PRASHANT NEGI</h3>
                  <p class="card-text">
                   He is the Founder of this Organisation with a great experience in this field and he remains deeply involved in each of our event.
                  </p>

                  <p class="text-black-50">FOUNDER</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                          <img src='pics/kuku.jpg' class="img-fluid border-radius p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">KAUSHIK PANDEY</h3>
                        <p class="card-text">
                          He is the Manager in our organisation and deals the Finance Sector of our Organisation.
                        </p>

                        <p class="text-black-50">MANAGER </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                          <img src='pics/akhi.jpg' class="img-fluid border-radius p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">AKHILESH GANGWAR</h3>
                        <p class="card-text">
                         He is the Chief Executive of our Catering and Decoration Department in our Organisation.
                        </p>

                        <p class="text-black-50">CHIEF EXECUTIVE</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                    <img src='pics/Apoo.jpg' class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">APOORVA SHARMA</h3>
                  <p class="card-text">
                    She is the Co-Founder of this Organisation. She can personally assist all the events.
                  </p>

                  <p class="text-black-50">CO-FOUNDER</p>
                </div>
              </div>
        </div>
      </div>
    </section>

  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">We are creating your dreams true</p>
          <p class="pt-4 text-muted">Copyright ©2019 All rights reserved | This template is made with by
            <span> Educ with Fun</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </footer>


    </section>
  </main>
</body>

</html>