<?php 
/**
*	Template name: Текстовая страница
*/
 ?>
<?php
    get_header();
?>
<div class="breadcrums center_block">
	<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<div class="breadcrums__back" onclick="history.go(-1);return false;"><?php echo the_title(); ?></div>
<div class="text_page center_block">
	<div class="text_page__in">
		<h1 class="text_page__h1"><?php echo the_title(); ?></h1>
		<?php echo the_content(); ?>
	</div>
</div>
<?php
    get_footer();
?>