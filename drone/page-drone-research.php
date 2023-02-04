<?php get_header(); ?>
<div class="page-header">
    <div class="page-header__inner">
        <h1 class="page-header__title">ドローン調査とは？</h1>
    </div>
</div>
<main>
    <section class="drone-service">
        <div class="drone-service__unit">
            <h2 class="drone-service__title">ドローン調査はこんなサービスです</h2>
            <p class="drone-service__text">弊社が所有する高性能ドローンを使用し、有資格ドローン操縦士が上空からお家の状況などを撮影します。映像をもとに屋根や外壁の状況を解析した報告書を作成し、お客様にご報告いたします。従来の建物点検で必要とされていた足場が必要ないため経済的に調査点検が出来ます。</p>
            <p class="drone-service__text">ＬＩＮＥやメールでの納品にも対応しておりますので、離れて暮らすご親族様にもご安心いただけます。調査の際にはご近所様へのご挨拶も当社でいたします。</p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/price-graph.png" alt="" class="drone-service__image drone-service__image--mobile" width="404" height="300">
            <div class="drone-service-hoken">
                <h3 class="drone-service-hoken__title">最大5億円の損害保険に加入</h3>
                <p class="drone-service-hoken__text">不測の事態に備え対人、対物最大5億円の損害保険に加入しております。<br>万が一の際にもご安心頂けます。</p>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/price-graph.png" alt="" class="drone-service__image drone-service__image--pc" width="404" height="300">
    </section>
    <section class="drone-dekirukoto">
        <?php get_template_part('template-parts/dekirukoto'); ?>
    </section>
    <div class="button__unit">
        <a href="<?php echo home_url(); ?>/price" class="button button__common">料金プラン</a>
        <a href="<?php echo home_url(); ?>/flow" class="button button__common">調査の流れ</a>
    </div>
    <section class="drone-sample">
        <div class="photo-sample">
            <div class="photo-sample__unit">
                <h3 class="photo-sample__title">可視カメラ撮影</h3>
                <p class="photo-sample__text">戸建て住宅やアパートなどで、初回の点検調査など、気軽にご利用頂けます。屋根の漆喰や釘の浮き状況など細かい部分までご覧いただけます。</p>
                <ul class="yousu__list yousu__list--camera">
                    <li class="yousu__item yousu__item--camera"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/camera1.jpg" alt="" class="yousu__image"></li>
                    <li class="yousu__item yousu__item--camera"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/camera2.jpg" alt="" class="yousu__image"></li>
                    <li class="yousu__item yousu__item--camera"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/camera3.jpg" alt="" class="yousu__image"></li>
                    <li class="yousu__item yousu__item--camera"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/camera4.jpg" alt="" class="yousu__image"></li>
                </ul>
            </div>
            <div class="photo-sample__unit">
                <h3 class="photo-sample__title">高性能赤外線カメラ撮影</h3>
                <p class="photo-sample__text">目視では確認できない部分を高性能サーモカメラで調査いたします。太陽光パネルの不具合や屋根や外壁の漏水などの調査に最適です。</p>
                <ul class="yousu__list yousu__list--camera">
                    <li class="yousu__item yousu__item--camera"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/camera1-sekigaisen.jpg" alt="" class="yousu__image"></li>
                    <li class="yousu__item yousu__item--camera"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/camera2-sekigaisen.jpg" alt="" class="yousu__image"></li>
                    <li class="yousu__item yousu__item--camera"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/camera3-sekigaisen.jpg" alt="" class="yousu__image"></li>
                    <li class="yousu__item yousu__item--camera"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/camera4-sekigaisen.jpg" alt="" class="yousu__image"></li>
                </ul>
            </div>
        </div>
    </section>
    <div class="button__unit">
        <a href="<?php echo home_url(); ?>/price" class="button button__common">料金プラン</a>
        <a href="<?php echo home_url(); ?>/contact" class="button button__common">お問い合わせはこちら</a>
    </div>
    <section class="drone-area">
        <?php get_template_part('template-parts/area'); ?>
    </section>
</main>
<?php get_footer(); ?>
