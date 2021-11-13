<?php get_header();?>



<div class="single-post-container container py-5">

    <div class="top-row row">

        <div class="col-12 col-sm-8">

            <h1 class="single-title h1 text-capitalize fw-bold text-center"><?php echo the_title(); ?></h1>

            <div class="share d-flex justify-content-center align-item-center">


                <ul class="d-flex list-unstyled justify-content-center align-items-center w-100">

                    <li>

                        <a href="#" class="btn" style="background-color: #3b5998;"><i class="fab fa-facebook"></i></i></a>

                    </li>

                    <li>

                        <a href="#" class="btn" style="background-color: #1da1f2;"><i class="fab fa-twitter"></i></a>

                    </li>              

                    <li>

                        <a href="#" class="btn" style="background-color: #cd201f;"><i class="fab fa-youtube"></i></a>

                    </li>  

                    <li>

                        <a href="#" class="btn" style="background-color: #25d366;"><i class="fab fa-whatsapp"></i></a>

                    </li>  

                </ul>

            </div>  

        </div>

        <div class="col-4 d-none d-sm-block"></div>

    </div>

    <div class="row">

        <div class="postsingle-col col-12 col-sm-8">



            <div class="single-content" id="single-content">

            <img src=" <?php the_post_thumbnail_url();?> " class="img-fluid" /> 

                <?php the_content(); ?>

            </div>

            

        </div>



        

    </div>

</div>

<?php get_footer();?>

