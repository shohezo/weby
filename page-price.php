<?php get_header(); ?>
<?php
/* 
Template Name: 料金プランページ
*/
?>
<section class="ly_section hp_ptLg hp_pbLg">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd" data-aos="fade-right">3つのプランから<br class="hp_br-sp">選べます。</h2>
        <!-- 料金表 -->
        <div class="bl_scroll js-scrollable">
            <ul class="bl_priceUnit hp_flex hp_jcc hp_aife">
                <li class="bl_price_card">
                    <div class="bl_price_header">
                        <p class="bl_price_ttl">シンプルプラン</p>
                    </div>
                    <!-- /.bl_price_header -->
                    <div class="bl_price_body">
                        <p class="bl_price_price">
                            <span>月額</span>
                            <?php echo CFS()->get('simple_price'); ?><span>円(税別)</span>
                        </p>
                        <div class="bl_price_features">
                            <div class="bl_price_features_detail hp_tal">
                                <p>WEBから発信する情報量が少なくリーズナブルにホームページが欲しいならシンプルプラン！</p>
                            </div>
                            <a class="el_btn el_btn__mainRadius hp_mt30" href="https://weby-demo-simple.web.app/"
                                target="_blank" rel="noopener noreferrer"><span>デモサイトはこちら</span></a>
                        </div>
                        <!-- /.bl_price_body -->
                </li>
                <li class="bl_price_card">
                    <div class="bl_price_header">
                        <p class="bl_price_ttl">プレミアムプラン</p>
                    </div>
                    <!-- /.bl_price_header -->
                    <div class="bl_price_body">
                        <p class="bl_price_price">
                            <span>月額</span>
                            <?php echo CFS()->get('premium_price'); ?><span>円(税別)</span>
                        </p>
                        <dl class="bl_price_features">
                            <div class="bl_price_features_detail hp_tal">
                                <p>複数ページやブログ機能が追加された本格的なホームページが欲しいならプレミアムプラン！</p>
                            </div>
                        </dl>
                        <a class="el_btn el_btn__mainRadius hp_mt30" href="http://omoti1104.wp.xdomain.jp/"
                            target="_blank" rel="noopener noreferrer"><span>デモサイトはこちら</span></a>
                    </div>
                    <!-- /.bl_price_body -->
                </li>
                <!-- /.bl_price -->
                <li class="bl_price_card">
                    <div class="bl_price_header">
                        <p class="bl_price_ttl">ECプラン</p>
                    </div>
                    <!-- /.bl_price_header -->
                    <div class="bl_price_body">
                        <p class="bl_price_price">
                            <span>月額</span>
                            <?php echo CFS()->get('EC_price'); ?><span>円(税別)</span>
                        </p>
                        <dl class="bl_price_features">
                            <div class="bl_price_features_detail hp_tal">
                                <p>モール出店は手数料が取られるので、自社でECサイトを考えている企業ならECプラン！</p>
                            </div>
                        </dl>
                        <a class="el_btn el_btn__mainRadius hp_mt30"
                            href="<?php bloginfo('url');?>/404"><span>デモサイトはこちら</span></a>
                    </div>
                    <!-- /.bl_price_body -->
                </li>
                <!-- /.bl_price -->
            </ul>
        </div>
        <!-- /.bl_priceUnit -->
    </div>
</section>
<section class="ly_section hp_ptLg hp_pbLg hp_bgc">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd" data-aos="fade-right">各プランの<br class="hp_br-sp">サービス内容。</h2>
        <div class="bl_scroll js-scrollable">
            <table class="bl_plan_service_table">
                <thead>
                    <tr class="hp_flex">
                        <th class="blank fixed01"></th>
                        <th class="bl_plan_service_head">
                            <div>
                                <p class="bl_plan_service_name">シンプルプラン</p>
                                <p class="bl_price_price bl_price_price__white">
                                    <span>月額</span>
                                    <?php echo CFS()->get('simple_price'); ?><span>円(税別)</span>
                                </p>
                            </div>
                        </th>
                        <th class="bl_plan_service_head">
                            <div>
                                <p class="bl_plan_service_name">プレミアムプラン</p>
                                <p class="bl_price_price bl_price_price__white">
                                    <span>月額</span>
                                    <?php echo CFS()->get('premium_price'); ?><span>円(税別)</span>
                                </p>
                            </div>
                        </th>
                        <th class="bl_plan_service_head">
                            <div>
                                <p class="bl_plan_service_name">ECプラン</p>
                                <p class="bl_price_price bl_price_price__white">
                                    <span>月額</span>
                                    <?php echo CFS()->get('EC_price'); ?><span>円(税別)</span>
                                </p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hp_flex">
                        <th class="fixed01">ページ数</th>
                        <td><span>1</span>ページ</td>
                        <td><span>6</span>ページ</td>
                        <td><span>7</span>ページ</td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">レスポンシブ</th>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td><i class="fas fa-check-circle"></i></td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">SEO対策</th>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td><i class="fas fa-check-circle"></i></td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">セキュリティ設定</th>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td><i class="fas fa-check-circle"></i></td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">サポート</th>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td><i class="fas fa-check-circle"></i></td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">ブログ機能</th>
                        <td>ー</td>
                        <td><i class="fas fa-check-circle"></i></td>
                        <td>ー</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="ly_section hp_ptLg hp_pbLg">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd" data-aos="fade-right">オプションで<br class="hp_br-sp">さらに思い通りに。</h2>
        <div class="bl_scroll js-scrollable">
            <table class="bl_plan_option_table">
                <thead>
                    <tr class="hp_flex">
                        <th class="blank fixed01"></th>
                        <th class="bl_plan_option_head">
                            <div>
                                <p class="bl_plan_option_name">シンプルプラン</p>
                                <p class="bl_price_price bl_price_price__white">
                                    <span>月額</span>
                                    <?php echo CFS()->get('simple_price'); ?><span>円(税別)</span>
                                </p>
                            </div>
                        </th>
                        <th class="bl_plan_option_head">
                            <div>
                                <p class="bl_plan_option_name">プレミアムプラン</p>
                                <p class="bl_price_price bl_price_price__white">
                                    <span>月額</span>
                                    <?php echo CFS()->get('premium_price'); ?><span>円(税別)</span>
                                </p>
                            </div>
                        </th>
                        <th class="bl_plan_option_head">
                            <div>
                                <p class="bl_plan_option_name">ECプラン</p>
                                <p class="bl_price_price bl_price_price__white">
                                    <span>月額</span>
                                    <?php echo CFS()->get('EC_price'); ?><span>円(税別)</span>
                                </p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hp_flex">
                        <th class="fixed01">ロゴ制作<br class="hp_br-tb">（マーク無し）</th>
                        <td><span>6,000</span>円〜</td>
                        <td><span>6,000</span>円〜</td>
                        <td><span>6,000</span>円〜</td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">ロゴ制作<br class="hp_br-tb">（マーク有り）</th>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">原稿制作</th>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">フォトギャラリー追加<br class="hp_br-tb">（10枚）</th>
                        <td><span>4,000</span>円〜</td>
                        <td><span>4,000</span>円〜</td>
                        <td><span>4,000</span>円〜</td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">SNS連携</th>
                        <td><span>2,000</span>円〜</td>
                        <td><span>2,000</span>円〜</td>
                        <td><span>2,000</span>円〜</td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">ページ追加<br class="hp_br-tb">（1P）</th>
                        <td>ー</td>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">画像制作<br class="hp_br-tb">（1枚）</th>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                    </tr>
                    <tr class="hp_flex">
                        <th class="fixed01">Google<br class="hp_br-tb">マイビジネス登録等</th>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                        <td><span>10,000</span>円〜</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="ly_section hp_ptLg hp_pbLg hp_bgc" id="meo">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mbMd" data-aos="fade-right">店舗集客で<br class="hp_br-sp">お困りの方は。</h2>
        <p class="hp_tac ">ホームページで店舗集客をさらに強化したい方は<br class="hp_br-sp">基本プランにMEO対策を施すことも可能です。
        </p>
        <p class="el_annotation hp_fs-sm hp_mbLg hp_tac">
            ※MEO対策とは、Googleマップに登録されている店舗の検索順位を上昇させる施策のことです。 </p>
        <div>
            <table class="bl_plan_service_table">
                <thead>
                    <tr class="hp_flex">
                        <th class="blank fixed01"></th>
                        <th class="bl_plan_service_head">
                            <div>
                                <p class="bl_plan_service_name">シンプルプラン<br>プレミアムプラン<br>ECプラン</p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hp_flex">
                        <th class="fixed01 hp_tac">MEO対策</th>
                        <td>
                            <small>
                                月額料金
                            </small><br>+<br><span>月額 </span>30,000<span> 円</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php get_footer(); ?>