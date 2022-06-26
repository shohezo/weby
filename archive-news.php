<?php get_header(); ?>

<div class="ly_section hp_ptLg hp_pbLg" id="archive">
    <div class="ly_inner">
        <div class="bl_news_wrapper">
            <h2 class="el_section_ttl hp_mbMd"><?php echo get_the_archive_title(); ?>一覧</h2>
            <!-- メインループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <a href="<?php the_permalink();?>">
                <ul class="bl_news_list">
                    <li class="bl_news_item hp_mb30">
                        <p class="bl_news_date hp_mb10 "><?php echo get_the_date('Y.m.d'); ?></p>
                        <p class="bl_news_ttl"><?php the_title(); ?></p>
                    </li>
                </ul>
            </a>
            <?php endwhile;endif; ?>
            <!-- ページネーションの実装 -->
            <?php the_posts_pagination(
            array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text' => '<i class="fa fa-caret-left"></i>', // 「前へ」リンクのテキスト
            'next_text' => '<i class="fa fa-caret-right"></i>', // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
            )
            ); ?>
            <!-- ページネーションの実装 ここまで -->
        </div>
    </div>
</div>
<?php get_footer(); ?>