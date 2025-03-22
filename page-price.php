<?php get_header(); ?>
<main class="u-contentInner">
    <div class="u-contentContainer">
        <section id="price" class="price">
            <div class="u-headingLv1Wrap">
                <h1 class="u-headingLv1__en">PRICE</h1>
                <p class="u-headingLv1__ja">料金</p>
                <div class="price__imgWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/price1.webp" alt="料金を説明する人" width="400" height="200" decoding="async">
                </div>
            </div>
            <div class="price__tableContainer">
                <table class="price__table">

                    <thead class="price__tableHeaders">
                        <tr class="price__tableRow">
                            <th class="price__tableHeader " colspan="2">
                                ホームページ作成費用
                            </th>
                        </tr>
                    </thead>
                    <tbody class="price__tableBody">
                        <tr class="price__tableRow">
                            <th class="price__tableBodyHeader  ">
                                コーディング
                            </th>
                            <td class="price__tableBodyText">
                                10,000円~
                            </td>
                        </tr>
                        <tr class="price__tableRow">
                            <th class="price__tableBodyHeader  ">デザイン</th>
                            <td class="price__tableBodyText  ">10,000円~</td>

                        </tr>
                    </tbody>
                </table>
                <table class="price__table">
                    <thead class="price__tableHeaders">
                        <tr class="price__tableRow">
                            <th class="price__tableHeader  " colspan="2">
                                オプション費用
                            </th>
                        </tr>
                    </thead>
                    <tbody class="price__tableBody">
                        <tr class="price__tableRow">
                            <th class="price__tableBodyHeader ">下層ページ<br>（1ページ毎）</th>
                            <td class="price__tableBodyText ">10,000円~</td>
                        </tr>
                        <tr class="price__tableRow">
                            <th class="price__tableBodyHeader">WordPress化</th>
                            <td class="price__tableBodyText  ">50,000円~</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.price__tableContainer -->

            <div class="price__cautionWrap">
                <h4 class="price__cautionTitle u-headingLv4">
                    ※【費用について】
                </h4>
                <p class="price__cautionText">
                    ●当ホームページに掲載している費用はあくまでも目安となります。実際の費用は、お客様のご依頼内容やご要望に応じて変動する可能性がございます。詳細な見積もりについては、お気軽にお問い合わせください。
                </p>
            </div>
            <!-- /.price__cautionWrap -->
            <div class="price__cautionWrap">
                <h2 class="price__cautionTitle u-headingLv4">
                    ※【修正について】
                </h2>
                <p class="price__cautionText">
                    ●当方の不備による修正
                    ・回数に関係なく無料で対応いたします。お客様にご迷惑をおかけしないよう、誠意をもって迅速に対応いたします。<br>
                    ●検収後（納品完了後）の修正対応について
                    ・1ヶ月以内に限り、3回まで無料で対応いたします。1ヶ月を過ぎた修正や4回目以降の修正に関しては、別途料金が発生いたしますので、予めご了承ください。<br>
                    ●お客様のご要望による修正（デザインや仕様変更など）
                    は追加料金が発生する場合がございますので、予めご了承ください。
                </p>
            </div>
            <!-- /.price__cautionWrap -->

        </section>
        <?php get_template_part('components/inquiry'); ?>
    </div>
    <!-- /.u-contentContainer -->
</main>
<?php get_footer(); ?>