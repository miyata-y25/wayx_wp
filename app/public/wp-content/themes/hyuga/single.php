<?php get_header(); ?>

<section class="sec">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en"><?php the_title(); ?></span>
    </h2>
    <div class="single-area">
        <p class="single-area__date"><?php the_time('Y/m/d'); ?></p>
<?php the_content(); ?>
    </div>
    <a href="/news" class="btn btn--greW btn--312">一覧に戻る</a>
</section>

<?php get_footer(); ?>