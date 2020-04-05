                <article class="post">
                    <h2><?php the_title(); ?></h2>
                    <p class="meta"><!--时间格式化&显示作者-->
						发布于 <?php the_time('F j, Y g:i a');  ?> by <?php the_author(); ?>
					</p>
					<?php the_excerpt(); ?><!--削减博客字数-->
					<a class="button" href="<?php the_permalink(); ?>"> Read More</a>
                </article>