            <!doctype html>



<html lang="en">



  <head>



    <!-- Required meta tags -->



    <meta charset="utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">







    <!-- Bootstrap CSS -->



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />

    <!-- <link rel="stylesheet" href="style.css"> -->



    <title>St. John Cumberland Presbyterian Church</title>

    <?php wp_head();?>

  </head>



  <body>



      <!--Header Area-->



        <div class="container-fluid header d-flex align-items-end" >



            <div class="container">



                <div class="row">



                    <div class="col-sm-12 d-flex align-items-center">



                        <img src="http://www.stjohncpc.org/images/stjohnlogo-lg-wt.png" alt="" class="logo">



                    </div>



                </div> 



                <div class="row">



                    <div class="col-sm-12">

                        <div id="main-nav">

                            <!-- <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '')); ?> -->
                            <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>

                        </div>



                    </div>



                </div>



            </div>



        </div>



        <!--Beginning of Content Container-->

        <div class="container main-content-container">







