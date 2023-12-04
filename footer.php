<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid" src="<?php echo get_field('logo_blanc', 'option')['url']; ?>">
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4>Contact</h4>
                                <ul>
                                    <li><a><i class="fa-solid fa-phone"></i> (+261) 669 - 694 333</a></li>
                                    <li><a><i class="fa-regular fa-envelope"></i> info@bobovoyages.com</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h4>Nos réseaux</h4>
                                <ul>
                                    <li><a><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a><i class="fa-brands fa-tiktok"></i></a></li>
                                    <li><a><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <h4>Histoire</h4>
                            <p>Plongez dans une aventure extraordinaire au sommet de l’Afrique ! Le Kilimandjaro vous attend pour une expérience de safari inégalée, où la majesté de la nature se dévoile sous ses plus beaux atours.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/vendor/justifiedGallery/jquery.justifiedGallery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#basicExample").justifiedGallery({
    rowHeight : 220,
    lastRow : 'nojustify',
    margins : 3
});
                $('.owl-accueil').owlCarousel({
                    loop:true,
                    margin:0,
                    nav:false,
                    dots:false,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                });
                
                $('.owl-offres').owlCarousel({
                    loop:true,
                    margin:20,
                    nav:false,
                    dots:false,
                    autoplay: true,
                    autoplayTimeout:5000,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:3
                        }
                    }
                });
            });
        </script>

    </body>
</html>