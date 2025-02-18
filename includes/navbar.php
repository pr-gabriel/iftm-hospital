<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Esperança</title>
    <!-- Importando Materialize e Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="light-blue lighten-5 ">
        <div class="nav-wrapper container light-blue lighten-5">
            <a href="../../index.php" class="brand-logo ms-0">
                <img src="../../img/logo.png" alt="Logo" width="150" height="50" style="margin-top: 10px;">
            </a>
            <!-- Mobile menu icon -->
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <!-- Desktop links -->
            <ul class="right hide-on-med-and-down">
                <li><a class="black-text" href="../index.php">Home</a></li>
                <li><a class="black-text" href="../departamento/departamento.php">Médicos</a></li>
                <li><a class="black-text" href="../agendamento/agendamento.php">Agendamentos</a></li>
                <li><a class="black-text" href="../eventos/eventos.php">Pesquisa</a></li>
            </ul>
            
        </div>

    </nav>

    
    <!-- Mobile menu -->
    <ul class="sidenav" id="mobile-demo">
        <li><a class="black-text" href="../index.php">Home</a></li>
        <li><a class="black-text" href="../departamento/departamento.php">Médicos</a></li>
        <li><a class="black-text" href="../agendamento/agendamento.php">Agendamentos</a></li>
        <li><a class="black-text" href="../eventos/eventos.php">Pesquisa</a></li>
    </ul>

    <section>
    <!-- Content -->


 <!-- Banner -->
 <div class="swiper mySwiper responsivo1">
    <div class="swiper-wrapper">
      <div class="swiper-slide responsivo2"><img src="../../img/banner4.png" alt="Slide 1" class="w-100"></div>
      <div class="swiper-slide responsivo2"><img src="../../img/banner.png" alt="Slide 3" class="w-100"></div>
      <div class="swiper-slide responsivo2"><img src="../../img/banner3.png" alt="Slide 3" class="w-100"></div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <br>
  </section>
    <!-- Importing JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);
        });
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</body>

</html>
