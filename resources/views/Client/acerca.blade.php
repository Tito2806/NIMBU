@extends('Client.index')
@section('content')
    <link rel="stylesheet" href="{{ asset('../../css/acerca.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/dev_card.css') }}">

    <div class="slider-wrapper">
        <div class="fr-slider">
            <div class="slide">
                <img data-fixed class="slide-bg" src="../../../assets/images/slider/1.png" alt="slide">
                


                <!-- <img data-position="100,530" data-delay="600" data-in="fade" data-out="fade" src="../../../assets/images/slider/NINBUBLANCO.png" alt="Enfold">
            <h1 data-position="155,554" data-delay="300" data-in="fade" data-out="fade"> Nimbu </h1>
                <img data-position="236,449" data-delay="1000" data-in="fade" data-out="fade" src="../../../assets/images/slider/e3.png" alt="Enfold">
                <img data-position="322,468" data-delay="1400" data-in="fade" data-out="fade" src="../../../assets/images/slider/e4.png" alt="Enfold">
                <img data-position="384,446" data-delay="1800" data-in="fade" data-out="fade" src="../../../assets/images/slider/e5.png" alt="Enfold">-->
            </div>

        </div>
    </div>


    <!-- About Section -->
    <div class="container-about">
        <div class="container">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- Service item -->
                    <div class="service-box-sb wow fadeInUp">
                        <div class="service-img">
                            <img src="../../../assets/images/slider/Manos.jpg" alt="Enfold">
                        </div>
                        <div class="service-info">
                            <h5>MISIÓN</h5>
                            <div class="desc">
                                Reconocer comunidades o áreas que sufran de algun tipo de necesidad en lo que concierne al
                                recurso hídrico, analizando si es
                                rentable o provechoso implementar un sistema SCALL para hacer más llevadera la vida
                                cotidiana
                                de los residentes de la comunidad objetivo. Además de esto, pretendemos educar a las
                                comunidades u organizaciones interesadas
                                en temas sobre el aprovechamiento, tratamiento, y conservacion del agua a través de la
                                organización de diferentes capacitaciones u orientaciones
                                <a class="see-more" href="#">

                                    <div class="line"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service item -->
                </div>
                <div class="col-md-4">
                    <!-- Service item -->
                    <div class="service-box-sb wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-img">
                            <img src="{{ asset('/images/LogoFinal1.png') }}" alt="Enfold">
                        </div>
                        <div class="service-info">
                            <h5>VALORES DEL NIMBÚ</h5>
                            <div class="desc">
                                <p> Acción Social </p>

                                <p>Trabajo En Equipo</p>

                                <p>Innovación</p>

                                <p>Responsabilidad</p>

                                <a class="see-more" href="#">

                                    <div class="line"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service item -->
                </div>
                <div class="col-md-4">
                    <!-- Service item -->
                    <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                        <div class="service-img">
                            <img src="../../../assets/images/slider/Gota.jpg" alt="Enfold">
                        </div>
                        <div class="service-info">
                            <h5>VISIÓN</h5>
                            <div class="desc">
                                Colaborar de manera activa en las diferentes comunidades de la región chorotega con la
                                implementación de sistemas de recolección de agua
                                de lluvia, además de la educación y concientización a las mismas en temas relacionados <a
                                    class="see-more" href="#">
                                    <div class="line"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service item -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-un">ENCARGADOS DEL PROYECTO</h3>
                    <div class="title-un-icon"><i class="fa ion-ios-time-outline"></i></div>
                    <!-- <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>-->
                    <ul class="blog-posts-g">
                        <li>
                            <div class="post-img">
                                <p>
                                    <img src="../../../assets/images/FOTO ADOLFO.jpeg" alt="Meet the New UI Design">
                                </p>
                            </div>
                            <div class="post-content">
                                <h5>
                                    <p> Adolfo Salinas Acosta </p>
                                </h5>
                                <div class="post-info"> <span>
                                        <p> PROFESOR / UNA SEDE NICOYA </p>
                                    </span> </div>
                                
                            </div>
                        </li>
                        <li>
                            <div class="post-img">
                                <p>
                                    <img src="../../../assets/images/FOTO RONALD.jpeg" alt="A LOOK INSIDE THE Workspace">
                                </p>
                            </div>
                            <div class="post-content">
                                <h5>
                                    <p> Ronald Sánchez Brenes </p>
                                </h5>
                                <div class="post-info"> <span>
                                        <p> PROFESOR / UNA SEDE LIBERIA</p>
                                    </span> </div>
                               
                            </div>
                        </li>
                        <li>
                            <div class="post-img">
                                <p>
                                    <img src="../../../assets/images/FOTO WILLLIAM.jpeg" alt="Inspiration of UX design">
                                </p>
                            </div>
                            <div class="post-content">
                                <h5>
                                    <p> William Gómez Solís </p>
                                </h5>
                                <div class="post-info"> <span>
                                        <p> PROFESOR / UNA SEDE NICOYA </p>
                                    </span> </div>
                                
                            </div>
                        </li>
                    </ul>
                    <div class="align-center">
                        <!--<a class="button" href="#">See More Posts</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
            <h3 class="title-un">DESARROLLADORES DEL PROYECTO</h3>
                    <div class="title-un-icon"><i class="fa ion-ios-time-outline"></i></div>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="../../../assets/images/Nayeli.jpeg">
                        <h3 class="name">Nayeli Carvajal Barrantes</h3>
                        <p class="title">Estudiante/UNA Sede Chorotega</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
       
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="../../../assets/images/Luis Eduardo.jpeg">
                        <h3 class="name">Luis Eduardo Gutiérrez Orias</h3>
                        <p class="title">Estudiante/UNA Sede Chorotega</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="../../../assets/images/Mario.jpeg">
                        <h3 class="name">Mario André Salazar Rojas</h3>
                        <p class="title">Estudiante/UNA Sede Chorotega</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="https://tinypic.host/images/2023/02/21/pikrepo.com-2.jpg">
                        <h3 class="name">Francisco ChongKan Alfaro</h3>
                        <p class="title">Estudiante/UNA Sede Chorotega</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    </div>

    <div class="footer-holder">
        <div class="container">
           <footer class="site-footer">
              <div class="row">
                 <div class="col-md-6">
                    <link rel="icon" href="{{asset('/images/Water.png')}}">
                    <p>© Copyright 2023 | SINIMBU </p> <link rel="icon" href="{{asset('/images/Water.png')}}">
                 </div>
                 <div class="col-md-6">
                    <ul class="footer-nav">
     <li><a href="https://www.facebook.com/profile.php?id=100090633485475&mibextid=LQQJ4d" class="fa fa-facebook"></a></li> 
     <li><a href="#" class="fa fa-twitter"></a></li> 
     <li><a href="https://www.youtube.com/@centromesoamericanodedesso4492/videos" class="fa fa-youtube"></a></li>
     <li><a href="https://www.instagram.com/nimbu_una/" class="fa fa-instagram"></a></li>
     
     
                    </ul>
                 </div>
              </div>
           </footer>
        </div>
     </div>

@stop
