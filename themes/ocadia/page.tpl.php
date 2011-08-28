<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body <?php print theme("onload_attributes"); ?>>
<div id="wrapper">

  <?php if ($search_box): ?>
    <?php print $search_box ?>
  <?php endif; ?>

  <div id="header">
				<?php
						// prepare header
						$site_fields = array();
						if ($site_name) {
								$site_fields[] = check_plain($site_name);
						}
						if ($site_slogan) {
								$site_fields[] = check_plain($site_slogan);
						}
						$site_title = implode(' ', $site_fields);
				?>
    <?php if ($site_name) : ?>
      <h1 id="site-name"><a href="<?php print url() ?>" title="<?php print $site_title ?>"><?php print($site_name) ?></a></h1>
    <?php endif;?>

    <?php if ($site_slogan) : ?>
      <div class="site-slogan"><?php print($site_slogan) ?></div>
    <?php endif;?>

				<?php if (isset($primary_links)) : ?>
						<div id="primary" class="<?php if ($site_slogan) { print "withslogan"; }?> menu">
								<?php print theme('menu_links', $primary_links) ?>
					</div>
					<?php endif;?>

				<?php if (isset($secondary_links)) : ?>
						<?php
								$secondary_class = "";
								if ($primary_links && $site_slogan) {
										$secondary_class = "withprimaryslogan";
								} elseif ($primary_links) {
										$secondary_class = "withprimary";
								} elseif ($site_slogan) {
										$secondary_class = "withslogan";
								}
						?>
						<div id="secondary" class="<?php print $secondary_class; ?> menu">
								<?php print theme('menu_links', $secondary_links) ?>
						</div>
				<?php endif;?>
  </div>


  <div id="content">
    <?php if ($breadcrumb != ""): ?>
      <div id="breadcrumb"><?php print $breadcrumb ?></div>
    <?php endif; ?>


				<?php if ($title != ""): ?>
						<h2 class="content-title"><?php print $title ?></h2>
				<?php endif; ?>
				
				<?php if ($tabs != ""): ?>
						<?php print $tabs ?>
				<?php endif; ?>
									
				<?php if ($mission != ""): ?>
						<p id="mission"><?php print $mission ?></p>
				<?php endif; ?>
									
				<?php if ($help != ""): ?>
						<p id="help"><?php print $help ?></p>
				<?php endif; ?>
									
				<?php if ($messages != ""): ?>
						<div id="message"><?php print $messages ?></div>
				<?php endif; ?>
				
				
				<?php print($content) ?>
  
  </div>

  
  <div id="sidebar">
	  <ul>
		 <?php print $sidebar_left ?>
	  </ul>

	  <ul>
         <?php print $sidebar_right ?>
      </ul>
    
  </div>
  
  <div id="footer">
    <p>
    Design By: <a href="http://beccary.com" title="Theme designed by Beccary">Beccary</a>
    and: <a href="http://scarto.abshost.net" title="Modified for Drupal by Scar_T">Scar_T</a>
    and <a href="http://www.stellapowerdesign.net" title="Modified for Drupal5 by Stella Power">snpower</a>
    <?php if ($footer_message) : ?>
      - 
      <?php print $footer_message;?>
    <?php endif; ?>
    </p>
  </div>

</div>

<?php print $closure;?>

</body>
</html>
