<?php get_header(); ?>

<section id="page">
	<div class="container">
		<!-- BEGIN product !-->
		<div class="product-info">
			<h1><?=get_field('page_title')?></h1>
			<div class="product-box">
				<img class="product-picture" src="<?=get_field('product_picture')['url']?>" width="200" alt="">
				<div class="advantages">
					<?php if( have_rows('advantages') )
					while( have_rows('advantages') ): the_row(); ?>
						<div class="item">
							<h3 class="title"><?=get_sub_field('title')?></h3>
							<p class="desc"><?=get_sub_field('desc')?></p>
							<p class="result"><?=get_sub_field('result')?></p>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="buttons">
					<p class="bottom-ask"><?=get_field('ask_bottom')?>?</p>
					<div class="more">
						<p class="bottom-answ"><?=get_field('text_bottom')?></p>
						<a href="#" class="more-btn">Узнать больше</a>
					</div>
				</div>
			</div>
		</div>
		<!-- END product !-->

		<!-- BEGIN form box !-->
		<div class="product-form">
			<div class="inner">
				<div class="head">
					<h3>Посчитайте <br> прибыль</h3>
					<p class="desc">
						<b>Добриво</b> эффективнее химии 
					</p>
				</div>
				<!-- BEGIN form !-->
					<?=do_shortcode('[contact-form-7 id="183" title="Посчитайте прибыль"]');?>
				<!-- END FORM !-->
				<div class="result-box">
					<p>Прибыль от добрива</p>
					<p class="total">50 000</p>
					<p class="cur">грн.</p>
				</div>
			</div>
		</div>
		<!-- END form box !-->
	</div>
	<div style="clear:both"></div>
</section>

<?php get_footer(); ?>
