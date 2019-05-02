<!-- inner pages title -->
<header class="singletitlebg">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 mainheadlinewrapperpage-left">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </div>
      <div class="col-sm-6">
        <div class="breadcrumb-wrapper">
          <div class="breadcrumb">
            <?php if(function_exists('bcn_display')){ bcn_display();} ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>