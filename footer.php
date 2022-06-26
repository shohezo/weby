        <!-- CTAセクション -->
        <section class="ly_section hp_ptMd hp_pbMd" id="cta">
            <div class="ly_inner hp_flex hp_column_tb-reverse hp_aic hp_jcc">
                <figure class="bl_cta_imgWrapper" data-aos="zoom-in">
                    <img src="<?php bloginfo('template_url');?>/img/S1_Online Support.svg" alt="問い合わせする女性" />
                </figure>
                <div class="bl_cta_unit hp_tac" data-aos="fade-up">
                    <h3 class="bl_cta_lead">まずは無料でご相談ください。</h3>
                    <p class="bl_cta_txt hp_mt10">2日以内に折り返しご連絡致します。<br>お気軽にどうぞ。</p>
                    <a class="el_btn el_btn__accentRadius hp_centering hp_mt30"
                        href="<?php bloginfo('url');?>/contact"><span><i
                                class="fas fa-envelope hp_mr10"></i>お問い合わせ・お申し込みはこちら</span></a>
                    <div class="bl_cta_info hp_mt50">
                        <p>お電話でのお問い合わせはこちら</p>
                        <a href="tel:080-4961-0038" class="el_tel el_tel__lg">
                            <i class="fas fa-phone-volume"></i>080-4961-0038
                        </a>
                        <p class="hp_fs-sm">(受付時間 9:00~18:00　日・祝除く)</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- フッター -->
        <footer class="ly_footer">
            <div class="ly_inner hp_flex hp_column_tb hp_jcc hp_aic">
                <div class="ly_footer_main hp_flex hp_column hp_jcc">
                    <ul class="bl_footer_nav">
                        <li><a href="<?php bloginfo('url');?>/service">ホームページ制作</a></li>
                        <ul>
                            <li><a href="<?php bloginfo('url');?>/price">料金プラン</a></li>
                            <li><a href="<?php bloginfo('url');?>/service/works">デモサイト</a></li>
                        </ul>
                    </ul>
                    <ul class="bl_footer_nav">
                        <li><a href="<?php bloginfo('url');?>/flow">ご利用の流れ</a></li>
                        <li><a href="<?php bloginfo('url');?>/faq">よくある質問</a></li>
                        <li><a href="<?php bloginfo('url');?>/privacypolicy">プライバシーポリシー</a></li>
                        <li><a href="<?php bloginfo('url');?>/user">ご利用者様へ</a></li>
                        <li><a href="<?php bloginfo('url');?>/news">お知らせ</a></li>
                        <li><a href="<?php bloginfo('url');?>/contact">お問い合わせ</a></li>
                        <li><a href="<?php bloginfo('url');?>/company">企業情報</a></li>
                    </ul>
                </div>
                <div class="ly_footer_side hp_tar">
                    <div class="el_logo el_logo__white hp_mb30">
                        <a href="<?php echo esc_url(home_url('/'));?>">
                            <img src="<?php bloginfo('template_url');?>/img/weby-logo_white.png" alt="ロゴの画像(白)">
                        </a>
                    </div>
                    <div class="bl_info_wrapper">
                        <a href="tel:080-4961-0038" class="el_tel">
                            <i class="fas fa-phone-volume"></i>080-4961-0038
                        </a>
                        <p>9:00〜18:00（日・祝除く）</p>
                    </div>
                </div>
            </div>
            <div class="ly_copyright">
                <div class="ly_inner">
                    <span>© 2021 月額定額制（サブスク）ホームページ制作<br>Weby! All Rights Reserved.</span>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url');?>/js/script.js"></script>
        <!-- AOS実装 -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
AOS.init();
<?php wp_footer(); ?>
        </script>

        </body>

        </html>