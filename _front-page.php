<?php get_header(); ?>
        <!--Content Area-->
        <section class="jumbotron content-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="row sermons-card">
                            <div class="col-sm-12">
                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="titlerow media-carousel">Three Ways To Listen</div>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <a href="http://www.stjohncpc.media/">
                                            <img src="http://www.stjohncpc.org/images/media.png" width="40px" height="40px" alt=" Media Page"> Media Page</a>
                                          </div>
                                          <div class="carousel-item">
                                            <a href="https://m.facebook.com/sjcpc/" target="_new">
                                            <img src="http://www.stjohncpc.org/images/fb.png" width="40px;" height="40px" alt=" LIVE Feed"> LIVE Feed on Facebook</a>
                                          </div>
                                          <div class="carousel-item">
                                            <a href="http://kascott.podbean.com/" target="_new">
                                            <img src="http://www.stjohncpc.org/images/podbean.png" width="40px" width="40px" alt=" Podcast"> Podcast</a>
                                          </div>
                                        </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card blue-card">
                                    <a href="/sundays/">



                                        <img src="http://www.stjohncpc.org/images/service-1b.jpg" class="img-responsive card-img">



                                        <h2>Sunday Mornings</h2>



                                        <p><i>Sunday School: 9:45 AM<br />



                                        Worship: 11:00 AM</i><br />



                                        </p>



                                  </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card blue-card">
                                    <a href="/about-us/our-leadership/">
                                        <img src="http://www.stjohncpc.org/images/pastor-1.jpg" class="img-responsive card-img" >
                                        <h2>Meet the Pastor</h2>
                                        <p><i>Learn about Pastor Adrian Scott &amp; His Wife Cynthia</i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card pl-5 grey-text front-page-content">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                          <h2 class="entry-title"><?php the_title(); ?></h2>
                          <?php if ( !is_page() ):?>
                          <section class="entry-meta">
                              <p>Posted on <?php the_date();?> by <?php the_author();?></p>
                            </section>
                          <?php endif; ?>
                          <section class="entry-content">
                            <?php the_content(); ?>
                          </section>
                          <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
                            <span class="category-links">
                              Posted under: <?php echo get_the_category_list( ', ' ); ?>
                            </span>
                          <?php endif; ?></section>
                        </article>
                      <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Map area-->

<div class="container">
    <section class="jumbotron-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="card border-light mb-3">
                    <div class="card-header">Where do we meet?</div>
                    <div class="card-body">
                      <h5 class="card-title">St. John Presbyterian Church<br>
                        6007 W. Pleasant Ridge Rd, Arlington, TX 76016</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3358.153262543996!2d-97.20314828622698!3d32.68196979613572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e64c8195227fb%3A0xe3b4c03bc13faabf!2s6007%20W%20Pleasant%20Ridge%20Rd%2C%20Arlington%2C%20TX%2076016!5e0!3m2!1sen!2sus!4v1587043323734!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-5 ">
                <div class="card border-light mb-3">
                    <div class="card-header">Campus Map</div>
                    <div class="card-body">
                      <!-- <h5 class="card-title">Light card title</h5> -->
                      <p class="card-text">
                        Building #1: Sanctuary &amp; Offices<br />
                        Building #2: Fellowship Hall &amp; Classrooms<br />
                        Building #3: Youth Hall
                      </p>
                      <img src="http://www.stjohncpc.org/images/campus-map.png"  width="400px" height="400px" class="">
                        <p><a href="/campus-map/">see larger map</a></p>
                    </div>
                </div>
            </div>
   </section>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>