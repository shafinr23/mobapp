 <div class="client-logos my-5">
        <div class="container text-center col-lg-4">
            <img src="images/client-logos.png" alt="client logos" class="img-fluid">
        </div>
    </div>

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>HIGHLIGHTS</small>
                <h3>Features you love</h3>
            </div>
            <?php 
            $features = new WP_Query(array(
                    'post_type'         =>          'featuers',
                    'post_per_page'     =>           '3'

            ));

            ?>

            <div class="row">
                     <?php
                if($features->have_posts()):
                while($features->have_posts()):$features->the_post();
                ?>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                    <p class="card-text"><?php the_content(); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                //echo '<h1>'.get_the_title().'</h1></br>';
               // echo '<p>'.the_content().'</p></br>';
                endwhile;
                 wp_reset_postdata();
                else:
                 echo 'nothing found';
                endif;
                ?>


               
            </div>

        </div>



    </div>
    <!-- // end .section -->
    <div class="section">

        <div class="container">
                <?php 
            $features = new WP_Query(array(
                    'post_type'         =>          'post',
                    'posts_per_page'     =>           '1'

            ));

            ?>


            <div class="row">
                <?php
                if($features->have_posts()):
                while($features->have_posts()):$features->the_post();
                ?>
                <div class="col-lg-6 offset-lg-6">
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2><?php the_title(); ?></h2>
                    <p class="mb-4"><?php the_content(); ?> </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
                    <div class="perspective-phone">
                        <img src="<?php the_post_thumbnail_url(); ?>"alt="perspective phone" class="img-fluid">
                    </div>
             <?php
                //echo '<h1>'.get_the_title().'</h1></br>';
               // echo '<p>'.the_content().'</p></br>';
                endwhile;
                 wp_reset_postdata();
                else:
                 echo 'nothing found';
                endif;
                ?>
        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <small>FEATURES</small>
                <h3>Do more with our app</h3>
            </div>
                

            <?php 
            $apps = new WP_Query(array(
                    'post_type'         =>          'apps',
                    'posts_per_page'     =>           '4'

            ));

            ?>


 <ul class="nav nav-tabs nav-justified" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">Communication</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">Communication</a>
                </li>


            </ul>
            <?php
                if($apps->have_posts()):
                while($apps->have_posts()):$apps->the_post();
                ?>
            
            <div class="tab-content">
               

                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>

                            <h2><?php the_title(); ?></h2>
                            
                            <p><?php the_content(); ?>
                            </p>
                            
                        </div>
                    </div>
                </div>

                <?php
                //echo '<h1>'.get_the_title().'</h1></br>';
               // echo '<p>'.the_content().'</p></br>';
                endwhile;
                 wp_reset_postdata();
                else:
                 echo 'nothing found';
                endif;
                ?>


            </div>


        </div>
    </div>
    <!-- // end .section -->

    <div class="section">

        <div class="container">
            <?php 
            $features = new WP_Query(array(
                    'post_type'         =>          'post',
                    'posts_per_page'     =>           '1',
                    'offset'            =>             '2'

            ));

            ?>
            <div class="row">

<?php
                if($features->have_posts()):
                while($features->have_posts()):$features->the_post();
                ?>


                <div class="col-md-6">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="dual phone" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2><?php the_title(); ?></h2>
                    <p class="mb-4"><?php the_content(); ?> </p>
                        <a href="#" class="btn btn-primary">Read more</a></div>
                </div>

 <?php
                //echo '<h1>'.get_the_title().'</h1></br>';
               // echo '<p>'.the_content().'</p></br>';
                endwhile;
                 wp_reset_postdata();
                else:
                 echo 'nothing found';
                endif;
                ?>



            </div>

        </div>

    </div>
    <!-- // end .section -->







    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
            <?php 
            $setps = new WP_Query(array(
                    'post_type'         =>          'steps',
                    'posts_per_page'     =>           '3',


            ));
            if($setps->have_posts()):
                while($setps->have_posts()):$setps->the_post();

            ?>

                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5><?php the_title(); ?></h5>
                                <p><?php the_content(); ?> </p>
                            </div>
                        </li>


            <?php
                //echo '<h1>'.get_the_title().'</h1></br>';
               // echo '<p>'.the_content().'</p></br>';
                endwhile;
                 wp_reset_postdata();
                else:
                 echo 'nothing found';
                endif;
                ?>


                        


                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="../images/iphonex.png" alt="iphone" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section">
        <div class="container">
            <div class="section-title">
                <small>TESTIMONIALS</small>
                <h3>What our Customers Says</h3>
            </div>
            <?php 
            $setps = new WP_Query(array(
                    'post_type'         =>          'cliant',
                    'posts_per_page'     =>           '3',


            ));?>

            <div class="testimonials owl-carousel">
                <?php  if($setps->have_posts()):
                while($setps->have_posts()):$setps->the_post();

            ?>


                <div class="testimonials-single">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="client" class="client-img">
                    <blockquote class="blockquote"><?php the_content(); ?> </blockquote>
                    <h5 class="mt-4 mb-2"><?php the_title(); ?></h5>
                    <p class="text-primary">United States</p>
                </div>
                    <?php
                //echo '<h1>'.get_the_title().'</h1></br>';
               // echo '<p>'.the_content().'</p></br>';
                endwhile;
                 wp_reset_postdata();
                else:
                 echo 'nothing found';
                endif;
                ?>


                
                
            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>GALLERY</small>
                <h3>App Screenshots</h3>
            </div>
            <?php 
            $setps = new WP_Query(array(
                    'post_type'         =>          'GALLERY',
 


            ));?>
            <div class="img-gallery owl-carousel owl-theme">
<?php  if($setps->have_posts()):
                while($setps->have_posts()):$setps->the_post();

            ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                <?php
                //echo '<h1>'.get_the_title().'</h1></br>';
               // echo '<p>'.the_content().'</p></br>';
                endwhile;
                 wp_reset_postdata();
                else:
                 echo 'nothing found';
                endif;
                ?>

            </div>

        </div>

    </div>
    <!-- // end .section -->





    <div class="section" id="pricing">
        <div class="container">
            <div class="section-title">
                <small>PRICING</small>
                <h3>Upgrade to Pro</h3>
            </div>

            <div class="card-deck">


<?php 
       
            $price = new WP_Query(array(
                    'post_type'         =>          'price',
                    'posts_per_page'     =>           '3',
 


            ));
             $counter = 0;
            if( $price->have_posts() ) : 
                while( $price->have_posts() ) : $price->the_post(); $counter++;

                 //We are in loop so we can check if counter is odd or even
            if( $counter % 2 == 0 ) : //It's even

                ?>
                <div class="card pricing popular">
                    <div class="card-head">
                        <small class="text-primary"><?php the_title(); ?></small>
                        <span class="price"><?php the_content(); ?><sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">10 Projects</div>
                        <div class="list-group-item">5 GB Storage</div>
                        <div class="list-group-item">Basic Support</div>
                        <div class="list-group-item"><del>Collaboration</del></div>
                        <div class="list-group-item"><del>Reports and analytics</del></div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
            <?php else: //It's odd?>
                
            <div class="card pricing ">
                    <div class="card-head">
                        <small class="text-primary"><?php the_title(); ?></small>
                        <span class="price"><?php the_content(); ?><sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Unlimited Projects</div>
                        <div class="list-group-item">100 GB Storage</div>
                        <div class="list-group-item">Priority Support</div>
                        <div class="list-group-item">Collaboration</div>
                        <div class="list-group-item">Reports and analytics</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>

            <?php
            endif;

     

        endwhile; wp_reset_postdata(); endif;       

                
            ?>


           





            </div>
            <!-- // end .pricing -->


        </div>

    </div>
    <!-- // end .section -->


    <div class="section pt-0">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                
                <div class="col-md-6">
                    <h4 class="mb-3">Can I try before I buy?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">What payment methods do you accept?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Can I change my plan later?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">Do you have a contract?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->



    <div class="section bg-gradient">
        <div class="container">
            <div class="call-to-action">

                <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                <h2>Download Anywhere</h2>
                <p class="tagline">Available for all major mobile and desktop platforms. Rapidiously visualize optimal ROI rather than enterprise-wide methods of empowerment. </p>
                <div class="my-4">

                    <a href="#" class="btn btn-light"><img src="../images/appleicon.png" alt="icon"> App Store</a>
                    <a href="#" class="btn btn-light"><img src="../images/playicon.png" alt="icon"> Google play</a>
                </div>
                <p class="text-primary"><small><i>*Works on iOS 10.0.5+, Android Kitkat and above. </i></small></p>
            </div>
        </div>

    </div>