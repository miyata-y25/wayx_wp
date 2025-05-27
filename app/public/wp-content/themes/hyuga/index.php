<?php get_header(); ?>

<section class="top-main">
    <h1 class="top-main__ttl">
        <?php
            $topmain_args = array(
                'post_type' => 'topmain',
                'posts_per_page' => 1,
            );
            $topmain_query = new WP_Query($topmain_args);
            if ($topmain_query->have_posts()) :
                while ($topmain_query->have_posts()) : $topmain_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-main-pc'); ?>">
            <img src="<?php the_field('top-main-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </h1>
    <div class="top-main__info" id="link01">
        <?php
            $topcam_args = array(
                'post_type' => 'topcam',
                'posts_per_page' => 1,
            );
            $topcam_query = new WP_Query($topcam_args);
            if ($topcam_query->have_posts()) :
                while ($topcam_query->have_posts()) : $topcam_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-cam-pc'); ?>">
            <img src="<?php the_field('top-cam-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php the_content(); ?>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </div>
</section>

<a href="https://jp.indeed.com/jobs?q=WAYX&l=%E5%AE%AE%E5%B4%8E%E7%9C%8C+%E6%97%A5%E5%90%91%E5%B8%82&radius=25&from=searchOnDesktopSerp&vjk=d69854c8e03e548b&advn=4445808393267962
" target="_blank" class="recruit-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit_bnr.png" alt="WAYX（ウェイクス）ではスタッフを募集しています"></a>

<section class="sec -news" id="link02">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">NEWS</span>
    </h2>
    <ul class="news-list">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><time datetime="<?php the_date('Y-m-d'); ?>"><?php echo get_post_time('Y/m/d'); ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; else : ?>
        <li>記事がありません。</li>
<?php endif; ?>
    </ul>
    <p class="news-more"><a href="news/">READ MORE</a></p>
</section>

<a href="https://lin.ee/bsV9tuX" target="_blank" class="line-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/line_bnr.svg" alt="OPEN前5月下旬無料開放予定"></a>

<section class="yourself-sec" id="link03">
    <h2 class="yourself-sec__ttl">
        <span class="">いつでも、だれでも、自分らしく</span>
        <span class="font-en">Anytime, anyone, be yourself.</span>
    </h2>
    <p class="yourself-sec__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_wt.svg" alt="WAYXロゴ"></p>
    <div class="yourself-sec__cont">
        <figure class="yourself-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_img.png" alt=""></figure>
        <p class="yourself-sec__txt">
            理想を叶える道（WAY）は、一人一人違っていい多様な未知数（X）。<br>
            私たちは「いつでも、だれでも、自分らしく」という理念を掲げています。<br>
            ココロとカラダの健康はQuality Of Lifeの基礎<br>
            私たちとの出会いが、より豊かな人生のスタートになりますように。
        </p>
    </div>
    <ul class="yourself-sec__list" data-simplebar data-simplebar-auto-hide="false">
        <li class="grid__list">
            <h3 class="ttl">日向市最強ジム！</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo01.svg" alt="">
            </figure>
            <p class="txt">名だたるジムのメインマシンとしてラインナップされている世界的に有名なノーチラスマシン導入</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">初心者でも<br>安心設計のマシン</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo02.svg" alt="">
            </figure>
            <p class="txt">ウエイトはスライド式で使いやすさ抜群！そして追及された可動域はトレーニング効果も抜群！</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">大量！<br>プレートローデッド</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo03.svg" alt="">
            </figure>
            <p class="txt">45度レッグプレス、ハックスクワット、その他最新レバレッジマシン7台、大量導入！</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">充実の<br>フリーウエイト</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo04.svg" alt="">
            </figure>
            <p class="txt">パワーラック3台、垂直式スミスマシン1台、傾斜式スミスマシン1台、準公式ベンチ2台！</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">日向初暗闇スタジオ</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo05.svg" alt="">
            </figure>
            <p class="txt">世界45ヶ国で導入されている多彩なスタジオプログラム「ラディカル バーチャル」導入！</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">24時間・安全・万全のセキュリティ</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo06.svg" alt="">
            </figure>
            <p class="txt">SECOMとAI自動危険検知システム（GYM DX）導入！女性も深夜早朝でも安心。</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">完全男女別のロッカー・シャワールーム</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo07.svg" alt="">
            </figure>
            <p class="txt">入口が男女別に分かれているので女性の方も安心♪</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">鍵付きロッカー</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo08.svg" alt="">
            </figure>
            <p class="txt">トレーニング中に無料でご利用頂ける鍵付きロッカーをご用意！安心して運動できます。</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">水素水</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo09.svg" alt="">
            </figure>
            <p class="txt">安定した水素濃度を実現した、高濃度水素水サーバーをご用意！（別途料金）</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">無料Wi-Fi</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo10.svg" alt="">
            </figure>
            <p class="txt">館内は無料Wi-Fiを完備。音楽や動画をご覧いただきながらトレーニング♪</p>
        </li>
    </ul>
    <?php /*
    <h2 class="yourself-sec__ttl --italic">MOVIE</h2>
    <figure class="yourself-sec__mv">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_mv.png" alt="">
    </figure>
    <p class="news-more --wt"><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_yt2.svg" alt="">Youtubeで見る</a></p>
    */?>
</section>

<section class="saikyo-sec" id="link04">
    <h2 class="saikyo-sec__ttl">
        <picture>
            <source media="(min-width:641px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/saikyo_ttl.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/saikyo_ttl_sp.svg" alt="日向市最強ジム×日向市初暗闇スタジオ">
        </picture>
    </h2>
    <div class="saikyo-sec__bdy">
        <p class="saikyo-sec__txt">オリンピック選手など、トップレベル競技者用のトレーニング施設、<br>国立ナショナルトレーニングセンターにも導入されている世界的に有名なノーチラスマシン導入！
        </p>
        <ul class="saikyo-sec__point">
            <li>
                <span class="num">POINT.01</span>
                <h3 class="ttl">トレーニング効果が高く、<br>初心者でも安心設計のマシン</h3>
                <figure class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/saikyo_thum01.png" alt=""></figure>
                <p class="txt">
                    生体力学的に最大限の効果を生み出すために追及された可動域でトレーニングの効果抜群！<br>
                    また初心者でも安心設計、ウエイトはスライド式で使いやすさ抜群のノーチラス製の最新マシンをラインナップしました。
                </p>
            </li>
            <li>
                <span class="num">POINT.02</span>
                <h3 class="ttl">大量導入！<br>プレートローデッド</h3>
                <figure class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/saikyo_thum02.png" alt=""></figure>
                <p class="txt">
                    抜けがなくダイレクトに効く！よりフリーウエイトに近い負荷でありながら、軌道が固定されているため、初心者や女性でも安全に行っていただけるトレーニングマシン。45度レッグプレス、ハックスクワット、その他最新レバレッジマシン7台、大量導入！
                </p>
            </li>
            <li>
                <span class="num">POINT.03</span>
                <h3 class="ttl">充実！<br>フリーウエイト</h3>
                <figure class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/saikyo_thum03.png" alt=""></figure>
                <p class="txt">
                    地域最大級のフリーウエイト！パワーラック3台、垂直式スミスマシン1台、傾斜式スミスマシン1台、準公式ベンチ2台。バーベルは日本パワーリフティング協会公認品で耐久重量450kg！ダンベルはIVANKOを採用最大50㎏まで。
                </p>
            </li>
            <li>
                <span class="num">POINT.04</span>
                <h3 class="ttl">トレッドミルは<br>スタートラック</h3>
                <figure class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/saikyo_thum04.png" alt=""></figure>
                <p class="txt">
                    有酸素運動は、業界最高峰の安全性を誇るスタートラック社製のマシンを導入。階段の昇降運動が可能なガンレットも用意！トレッドミル（ランニングマシン）8台、クロストレーナー2台、リカンベントバイク2台、ガンレット2台。
                </p>
            </li>
        </ul>
        <h3 class="saikyo-sec__ttl2">MACHINE<br>LINEUP</h3>
        <h4 class="saikyo-sec__ttl3">Weight Stack</h4>
        <div class="lineup-slider --01">
            <div class="swiper-container">
                <div class="swiper-wrapper lineup-list">
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">シーテッドレッグプレス</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_1.png" alt=""></figure>
                        <p class="lineup-txt">腰や背中に負担をかけず、足を鍛えることができます。女性は脚のラインの引き締め効果を期待できます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大腿四頭筋・腓腹筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">シーテッドレッグカール</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_2.png" alt=""></figure>
                        <p class="lineup-txt">太ももの裏を鍛えることができます。女性は、お尻と太ももの境目を作ることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>ハムストリング</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">レッグエクステンション</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_3.png" alt=""></figure>
                        <p class="lineup-txt">太ももの前側を鍛えることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大腿四頭筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">アブダクション・アダクション</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_4.png" alt=""></figure>
                        <p class="lineup-txt">アブダクション/お尻の上側や、外腿を鍛えます。<br>アダクション/内腿を鍛えることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大腿筋膜張筋・大殿筋・中殿筋・内転筋群</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">アブドミナル</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_5.png" alt=""></figure>
                        <p class="lineup-txt">腹筋を鍛えます。６パック、美しいお腹周りを作ります。座った状態でできますので、腰の負担も減らすことができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>腹筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">ラットプルダウン</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_6.png" alt=""></figure>
                        <p class="lineup-txt">背中を鍛えるマシンです。背中を引き締めることで美しいボディラインを手にすることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋・大円筋・菱形筋・上腕二頭筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">バーチカルロウ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_7.png" alt=""></figure>
                        <p class="lineup-txt">背中のラインを美しく整えます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>背中・力こぶ</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">ローロウ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_8.png" alt=""></figure>
                        <p class="lineup-txt">背中の真ん中あたりのトレーニングができます。男性は厚みのある身体、女性は引き締まった背中のラインを作ることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋下部・僧帽筋中部・菱形筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">ローバック</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_9.png" alt=""></figure>
                        <p class="lineup-txt">座って前かがみの姿勢から起こす運動です。背中の下の方の筋肉を鍛えることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>脊柱起立筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">デルトイドフライ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_10.png" alt=""></figure>
                        <p class="lineup-txt">胸／背中　2種類のトレーニングができます。胸はチェストプレスとは違った刺激が入ります。背中は猫背解消に効果的です。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大胸筋・僧帽筋・菱形筋・三角筋後部</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">チェストプレス</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_11.png" alt=""></figure>
                        <p class="lineup-txt">胸を鍛えるマシンです。男性は厚い胸板、女性はバストアップが期待できます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大胸筋・三角筋前部・上腕三頭筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">ディップマシン</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_12.png" alt=""></figure>
                        <p class="lineup-txt">腕の裏側を鍛えることができ男性はたくましい腕を、女性は二の腕の弛みを引き締めることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>上腕三頭筋・脊柱起立筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">バイセップカール</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_13.png" alt=""></figure>
                        <p class="lineup-txt">上腕二頭筋(力こぶ)を鍛えます。男性はたくましい腕、女性は引き締まった腕を作ることができます。ダンベルとは違い負荷が抜けることがなくトレーニングできます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>上腕二頭筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">ショルダープレス</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_14.png" alt=""></figure>
                        <p class="lineup-txt">肩の筋肉を鍛えます。肩の血行を良くし、肩こり予防にも効果的です。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>三角筋前部・上腕三頭筋・僧帽筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">デルトイドレイズ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_15.png" alt=""></figure>
                        <p class="lineup-txt">肩のみを鍛えることができます。逆三角形のボディラインを作るために必要なトレーニングです。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>三角筋前、中部</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <h4 class="saikyo-sec__ttl3">Plate Loated</h4>
        <div class="lineup-slider --02">
            <div class="swiper-container">
                <div class="swiper-wrapper lineup-list">
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">アンクルドレッグプレス</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_1.png" alt=""></figure>
                        <p class="lineup-txt">ケガのリスクを抑えて高重量のトレーニングをすることができます。角度がついているため身体が浮きにくくしっかりと負荷をかけることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大腿四頭筋・腓腹筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">チルトシートカーフ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_2.png" alt=""></figure>
                        <p class="lineup-txt">座った状態でふくらはぎのトレーニングを安全に行うことができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>腓腹筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">ハックスクワット</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_3.png" alt=""></figure>
                        <p class="lineup-txt">安定した状態で、お尻、ハムストリングスなどのトレーニングができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大殿筋・ハムストリングス</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">グルートドライブ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_4.png" alt=""></figure>
                        <p class="lineup-txt">お尻を鍛えるマシン。高重量でトレーニングでき、大殿筋にしっかりと刺激が入り丸みのあるヒップラインを作ることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大殿筋、中殿筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">レバレッジ ラットプルダウン</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_5.png" alt=""></figure>
                        <p class="lineup-txt">背中を鍛えるマシンです。背中を引き締めることで美しいボディラインを手にすることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋・大円筋・菱形筋・上腕二頭筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">レバレッジ ローロウ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_6.png" alt=""></figure>
                        <p class="lineup-txt">背中の真ん中あたりのトレーニングができます。男性は厚みのある身体、女性は引き締まった背中のラインを作ることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋下部・僧帽筋中部・菱形筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">レバレッジ ハイロー</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_7.png" alt=""></figure>
                        <p class="lineup-txt">背中の上側あたりのトレーニングができます。しっかりとストレッチがかかるため背中にばっちり負荷がかかります。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋上部・僧帽筋下部・大円筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">レバレッジ チェストプレス</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_8.png" alt=""></figure>
                        <p class="lineup-txt">肩こり改善・バストアップ</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>胸・腕回り</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">レバレッジ ショルダープレス</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_9.png" alt=""></figure>
                        <p class="lineup-txt">肩を鍛えるマシンです。しっかり押し上げ丸い肩を作りましょう。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>三角筋</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <h4 class="saikyo-sec__ttl3">Free Weight</h4>
        <div class="lineup-slider --03">
            <div class="swiper-container">
                <div class="swiper-wrapper lineup-list">
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">スーパースミスマシン</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_1.png" alt=""></figure>
                        <p class="lineup-txt">少し斜め上に挙げる、主に上半身用のマシン。バーがガイドに沿って動くので安全。</p>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">スミスマシン</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_2.png" alt=""></figure>
                        <p class="lineup-txt">垂直に挙げる、主に下半身に効果的なマシン。</p>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">パワーケージ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_3.png" alt=""></figure>
                        <p class="lineup-txt">1台でベンチプレス、スクワットなど複数のバーベル種目を行うことが可能です。</p>
                        <dl class="lineup-dl">
                            <dt>数量</dt>
                            <dd>3</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">デュアルアジャスタブルプーリー</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_4.png" alt=""></figure>
                        <p class="lineup-txt">ケーブルを用いて、様々な筋肉を鍛えられます。</p>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">チンディップアシスト</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_5.png" alt=""></figure>
                        <p class="lineup-txt">懸垂やディップスができない方もアシストの力で効率的に鍛えることが可能です。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋上部・僧帽筋下部・大円筋・大胸筋下部、三頭筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">シーテッドプリチャーカール</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_6.png" alt=""></figure>
                        <p class="lineup-txt">上腕を固定した状態でバーベルやダンベルを使って上腕二頭筋のトレーニングができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>上腕二頭筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">アジャスタブルアブドミナルベンチ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_7.png" alt=""></figure>
                        <p class="lineup-txt">腹筋のトレーニングで使用します。傾斜が変更でき負荷の調節が可能です。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>腹筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">アジャスタブルバックエクステンション</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_8.png" alt=""></figure>
                        <p class="lineup-txt">背筋を鍛えることができます。シンプルな使い方なので初心者でも安心してトレーニングできます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>脊柱起立筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">オリンピックベンチ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_9.png" alt=""></figure>
                        <p class="lineup-txt">ベンチプレスやダンベルでのトレーニングに使用します。</p>
                        <dl class="lineup-dl">
                            <dt>数量</dt>
                            <dd>2</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">アジャスタブルベンチ</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_10.png" alt=""></figure>
                        <p class="lineup-txt">背もたれが動くベンチ。ダンベルなどのトレーニングで使用します。</p>
                        <dl class="lineup-dl">
                            <dt>数量</dt>
                            <dd>5</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">ダンベル</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_11.png" alt=""></figure>
                        <p class="lineup-txt">1㎏～50㎏までご用意してあります。初心者から上級者まですべての方に対応できます。</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <h4 class="saikyo-sec__ttl3">Cardio</h4>
        <div class="lineup-slider --04">
            <div class="swiper-container">
                <div class="swiper-wrapper lineup-list">
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">トレッドミル</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_1.png" alt=""></figure>
                        <p class="lineup-txt">ランニングマシン。傾斜やスピードを簡単に変えながらトレーニングできます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>脂肪燃焼・体力アップ</dd>
                        </dl>
                        <dl class="lineup-dl">
                            <dt>数量</dt>
                            <dd>8</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">クロストレーナー</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_2.png" alt=""></figure>
                        <p class="lineup-txt">ペダル式のウォーキング運動！大きな動作の全身運動。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>脂肪燃焼・全身運動</dd>
                        </dl>
                        <dl class="lineup-dl">
                            <dt>数量</dt>
                            <dd>2</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">リカンベントバイク</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_3.png" alt=""></figure>
                        <p class="lineup-txt">背もたれがついているため、体幹部の負担が減り、体力に自信がない方でも安心して有酸素運動ができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>脂肪燃焼・下半身引き締め</dd>
                        </dl>
                        <dl class="lineup-dl">
                            <dt>数量</dt>
                            <dd>2</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <h5 class="lineup-ttl">ガンレット</h5>
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_4.png" alt=""></figure>
                        <p class="lineup-txt">欧米で女性に大人気！無敵のヒップアップ＆下半身シェイプ！</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>脂肪燃焼・下半身引き締め</dd>
                        </dl>
                        <dl class="lineup-dl">
                            <dt>数量</dt>
                            <dd>2</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<section class="studio-sec" id="link05">
    <h2 class="studio-sec__ttl">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_ttl.svg" alt="">
    </h2>
    <div class="studio-sec__bdy">
        <figure class="studio-sec__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ra_logo.png" alt="">
        </figure>
        <p class="studio-sec__txt">
            世界45ヶ国で導入されているフィットネススタジオプログラム「ラディカル バーチャル」を日向市初導入！<br>
            流行りの格闘技系エクササイズやトランポリンエクササイズの他、ダンスプログラムやエアロビクス、<br>
            ヨガなど多彩なプログラムを壁一面の大画面で24時間お楽しみ頂けます。            
        </p>
        <div class="studio-mv"><a href="https://www.youtube.com/embed/s6PeqiDcUss?si=CZugjeInpmN8ngeL" target="_blank"><img src="http://img.youtube.com/vi/s6PeqiDcUss/maxresdefault.jpg" alt=""></a></div>
        <div class="studio-area">
            <h3 class="studio-area__ttl">スタジオプログラム一覧</h3>
            <ul class="studio-area__list">
                <li class="slider-jump01">格闘技系「ファイドウ」</li>
                <li class="slider-jump02">ミニトランポリン「ユーバウンド」</li>
                <li class="slider-jump03">ヨガ「ラディカルヨガ」</li>
                <li class="slider-jump04">ヨガ×ピラティス「オキシジェノ」</li>
                <li class="slider-jump05">ダンス「メガダンス」</li>
                <li class="slider-jump06">エアロビクス「ラディカルエアロ」</li>
            </ul>
        </div>
        <p class="studio-read">画像をクリックすると動画が再生されます</p>
        <div class="studio-slider">
            <ul class="studio-list">
                <li class="studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/dC4GVI8XwZA?si=3V1n8nQl17IvO4r8" target="_blank"><img src="http://img.youtube.com/vi/dC4GVI8XwZA/maxresdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo01.png" alt=""></h4>
                    <p class="studio-txt">FIGHT DO（ファイドウ）は、格闘技の動きをベースに 有酸素運動と無酸素運動の組み合わせにより、全身の筋力、持久力、俊敏性、柔軟性を効果的に向上させることができるクラスとなっています。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/w6p3JR8b3ik?si=nvLyTb6lu1AA6m_Z" target="_blank"><img src="http://img.youtube.com/vi/w6p3JR8b3ik/maxresdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo02.png" alt=""></h4>
                    <p class="studio-txt">UBOUND(ユーバウンド)は、ミニトランポリンの特徴を生かした関節に負担の少ない、高強度プログラム。爆発的な運動量で脂肪燃焼効果や不安定なトランポリンで行うエクササイズは自然にコアを鍛えます。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/zct_BLx3eD0?si=VfRPczH_O4p-aI-0" target="_blank"><img src="http://img.youtube.com/vi/zct_BLx3eD0/maxresdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo03.png" alt=""></h4>
                    <p class="studio-txt">RADICAL YOGA(ラディカルヨガ)は、体内の生命エネルギーを目覚めさせるポーズや呼吸、瞑想を行う事で、脊柱の調整、内臓の活性化、ストレス緩和、柔軟性を効果的に整えることができます。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/k0diu2HDbRc?si=-UGVhjj0d0auhUVK" target="_blank"><img src="http://img.youtube.com/vi/k0diu2HDbRc/maxresdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo04.png" alt=""></h4>
                    <p class="studio-txt">OXIGENO(オキシジェノ)は、ヨガ、ピラティス、ダイナミックストレッチ、太極拳をベースにプログラムされており、呼吸と流れるような動きで柔軟性と可動域向上に効果的です。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/s_dMk8T_ucA?si=CIvlybsnGb7oOKWX" target="_blank"><img src="http://img.youtube.com/vi/s_dMk8T_ucA/maxresdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo05.png" alt=""></h4>
                    <p class="studio-txt">MEGA DANZ(メガダンス)は、世界のダンスジャンルを音楽、振付、リズムで情熱的に表現する最高のダンスプログラムです。ダイエットや健康づくり、柔軟性向上にも効果的です。（フリースタイル、ラテンダンスあり）</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/0efpbNTN3FQ?si=EM4yTkzCuPtlfyMy" target="_blank"><img src="http://img.youtube.com/vi/0efpbNTN3FQ/maxresdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo06.png" alt=""></h4>
                    <p class="studio-txt">RADICAL AERO(ラディカルエアロ)は、刺激的でエネルギッシュなエアロビクスの動きで構成され、脂肪燃焼、下半身強化、循環器機能向上を望む初心者も参加できるカーディオエクササイズプログラムです。</p>
                </li>
            </ul>
        </div>
        <?php
            $schedule_args = array(
                'post_type' => 'schedule',
                'posts_per_page' => 1,
            );
            $schedule_query = new WP_Query($schedule_args);
            if ($schedule_query->have_posts()) :
                while ($schedule_query->have_posts()) : $schedule_query->the_post();
        ?>
        <a href="<?php the_field('schedule-pdf'); ?>" target="_blank" class="studio-btn"><?php the_title(); ?><br>スケジュールはこちら</a>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </div>
</section>

<?php /*
<section class="personal-sec">
    <h3 class="personal-sec__ttl">
        <span class="">初心者の方も安心</span><br>
        パーソナルトレーニング<br>コース例のご紹介
    </h3>
    <div class="personal-sec__grid">
        <figure class="personal-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/personal_img01.png" alt=""></figure>
        <div class="personal-sec__area">
            <h4 class="personal-sec__area__ttl">ボディメイクコース</h4>
            <p class="personal-sec__area__txt">
                トレーナーが専用プログラムを作成し、共に目標のカラダを目指し指導いたします。<br>
                短期間でカラダに無理をかける従来のパーソナルトレーニングと違い、レベルに合わせて無理なく段階的に指導いたしますので、初心者にもお勧めのコースです。
            </p>
        </div>
    </div>
</section>
*/?>

<section class="sec -others">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">OTHERS</span>
        <span class="sec__ttl__jp">その他の施設</span>
    </h2>
    <ul class="others-list">
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img01.png" alt="">
                <figcaption>ストレッチエリア</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img02.png" alt="">
                <figcaption>完全男女別の<br>ロッカールーム</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img03.png" alt="">
                <figcaption>シャワルーム完備<br>（男女各２基）</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img04.png" alt="">
                <figcaption>パウダーコーナー</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img05.png" alt="">
                <figcaption>安全な鍵付きロッカー</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img06.png" alt="">
                <figcaption>水素水サーバー</figcaption>
            </figure>
        </li>
    </ul>
</section>

<section class="sec -security">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">SECURITY</span>
        <span class="sec__ttl__jp">セキュリティ</span>
    </h2>
    <div class="security-grid">
        <div class="security-grid__area">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/security_img01.png" alt=""></figure>
            <p>フロントスタッフがスタッフタイムに常駐<br>※ノースタッフデーは除く</p>
        </div>
        <div class="security-grid__area">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/security_img02.png" alt=""></figure>
            <p>
                SECOMとAI自動危険検知システム（GYM DX）導入で24時間安心・万全<br>
                ・防犯カメラによる遠隔監視<br>
                ・AIによる検知<br>
                　倒れている方・動かない方・不正入館
            </p>
        </div>
    </div>
</section>

<?php /*
<section class="sec -staff">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">STAFF</span>
        <span class="sec__ttl__jp">スタッフ紹介</span>
    </h2>
    <ul class="staff-list">
        <?php
            $staff_args = array(
                'post_type' => 'staff',
                'posts_per_page' => 100,
            );
            $staff_query = new WP_Query($staff_args);
            if ($staff_query->have_posts()) :
                while ($staff_query->have_posts()) : $staff_query->the_post();
        ?>
        <li>
            <figure><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'staff-thumb', true), '240_thumbnail'); ?></figure>
            <div class="info">
                <span class="name"><?php the_field('staff-title'); ?>：<?php the_title(); ?></span>
                <span class="name_en"><?php the_field('staff-name'); ?></span>
                <dl>
                    <dt>保有資格・運動歴</dt>
                    <dd>
                        <?php the_field('staff-license'); ?>
                    </dd>
                </dl>
            </div>
            <p class="read"><?php the_field('staff-read'); ?></p>
        </li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
</section>
*/?>

<div class="sns-area">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sns_img.svg" alt="SNS投稿を応援!!">
</div>

<section class="sec --price" id="link06">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">PRICE</span>
        <span class="sec__ttl__jp">料金</span>
    </h2>
    <dl class="price-dl">
        <dt>入会金</dt>
        <dd>
            11,000円（税込）
        </dd>
    </dl>
    <dl class="price-dl">
        <dt>セキュリティ費</dt>
        <dd>
            5,500円（税込）
        </dd>
    </dl>
    <dl class="price-dl">
        <dt>月会費</dt>
        <dd>
            <span>レギュラー会員<br>7,150円（税込）</span><br>
            トレーニングジムが<br>営業時間内に利用可能
        </dd>
    </dl>
</section>

<section class="sec --flow">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">FLOW</span>
        <span class="sec__ttl__jp">ご利用の流れ</span>
    </h2>
    <div class="flow-area">
        <ol class="flow-area__ol">
            <li>まずはWeb入会</li>
            <li>来店手続き</li>
        </ol>
        <h3 class="flow-area__ttl">入会に必要なもの</h3>
        <ul class="flow-area__ul">
            <li>入会金＋月会費 2ヶ月分</li>
            <li>クレジットカード</li>
            <li>本人確認書類（運転免許証など）</li>
            <li>スマートフォン<br class="sp-show">（お持ちでない方はご相談ください）</li>
        </ul>
        <h3 class="flow-area__ttl">入会資格</h3>
        <ul class="flow-area__ul">
            <li>満18歳以上の方</li>
            <li>施設を利用いただく上で、<br class="sp-show">ご自身の安全性を確保できる方</li>
            <li>会員規約他、マナーを守れる方</li>
        </ul>
    </div>
</section>

<?php /*
<section class="sec --column">
    <h2 class="sec__ttl2">
        <span class="sec__ttl2__sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/column_readme.svg" alt="read me"></span>
        <span class="sec__ttl2__en">Column</span>
    </h2>
    <ul class="column-list">
        <?php
            $column_args = array(
                'post_type' => 'column',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 3,
            );
            $column_query = new WP_Query($column_args);
            if ($column_query->have_posts()) :
                while ($column_query->have_posts()) : $column_query->the_post();
        ?>
        <li>
            <figure class="column-list__img">
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/column_img.png" alt="">
                <?php endif; ?>
            </figure>
            <time datetime="<?php the_time('Y-m-d'); ?>" class="column-list__time"><?php the_time('Y/m/d'); ?></time>
            <h3 class="column-list__ttl"><?php the_title(); ?></h3>
            <p class="column-list__txt"><?php the_excerpt(); ?></p>
            <p class="news-more"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
        </li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
    <a href="column/" class="btn btn--greW btn--590">全ての記事を読む</a>
</section>
*/?>

<section class="sec --insta">
    <h2 class="sec__ttl2">
        <span class="sec__ttl2__sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/insta_follow.svg" alt="follow me"></span>
        <span class="sec__ttl2__en">Instagram</span>
    </h2>
    <figure class="insta-list">
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </figure>
</section>

<?php /*
<section class="sec --faq">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">FAQ</span>
        <span class="sec__ttl__jp">よくあるご質問</span>
    </h2>
    <?php
        $faq_args = array(
            'post_type' => 'faq',
            'posts_per_page' => 100,
        );
        $faq_query = new WP_Query($faq_args);
        if ($faq_query->have_posts()) :
            while ($faq_query->have_posts()) : $faq_query->the_post();
    ?>
    <details class="faq-list aco-cont">
        <summary class="faq-list__head aco-cont__head"><?php the_title(); ?></summary>
        <p class="faq-list__body aco-cont__body"><?php the_field('faq-anser'); ?></p>
    </details>
    <?php endwhile; endif;
        wp_reset_postdata();
    ?>
</section>
*/?>

<section class="sec --access" id="link07">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">ACCESS</span>
        <span class="sec__ttl__jp">アクセス</span>
    </h2>
    <dl class="access-dl">
        <dt>店舗名</dt>
        <dd>WAYX（ウェイクス）FITNESS GYM 日向店</dd>
    </dl>
    <dl class="access-dl">
        <dt>住所</dt>
        <dd>
            〒883-0021<br>
            宮崎県日向市財光寺 字沖ノ原953-1</dd>
    </dl>
    <dl class="access-dl">
        <dt>TEL</dt>
        <dd>0982-66-8021</dd>
    </dl>
    <dl class="access-dl">
        <dt>営業時間</dt>
        <dd>プレオープン＆無料開放　期間特別営業時間<br>
            平日10:00−22:00（15:00−17:00クローズ）受付21：30まで<br>
            土日10:00−18:00　受付17:30まで　※金曜日休館<br>
            <br>
            6/1グランドオープン後は下記になります<br>
            営業時間：24時間営業<br>
            スタッフタイム：平日：9:00～21:00/土日祝：9:00～18:00<br>
            ノースタッフデー：金曜日
        </dd>
    </dl>
    <dl class="access-dl">
        <dt>アクセス</dt>
        <dd>国道10号線沿いサウスタウン日向内<br>
            ホームワイド、カメラのキタムラ、ABCマート隣接</dd>
    </dl>
</section>

<div class="map-cont">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3368.4274384533483!2d131.6304653!3d32.4077067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35471594b16907a3%3A0x4fa6ae7b4ed29717!2zV0FZWCjjgqbjgqfjgqTjgq_jgrnvvIlGSVRORVNTIEdZTSDml6XlkJHlupc!5e0!3m2!1sja!2sjp!4v1743049700748!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>