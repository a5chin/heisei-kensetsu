<?php get_header(); ?>
<main class="main">
    <section class="hero">
        <div class="hero__unit">
            <h1 class="hero__title">おうちの健康診断していますか？</h1>
            <p class="hero__lead">最新の技術で安心・安全・経済的<br>屋根、外壁、雨漏りまるっと解決</p>
        </div>
        <div class="hero__images" id="viewer">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide1.jpg" alt="" class="hero__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide2.jpg" alt="" class="hero__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide3.jpg" alt="" class="hero__image">
        </div>
    </section>
    <section class="kinkyu-banner">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kinkyu-banner.png" alt="" class="kinkyu-banner__image" width="280" height="218">
        <div class="kinkyu-banner__unit">
            <h2 class="kinkyu-banner__title"><span class="kinkyu-banner__title--marker">台風 災害にあわれた等<br class="kinkyu-banner__title--br">緊急調査をしたい方</span></h2>
            <a href="<?php echo home_url(); ?>/contact#item3" class="button">緊急調査のご相談はこちら</a>
        </div>
    </section>
    <section class="home-instagram">
        <div class="instagram__container">
        <?php echo do_shortcode('[instagram-feed feed=1]');?>
        </div>
    </section>
    <section class="home-drone-about">
        <div class="drone-about">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/drone-about.png" alt="ドローン×調査（信頼、安心、安全、経済的）" class="drone-about__image" width="403" height="357">
            <div class="drone-about__unit">
                <h2 class="drone-about__title">刈谷市で創業50年超の<br class="drone-about__title--br">工務店によるドローン調査</h2>
                <p class="drone-about__text">
                    愛知県刈谷市で昭和45年創業以来、地域のハウスメーカーとして戸建て住宅を中心に事業展開してまいりました。現在は官公庁から仕事も多く、県や市、文部科学省、法務省等公共建物の修繕事業を中心に営業しています。</p>
                <p class="drone-about__text">地域の皆様の「屋根を見てほしい」という声にお応えして「ドローンリサーチ刈谷」としてドローン建物調査部設立いたしました。</p>
            </div>
        </div>
    </section>
    <section class="home-oyakusoku">
        <div class="oyakusoku">
            <div class="oyakusoku__unit">
                <h2 class="oyakusoku__title">ドローンリサーチ刈谷のお約束</h2>
                <ul class="oyakusoku__list">
                    <li class="oyakusoku__item"><i class="far fa-check-square"></i>最新のドローンによる安全な調査</li>
                    <li class="oyakusoku__item"><i class="far fa-check-square"></i>調査を通じてお客様に安心を提供</li>
                    <li class="oyakusoku__item"><i class="far fa-check-square"></i>調査後の強引な勧誘などは致しません</li>
                    <li class="oyakusoku__item"><i class="far fa-check-square"></i>調査を通じて持続可能な社会の実現を目指します</li>
                </ul>
                <p class="oyakusoku__text">国土交通省飛行許可承認済　<br class="oyakusoku__text--br">国土交通省無人航空機登録済　<br class="oyakusoku__text--br">調査毎にFISS(飛行計画)登録<br>有資格ドローン操縦士が在籍する会社です。</p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/family2.png" alt="" class="oyakusoku__image" width="205" height="278">
        </div>
    </section>
    <section class="home-dekirukoto">
        <?php get_template_part('template-parts/dekirukoto'); ?>
    </section>
    <section class="home-yousu">
        <div class="yousu">
            <h2 class="title-common">ドローン調査の様子</h2>
            <ul class="yousu__list">
                <li class="yousu__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/yousu1.jpg" alt="" class="yousu__image"></li>
                <li class="yousu__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/yousu2.jpg" alt="" class="yousu__image"></li>
                <li class="yousu__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/yousu3.jpg" alt="" class="yousu__image"></li>
                <li class="yousu__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/yousu4.jpg" alt="" class="yousu__image"></li>
            </ul>
        </div>
    </section>
    <section class="home-tokuchou">
        <div class="tokuchou">
            <h2 class="title-common">ドローン調査の4つの特徴</h2>
            <ul class="tokuchou__list">
                <li class="tokuchou__item">
                    <div class="tokuchou__heading">POINT1</div>
                    <p class="tokuchou__text">調査のための足場作業が不要なので、調査費用が経済的</p>
                </li>
                <li class="tokuchou__item">
                    <div class="tokuchou__heading">POINT2</div>
                    <p class="tokuchou__text">調査にかかる時間が短いから、お客様への負担が最小限</p>
                </li>
                <li class="tokuchou__item">
                    <div class="tokuchou__heading">POINT3</div>
                    <p class="tokuchou__text">気軽に点検が出来るから、建物等の老朽化の早期発見が可能</p>
                </li>
                <li class="tokuchou__item">
                    <div class="tokuchou__heading">POINT4</div>
                    <p class="tokuchou__text">人が屋根に上らないので既存の屋根を傷つけず、転落事故の危険もない</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="home-onayami">
        <div class="onayami">
            <h3 class="onayami__title">こんなお悩みありませんか？</h3>
            <ul class="onayami__list">
                <li class="onayami__item"><i class="far fa-check-square"></i>家に関する悩みを誰に相談したらいいのか分からない</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>家を建ててから10年以上たったけどメンテナンスをしていない</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>台風が来る前に家の状態が知りたい</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>雨漏りしているんじゃないか不安</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>アパート・マンション調査をしてほしい</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>工場の屋根が心配だ</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>ソーラーパネルを見てほしい</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>台風等災害被害に遭ったけど、被害状況が自分ではよくわからない</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>火災保険の相談、修繕工事・・・どうしたらいいのかわからない</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>離れて暮らす高齢の両親の家が心配だ</li>
                <li class="onayami__item"><i class="far fa-check-square"></i>公民館等見てほしい</li>
            </ul>
        </div>
    </section>
    <div class="button__unit">
        <a href="<?php echo home_url(); ?>/drone-research" class="button">ドローン調査とは？</a>
        <a href="<?php echo home_url(); ?>/price" class="button">料金プラン</a>
    </div>
    <section class="home-pack">
        <div class="pack">
            <h2 class="title-common">ドローンリサーチ刈谷の<br class="pack__title--br">安心らくらくパック</h2>
            <div class="pack__unit">
                <div class="pack__inner">
                    <h3 class="pack__subtitle">老舗工務店ならではの安心と信頼で<br class="pack__subtitle--br">お客様の強い味方になります
                    </h3>
                    <p class="pack__text">「台風等災害の被害に遭ったけど、被害状況が自分ではよくわからない。」「火災保険の申請をどうしたらいいのか分からない。」「修繕工事はどこに頼めばいいの？」</p>
                    <p class="pack__text">そんなお悩みがございましたら、ぜひ、ドローンリサーチ刈谷にご相談ください。</p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/family.png" alt="" class="pack__image" width="400" height="202">
            </div>
            <div class="pack-flow">
                <h4 class="title-common title-common--green">当社の調査</h4>
                <div class="pack-flow__lead"><span class="pack-flow__lead--inner">調査から工事まで当社が責任を持って<br class="pack-flow__lead--br">ワンストップで対応致します</span></div>
                <ul class="pack-flow__list">
                    <li class="pack-flow__item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/research1.png" alt="" class="pack-flow__image" width="240" height="240">
                        <p class="pack-flow__caption">調査・報告<br class="pack-flow__caption--br">（足場代不要）</p>
                    </li>
                    <li class="pack-flow__item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/research2.png" alt="" class="pack-flow__image" width="240" height="240">
                        <p class="pack-flow__caption">修繕見積もり<br class="pack-flow__caption--br">・保険申請サポート</p>
                    </li>
                    <li class="pack-flow__item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/research3.png" alt="" class="pack-flow__image" width="240" height="240">
                        <p class="pack-flow__caption">修繕工事</p>
                    </li>
                </ul>
                <p class="pack-flow__text--emphasis">修繕工事をご依頼頂いた場合、調査修繕工事費のみのご請求となります。（調査費等無料キャンペーン）<br class="pack-flow__text--br">保険適応等についてもご相談下さい。
                </p>
                <p class="text-caution">近年保険申請代行を謳った悪質業者がいますのでご注意ください。<br class="pack-flow__text-caution--br">当社は保険会社とも連携し常に最新情報の元に法令に則り活動しております。
                </p>
            </div>
        </div>
    </section>
    <section class="home-voice">
        <div class="voice">
            <h2 class="title-common">お客様の声</h2>
            <ul class="post-3column__list">
                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'post',
                    'category_name' => 'voice',
                    'posts_per_page' => 6
                )); ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="post-3column__item">
                        <a href="<?php the_permalink() ?>" class="post-3column__link">
                            <figure class="post-3column__figure">
                                <?php if (has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail('large', array('class' => 'post-3column__image')); ?>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" class="post-3column__image">
                                <?php } ?>
                            </figure>
                            <p class="post-3column__heading"><?php the_title(); ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <?php
            $category_name = get_category_by_slug('voice');
            $category_link = get_category_link($category_name);
            ?>
            <div class="post-3column-more__text"><a href="<?php echo esc_url($category_link); ?>" class="post-3column-more__link">もっと見る</a></div>
        </div>
    </section>
    <section class="home-column">
        <div class="column">
            <div class="column__unit column__unit--green">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/column1.png" alt="" class="column__image" width="423" height="290">
                <h2 class="column__title">台風に備えて建物調査をしませんか？</h2>
                <p class="column__text">
                    日頃から屋根、壁、窓からの雨漏りがないか確認をしておくことが大切です。また、雨どいや側溝、ベランダの排水溝が詰まらないように定期的に掃除をし、早めのメンテナンスを心がけましょう。</p>
                <p class="column__text">建物の老朽化早期発見の為、台風季節前の定期的なドローン調査をお勧めしております。</p>
            </div>
            <div class="column__unit  column__unit--pink">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/column2.png" alt="" class="column__image" width="423" height="290">
                <h2 class="column__title">火災保険の利用について</h2>
                <p class="column__text">
                    火災、台風、災害等で被害があった場合火災保険がご利用頂ける場合がございます。契約の内容、損害の状況によって支払額が大きく変わってきます。当社は提携保険事務所と連携し常に最新の情報と法令に基づいた申請をサポート致します。</p>
            </div>
        </div>
    </section>
    <section class="home-sdgs" id="home-sdgs">
        <div class="sdgs-info">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sdgs.png" alt="持続可能な社会の実現に向けて" class="sdgs-info__image" width="467" height="401">
            <div class="sdgs-info__unit">
                <h2 class="sdgs-info__title">平成建設のSDGsの達成に向けた取組について</h2>
                <p class="sdgs-info__text">刈谷市で創業以来50年「木も人も適材適所で輝き続ける」を企業理念として早くから循環型社会の実現を目指してまいりました。</p>
                <p class="sdgs-info__text">当社は国連提唱する「持続可能な開発目標SDGs」に賛同し、積極的な取り組みを通じて持続可能な社会の実現に向けて貢献してまいります。</p>
                <div class="sdgs-info-button">
                    <div class="sdgs-character-group">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sdgs-group1.png" alt="" class="sdgs-character-group__image sa sa--up" width="103" height="218">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sdgs-group2.png" alt="" class="sdgs-character-group__image sa sa--up" width="98" height="218" data-sa_delay="160">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sdgs-group3.png" alt="" class="sdgs-character-group__image sa sa--up" width="95" height="218" data-sa_delay="250">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sdgs-group4.png" alt="" class="sdgs-character-group__image sa sa--up" width="104" height="218" data-sa_delay="360">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sdgs-group5.png" alt="" class="sdgs-character-group__image sa sa--up" width="27" height="218" data-sa_delay="500">
                    </div>
                    <a href="<?php echo home_url(); ?>/company/#sdgs" class="button button--inversion sdgs-button">SDGsの達成に向けた取組みについて</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
