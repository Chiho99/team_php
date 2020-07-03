<?php
// include_once("../togawa/DB/DAO.php");

// DAOのインスタンスを生成
// $dao = new DAO();

// FindAllメソッドを使用してテーブルのすべてのレコードを取得
// $records = array("title", "title", "title", "title", "title", "title");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/035034ff28.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header_upper">
            <div class="header_upper_left">
                <span><img src="../../img/prtimeslogo.png" alt="prtimes_logo"></span>
                <span>プレートリリース・ニュースリリース配信サービスのPR TIMES</span>
            </div>
            <div class="header_upper_right">
                <!-- <ul>
                    <li>プレリリースを配信</li>
                    <li>配信を依頼</li>
                    <li>ログイン</li>
                </ul> -->
            </div>
        </div>
        <div class="header_bottom">
            <ul>
                <li><a href="https://prtimes.jp/">Top</a></li>|
                <li><a href="https://prtimes.jp/technology/">テクノロジー</a></li>|
                <li><a href="https://prtimes.jp/mobile/">モバイル</a></li>|
                <li><a href="https://prtimes.jp/app/">アプリ</a></li>|
                <li><a href="https://prtimes.jp/entertainment/">エンタメ</a></li>|
                <li><a href="https://prtimes.jp/beauty/">ビューティー</a></li>|
                <li><a href="https://prtimes.jp/fashion/">ファッション</a></li>|
                <li><a href="https://prtimes.jp/lifestyle/">ライフスタイル</a></li>|
                <li><a href="https://prtimes.jp/business/">ビジネス</a></li>|
                <li><a href="https://prtimes.jp/gourmet/">グルメ</a></li>|
                <li><a href="https://prtimes.jp/sports/">スポーツ</a></li>|
            </ul>
        </div>
        </div>
    </header>
    <main>
        <div class="main_left">
            PVランキング一覧<hr>
            <ul class="pv_ranking">
                <!-- ここにPVランキングデータを反映 -->
              <?php for($a = 0;$a < 30;$a++) { ?>
                <li></li><hr class="pv_bar">
              <?php } ?>

              <!-- CSS用仮データ -->
                <li>
                    <img src="https://prtimes.jp/i/21601/30/resize/d21601-30-496399-0.png"><br>
                    <span>在庫速報.com、子供用・女性用の「小さめマスク」の商品検索に対応</span><br>
                </li><hr>
                <li>
                    <img src="https://prtimes.jp/i/18230/24/resize/d18230-24-709383-2.png"><br>
                    <span>コロナ禍に直面する業者のフードロスや食品ロス削減を支援、「買って応援、食べて応援」できる通販マーケットプレイス「Wakeari（ワケアリ）」がクレジットカード決済機能を追加</span><br>
                </li><hr>
                <li>
                    <img src="https://prtimes.jp/i/18230/23/resize/d18230-23-199878-0.png"><br>
                    <span>マスク1枚の最安値が17円」とさらに下落、「マスク通販最安値.com」のマスク価格定点観測（5月22日時点</span><br>
                </li><hr>
                <li>
                    <img src="https://prtimes.jp/i/30268/259/resize/d30268-259-358451-5.jpg"><br>
                    <span>推しの香りがあなたのそばに⁉ 「ホロライブ」所属タレントをイメージした、100％天然精油配合のマスク用アロマスプレー『HOLO AROMA!』の発売決定！</span><br>
                </li><hr> -->

              <!-- もっと見るボタンをランキングリスト一番下のデータの次のリスト -->
                <li class="load_more">
                    <button class="load_more_btn">もっと見る</button>
                </li>
            </ul>

        </div>
        <div class="main_right">
            <!-- 検索ボタン -->
            <i class="fas fa-search"></i>検索<br>
            <input value="キーワードで検索"><button><i class="fas fa-search"></i></button>
                <!-- pv categoryのリスト -->
                <div class="pv_category">
                    <ol>
                        <li>パソコン・周辺機器</li>
                        <li>パソコンソフトウェア</li>
                        <li>プロバイダ・回線接続</li>
                        <li>ネットサービス</li>
                        <li>スマートフォンアプリ</li>
                        <li>サーバ・周辺機器</li>
                        <li>ネットワーク・ネットワーク機器</li>
                        <li>アプリケーション・セキュリティ</li>
                        <li>システム・Webサイト・アプリ開発</li>
                        <li>百貨店・スーパー・コンビニ・ストア</li>
                        <li>EC・通販</li>
                        <li>卸売・問屋</li>
                        <li>芸能</li>
                        <li>映画・演劇・DVD</li>
                        <li>音楽</li>
                        <li>テレビ・CM</li>
                        <li>スポーツ</li>
                        <li>アウトドア・登山</li>
                        <li>雑誌・本・出版物</li>
                        <li>漫画・アニメ</li>
                        <li>アート・カルチャー</li>
                        <li>コンシューマーゲーム</li>
                        <li>スマートフォンゲーム</li>
                        <li>アーケードゲーム</li>
                        <li>おもちゃ・遊具・人形</li>
                        <li>モバイル端末</li>
                        <li>カメラ</li>
                        <li>AV機器</li>
                        <li>調理・生活家電</li>
                        <li>健康・美容家電</li>
                        <li>インテリア・家具・収納</li>
                        <li>日用品・生活雑貨</li>
                        <li>ガーデン・DIY</li>
                        <li>自動車・カー用品</li>
                        <li>バイク・バイク用品</li>
                        <li>レディースファッション</li>
                        <li>メンズファッション</li>
                        <li>シューズ・バッグ</li>
                        <li>ジュエリー・アクセサリー</li>
                        <li>キッズ・ベビー・マタニティ</li>
                        <li>食品・お菓子</li>
                        <li>ソフトドリンク・アルコール飲料</li>
                        <li>レストラン・ファストフード・居酒屋</li>
                        <li>中食・宅配</li>
                        <li>スキンケア・化粧品・ヘア用品</li>
                        <li>ダイエット・健康食品・サプリメント</li>
                        <li>医療・病院</li>
                        <li>医薬・製薬</li>
                        <li>福祉・介護・リハビリ</li>
                        <li>経営・コンサルティング</li>
                        <li>シンクタンク</li>
                        <li>財務・経理</li>
                        <li>法務。特許。知的財産</li>
                        <li>銀行・信用金庫・信用組合</li>
                        <li>クレジットカード・ローン</li>
                        <li>証券・FX・投資信託</li>
                        <li>生命保険・損害保険</li>
                        <li>広告・宣伝・PR</li>
                        <li>マーケティング・リサーチ</li>
                        <li>セールス・営業</li>
                        <li>就職・転職。人材派遣・アルバイト</li>
                        <li>資格・留学・語学</li>
                        <li>学校・大学</li>
                        <li>学習塾・予備校・通信教育</li>
                        <li>保育・幼児教育</li>
                        <li>ホテル・旅館</li>
                        <li>旅行・観光</li>
                        <li>テーマパーク・遊園地</li>
                        <li>住宅・マンション</li>
                        <li>商業施設・オフィスビル</li>
                        <li>建築・空間デザイン</li>
                        <li>建設・土木</li>
                        <li>鉄鋼・金属・ガラス・土石・ゴム</li>
                        <li>化学</li>
                        <li>電気・ガス・資源・エネルギー</li>
                        <li>交通・運送・引越し</li>
                        <li>物流・倉庫・貨物</li>
                        <li>自然・天気</li>
                        <li>環境・エコ・リサイクル</li>
                        <li>ペット・ペット用品</li>
                        <li>ギフト・花</li>
                        <li>恋愛・結構</li>
                        <li>出産・育児</li>
                        <li>葬儀</li>
                        <li>政治。官公庁・地方自治体</li>
                        <li>財団法人・社団法人・宗教法人</li>
                        <li>ボランティア</li>
                        <li>国際情報・国際サービス</li>
                        <li>農林・水産</li>
                        <li>その他</li>
                        <li>フィットネス・ヘルスケア</li>
                        <li>電子部品・半導体・電気機器</li>
                    </ol>
                </div>
        </div>
    </main>
    <!-- フッター -->
    <footer>
        <div class="footer_upper">
            <ul class="footer_news">
                <li><h2>ニュース配信サービス</h2></li>
                <li>PR TIMESとは</li>
                <li>料金・プラン</li>
                <li>プレリリースを受信したい方へ</li>
                <li>プレリリースを配信したい方へ</li>
                <li>ものしりプロジェクト</li>
                <li>ログイン</li>
            </ul>
            <ul class="footer_recommend">
                <li><h2>レコメンドサービス</h2></li>
                <li>PR TIMES STORY</li>
                <li>無料FAQならTayori</li>
                <li>無料メールならTayori</li>
                <li>タスク・プロジェクト管理ツールのJoto</li>
                <li>PR TIMES TV</li>
                <li>PR TIMES LIVE</li>
                <li>PR TIMES MAGAZINE</li>
            </ul>
            <ul class="footer_recommend_wrap">
                    <li><h2><br></h2></li>
                    <li>クリッピング</li>
                    <li>広告ならAdGang</li>
                    <li>無料占い・今週の運勢ならisuta</li>
                    <li>無料恋愛占いisuta</li>
            </ul>
            <ul class="footer_sns">
                <li><h2>PR TIMES公式SNS</h2></li>
                <li>公式Facebookページ</li>
                <li>Facebookカテゴリ
                <select name="" id="">
                    <!-- 実装するならモーダル -->
                    <!-- <option value="PR TIMES TV">PR TIMES TV</option>
                    <option value="テクノロジー">テクノロジー</option>
                    <option value="アプリケーション">アプリケーション</option>
                    <option value="スタートアップ">スタートアップ</option>
                    <option value="エンタメ">エンタメ</option>
                    <option value="ビューティ">ビューティー</option>
                    <option value="ファッション">ファッション</option>
                    <option value="ライフスタイル">ライフスタイル</option>
                    <option value="トラベル">トラベル</option>
                    <option value="グルメ">グルメ</option>
                    <option value="ゲーム">ゲーム</option>
                    <option value="スポーツ">スポーツ</option>
                    <option value="ビデオ">ビデオ</option>
                    <option value="ビジネス">ビジネス</option>
                    <option value="マーケティング">マーケティング</option> -->
                </select></li><hr>
                <li>公式Twitterページ</li>
                <li>Twitterカテゴリ
                <select name="" id="">
                    <!-- 実装するならモーダル -->
                    <!-- <option value="PR TIMES TV">PR TIMES TV</option>
                    <option value="ニュース">ニュース</option>
                    <option value="テクノロジー">テクノロジー</option>
                    <option value="アプリケーション">アプリケーション</option>
                    <option value="スタートアップ">スタートアップ</option>
                    <option value="エンタメ">エンタメ</option>
                    <option value="ビューティ">ビューティ</option>
                    <option value="ファッション">ファッション</option>
                    <option value="ライフスタイル">ライフスタイル</option>
                    <option value="トラベル">トラベル</option>
                    <option value="グルメ">グルメ</option>
                    <option value="ゲーム">ゲーム</option>
                    <option value="スポーツ">スポーツ</option>
                    <option value="ビデオ">ビデオ</option>
                    <option value="ビジネス">ビジネス</option>
                    <option value="マーケティング">マーケティング</option> -->
                </select></li><hr>
            </ul>
        </div><hr>
        <div class="footer_bottom">
            <ul class="footer_bottom1">
                <li>会社概要</li>
                <li>プライバシーポリシー</li>
                <li>情報セキュリティ</li>
                <li>プレリリース掲載基準</li>
                <li>利用規約</li>
            </ul>
            <ul class="footer_bottom2">
                <li>企業様のお問い合わせ</li>
                <li>報道関係者様からのお問い合わせ</li>
                <li>一般の皆様からのお問い合わせ</li>
            </ul>
            <span>Copyright&copy; PR TIMES Inc. All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>
