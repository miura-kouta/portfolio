<?php get_header(); ?>
    <main class="c-content__inner">
        <div class="c-contentContainer">
            <section id="price">
                <div class="c-headingLv1">
                        <h1 class="c-headingLv1__main">PRICE</h1>
                        <p class="c-headingLv1__sub">料金</p>
                        <div class="price__imgWrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/price-image1.png" alt="料金を説明する人"  width="400" height="200" decoding="async">
                        </div>
                </div>
                <table class="price__tableInner">
                    <thead class="price__tableHeaders">
                            <tr class="price__tableRow">
                                <th class="price__tableHeader price__table--border price__tableLeft--widthColumn"></th>
                                <th class="price__tableHeader price__table--border price__tableRight--widthColumn">
                                    ホームページ作成費用(LP or TOPページ)
                                </th>
                            </tr>
                    </thead>
                    <tbody class="price__tableBody">
                                <tr class="price__tableRow">
                                    <th class="price__tableBodyHeader price__table--border price__tableLeft--widthColumn">
                                        コーディング
                                    </th>
                                    <td class="price__tableBodyText price__table--border price__tableRight--widthColumn">
                                        10,000円~
                                    </td>
                                </tr>
                                <tr class="price__tableRow">
                                    <th class="price__tableBodyHeader price__table--border price__tableLeft--widthColumn">デザイン</th>
                                    <td class="price__tableBodyText price__table--border price__tableRight--widthColumn">10,000円~</td>
                                </tr>
                                <tr class="price__tableRow">
                                        <th class="price__tableBodyHeader price__table--border price__tableLeft--widthColumn">コーディング ＋ デザイン</th>
                                        <td class="price__tableBodyText price__table--border price__tableRight--widthColumn">20,000円~</td>
                                </tr>
                    </tbody>
                </table>
                <table class="price__tableInner">
                    <thead class="price__tableHeaders">
                            <tr class="price__tableRow">
                                <th class="price__tableHeader price__table--border price__tableLeft--widthColumn"></th>
                                <th class="price__tableHeader price__table--border price__tableRight--widthColumn">
                                    オプション費用
                                </th>
                            </tr>
                    </thead>
                    <tbody class="price__tableBody">
                                <tr class="price__tableRow">
                                    <th class="price__tableBodyHeader price__table--border price__tableLeft--widthColumn">下層ページ（1ページ毎）</th>
                                    <td class="price__tableBodyText price__table--border price__tableRight--widthColumn">5,000円~</td>
                                </tr>
                                <tr class="price__tableRow">
                                        <th class="price__tableBodyHeader price__table--border price__tableLeft--widthColumn">WordPress化</th>
                                        <td class="price__tableBodyText price__table--border price__tableRight--widthColumn">10,000円~</td>
                                </tr>
                    </tbody>
                </table>
                <div class="price__cautionContainer">
                    <div class="price__cautionWrap">
                        <h2 class="price__cautionTitle">
                            ※【費用について】
                        </h2>
                        <p class="price__cautionText">
                            ●当ホームページに掲載している費用はあくまでも目安となります。実際の費用は、お客様のご依頼内容やご要望に応じて変動する可能性がございます。詳細な見積もりについては、お気軽にお問い合わせください。
                        </p>
                    </div>
                    <div class="price__cautionWrap">
                        <h2 class="price__cautionTitle">
                            ※【修正について】
                        </h2>
                        <p class="price__cautionText">
                            ●当方の不備による修正
                            ・回数に関係なく無料で対応いたします。お客様にご迷惑をおかけしないよう、誠意をもって迅速に対応いたします。<br>
                            ●検収後（納品完了後）の修正対応について
                            ・1ヶ月以内に限り、3回まで無料で対応いたします。1ヶ月を過ぎた修正や4回目以降の修正に関しては、別途料金が発生いたしますので、予めご了承ください。<br>
                            ●お客様のご要望による修正（デザインや仕様変更など）
                            ・追加料金が発生する場合がございますので、予めご了承ください。
                        </p>
                    </div>
                </div>


            </section>
            <section id="inquiry" >    
                    <div class="inquiry__inner">
                        <div class="c-headingLv2">
                            <h2 class="c-headingLv2__main">CONTACT</h2>
                            <p class="c-headingLv2__sub">お問い合わせ</p>
                        </div>
                        <!-- /.c-headingLv2 -->
                        <div class="inquiry__wrap fade-in">
                            <p class="inquiry__text ">    
                                Web制作に関するご相談、お見積もり依頼など、お気軽にお問い合わせください。
                            </p>
                            <a href="<?php echo home_url('/contact'); ?>" class="inquiry__linkBtn">
                                <div class="inquiry__itemBtn">
                                    <div class="inquiry__textBtn">
                                        CONTACT
                                    </div>
                                    <!-- /.inquiry__textBtn -->
                                </div>
                                <!-- /.inquiry__itemBtn -->
                            </a>
                        </div>
                        <!-- /.inquiry__wrap -->
                    </div>
                    <!-- /.inquiry__inner" -->
            </section>
        </div>
        <!-- /.c-contentContainer -->
</main>
<?php get_footer(); ?>