<?php get_header(); ?>
<?php
/* 
Template Name: ワークスページ
*/
?>
<section class="ly_section hp_ptLg hp_pbLg hp_bgImg_geometry">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mb50" data-aos="fade-right">デモサイトはこちら。</h2>
        <div class="el_section_lead">Weby!のホームページ制作サービスは、各プランによってページ数や機能が異なります。
            各プランのデモサイトをご紹介いたします。リンクをクリックすると、実際のホームページをご覧いただけます。</div>
        <!-- メディア -->
        <div class="bl_media hp_flex hp_ptLg hp_pbLg hp_column hp_aic">
            <figure class="bl_media_imgWrapper" data-aos="zoom-in">
                <img src="<?php bloginfo('template_url');?>/img/demo-simple.png" alt="シンプルプランのデモ画面">
            </figure>
            <div class="bl_media_body" data-aos="fade-up">
                <h3 class="bl_media_ttl">シンプルプラン
                </h3>
                <p class="bl_media_txt">
                    必要な情報を確実にお伝えする<br>シンプルな1ページ構成
                </p>
                <a class="el_btn el_btn__mainRadius hp_mt30" href="https://weby-demo-simple.web.app/" target="_blank"
                    rel="noopener noreferrer"><span>デモサイトはこちら</span></a>
            </div>
            <!-- /.bl_media_body -->
        </div>
        <!-- /.bl_media -->
        <!-- メディア -->
        <div class="bl_media hp_flex hp_reverse hp_ptLg hp_pbLg hp_column hp_aic">
            <figure class="bl_media_imgWrapper" data-aos="zoom-in">
                <img src="<?php bloginfo('template_url');?>/img/demo-premium.png" alt="プレミアムプランのデモ画像">
            </figure>
            <div class="bl_media_body" data-aos="fade-up">
                <h3 class="bl_media_ttl">プレミアムプラン</h3>
                <p class="bl_media_txt">
                    ブログ更新も可能な充実の7ページ
                </p>
                <a class="el_btn el_btn__mainRadius hp_mt30" href="http://omoti1104.wp.xdomain.jp/" target="_blank"
                    rel="noopener noreferrer"><span>デモサイトはこちら</span></a>
            </div>
            <!-- /.bl_media_body -->
        </div>
        <!-- /.bl_media -->
        <!-- メディア -->
        <div class="bl_media hp_flex hp_ptLg hp_pbLg hp_column hp_aic">
            <figure class="bl_media_imgWrapper" data-aos="zoom-in">
                <img src="<?php bloginfo('template_url');?>/img/S1_IPhone.svg" alt="スマホの画像">
            </figure>
            <div class="bl_media_body" data-aos="fade-up">
                <h3 class="bl_media_ttl">ECサイト</h3>
                <p class="bl_media_txt">
                    何がどう良くて、いくらなのかがユーザー目線からわかりやすいシンプルさを追求したECサイトデザイン。<br>
                    ターゲットに応じて、レイアウトやスタイリングは柔軟に変更可能です。
                </p>
                <a class="el_btn el_btn__mainRadius hp_mt30" href=" <?php bloginfo('template_url');?>/404"
                    target=" _blank" rel="noopener noreferrer"><span>デモサイトはこちら</span></a>
            </div>
            <!-- /.bl_media_body -->
        </div>
        <!-- /.bl_media -->
    </div>
    </div>
</section>
<?php get_footer(); ?>