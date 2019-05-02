<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<section class="insurance-headline"> 
    <div class="row"> 
      <div class="col-lg-12">   
        <div class="titletag"><?php echo $atts['headlinetag'] ?><?php echo $atts['headline'] ?>
        <?php
          if ($atts['headlinetag'] == '<h1>') 
            echo '</h1>';
          elseif ($atts['headlinetag'] == '<h2>') 
            echo '</h2>';
          elseif ($atts['headlinetag'] == '<h3>') 
            echo '</h3>';  
          elseif ($atts['headlinetag'] == '<h4>') 
            echo '</h4>'; 
          elseif ($atts['headlinetag'] == '<h5>') 
            echo '</h5>';
          elseif ($atts['headlinetag'] == '<h6>') 
            echo '</h6>';
          else 
            echo '</h2>';
        ?>
        </div>
        <div class="subtitletag"><?php echo $atts['subheadlinetag'] ?><?php echo $atts['subheadline'] ?>
        <?php
          if ($atts['subheadlinetag'] == '<h1>') 
            echo '</h1>';
          elseif ($atts['subheadlinetag'] == '<h2>') 
            echo '</h2>';
          elseif ($atts['subheadlinetag'] == '<h3>') 
            echo '</h3>';  
          elseif ($atts['subheadlinetag'] == '<h4>') 
            echo '</h4>'; 
          elseif ($atts['subheadlinetag'] == '<h5>') 
            echo '</h5>';
          elseif ($atts['subheadlinetag'] == '<h6>') 
            echo '</h6>';
          else 
            echo '</h2>';
        ?>
        </div>
        <div class="breadcrumbunyson">
          <?php if(function_exists('bcn_display') and $atts['breadcrumbs'] == 'show'){ bcn_display();} ?>
        </div>
      </div>
      <div class="single-icons-wrapper col-lg-12"> 
        <div class="single-icons-inner6">        
          <a href="<?php echo $atts['url']?>" class="<?php echo $atts['active']?>"> 
            <div class="single-icon"> 
              <img src="<?php echo $atts['imgurl']?>" alt=""> 
            </div>
            <h4>
              <?php echo $atts['iconheadline']?>
            </h4>
          </a>
        </div>
        <div class="single-icons-inner6">        
          <a href="<?php echo $atts['url2']?>" class="<?php echo $atts['active2']?>"> 
            <div class="single-icon"> 
              <img src="<?php echo $atts['imgurl2']?>" alt=""> 
            </div>
            <h4>
              <?php echo $atts['iconheadline2']?>
            </h4>
          </a>
        </div>
        <div class="single-icons-inner6">        
          <a href="<?php echo $atts['url3']?>" class="<?php echo $atts['active3']?>"> 
            <div class="single-icon"> 
              <img src="<?php echo $atts['imgurl3']?>" alt=""> 
            </div>
            <h4>
              <?php echo $atts['iconheadline3']?>
            </h4>
          </a>
        </div>
        <div class="single-icons-inner6">        
          <a href="<?php echo $atts['url4']?>" class="<?php echo $atts['active4']?>"> 
            <div class="single-icon"> 
              <img src="<?php echo $atts['imgurl4']?>" alt=""> 
            </div>
            <h4>
              <?php echo $atts['iconheadline4']?>
            </h4>
          </a>
        </div>
        <div class="single-icons-inner6">        
          <a href="<?php echo $atts['url5']?>" class="<?php echo $atts['active5']?>"> 
            <div class="single-icon"> 
              <img src="<?php echo $atts['imgurl5']?>" alt=""> 
            </div>
            <h4>
              <?php echo $atts['iconheadline5']?>
            </h4>
          </a>
        </div>
        <div class="single-icons-inner6">        
          <a href="<?php echo $atts['url6']?>" class="<?php echo $atts['active6']?>"> 
            <div class="single-icon"> 
              <img src="<?php echo $atts['imgurl6']?>" alt=""> 
            </div>
            <h4>
              <?php echo $atts['iconheadline6']?>
            </h4>
          </a>
        </div>
      </div>
    </div>
</section>
