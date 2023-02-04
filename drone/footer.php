<?php
$category_name = get_category_by_slug('voice');
$category_link = get_category_link($category_name);
?>
<?php if (!is_page()) : ?>
    <div class="breadcrumb-area">
        <?php breadcrumb(); ?>
    </div>
<?php endif; ?>
<article>
    <div class="cta">
        <div class="cta__column">
            <div class="cta-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13064.312486664136!2d137.02627153955075!3d35.054785900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036209ff1f0341%3A0x31207add568543c2!2z5bmz5oiQ5bu66KitIOODieODreODvOODs-ODquOCteODvOODgQ!5e0!3m2!1sja!2sjp!4v1657687056643!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
        <div class="cta__column cta__column--contact">
            <h4 class="cta__title">お電話でのご相談・お問い合わせ</h4>
            <div class="cta__tel"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-tel.png" alt="" class="cta__image--tel" width="36" height="40">0566-36-5539</div>
            <dl class="cta__d-list">
                <dt class="cta__team">営業時間</dt>
                <dd class="cta__description">9:00〜17:30</dd>
                <dt class="cta__team">定休日</dt>
                <dd class="cta__description">土曜日・日曜日・祝日・お盆・年末年始</dd>
            </dl>
            <a href="<?php echo home_url(); ?>/contact" class="button button--inversion cta-button">お問い合わせはこちら</a>
        </div>
    </div>
</article>
<footer class="footer">
    <div class="footer__column">
        <h5 class="footer__title">株式会社 平成建設</h5>
        <p class="footer__text">〒448-0001 愛知県刈谷市井ヶ谷町中前田６８番地<br> （刈谷ハイウェイオアシスから車で5分）
        </p>
        <p class="footer__text"><span class="footer__text--tel">TEL：0566-36-5539（代）</span><span class="footer__text--fax">FAX：0566-36-5758</span></p>
        <ul class="sns__list">
            <li class="sns__item"><a href="https://lin.ee/jAsiouS" class="sns__link sns__link--line" target="__blank" rel="noopener"><i class="fab fa-line fa-2x"></i>友達追加</a></li>
            <li class="sns__item"><a href="https://www.instagram.com/drone_research/" class="sns__link sns__link--instagram" target="__blank" rel="noopener"><i class="fab fa-instagram fa-2x"></i>drone_research</a></li>
            <li class="sns__item"><a href="https://twitter.com/drone_kariya" class="sns__link sns__link--twitter" target="__blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i>drone_kariya</a></li>
        </ul>
    </div>
    <div class="footer__column">
        <div class="footer-navi">
            <ul class="footer-navi__list">
                <li class="footer-navi__item"><a href="<?php echo home_url(); ?>/drone-research" class="footer-navi__link">ドローン調査とは？</a></li>
                <li class="footer-navi__item"><a href="<?php echo home_url(); ?>/price" class="footer-navi__link">料金プラン</a></li>
                <li class="footer-navi__item"><a href="<?php echo home_url(); ?>/flow" class="footer-navi__link">調査の流れ</a></li>
                <li class="footer-navi__item"><a href="<?php echo esc_url($category_link); ?>" class="footer-navi__link">お客様の声</a></li>

            </ul>
            <ul class="footer-navi__list">
                <li class="footer-navi__item"><a href="<?php echo home_url(); ?>/company" class="footer-navi__link">会社概要</a></li>
                <li class="footer-navi__item"><a href="<?php echo home_url(); ?>/contact" class="footer-navi__link">お問い合わせ</a></li>
                <li class="footer-navi__item"><a href="<?php echo home_url(); ?>/privacy-policy" class="footer-navi__link">プライバシーポリシー</a></li>
                <li class="footer-navi__item"><a href="http://heisei-kensetu.com/index.html" target="__blank" rel="noopener" class="footer-navi__link">平成建設ホームページ</a></li>
            </ul>
        </div>
        <a href="<?php echo home_url(); ?>/company/#sdgs" class="button button--inversion sdgs-button">SDGsの達成に向けた取組みについて</a>
    </div>
</footer>
<p class="copyright">Copyright © 株式会社平成建設 All rights Reserved.</p>
<div class="footer-mobile-button">
    <ul class="footer-mobile-button__list">
        <li class="footer-mobile-button__item">
            <a href="tel:0566-36-5539" class="footer-mobile-button__link footer-mobile-button__link--tel">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-footer-tel.png" alt="" width="25" height="28" class="footer-mobile-button__image">電話を発信
            </a>
        </li>
        <li class="footer-mobile-button__item">
            <a href="<?php echo home_url(); ?>/contact" class="footer-mobile-button__link footer-mobile-button__link--mail">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-footer-mail.png" alt="" width="28" height="21" class="footer-mobile-button__image">お問い合わせ</a>
        </li>
    </ul>
</div>
<?php wp_footer(); ?>
</body>

</html>
