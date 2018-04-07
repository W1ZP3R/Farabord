<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php bloginfo( 'name' ); wp_title( '-' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php 
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	?>
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
        <div class="clr"></div>
      </div>
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="get" action="<?php echo site_url(); ?>">
          <input src="<?php echo get_template_directory_uri();?>/images/search_btn.gif" class="button_search" type="image" />
          <span>
          <input name="s" class="editbox_search" id="editbox_search" maxlength="80" value="جستجو" type="text" />
          </span>
        </form>
      </div>
      <div class="clr"></div>
      <div class="logo">
        <h1><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?><br />
          <small><?php bloginfo( 'description' ); ?></small></a></h1>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">