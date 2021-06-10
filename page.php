<?php 
/**
 * 默认存档页默模板文件
 */
?>
<?php get_header(); ?>
<div>我是page.php文件</div>
获取站点信息
<div>bloginfo('name'): <?php bloginfo('name'); ?></div>
<div>bloginfo('description'): <?php bloginfo('description'); ?></div>
<div>bloginfo('wpurl'): <?php bloginfo('wpurl'); ?></div>
<div>bloginfo('url'): <?php bloginfo('url'); ?></div>
<div>bloginfo('admin_email'): <?php bloginfo('admin_email'); ?></div>
<div>bloginfo('language'): <?php bloginfo('language'); ?></div>

获取页面/文章信息
<div>the_title: <?php the_title(); ?></div>
<div>have_posts: <?php have_posts(); ?></div>
<?php
/** 函数检查当前页面是否有文章 */

if ( have_posts() ) : 
  while ( have_posts() ) :
    the_post(); 
    the_content();
    the_title();
   endwhile; 
else :
  _e('抱歉，未找到您需要的文章。', 'textdomain' );
endif;
?>


<?php get_footer(); ?>