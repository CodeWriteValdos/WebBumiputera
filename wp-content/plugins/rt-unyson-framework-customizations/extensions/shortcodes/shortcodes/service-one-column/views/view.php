<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<div class="services">
  <div class="one-service one-service-column6 <?php echo $atts['color']?>">
    <ul>
      <li>
        <img src="<?php echo $atts['imgurl']?>">    
        <h3><?php echo $atts['headline']?></h3> 
      <ul>
        <li>
          <p><?php echo $atts['content']?></p>
          <a href="<?php echo $atts['buttonurl']?>"><?php echo $atts['buttontext']?> <i class="fa fa-angle-right"></i></a>
        </li> 
      </ul> 
      </li> 
    </ul>
  </div>
</div>

