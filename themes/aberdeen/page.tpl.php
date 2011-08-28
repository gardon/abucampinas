<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language ?>" lang="<?php print $language ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <link rel="stylesheet" href="<?php print base_path() . path_to_theme() ?>/print.css" media="print" />
  </head>
  <body<?php print phptemplate_body_class($sidebar_left, $sidebar_right); ?>>
    <p><a id="top"></a></p>
    <div id="wrapper-header">
      <div id="header"> 
        <h1 id="site-name"><a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>">
	    <?php if ($logo): ?>          
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo" />
        <?php endif; ?>	  
	    <?php print $site_name; ?></a>
	    </h1>
	    <?php if (isset($site_slogan)) : ?>
          <h2 id='site-slogan'>
            <?php print $site_slogan; ?>
          </h2>
        <?php endif; ?> <!-- /logo-name-and-slogan -->
		
		<?php print $search_box; ?>  
    
	    <?php if (isset($primary_links)) : ?>
	      <?php print theme('linksnew', $primary_links, array('class' => 'links primary-links')) ?>
	    <?php endif; ?>
	    <?php if (isset($secondary_links)) : ?>
	      <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
	    <?php endif; ?> <!-- /primary-and-secondary-links -->
      </div><!-- /header -->
    </div><!-- /wrapper-header -->

    <div id="wrapper-main"> 
      <div id="main"> 
	    <?php if ($header): ?>
		  <div id="topbar">
	        <?php print $header; ?>
		  </div>
	    <?php endif; ?> 
		
        <div id="content">
          <div id="center">		  
		    <?php if ($breadcrumb): print $breadcrumb; endif; ?>
			<?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
			
			<?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
			<?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
			<?php if ($tabs): print $tabs .'</div>'; endif; ?>
			
			<?php if (isset($tabs2)): print $tabs2; endif; ?>
			
			<?php if ($help): print $help; endif; ?>
			<?php if ($messages): print $messages; endif; ?>
			<?php print $content ?>
			<span class="clear"></span>
			<?php print $feed_icons ?>
			<p><a href="#top" class="to-top"><?php print t('Back to top'); ?></a></p>
          </div><!-- /center -->
          <?php if ($sidebar_right): ?>
          <div id="sidebar-right" class="sidebar">
            <?php print $sidebar_right ?>
          </div><!-- /sidebar-right -->
          <?php endif; ?>
        </div><!-- /content -->
		
		<?php if ($sidebar_left): ?>
        <div id="sidebar-left" class="sidebar">
		  <?php print $sidebar_left ?>
        </div><!-- /sidebar-left -->
        <?php endif; ?>
      </div><!-- /main -->

	  <div id="footer"> 
        <?php print $footer_message ?>
	  </div>
    </div><!-- /wrapper-main -->
	
  <?php print $closure ?>	
  </body>
</html>