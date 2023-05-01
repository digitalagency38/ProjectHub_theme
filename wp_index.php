<?php 
/**
*	Template name: Главная страница
*/
 ?>
<?php
    get_header();
?>
<?php $main_first = get_field( 'main_first' );?>	
<?php if ($main_first['title']): ?>	
	<div class="main_first center_block">
		<div class="main_first__l-side">
			<div class="main_first__title"><?php echo $main_first['title']; ?></div>
			<div class="main_first__blocks">
				<div class="main_first__top">
					<svg width="26" height="6" viewBox="0 0 26 6" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="3" cy="3" r="3" fill="#FE635E"/>
						<circle cx="13" cy="3" r="3" fill="#FEBF41"/>
						<circle cx="23" cy="3" r="3" fill="#2EC846"/>
					</svg> 
					<div class="main_first__addr">https://projecthub.ru/projects</div>
				</div>
				<?php $list = ($main_first['list']);
					 if (is_array($list)) {
				?>
					<div class="main_first__item">
						<div class="main_first__in">
							<?php foreach ($list as $e) { ?>
								<div class="main_first__block">
									<?php if ($e['img']): ?>	
									<div class="main_first__logo"><img src="<?php echo $e['img']; ?>" alt=""></div>
									<?php endif ?>
									<div class="main_first__tit"><?php echo $e['title']; ?></div>
									<div class="main_first__info">
										<div class="main_first__text"><?php echo $e['text']; ?></div>
										<div class="main_first__price"><?php echo $e['price']; ?></div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<a href="<?php echo $main_first['link']; ?>" target="_blank" class="header__btn"><span>попробовать</span></a>
		</div>
		<div class="main_first__r-side">
			<img class="abs_img" src="<?php echo get_theme_file_uri(); ?>/img/seven.svg" alt="">
			<img src="<?php echo get_theme_file_uri(); ?>/img/iphone.png" alt="">
		</div>
	</div>
<?php endif ?>
<?php $main_vendor = get_field( 'main_vendor' );
	if (is_array($main_vendor)) {?>	
	<div class="main_vendor">
		<div class="main_vendor__in center_block">
			<?php foreach ($main_vendor as $e) { ?>
				<?php if ($e['img']): ?>
					<div class="main_vendor__block"><img src="<?php echo $e['img']; ?>" alt=""></div>
				<?php endif ?>
			<?php } ?>
		</div>
	</div>
<?php } ?>
<?php $main_price = get_field( 'main_price' ); ?>	
<?php if ($main_price['title']): ?>	
	<div class="main_price center_block">
		<div class="main_price__title"><?php echo $main_price['title']; ?></div>
		<?php $list3 = ($main_price['list3']);
			if (is_array($list3)) {
		?>
			<div class="main_price__blocks">
				<?php foreach ($list3 as $e) { ?>
					<div class="main_price__block">
						<?php if ($e['img']): ?>
							<div class="main_price__l-side">
								<img src="<?php echo $e['img']; ?>" alt="">
							</div>
						<?php endif ?>
						<div class="main_price__r-side">
							<span><?php echo $e['year']; ?></span>
							<div class="main_price__price"><?php echo $e['price']; ?></div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
<?php endif ?>
<?php $main_work = get_field( 'main_work' ); ?>	
<?php if ($main_work['title']): ?>	
	<div class="main_work center_block">
		<div class="main_work__title"><?php echo $main_work['title']; ?></div>
		<?php $list4 = ($main_work['list4']);
			if (is_array($list4)) {
		?>
			<div class="main_work__blocks">
				<?php foreach ($list4 as $e) { ?>
					<?php if ($e['img']): ?>
						<div class="main_work__block">
							<div class="main_work__img"><img src="<?php echo $e['img']; ?>" alt=""></div>
							<div class="main_work__tit"><?php echo $e['title']; ?></div>
							<div class="main_work__number"></div>
						</div>
					<?php endif ?>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
<?php endif ?>
<?php $main_bg = get_field( 'main_bg' ); ?>	
<?php if ($main_bg['title']): ?>	
	<div class="main_bg">
		<div class="main_blog center_block">
			<div class="main_blog__top">
				<div class="main_blog__title"><?php echo $main_bg['title']; ?></div>
				<?php if ($main_bg['link']): ?>	
					<a href="<?php echo $main_bg['link']; ?>" class="main_blog__link"><span>Читать все статьи</span></a>
				<?php endif ?>
			</div>
	<!-- 		<div class="main_blog__blocks">

				<div class="main_blog__block">
					<a href="#" class="main_blog__img"><img src="img/s1.png" alt="Добрая половина выводов оказалась ошибочной"></a>
					<a href="#" class="main_blog__tit">Добрая половина выводов оказалась ошибочной</a>
					<div class="main_blog__text">С другой стороны, высокое качество позиционных исследований прекрасно подходит для реализации благоприятных перспектив. Равным образом, глубокий уровень</div>
					<a href="#" class="main_blog__more">Подробнее</a>
				</div>

			</div> -->
			<?php if ($main_bg['link']): ?>	
				<a href="<?php echo $main_bg['link']; ?>" class="main_blog__link mob"><span>Читать все статьи</span></a>
			<?php endif ?>
		</div>
		<div class="main_blocks center_block">
			<div class="main_blocks__in">
				<?php if ($main_bg['text1']): ?>	
					<div class="main_blocks__block"><?php echo $main_bg['text1']; ?></div>
				<?php endif ?>
				<?php if ($main_bg['text2']): ?>	
					<div class="main_blocks__block"><?php echo $main_bg['text2']; ?></div>
				<?php endif ?>
			</div>
		</div>
	</div>
<?php endif ?>
<?php
    get_footer();
?>