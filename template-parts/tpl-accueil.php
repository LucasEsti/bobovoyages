<?php //

/**
 * Template Name: Accueil 
 */
get_header(); ?>

<?php if( have_rows('home') ): 
     while( have_rows('home') ): the_row(); ?>
<div id="principal" class="w-100 mb-5">
        <div class="owl-accueil owl-carousel owl-theme">
            <?php 
                    foreach(get_sub_field('images') as $element): ?>
            <div class="item">
                <img alt="" class="img-fluid" src="<?php echo $element["url"]; ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php if( have_rows('histoire') ): 
     while( have_rows('histoire') ): the_row(); ?>
    <div class="mb-5 decouverir">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <h1><?php echo get_sub_field('titre'); ?></h1>
            </div>
            <div class="col-lg-4 ">
                <p>
                <?php echo get_sub_field('description'); ?>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column bd-highlight mb-3">
                    <?php 
                    foreach(get_sub_field('images') as $element): ?>
                    <div class="p-2 bd-highlight">
                        <img alt="" class="img-fluid" src="<?php echo $element["url"]; ?>">
                    </div>
                    <?php endforeach; ?>
                  </div>
            </div>
            </div>
            
        </div>
    </div>
<?php endwhile; endif; ?>

<?php if( have_rows('destinations') ): 
     while( have_rows('destinations') ): the_row(); ?>
    <div class="mb-5 destination">
        <div class="container-fluid">
            <div class="row mb-5">
                <h1 class="text-center"><?php echo get_sub_field('titre'); ?></h1>
            </div>
            <div class="row">
                <?php 
                    foreach(get_sub_field('parcours') as $element): ?>
                    <div class="col-lg-3 dest">
                            <img alt="" class="img-fluid" src="<?php echo $element["image"]["url"]; ?>">
                            <div class="titre">
                                <span><?php echo $element["titre"]; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php if( have_rows('offres') ): 
     while( have_rows('offres') ): the_row(); ?>
    <div class="mb-5 offres">
        <div class="container">
            <div class="row mb-5">
                <h1 class="text-center"><?php echo get_sub_field('titre'); ?></h1>
            </div>
            <div class="row">
                <div class="owl-offres owl-carousel owl-theme">
                    <?php 
                    foreach(get_sub_field('packs') as $element): ?>
                    <div class="item">
                        <div class="row">
                            <img alt="" class="img-fluid" src="<?php echo $element["image"]["url"]; ?>">
                            <h2><a href=""><?php echo $element["titre"]; ?></a></h2>
                            <p><?php echo $element["description"]; ?></p>
                            <span><?php echo $element["duree"]; ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
  <?php endwhile; endif; ?>      
     
<?php if( have_rows('gallerie') ): 
     while( have_rows('gallerie') ): the_row(); ?>
    <div id="basicExample" class="mb-5 ">
        <?php foreach(get_sub_field('gallery') as $element): ?>
        <a class="justified-gallery">
            <img alt="<?php echo $element["alt"]; ?>" src="<?php echo $element["url"]; ?>"/>
        </a>
        <?php endforeach; ?>
    </div>
<?php endwhile; endif; ?> 

<?php get_footer(); ?>


