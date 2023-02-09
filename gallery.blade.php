<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/siswa">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/guru">Data Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>

   <!-- Modal gallery -->
<section class="">
    <!-- Section: Images -->
    <section class="">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-1.webp"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-2.webp"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-3.webp"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Images -->
  
    <!-- Section: Modals -->
    <section class="">
      <!-- Modal 1 -->
      <div
        class="modal fade"
        id="exampleModal1"
        tabindex="-1"
        aria-labelledby="exampleModal1Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/A3PDXmYoF5U"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>
  
            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 2 -->
      <div
        class="modal fade"
        id="exampleModal2"
        tabindex="-1"
        aria-labelledby="exampleModal2Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/wTcNtgA6gHs"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>
  
            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 3 -->
      <div
        class="modal fade"
        id="exampleModal3"
        tabindex="-1"
        aria-labelledby="exampleModal3Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/vlDzYIIOYmM"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>
  
            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Modals -->
  </section>
  <!-- Modal gallery -->

  <!-- Carousel wrapper -->
<div
id="carouselVideoExample"
class="carousel slide carousel-fade"
data-mdb-ride="carousel"
>
<!-- Indicators -->
<div class="carousel-indicators">
  <button
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide-to="0"
    class="active"
    aria-current="true"
    aria-label="Slide 1"
  ></button>
  <button
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide-to="1"
    aria-label="Slide 2"
  ></button>
  <button
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide-to="2"
    aria-label="Slide 3"
  ></button>
</div>

<!-- Inner -->
<div class="carousel-inner">
  <!-- Single item -->
  <div class="carousel-item active">
    <video class="img-fluid" autoplay loop muted>
      <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
    </video>
    <div class="carousel-caption d-none d-md-block">
      <h5>First slide label</h5>
      <p>
        Nulla vitae elit libero, a pharetra augue mollis interdum.
      </p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <video class="img-fluid" autoplay loop muted>
      <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
    </video>
    <div class="carousel-caption d-none d-md-block">
      <h5>Second slide label</h5>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <video class="img-fluid" autoplay loop muted>
      <source
        src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
        type="video/mp4"
      />
    </video>
    <div class="carousel-caption d-none d-md-block">
      <h5>Third slide label</h5>
      <p>
        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
      </p>
    </div>
  </div>
</div>
<!-- Inner -->

<!-- Controls -->
<button
  class="carousel-control-prev"
  type="button"
  data-mdb-target="#carouselVideoExample"
  data-mdb-slide="prev"
>
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button
  class="carousel-control-next"
  type="button"
  data-mdb-target="#carouselVideoExample"
  data-mdb-slide="next"
>
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<!-- Carousel wrapper -->

