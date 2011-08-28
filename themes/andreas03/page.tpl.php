<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <?php print $head ?>
  <?php print $styles ?>
<meta name="author" content="Chris Herberte www.xweb.com.au  / Original design: Andreas Viklund - http://andreasviklund.com/" />

<title><?php print $head_title ?></title>
</head>

<body>
<div id="thetop">
<a id="top"></a>
<p class="hide">Skip to: <a href="#sitemenu" accesskey="2">Site menu</a> | <a href="#maincontent" accesskey="3">Main content</a></p>
</div>

<div id="container">
<div id="main">

<div id="logo">
<h1>[<a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a>]</h1>
<span id="tagline"><?php if ($site_slogan) { ?><h2><?php print $site_slogan ?></h2><?php } ?></span>
</div>

<div id="intro">
<?php print $search_box ?>

</div>
<div class="clear"></div>

<div id="content">
    <h1><?php print $title ?></h1>
    <?php print $breadcrumb ?>
    <?php print $tabs ?>
    <?php print $help ?>
    <?php print $messages ?>
    <?php print $content; ?>
</div>

</div>

<div id="sidebar">

<h2 class="sidelink menuheader"><a id="sitemenu"></a>Site menu:</h2>
<?php if (isset($primary_links)) { ?><?php print xweb_primary_links(); ?><?php } ?>
<a class="hide" href="#top" accesskey="1">Top of page</a>

<?php if ($sidebar_left) { ?><?php print $sidebar_left ?><?php } ?>


</div>


<div class="clear">&nbsp;</div>
</div>

<div id="footer">
 <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links) ?><?php } ?>
</div>

</body>
</html>