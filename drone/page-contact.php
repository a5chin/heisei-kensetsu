<?php get_header(); ?>
<div class="page-header">
    <div class="page-header__inner">
        <h1 class="page-header__title">お問い合わせ</h1>
    </div>
</div>
<main>
    <div class="contact-tel">
        <div class="contact__column">
            <h3 class="contact__heading">電話でのお問い合わせ</h3>
            <p class="contact__text">お問い合わせ、お見積もり依頼、ご相談などお気軽にご連絡ください。</p>
        </div>
        <div class="contact__column">
            <div class="contact-tel__number">(0566) 36-5539</div>
            <dl class="contact-tel__d-list">
                <dt class="contact-tel__term">受付時間</dt>
                <dd class="contact-tel__description">9:00～17:30</dd>
                <dt class="contact-tel__term">FAX</dt>
                <dd class="contact-tel__description">(0566) 36-5758</dd>
                <dt class="contact-tel__term">定休日</dt>
                <dd class="contact-tel__description">土・日・祝日・お盆・年末年始</dd>
            </dl>
        </div>
    </div>
    <div class="contact-line">
        <div class="contact__column">
            <h3 class="contact__heading">LINEでのお問い合わせ</h3>
            <p class="contact__text">お友だち追加限定10%OFFクーポン配布中！</p>
        </div>
        <div class="contact__column">
            <div class="contact-line__unit">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/qr.png" alt="" class="contact-line__image" width="125" height="125">
                <a href="https://lin.ee/jAsiouS"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" width="116" height="36" border="0"></a>
            </div>
        </div>
    </div>
    <section class="contact-form">
        <h2 class="contact-form__title">お問い合わせ</h2>
        <p class="contact-form__lead">以下のフォームに必要事項をご記入の上、「送信」ボタンをクリックしてください。<br class="contact-form__lead--br">2営業日以内にご返信いたします。</p>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>
    </section>
</main>
<?php get_footer(); ?>
