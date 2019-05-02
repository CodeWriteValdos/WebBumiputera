<?php
/**********************************************************
* Page Section2 custom post type
***********************************************************/
$currentid = get_the_ID();?>

<?php
$checkbox = rwmb_meta('insurance_checkbox'); 
$colorbg = rwmb_meta('insurance_colorbg'); 
$sectionpadding = rwmb_meta('insurance_sectionpadding'); 
$sectionpadding1 = rwmb_meta('insurance_sectionpadding1'); 
?>

<?php
/* color background metabox */
?> 
<div class="wrapper100percent <?php if (isset($colorbg)&& strlen($colorbg)) echo $colorbg; else echo "section1"; ?> <?php echo get_post_type();?>-<?php the_ID();?> " id="<?php echo $post->post_name;?>">
<?php
/* color background metabox end */
?>

<?php 
if($sectionpadding) 
  echo '<div class="sectionpadding"></div>';
  else ''; 
?>
<div class="wrapper100percent">
<?php 
if($checkbox) 
  echo '<div class="container">';
  else ''; 
?>

<?php the_content(); ?>

<?php 
if($checkbox) 
  echo '</div>';
  else ''; 
?>
</div>
<?php 
if($sectionpadding1) 
  echo '<div class="sectionpadding"></div>';
  else ''; 
?>

</div> 
