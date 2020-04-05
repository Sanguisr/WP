<?php get_header(); ?> 
<!--博客文章-->
<div class="container content">
        <div class="main block">
		<?php if(have_posts()) : ?><!--使导航栏的切换使得界面有了变化 且是官方文字通行-->
            <?php while(have_posts()) : the_post(); ?>
                <article class="post">
                    <h2><?php the_title(); ?></h2>
                    <p class="meta"><!--时间格式化&显示作者-->
						发布于 <?php the_time('F j, Y g:i a');  ?> by <?php the_author(); ?>
					</p>
					<?php the_excerpt(); ?><!--削减博客字数-->
					<a class="button" href="<?php the_permalink(); ?>"> Read More</a>
                </article>
            <?php endwhile; ?>
       <?php else : ?>
            <?php echo wpautop('Sorry, no posts were found'); ?>
       <?php endif; ?>  		
        </div>
		<div class="side"><!--侧边栏-->
            <div class="block">
                <h3>侧边栏</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.    Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
                <a class="button">More</a>
           </div>
		</div>
</div>
<?php get_footer(); ?><!--拆分之后头尾相接-->