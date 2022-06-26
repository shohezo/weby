<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="robots" />
    <meta name="viewport" content="with=device-with, initial-scale=1.0" />
    <title><?php echo wp_get_document_title();?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/responsive.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />

    <!-- スクロールヒント -->
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
    <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>

    <!-- Adobe fonts -->
    <script>
    (function(d) {
        var config = {
                kitId: 'cpa1grq',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>
    <!-- aosライブラリの読み込み -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-3.6.0.min.js"></script>
    <script type=" text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-migrate-1.4.1.min.js"></script>

</head>

<body <?php body_class();?>>
    <?php wp_body_open (); ?>
    <header class="ly_header hp_bgcWhite">
        <div class="ly_header_inner hp_flex hp_jcsb hp_aic">
            <div class="el_logo">
                <a href="<?php echo esc_url(home_url('/'));?>">
                    <img src="<?php bloginfo('template_url');?>/img/weby-logo_blue.png" alt="ロゴの画像">
                </a>
            </div>
            <nav class="bl_nav">
                <ul class="bl_nav_list hp_flex">
                    <li class="bl_nav_item"><a href="<?php bloginfo('url');?>/service"><i
                                class="fas fa-desktop hp_db hp_tac"></i>ホームページ制作</a></li>
                    <li class="bl_nav_item"><a href="<?php bloginfo('url');?>/price"><i
                                class="fas fa-tag hp_db hp_tac"></i>料金プラン</a></li>
                    <li class="bl_nav_item"><a href="<?php bloginfo('url');?>/flow"><i
                                class="fas fa-play-circle hp_db hp_tac"></i>ご利用の流れ</a></li>
                    <li class="bl_nav_item"><a href="<?php bloginfo('url');?>/faq"><i
                                class="fas fa-question-circle hp_db hp_tac"></i>よくある質問</a></li>
                </ul>
            </nav>
            <div class="ly_header_container hp_flex hp_aic">
                <div class="bl_info_wrapper">
                    <p>9:00〜18:00（日・祝除く）</p>
                    <a href="tel:080-4961-0038" class="el_tel">
                        <i class="fas fa-phone-volume"></i>080-4961-0038
                    </a>
                </div>
                <div class="ly_btn_unit hp_flex hp_aic">
                    <a class="el_btn hp_mr10" href="<?php bloginfo('url');?>/user"><span><i
                                class="fas fa-user hp_mr10"></i>利用者様へ</span></a>
                    <a class="el_btn el_btn__accentSquare" href="<?php bloginfo('url');?>/contact"><span><i
                                class="fas fa-envelope hp_mr10"></i>お問い合わせ</span></a>
                </div>
                <div class="bl_drawerBtn">
                    <span class="hambarg"></span>
                    <span class="hambarg"></span>
                    <span class="hambarg"></span>
                </div>
            </div>
        </div>
    </header>
    <div class="bl_drawer_wrap">
        <!-- 全画面をおおう -->
    </div>
    <ul class="bl_drawer_list">
        <a href="<?php bloginfo('url');?>/service">
            <li class="bl_drawer_item"><i class="fas fa-desktop hp_db hp_tac"></i>ホームページ制作
            </li>
        </a>
        <a href="<?php bloginfo('url');?>/price">
            <li class="bl_drawer_item"><i class="fas fa-tag hp_db hp_tac"></i>料金プラン
            </li>
        </a>
        <a href="<?php bloginfo('url');?>/flow">
            <li class="bl_drawer_item"><i class="fas fa-play-circle hp_db hp_tac"></i>ご利用の流れ
            </li>
        </a>
        <a href="<?php bloginfo('url');?>/faq">
            <li class="bl_drawer_item"><i class="fas fa-question-circle hp_db hp_tac"></i>よくある質問
            </li>
        </a>
        <div class="ly_btn_unit hp_flex hp_aic hp_jcc hp_ptSm">
            <a class="el_btn hp_mr10" href="<?php bloginfo('url');?>/user"><span><i
                        class="fas fa-user hp_mr10"></i>利用者様へ</span></a>
            <a class="el_btn el_btn__accentSquare" href="<?php bloginfo('url');?>/contact"><span><i
                        class="fas fa-envelope hp_mr10"></i>お問い合わせ</span></a>
        </div>
        <div class="bl_info_wrapper hp_ptSm hp_pbSm">
            <a href="tel:080-4961-0038" class="el_tel">
                <i class="fas fa-phone-volume"></i>080-4961-0038
            </a>
            <p class="hp_tac">9:00〜18:00（日・祝除く）</p>
        </div>
    </ul>
    <!-- ヘッダー画像の条件分岐 -->
    <?php if(is_page('price')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/plan.jpg" alt="">
        <h2>料金プラン</h2>
    </div>
    <?php }else if(is_page('faq')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/plan.jpg" alt="">
        <h2>よくある質問</h2>
    </div>
    <?php }else if(is_page('user')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/plan.jpg" alt="">
        <h2>利用者様へ</h2>
    </div>
    <?php }else if(is_page('service')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/plan.jpg" alt="">
        <h2>ホームページ制作</h2>
    </div>
    <?php }else if(is_page('company')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/plan.jpg" alt="">
        <h2>企業情報</h2>
    </div>
    <?php }else if(is_post_type_archive('news')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/news.jpg" alt="">
        <h2>お知らせ</h2>
    </div>
    <?php }else if(is_page('flow')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/blog.jpg" alt="">
        <h2>ご利用の流れ</h2>
    </div>
    <?php }else if(is_page('works')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/blog.jpg" alt="">
        <h2>デモサイト一覧</h2>
    </div>
    <?php }else if(is_page('privacypolicy')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/blog.jpg" alt="">
        <h2>プライパシーポリシー</h2>
    </div>
    <?php }else if(is_page('contact')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/cta.jpg" alt="">
        <h2>お問い合わせ・<br class="hp_br-sp">お申し込み</h2>
    </div>
    <?php }else{}?>
    <!-- パンくずリスト -->
    <div class="ly_breadcrumbs <?php if ( is_single() ) { echo 'hp_mt80'; } ?>">
        <div class=" ly_inner">
            <div class="bl_breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
            </div>
        </div>
    </div>
    <?php wp_head(); ?>