<?php theme_include('partials/header'); ?>

<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-8 col-lg-offset-2">
                <p><img src="<?php echo theme_url('assets/img/user.png'); ?>" width="50px" height="50px"> <ba><?php echo article_author(); ?></ba></p>
				<h3><?php echo article_title(); ?></h3>
				<hr>
                <div class="resp">
				<p><?php /*echo article_markdown(); */echo article_html();  ?></p>
                </div>
			</div>
		</div><!-- /row -->
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<p><bt>Author: <a><?php echo article_author(); ?></a></bt> - <bt>Type: <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a></bt> - <bt>Date: <a><?php echo article_date(); ?></a></bt></p>
                <hr>
					<p><a href="#" onclick="goBack()">返回</a></p>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->

	<?php if (comments_open()): ?>
		<section class="comments">
			<?php if (has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while (comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
						<h2><?php echo comment_name(); ?></h2>
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<?php echo comment_text(); ?>
						</div>

						<span class="counter"><?php echo $i; ?></span>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>

<script>
function goBack()
  {
  window.history.back()
  }
</script>

<?php theme_include('partials/footer'); ?>
