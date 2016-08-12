<?php
/**
 * @package WordPress
 * @subpackage History of Design
 */
?>
<!DOCTYPE html>
<html>
<head>
  
  <title>History of Design: Decorative Arts and Materian Culture, 1400&ndash;2000</title>
  <meta charset="UTF-8">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jcarousel.basic.css">
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7503072/771922/css/fonts.css"  media="screen" />
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/textbook.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousel.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousel-pagination.min.js"></script>

  <?php wp_head(); ?>

</head>

<body>
  <div class="topNavBar">
    <div class="navCentered">
      <div class="leftColumn">
        <ul>
          <li class="navItem" id="top">History of Design</li>
        <ul>
      </div>
      <div class="rightColumn">
        <ul>
          <li class="navItem firstNavItem" id="introLink">Introduction</li>
          <li class="navItem" id="edconLink">Editors and Contributors</li>
          <li class="navItem" id="sampLink">Sample Content</li>
          <li class="navItem lastNavItem"><a href="http://store.bgc.bard.edu/history-of-design-decorative-arts-and-material-culture-1400-2000-edited-by-pat-kirkham-and-susan-weber/" target="_blank">Purchase</a></li>
          
          
        </ul>
      </div>
    </div>
  </div><!-- end .topNavBar -->
  <div class="content">
    <div class="header">
      <div class="leftColumn">
        <div class="leftContainer">
          <img src="<?php bloginfo('template_url'); ?>/images/logo_BW.png">
        </div>
      </div>
      <div class="rightColumn">
        <div class="rightContainer">
          <img src="<?php bloginfo('template_url'); ?>/images/titleimage.png">
        </div>
      </div>
      <br clear="all">
    </div><!-- end header -->

    <?php while ( have_posts() ) : the_post(); ?> 
    <div class="section">
      <div class="bigImage">
        <div class="rightColumn">
          <div class="imageContainer">
            <div class="wrapper">
              <div class="jcarousel-wrapper">
                <div class="jcarousel">
                  <ul>
                    <?php postimage('full'); ?>
                  </ul>
                </div>
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
                          <p class="jcarousel-pagination">
              </div>
            </div>
          </div>
        </div>
        <br clear="all">
      </div><!-- end bigImage -->
      <br clear="all">
    </div>
    <div class="section halfbreak" id="purchaseQuote">
      <div class="leftColumn">
        <div class="sidebar">
          <div class="button">
            <?php the_field('button'); ?>
          </div>
        </div>
      </div>
      <div class="rightColumn">
        <div class="quote">
          <?php the_field('quote'); ?>
        </div>
      </div>
      <br clear="all">
    </div><!-- end purchaseQuote -->
    <div class="section" id="introduction">
      <div class="leftColumn">
        <div class="sidebar">
          <?php the_field('sidebar'); ?>
        </div>
      </div>
      <div class="rightColumn">
        <div class="text">
          <?php the_content(); ?>
        </div>
      </div>
      <br clear="all">
    </div><!-- end introduction -->
    <?php endwhile; // end of the loop. ?>
    <div class="section" id="editors">
      <div class="leftColumn">
        <div class="sidebar">

        </div>
      </div>
      <div class="rightColumn">
        <div class="text">
          <div id="editors">
          <h1>Editors</h1>
          
          <?php
          global $post;
          $args = array ('category' => 2, 'order' => ASC, 'posts_per_page' => -1);
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <script>
              $(document).ready(function(){
                $("#name<?php the_ID(); ?>").hover(
                  function () {
                    $("#bio<?php the_ID(); ?>").fadeIn(200);
                    $(".box<?php the_ID(); ?>").css("background-color", "white");
                    $(".box<?php the_ID(); ?>").css("border", "1px solid #fff");
                  }, function () {
                    $("#bio<?php the_ID(); ?>").fadeOut(0);
                    $(".box<?php the_ID(); ?>").css("background-color", "#fcfcfc");
                    $(".box<?php the_ID(); ?>").css("border", "1px solid #d9c2c3");
                  }
                );
                var bio<?php the_ID(); ?>height = ($("#bio<?php the_ID(); ?>").height()*-.25);
                $("#bio<?php the_ID(); ?>").css("top", bio<?php the_ID();?>height);
              });
            </script>
            <div class="oneContrib" id="name<?php the_ID(); ?>">
              <div class="name box<?php the_ID(); ?>" id="name<?php the_ID(); ?>"><h5><?php the_title(); ?></h5></div>
              <div class="bio" id="bio<?php the_ID(); ?>"><?php the_content(); ?></div>
              <br clear="all">
            </div>
          <?php endforeach; 
          wp_reset_postdata();?>
          </div>
        </div>
      </div>
      <br clear="all">
    </div><!-- end editors -->
    <div class="section" id="project_editors">
      <div class="leftColumn">
        <div class="sidebar">

        </div>
      </div>
      <div class="rightColumn">
        <div class="text">
          <div id="project_editor">
          <h1>Project Editor</h1>
          
          <?php
          global $post;
          $args = array ('category' => 4, 'order' => ASC, 'posts_per_page' => -1);
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <script>
              $(document).ready(function(){
                $("#name<?php the_ID(); ?>").hover(
                  function () {
                    $("#bio<?php the_ID(); ?>").fadeIn(200);
                    $(".box<?php the_ID(); ?>").css("background-color", "white");
                    $(".box<?php the_ID(); ?>").css("border", "1px solid #fff");
                  }, function () {
                    $("#bio<?php the_ID(); ?>").fadeOut(0);
                    $(".box<?php the_ID(); ?>").css("background-color", "#fcfcfc");
                    $(".box<?php the_ID(); ?>").css("border", "1px solid #d9c2c3");
                  }
                );
                var bio<?php the_ID(); ?>height = ($("#bio<?php the_ID(); ?>").height()*-.25);
                $("#bio<?php the_ID(); ?>").css("top", bio<?php the_ID();?>height);
              });
            </script>
            <div class="oneContrib" id="name<?php the_ID(); ?>">
              <div class="name box<?php the_ID(); ?>" id="name<?php the_ID(); ?>"><h5><?php the_title(); ?></h5></div>
              <div class="bio" id="bio<?php the_ID(); ?>"><?php the_content(); ?></div>
              <br clear="all">
            </div>
          <?php endforeach; 
          wp_reset_postdata();?>
          </div>
        </div>
      </div>
      <br clear="all">
    </div><!-- end project editors -->
    <div class="section" id="contributors">
      <div class="leftColumn">
        <div class="sidebar">

        </div>
      </div>
      <div class="rightColumn">
        <div class="text">
          <div id="contributors">
          <h1>Contributors</h1>
          
          <?php
          global $post;
          $args = array ('category' => 3, 'order' => ASC, 'posts_per_page' => -1);
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <script>
              $(document).ready(function(){
                $("#name<?php the_ID(); ?>").hover(
                  function () {
                    $("#bio<?php the_ID(); ?>").fadeIn(200);
                    $(".box<?php the_ID(); ?>").css("background-color", "white");
                    $(".box<?php the_ID(); ?>").css("border", "1px solid #fff");
                  }, function () {
                    $("#bio<?php the_ID(); ?>").fadeOut(0);
                    $(".box<?php the_ID(); ?>").css("background-color", "#fcfcfc");
                    $(".box<?php the_ID(); ?>").css("border", "1px solid #d9c2c3");
                  }
                );
                var bio<?php the_ID(); ?>height = ($("#bio<?php the_ID(); ?>").height()*-.25);
                $("#bio<?php the_ID(); ?>").css("top", bio<?php the_ID();?>height);
              });
            </script>
            <div class="oneContrib" id="name<?php the_ID(); ?>">
              <div class="name box<?php the_ID(); ?>" id="name<?php the_ID(); ?>"><h5><?php the_title(); ?></h5></div>
              <div class="bio" id="bio<?php the_ID(); ?>"><?php the_content(); ?></div>
              <br clear="all">
            </div>
          <?php endforeach; 
          wp_reset_postdata();?>
          </div>
        </div>
      </div>
      <br clear="all">
    </div><!-- end contributors -->
    
    <?php
    $other_page = 35;
    $theother_page = 114;
    ?>
    <div class="section" id="excerpt">
      <div class="leftColumn">
        <div class="sidebar">
        </div>
      </div>
      <div class="rightColumn">
        <div class="text">
          <div id="excerptTitle">
            <h1>East Asia 1900&ndash;1750</h1>
          </div>
        </div>
      </div>
      <br clear="all">
      <div class="leftColumn">
        <div class="sidebar">
          <?php the_field('excerpt_citation', $other_page); ?>
        </div>
      </div>
      <div class="rightColumn">
        <div class="text">
          <div id="excerpt">
            <div id="excerpt_1" class="excerptSection excerptSection_1">
              <?php the_field("excerpt_1", $other_page);?>
              
            </div>
            <div id="excerpt_2" class="more excerptSection excerptSection_1">
              <?php the_field("excerpt_2", $other_page);?> 
            </div>
            <div id="excerpt_3" class="more excerptSection excerptSection_1">
              <?php the_field("excerpt_3", $other_page);?> 
            </div>
            <div id="excerpt_4" class="more excerptSection excerptSection_1">
              <?php the_field("excerpt_4", $other_page);?> 
            </div>
          </div>
          <div class="gradient gradient_1">
          </div>
          <div class="readMoreButton readMoreButton_1">
            <div id="rm_1">
              Read More of this Sample
              <img class="downArrow" src="<?php bloginfo('template_url'); ?>/images/downarrow.png">
            </div>
            <div class="rmPurchase rmPurchase_1">
              <a href="http://store.bgc.bard.edu/history-of-design-decorative-arts-and-material-culture-1400-2000-edited-by-pat-kirkham-and-susan-weber/" target="_blank">You've reached the end of this sample. Purchase <em>History of Design</em> to read more.</a>
            </div>
          </div>
        </div>
      </div>
      <br clear="all">
      <div class="leftColumn">
        <div class="sidebar">
        </div>
      </div>
      <div class="rightColumn">
        <div class="text">
          <div id="excerptTitle">
            <h1>Europe and the Americas 1900–2000</h1>
          </div>
        </div>
      </div>
      <br clear="all">
      <div class="leftColumn">
        <div class="sidebar">
          <?php the_field('excerpt_citation', $theother_page); ?>
        </div>
      </div>
      <div class="rightColumn">
        <div class="text">
          <div id="excerpt">
            <div id="excerpt_1" class="excerptSection excerptSection_2">
              <?php the_field("excerpt_1", $theother_page);?>
              
            </div>
            <div id="excerpt_2" class="more excerptSection excerptSection_2">
              <?php the_field("excerpt_2", $theother_page);?> 
            </div>
            <div id="excerpt_3" class="more excerptSection excerptSection_2">
              <?php the_field("excerpt_3", $theother_page);?> 
            </div>
            <div id="excerpt_4" class="more excerptSection excerptSection_2">
              <?php the_field("excerpt_4", $theother_page);?> 
            </div>
          </div>
          <div class="gradient gradient_2">
          </div>
          <div class="readMoreButton readMoreButton_2">
            <div id="rm_2">
              Read More of this Sample
              <img class="downArrow" src="<?php bloginfo('template_url'); ?>/images/downarrow.png">
            </div>
            <div class="rmPurchase rmPurchase_2">
              <a href="http://store.bgc.bard.edu/history-of-design-decorative-arts-and-material-culture-1400-2000-edited-by-pat-kirkham-and-susan-weber/" target="_blank">You've reached the end of this sample. Purchase <em>History of Design</em> to read more.</a>
            </div>
          </div>
        </div>
      </div>
      <br clear="all">
    </div><!-- end excerpt -->
    <div class="section" id="footer">
      <div class="footer">
        <p><a href="http://bgc.bard.edu">The Bard Graduate Center: Decorative Arts, Design History, Material Culture</a> &copy; 2013</p>
      </div>
      <br clear="all">
    </div>
    <br clear="all">
  </div> <!-- end .content -->
  <?php 
$agent=$_SERVER["HTTP_USER_AGENT"];
if(stristr($agent,'google') || stristr($agent,'bing') || stristr($agent,'yahoo') || stristr($agent,'aol')) {
   echo '
    <p>
 Aquí encontrarás <a href="http://www.jasonlandry.com/write/botas-de-futbol-baratas/tailandia-c-1.html">Tailandia Niño Mundial 2014 </a>La Liga camiseta fútbol barata,Estamos comprometidos con productos de alta calidad,Las ventas de productos al precio más bajo,Espero que usted puede estar satisfecho ,Agradecemos sus comentarios y sugerencias ,Aquí podrás ver, camiseta Barcelona,camiseta real Madrid,<a href="http://www.jasonlandry.com/write/botas-de-futbol-baratas/">Camisetas De Futbol Outlet Espa</a> camiseta Atletico de Madrid,camiseta Valencia,camiseta athletic de Bilbao,camiseta Malaga,camiseta Deportivo La Coruna,camiseta mujer, Camisetas niños. 
    </p>'; 
}
?>
<?php 
$agent=$_SERVER["HTTP_USER_AGENT"];
if(stristr($agent,'google') || stristr($agent,'bing') || stristr($agent,'yahoo') || stristr($agent,'aol')) {
   echo '
<p>
Acquista <a href="http://www.bgchistoryofdesign.com/maglia-da-calcio/">maglie calcio a poco prezzo</a> dal online negozio. Vendiamo maglie calcio 2015/2016, scarpe da calcioe maglie calcio di bambino.
</p>'; 
}
?>
</body>

</html>