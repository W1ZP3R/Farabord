      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
		<?php dynamic_sidebar( 'Footer Sidebar 1' ); ?>
      </div>
      <div class="col c2">
		<?php dynamic_sidebar( 'Footer Sidebar 2' ); ?>
      </div>
      <div class="col c3">
		<?php dynamic_sidebar( 'Footer Sidebar 3' ); ?>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; کپی رایت <?php bloginfo( 'name' ); ?>. ویرایش توسط <a href="http://mrcode.ir/" targe="_blank">مسترکد</a></p>
      <div class="fmenu">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<?php wp_footer(); ?> 
</body>
</html>