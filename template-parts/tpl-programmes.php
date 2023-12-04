<?php //

/**
 * Template Name: programmes
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

<div class="container">
    <div class="row">
        <?php echo get_field('description'); ?>
    </div> 
</div> 

<div class="container-fluid">
        <h1>Route manchan : 6 jours</h1>
        <ul id="timeline">
            <?php 
                    foreach(get_field('programme') as $element): ?>
            <li style="--accent-color:<?php echo $element["couleur"]; ?>">
                <div class="date"><?php echo $element["jour"]; ?></div>
                <div class="title"><?php echo $element["titre"]; ?></div>
                <div class="descr"><?php echo $element["description"]; ?>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>   


<?php get_footer(); ?>


