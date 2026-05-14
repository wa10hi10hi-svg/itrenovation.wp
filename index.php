<?php get_header(); ?>

    <main>
        <div class="main-visual">
            <div class="main-visual-inner">
                <div class="main-text">
                    <p>住みたい、が続く</p>
                    <p>リノベーション</p>
                </div>
                <ul class="fade">
                    <li class="fade-item">
                        <img class="pc" src="<?php echo esc_url( get_template_directory_uri() . '/img/main01.jpg' ); ?>" alt="メインビジュアル">
                        <img class="sp" src="<?php echo esc_url( get_template_directory_uri() . '/img/main_sp01.jpg' ); ?>" alt="メインビジュアル">
                    </li>
                    <li class="fade-item">
                        <img class="pc" src="<?php echo esc_url( get_template_directory_uri() . '/img/main_visual02.jpg' ); ?>" alt="メインビジュアル">
                        <img class="sp" src="<?php echo esc_url( get_template_directory_uri() . '/img/main_sp02.jpg' ); ?>" alt="メインビジュアル">
                    </li>
                    <li class="fade-item">
                        <img class="pc" src="<?php echo esc_url( get_template_directory_uri() . '/img/main_visual03.jpg' ); ?>" alt="メインビジュアル">
                        <img class="sp" src="<?php echo esc_url( get_template_directory_uri() . '/img/main_sp03.jpg' ); ?>" alt="メインビジュアル">
                    </li>
                    <li class="fade-item">
                        <img class="pc" src="<?php echo esc_url( get_template_directory_uri() . '/img/main_visual04.jpg' ); ?>" alt="メインビジュアル">
                        <img class="sp" src="<?php echo esc_url( get_template_directory_uri() . '/img/main_sp04.png' ); ?>" alt="メインビジュアル">
                    </li>
                </ul>
                <div class="floating-buttons">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="circle-btn free-consul">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/free-consul.png' ); ?>" alt="無料相談">
                        <p>無料相談</p>
                    </a>
                    <a href="<?php echo esc_url( home_url() ); ?>" class="circle-btn material">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/material.png' ); ?>" alt="資料ダウンロード">
                        <p>資料<br>ダウンロード</p>
                    </a>
                </div>
            </div>
        </div>


        <section id="about" class="wrapper">
            <div class="about-text">
                <div class="about-top-text fadeUpTrigger">
                    <p>家づくりが、もっと<br>
                    "わくわく"<br>
                    するものであってほしい</p>
                </div>
                <div class="about-sub-text fadeUpTrigger">
                <p>「あんなキッチンがあったらいいな」<br>
                「ランドリールームがあったら暮らしやすそう」
                </p>
                <p>想像しているときは楽しいのに、<br>
                    いざ家づくりが始まると<br>
                    予算や素材、動線、家族の意見…。
                </p>
                <p>考えることが多くて大変。</p>
                <p>だからまず、<br>あなたとご家族の「理想の暮らし」を聞かせてください。</p>
                <p>限られた条件の中で、<br>最大限その想いを叶える提案をしたい。</p>
                <p>それが私たちの考えるリノベーションです。</p>
                </div>
            </div>
            <div class="about-photo fadeUpTrigger">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about.jpg' ); ?>" alt="">
            </div>
    </section>


    <section id="gallery" class="wrapper">
        <h2 class="section-title">
            <span class="en">GALLERY</span>
            <span class="ja">施工事例</span>
        </h2>

        <div class="grid-gallery">
            <div class="gallery-item fadeUpTrigger">
                <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">
                    <p class="case">case01</p>
                    <h3 class="gallery-title">回遊キッチンで、家事が整う家</h3>
                    <div class="gallery-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/gallery01.jpg' ); ?>" alt="施工事例01">
                    </div>
                    <dl class="gallery-info">
                        <dt><span></span>面積</dt>
                        <dd>68㎡</dd>
                        <dt><span></span>費用</dt>
                        <dd>約1,250万円</dd>
                        <dt><span></span>間取り</dt>
                        <dd>2LDK＋WIC＋パントリー</dd>
                    </dl>
                </a>
            </div>
            <div class="gallery-item fadeUpTrigger">
                <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">
                    <p class="case">case02</p>
                    <h3 class="gallery-title">家族の声が聞こえる家</h3>
                    <div class="gallery-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/gallery02.jpg' ); ?>" alt="施工事例02">
                    </div>
                    <dl class="gallery-info">
                        <dt><span></span>面積</dt>
                        <dd>72㎡</dd>
                        <dt><span></span>費用</dt>
                        <dd>約1,320万円</dd>
                        <dt><span></span>間取り</dt>
                        <dd>2LDK</dd>
                    </dl>
                </a>
            </div>
            <div class="gallery-item fadeUpTrigger">
                <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">
                    <p class="case">case03</p>
                    <h3 class="gallery-title">ホテルライクなモダンな家</h3>
                    <div class="gallery-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/gallery03.jpg' ); ?>" class="施工事例03"/>
                    </div>
                    <dl class="gallery-info">
                        <dt><span></span>面積</dt>
                        <dd>75㎡</dd>
                        <dt><span></span>費用</dt>
                        <dd>約1,400万円</dd>
                        <dt><span></span>間取り</dt>
                        <dd>1LDK + WIC</dd>
                    </dl>
                </a>
            </div>
            <div class="gallery-item fadeUpTrigger">
                <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">
                    <p class="case">case04</p>
                    <h3 class="gallery-title">素材を楽しむシンプルな暮らし</h3>
                    <div class="gallery-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/gallery04.jpg' ); ?>" class="施工事例04"/>
                    </div>
                    <dl class="gallery-info">
                        <dt><span></span>面積</dt>
                        <dd>65㎡</dd>
                        <dt><span></span>費用</dt>
                        <dd>約1,180万円</dd>
                        <dt><span></span>間取り</dt>
                        <dd>2LDK+ワークスペース</dd>
                    </dl>
                </a>
            </div>
            <div class="gallery-item fadeUpTrigger">
                <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">
                    <p class="case">case05</p>
                    <h3 class="gallery-title">キッチンが主役の部分リノベ</h3>
                    <div class="gallery-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/gallery05.jpg' ); ?>" class="施工事例05"/>
                    </div>
                    <dl class="gallery-info">
                        <dt><span></span>面積</dt>
                        <dd>60㎡</dd>
                        <dt><span></span>費用</dt>
                        <dd>約320万円</dd>
                        <dt><span></span>間取り</dt>
                        <dd>2LDK（変更なし）</dd>
                    </dl>
                </a>
            </div>
            <div class="gallery-item fadeUpTrigger">
                <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">
                    <p class="case">case06</p>
                    <h3 class="gallery-title">ゆったり使える洗面リノベ</h3>
                    <div class="gallery-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/gallery06.jpg' ); ?>" class="施工事例06"/>
                    </div>
                    <dl class="gallery-info">
                        <dt><span></span>面積</dt>
                        <dd>68㎡</dd>
                        <dt><span></span>費用</dt>
                        <dd>約85万円</dd>
                        <dt><span></span>間取り</dt>
                        <dd>3LDK（変更なし）</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class="view-more">
            <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">view more
                <span class="arrow">
                    <svg width="40" height="12" viewBox="0 0 40 12" fill="none">
                        <path d="M0 6 H36" stroke="#333" stroke-width="1"/>
                        <path d="M30 1 L38 6 L30 11" stroke="#333" stroke-width="1" fill="none"/>
                    </svg>
                </span>
            </a>
        </div>
    </section>


    <section id="home-service" class="wrapper">
        <h2 class="section-title">
            <span class="en">SERVICE</span>
            <span class="ja">できること</span>
        </h2>
        <div class="home-service-list">
            <a href="<?php echo esc_url( home_url('/service') ); ?>" class="home-service-card">
                <div class="home-service-icons">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/service01.png' ); ?>" class="物件購入"/>
                    ＋
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/service02.png' ); ?>" class="リノベーション"/>
                </div>
                <span>物件購入＋リノベ</span>
            </a>
            <a href="<?php echo esc_url( home_url('/service') ); ?>" class="home-service-card">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/service01.png' ); ?>" class="リノベーション"/>
                <br><span>フルリノベーション</span>
            </a>
            <a href="<?php echo esc_url( home_url('/service') ); ?>" class="home-service-card">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/service03.png' ); ?>" class="部分リノベーション"/>
                <br><span>部分リノベーション</span>
            </a>
        </div>
    </section>


    <section id="flow">
        <div class="flow-inner">
        <h2 class="section-title wrapper">
            <span class="en">FLOW</span>
            <span class="ja">ながれ</span>
        </h2>

        <div class="flow-box">
        <!-- PC用の期間ライン -->
            <div class="flow-time pc-time">
                <div class="time-group time-left">
                    <span class="dot start"></span>
                    <span class="label">1〜1.5ヶ月</span>
                </div>
                <div class="time-group time-center">
                    <span class="dot start"></span>
                    <span class="label">1〜2ヶ月</span>
                </div>
                <div class="time-group time-right">
                    <span class="dot start"></span>
                    <span class="label">2〜3ヶ月</span>
                    <span class="dot end"></span>
                </div>
            </div>

            <div class="flow-bar"></div>

            <!-- SP / タブレット用 -->
            <div class="flow-sp-line">
                <span class="dot dot-st"></span>
                <span class="dot dot-second"></span>
                <span class="dot dot-third"></span>
                <span class="dot dot-end"></span>
            </div>

            <ol class="flow-steps">
                <li class="step">
                    <span class="flow-num">1</span>
                    <p>無料相談</p>
                    <div class="term">1〜1.5ヶ月</div>
                </li>
                <li class="step">
                    <span class="flow-num">2</span>
                    <p>初回打合せ</p>
                </li>
                <li class="step step-has-term">
                    <span class="flow-num">3</span>
                    <p>プラン提案・見積り</p>
                </li>
                <li class="step">
                    <span class="flow-num">4</span>
                    <p>お申込み</p>
                    <div class="term">1〜2ヶ月</div>
                </li>
                <li class="step step-has-term">
                    <span class="flow-num">5</span>
                    <p>リノベーション設計</p>
                </li>
                <li class="step">
                    <span class="flow-num">6</span>
                    <p>リノベーション工事</p>
                    <div class="term">2〜3ヶ月</div>
                </li>
                <li class="step step-has-term">
                    <span class="flow-num">7</span>
                    <p>検査・お引渡し</p>
                </li>
                <li class="step">
                    <span class="flow-num">8</span>
                    <p>アフターサポート</p>
                </li>
            </ol>
        </div>
        </div>
    </section>


    <section id="column" class="wrapper">
        <h2 class="section-title">
            <span class="en">COLUMN</span>
            <span class="ja">よみもの</span>
        </h2>

        <ul class="column-list">
            <li class="column-item">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/column01.jpg' ); ?>" class="白い壁の広いリビングにダイニングテーブルと椅子とキッチン"/>
                    <p>中古マンションリノベーションの注意点総まとめ！一級建築士が教える気を付けるポイント</p>
                </a>
            </li>
            <li class="column-item">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/column02.jpg' ); ?>" class="テーブルの上に紫のチューリップと水差し"/>
                    <p>【中古リノベ vs 新築購入】<br>10年後も後悔しない家えらび。あなたのライフスタイルに合うのはどっち？</p>
                </a>
            </li>
            <li class="column-item">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/column03.jpg' ); ?>" class="白い壁のモダンな玄関に黒い扉"/>
                    <p>やってよかった！もっとこうすればよかった。住んでみてわかったリノべの成功点と改善点</p>
                </a>
            </li>
        </ul>
    </section>


    <div class="slider-content">
        <ul class="slider">
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide01.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide02.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide03.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide04.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide05.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide06.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide07.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide08.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide09.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide10.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide01.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide02.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide03.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide04.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide05.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide06.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide07.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide08.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide09.jpg' ); ?>" class=""/></li>
            <li class="slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/slide10.jpg' ); ?>" class=""/></li>
        </ul>
    </div>


    <div class="consultation-btn">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><span>無料相談してみる</span></a>
    </div>

</main>

<?php get_footer(); ?>