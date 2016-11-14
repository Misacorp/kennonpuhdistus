<?php get_header(); ?>

<main>

<!--    HEADER IMAGE      -->

  <div class="parallax-container parallax-header">
    <div class="parallax"><img class="parallax-image" src="<?php get_template_directory_uri();?>/wp-content/themes/cleansensor/img/bg-05.jpg"/></div>
    <div class="col s12 center"><span class="parallax-text white-text fancy"><?php the_field("otsikko", 116) ?></span></div>
  </div>



<!--    SUMMARY      -->



  <div class="container summary"> <!-- Content -->

    <div class="row center">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class=" blue-grey-text text-lighten-2">
            <i class="material-icons medium"><?php the_field("intro_a_kuva", 116) ?></i>
          </h2>
          <h5><?php the_field("intro_a_otsikko", 116) ?></h5>
          <p class="light flow-text"><?php the_field("intro_a_teksti", 116) ?></p>
        </div>
      </div>
    
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class=" blue-grey-text text-lighten-2">
            <i class="material-icons medium"><?php the_field("intro_b_kuva", 116) ?></i>
          </h2>
          <h5><?php the_field("intro_b_otsikko", 116) ?></h5>
          <p class="light flow-text"><?php the_field("intro_b_teksti", 116) ?></p>
        </div>
      </div>
    

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class=" blue-grey-text text-lighten-2">
            <i class="material-icons medium"><?php the_field("intro_c_kuva", 116) ?></i>
          </h2>
          <h5><?php the_field("intro_c_otsikko", 116) ?></h5>
          <p class="light  flow-text"><?php the_field("intro_c_teksti", 116) ?></p>
        </div>
      </div>

    </div>
  </div>





<!--    MIDDLE IMAGE      -->

  <div class="parallax-container parallax-break">
    <div class="parallax"><img class="parallax-image" src="<?php get_template_directory_uri();?>/wp-content/themes/cleansensor/img/bg-02.jpg"/></div>
  </div>





<!--        askeleet       -->

    <div class="container askeleet" id="askeleet">

      <div class="row">
        <div class="col s12 center subsection-title"><?php the_field("2_otsikko", 116) ?></div>
      </div>

      <div class="row">
        <div class="col s12">
          
          <div class="click-here-container unselectable" id="click-here-container">
            <div class="click-here hide-on-med-and-down">
              <img src="<?php get_template_directory_uri();?>/wp-content/themes/cleansensor/img/arrows.png">
              <span class="click-here-text">Klikkaa!</span>
            </div>
          </div>


          <ul class="collapsible" id="askeleetlista" data-collapsible="accordion">
            <li>
              <div class="collapsible-header"><i class="material-icons"><?php the_field("sisalto_a_kuva", 116) ?></i><i class="material-icons right">more_horiz</i><span class="list-header"><?php the_field("sisalto_a_otsikko", 116) ?></span></div>

              <div class="collapsible-body">
                <div class="row center padded-3">
                  <div class="col s12">
                    <span class="flow-text"><?php the_field("sisalto_a_alaotsikko", 116) ?></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 m4 push-m8">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?php get_template_directory_uri();?>/wp-content/themes/cleansensor/img/dust.jpg"/>
                      </div>
                    </div>
                  </div>

                  <div class="col s12 m8 pull-m4">
                    <?php the_field("sisalto_a_teksti", 116) ?>
                  </div>
                </div>  <!-- END ROW -->
              </div>
            </li>

            <li>
              <div class="collapsible-header"><i class="material-icons"><?php the_field("sisalto_b_kuva", 116) ?></i><i class="material-icons right">more_horiz</i><span class="list-header"><?php the_field("sisalto_b_otsikko", 116) ?></span></div>

              <div class="collapsible-body">
                <div class="row center padded-3">
                  <div class="col s12">
                    <span class="flow-text"><?php the_field("sisalto_b_alaotsikko", 116) ?></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12">
                    <?php the_field("sisalto_b_teksti", 116) ?>
                  </div>
                </div>

                <div class="col s12">
                  

                </div>
              </div>
            </li>

            <li>
              <div class="collapsible-header"><i class="material-icons"><?php the_field("sisalto_c_kuva", 116) ?></i><span class="list-header"><?php the_field("sisalto_c_otsikko", 116) ?></span><i class="material-icons right">more_horiz</i></div>

              <div class="collapsible-body">
                <div class="row center padded-3">
                  <div class="col s12">
                    <span class="flow-text"><?php the_field("sisalto_c_alaotsikko", 116) ?></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12">
                    <?php the_field("sisalto_c_teksti", 116) ?>
                  </div>
                </div>

              </div>    <!-- END COLLAPSIBLE BODY -->
            </li>
          </ul>
        </div>    <!-- END FULL WIDTH COLUMN -->
      </div>    <!-- END ROW -->
    </div>    <!-- END askeleet CONTAINER -->






<!--    MIDDLE IMAGE      -->

  <div class="parallax-container parallax-break">
    <div class="parallax"><img class="parallax-image" src="<?php get_template_directory_uri();?>/wp-content/themes/cleansensor/img/bg-03.jpg"/></div>
  </div>







<!--        tilaus         -->


  <div class="container" style="height: auto;" id="tilaus">

    <div class="row">
      <div class="col s12 center subsection-title">
        <?php the_field("tilaus_otsikko", 116) ?>
      </div>
    </div>

    <div class="row subsection-content">
      <div class="col s12 center">
        <p class="flow-text"><?php the_field("tilaus_alaotsikko", 116) ?></p>
      </div>

      <div class="col s12 center">
        <?php the_field("tilaus_teksti", 116) ?>
      </div>

      <div class="col s12 center">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; ?>
      </div>
    </div>

  </div>






<!--    MIDDLE IMAGE      -->

  <div class="parallax-container parallax-break">
    <div class="parallax">
      <img class="parallax-image" src="<?php get_template_directory_uri();?>/wp-content/themes/cleansensor/img/bg-04.jpg"/>
    </div>
  </div>
<!-- 
<div class="image-background" style="height: 50vh;" ></div>
 -->


</main>

<?php get_footer(); ?>