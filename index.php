<?php
$page = 'accueil';
$displaySwiper = 1;
$displayLightbox = 1;

include('includes/header-accueil.php');

?>
    <!-- CRÉATIONS -->
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2>Dernières créations</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="images/image-bijou.jpg" class="glightbox" data-title="Sertissage" data-description="<a href=&quot;artisan-slug&quot; class='btn gradient-orange-pink'>Découvrir le joaillier</a>">
                                <picture>
                                    <source srcset='images/image-bijou.webp' type='image/webp'>
                                    <source srcset='images/image-bijou.jpg' type='image/jpg'>
                                    <img src='images/image-bijou.webp' class='img-fluid' alt='' loading='lazy'>
                                </picture>
                            </a>
                            <p>Sertissage</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/image-bijou.jpg" class="glightbox" data-title="Rhodiage" data-description="<a href=&quot;artisan-slug&quot; class='btn gradient-orange-pink'>Découvrir le joaillier</a>">
                                <picture>
                                    <source srcset='images/image-bijou.webp' type='image/webp'>
                                    <source srcset='images/image-bijou.jpg' type='image/jpg'>
                                    <img src='images/image-bijou.webp' class='img-fluid' alt='' loading='lazy'>
                                </picture>
                            </a>
                            <p>Rhodiage</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/image-bijou.jpg" class="glightbox" data-title="Dorure" data-description="<a href=&quot;artisan-slug&quot; class='btn gradient-orange-pink'>Découvrir le joaillier</a>">
                                <picture>
                                    <source srcset='images/image-bijou.webp' type='image/webp'>
                                    <source srcset='images/image-bijou.jpg' type='image/jpg'>
                                    <img src='images/image-bijou.webp' class='img-fluid' alt='' loading='lazy'>
                                </picture>
                            </a>
                            <p>Dorure</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/image-bijou.jpg" class="glightbox" data-title="Dorure" data-description="<a href=&quot;artisan-slug&quot; class='btn gradient-orange-pink'>Découvrir le joaillier</a>">
                                <picture>
                                    <source srcset='images/image-bijou.webp' type='image/webp'>
                                    <source srcset='images/image-bijou.jpg' type='image/jpg'>
                                    <img src='images/image-bijou.webp' class='img-fluid' alt='' loading='lazy'>
                                </picture>
                            </a>
                            <p>Dorure</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/image-bijou.jpg" class="glightbox" data-title="Dorure" data-description="<a href=&quot;artisan-slug&quot; class='btn gradient-orange-pink'>Découvrir le joaillier</a>">
                                <picture>
                                    <source srcset='images/image-bijou.webp' type='image/webp'>
                                    <source srcset='images/image-bijou.jpg' type='image/jpg'>
                                    <img src='images/image-bijou.webp' class='img-fluid' alt='' loading='lazy'>
                                </picture>
                            </a>
                            <p>Dorure</p>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/image-bijou.jpg" class="glightbox" data-title="Dorure" data-description="<a href=&quot;artisan-slug&quot; class='btn gradient-orange-pink'>Découvrir le joaillier</a>">
                                <picture>
                                    <source srcset='images/image-bijou.webp' type='image/webp'>
                                    <source srcset='images/image-bijou.jpg' type='image/jpg'>
                                    <img src='images/image-bijou.webp' class='img-fluid' alt='' loading='lazy'>
                                </picture>
                            </a>
                            <p>Dorure</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CRÉATIONS -->

    <!-- ACTUALITÉS -->
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2>Dernières actualités</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-sm-6 col-md-4">
                <a href="actu-slug">
                    <div class="card">
                        <picture>
                            <source srcset="images/actu-1.webp" type="image/webp">
                            <source srcset="images/actu-1.jpg" type="image/jpeg"> 
                            <img src="images/actu-1.jpg" alt="Titre actu 1" class="img-fluid">
                        </picture>
                        <div class="card-body">
                            <h2>Titre de l’actualité</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                            <p class="pinkLink">Lire la suite</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a href="actu-slug">
                    <div class="card">
                        <picture>
                            <source srcset="images/actu-2.webp" type="image/webp">
                            <source srcset="images/actu-2.jpg" type="image/jpeg"> 
                            <img src="images/actu-2.jpg" alt="Titre actu 1" class="img-fluid">
                        </picture>
                        <div class="card-body">
                            <h2>Titre de l’actualité</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                            <p class="pinkLink">Lire la suite</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a href="actu-slug">
                    <div class="card">
                        <picture>
                            <source srcset="images/actu-1.webp" type="image/webp">
                            <source srcset="images/actu-1.jpg" type="image/jpeg"> 
                            <img src="images/actu-1.jpg" alt="Titre actu 1" class="img-fluid">
                        </picture>
                        <div class="card-body">
                            <h2>Titre de l’actualité</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                            <p class="pinkLink">Lire la suite</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a href="actu-slug">
                    <div class="card">
                        <picture>
                            <source srcset="images/actu-1.webp" type="image/webp">
                            <source srcset="images/actu-1.jpg" type="image/jpeg"> 
                            <img src="images/actu-1.jpg" alt="Titre actu 1" class="img-fluid">
                        </picture>
                        <div class="card-body">
                            <h2>Titre de l’actualité</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                            <p class="pinkLink">Lire la suite</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>

    <!-- END ACTUALITÉS -->

   

<?php include('includes/footer.php'); ?>