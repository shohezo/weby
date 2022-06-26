<?php get_header(); ?>
<!-- ループ始まり -->
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<article class="hp_ptLg hp_pbLg">
    <div class="ly_inner ly_inner__small">
        <p class="hp_mbSm"><?php echo get_the_date('Y.m.d'); ?></p>
        <h2 class="hp_mbSm"><?php the_title(); ?></h2>
        <div class="el_news_cont hp_pbMd">
            <?php the_content(); ?>
        </div>
        <a href="<?php bloginfo('url');?>/news"><span class="hp_mtSm hp_disb">
                < お知らせ一覧に戻る</span></a>
    </div>
</article>
<?php endwhile;endif; ?>
<!-- ループ終わり -->
<?php get_footer(); ?>