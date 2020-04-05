<?php get_header(); ?> 
<!--博客文章-->
<div class="container content">
        <div class="main block">
		<?php if(have_posts()) : ?><!--使导航栏的切换使得界面有了变化 且是官方文字通行-->
            <?php while(have_posts()) : the_post(); ?>
				<div class="archive-post">
					<h4>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h4>
					<p>Posted On: <?php the_time('F j, Y g:i a'); ?></p>
				</div>
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