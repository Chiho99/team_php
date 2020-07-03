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
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="main.js"></script>
    <title>PV ranking</title>
</head>
<body>
    <header>
        <div class="header_upper">
            <div class="header_upper_left">
                <span><img src="../../img/prtimeslogo.png" alt="prtimes_logo"></span>
                <span>プレースリリース・ニュースリリース配信サービスのPR TIMES</span>
            </div>
            <div class="header_upper_right">
                <ul class="header_upper_list">
                    <li><a href="#">プレリリースを配信</a></li>
                    <li><a href="#">配信を依頼</a></li>
                    <li><a href="#">ログイン<i class="fas fa-search"></i></a></li>
                </ul>
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
            <h2>PVランキング一覧</h2><hr>
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
                </li><hr>

              <!-- もっと見るボタンをランキングリスト一番下のデータの次のリスト -->
                <li class="load_more">
                    <button class="load_more_btn">もっと見る</button>
                </li>
            </ul>

        </div>
        <div class="main_right">
            <!-- 検索ボタン -->
            <i class="fas fa-search"></i>検索<br>
            <input value="キーワードで検索" class="search" placeholder="">
            <button><i class="fas fa-search"></i></button><hr>
                <!-- pv categoryのリスト -->
                <div class="pv_category">
                    <ol class="category_order">
                        <li><a href="xpage1.php?cat=3&lim=1">パソコン・周辺機器</a></li>
                        <li><a href="xpage1.php?cat=3&lim=2">パソコンソフトウェア</a></li>
                        <li><a href="xpage1.php?cat=3&lim=3">プロバイダ・回線接続</a></li>
                        <li><a href="xpage1.php?cat=3&lim=4">ネットサービス</a></li>
                        <li><a href="xpage1.php?cat=3&lim=5">スマートフォンアプリ</a></li>
                        <li><a href="xpage1.php?cat=3&lim=6">サーバ・周辺機器</a></li>
                        <li><a href="xpage1.php?cat=3&lim=7">ネットワーク・ネットワーク機器</a></li>
                        <li><a href="xpage1.php?cat=3&lim=8">アプリケーション・セキュリティ</a></li>
                        <li><a href="xpage1.php?cat=3&lim=9">システム・Webサイト・アプリ開発</a></li>
                        <li><a href="xpage1.php?cat=3&lim=10">百貨店・スーパー・コンビニ・ストア</a></li>
                        <li><a href="xpage1.php?cat=3&lim=11">EC・通販</a></li>
                        <li><a href="xpage1.php?cat=3&lim=12">卸売・問屋</a></li>
                        <li><a href="xpage1.php?cat=3&lim=13">芸能</a></li>
                        <li><a href="xpage1.php?cat=3&lim=14">映画・演劇・DVD</a></li>
                        <li><a href="xpage1.php?cat=3&lim=15">音楽</a></li>
                        <li><a href="xpage1.php?cat=3&lim=16">テレビ・CM</a></li>
                        <li><a href="xpage1.php?cat=3&lim=17">スポーツ</a></li>
                        <li><a href="xpage1.php?cat=3&lim=18">アウトドア・登山</a></li>
                        <li><a href="xpage1.php?cat=3&lim=19">雑誌・本・出版物</a></li>
                        <li><a href="xpage1.php?cat=3&lim=20">漫画・アニメ</a></li>
                        <li><a href="xpage1.php?cat=3&lim=21">アート・カルチャー</a></li>
                        <li><a href="xpage1.php?cat=3&lim=22">コンシューマーゲーム</a></li>
                        <li><a href="xpage1.php?cat=3&lim=23">スマートフォンゲーム</a></li>
                        <li><a href="xpage1.php?cat=3&lim=24">アーケードゲーム</a></li>
                        <li><a href="xpage1.php?cat=3&lim=25">おもちゃ・遊具・人形</a></li>
                        <li><a href="xpage1.php?cat=3&lim=26">モバイル端末</a></li>
                        <li><a href="xpage1.php?cat=3&lim=27">カメラ</a></li>
                        <li><a href="xpage1.php?cat=3&lim=28">AV機器</a></li>
                        <li><a href="xpage1.php?cat=3&lim=29">調理・生活家電</a></li>
                        <li><a href="xpage1.php?cat=3&lim=30">健康・美容家電</a></li>
                        <li><a href="xpage1.php?cat=3&lim=31">インテリア・家具・収納</a></li>
                        <li><a href="xpage1.php?cat=3&lim=32">日用品・生活雑貨</a></li>
                        <li><a href="xpage1.php?cat=3&lim=33">ガーデン・DIY</a></li>
                        <li><a href="xpage1.php?cat=3&lim=34">自動車・カー用品</a></li>
                        <li><a href="xpage1.php?cat=3&lim=35">バイク・バイク用品</a></li>
                        <li><a href="xpage1.php?cat=3&lim=36">レディースファッション</a></li>
                        <li><a href="xpage1.php?cat=3&lim=37">メンズファッション</a></li>
                        <li><a href="xpage1.php?cat=3&lim=38">シューズ・バッグ</a></li>
                        <li><a href="xpage1.php?cat=3&lim=39">ジュエリー・アクセサリー</a></li>
                        <li><a href="xpage1.php?cat=3&lim=40">キッズ・ベビー・マタニティ</a></li>
                        <li><a href="xpage1.php?cat=3&lim=41">食品・お菓子</a></li>
                        <li><a href="xpage1.php?cat=3&lim=42">ソフトドリンク・アルコール飲料</a></li>
                        <li><a href="xpage1.php?cat=3&lim=43">レストラン・ファストフード・居酒屋</a></li>
                        <li><a href="xpage1.php?cat=3&lim=44">中食・宅配</a></li>
                        <li><a href="xpage1.php?cat=3&lim=45">スキンケア・化粧品・ヘア用品</a></li>
                        <li><a href="xpage1.php?cat=3&lim=46">ダイエット・健康食品・サプリメント</a></li>
                        <li><a href="xpage1.php?cat=3&lim=47">医療・病院</a></li>
                        <li><a href="xpage1.php?cat=3&lim=48">医薬・製薬</a></li>
                        <li><a href="xpage1.php?cat=3&lim=49">福祉・介護・リハビリ</li>
                        <li><a href="xpage1.php?cat=3&lim=50">経営・コンサルティング</a></li>
                        <li><a href="xpage1.php?cat=3&lim=51">シンクタンク</a></li>
                        <li><a href="xpage1.php?cat=3&lim=52">財務・経理</a></li>
                        <li><a href="xpage1.php?cat=3&lim=53">法務。特許。知的財産</a></li>
                        <li><a href="xpage1.php?cat=3&lim=54">銀行・信用金庫・信用組合</a></li>
                        <li><a href="xpage1.php?cat=3&lim=55">クレジットカード・ローン</a></li>
                        <li><a href="xpage1.php?cat=3&lim=56">証券・FX・投資信託</a></li>
                        <li><a href="xpage1.php?cat=3&lim=57">生命保険・損害保険</a></li>
                        <li><a href="xpage1.php?cat=3&lim=58">広告・宣伝・PR</a></li>
                        <li><a href="xpage1.php?cat=3&lim=59">マーケティング・リサーチ</a></li>
                        <li><a href="xpage1.php?cat=3&lim=60">セールス・営業</a></li>
                        <li><a href="xpage1.php?cat=3&lim=61">就職・転職。人材派遣・アルバイト</a></li>
                        <li><a href="xpage1.php?cat=3&lim=62">資格・留学・語学<</a>/li>
                        <li><a href="xpage1.php?cat=3&lim=63">学校・大学</a></li>
                        <li><a href="xpage1.php?cat=3&lim=64">学習塾・予備校・通信教育</a></li>
                        <li><a href="xpage1.php?cat=3&lim=65">保育・幼児教育</a></li>
                        <li><a href="xpage1.php?cat=3&lim=66">ホテル・旅館</a></li>
                        <li><a href="xpage1.php?cat=3&lim=67">旅行・観光</a></li>
                        <li><a href="xpage1.php?cat=3&lim=68">テーマパーク・遊園地</a></li>
                        <li><a href="xpage1.php?cat=3&lim=69">住宅・マンション</a></li>
                        <li><a href="xpage1.php?cat=3&lim=70">商業施設・オフィスビル</a></li>
                        <li><a href="xpage1.php?cat=3&lim=71">建築・空間デザイン</a></li>
                        <li><a href="xpage1.php?cat=3&lim=72">建設・土木</a></li>
                        <li><a href="xpage1.php?cat=3&lim=73">鉄鋼・金属・ガラス・土石・ゴム</a></li>
                        <li><a href="xpage1.php?cat=3&lim=74">化学</a></li>
                        <li><a href="xpage1.php?cat=3&lim=75">電気・ガス・資源・エネルギー</a></li>
                        <li><a href="xpage1.php?cat=3&lim=76">交通・運送・引越し</a></li>
                        <li><a href="xpage1.php?cat=3&lim=77">物流・倉庫・貨物</a></li>
                        <li><a href="xpage1.php?cat=3&lim=78">自然・天気</a></li>
                        <li><a href="xpage1.php?cat=3&lim=79">環境・エコ・リサイクル</a></li>
                        <li><a href="xpage1.php?cat=3&lim=80">ペット・ペット用品</a></li>
                        <li><a href="xpage1.php?cat=3&lim=81">ギフト・花</a></li>
                        <li><a href="xpage1.php?cat=3&lim=82">恋愛・結構</a></li>
                        <li><a href="xpage1.php?cat=3&lim=83">出産・育児</a></li>
                        <li><a href="xpage1.php?cat=3&lim=84">葬儀</a></li>
                        <li><a href="xpage1.php?cat=3&lim=85">政治。官公庁・地方自治体</a></li>
                        <li><a href="xpage1.php?cat=3&lim=86">財団法人・社団法人・宗教法人</a></li>
                        <li><a href="xpage1.php?cat=3&lim=87">ボランティア</a></li>
                        <li><a href="xpage1.php?cat=3&lim=88">国際情報・国際サービス</a></li>
                        <li><a href="xpage1.php?cat=3&lim=89">農林・水産</a></li>
                        <li><a href="xpage1.php?cat=3&lim=90">その他</a></li>
                        <li><a href="xpage1.php?cat=3&lim=91">フィットネス・ヘルスケア</a></li>
                        <li><a href="xpage1.php?cat=3&lim=92">電子部品・半導体・電気機器</a></li>
                    </ol>
                </div>
        </div>
    </main>
    <!-- フッター -->
    <footer>
        <div class="footer_upper">
            <ul class="footer_news">
                <li><h2><a href="#">ニュース配信サービス</a></h2></li>
                <li><a href="#">PR TIMESとは</a></li>
                <li><a href="#">料金・プラン</a></li>
                <li><a href="#">プレリリースを受信したい方へ</a></li>
                <li><a href="#">プレリリースを配信したい方へ</a></li>
                <li><a href="#">ものしりプロジェクト</a></li>
                <li><a href="#">ログイン</a></li>
            </ul>
            <ul class="footer_recommend">
                <li><h2><a href="#">レコメンドサービス</h2></a></li>
                <li><a href="#">PR TIMES STORY</a></li>
                <li><a href="#">無料FAQならTayori</a></li>
                <li><a href="#">無料メールならTayori</a></li>
                <li><a href="#">タスク・プロジェクト管理ツールのJoto</a></li>
                <li><a href="#">PR TIMES TV</a></li>
                <li><a href="#">PR TIMES LIVE</a></li>
                <li><a href="#">PR TIMES MAGAZINE</a></li>
            </ul>
            <ul class="footer_recommend_wrap">
                    <li><h2><br></h2></li>
                    <li><a href="#">クリッピング</a></li>
                    <li><a href="#">広告ならAdGang</a></li>
                    <li><a href="#">無料占い・今週の運勢ならisuta</a></li>
                    <li><a href="#">無料恋愛占いisuta</a></li>
            </ul>
            <ul class="footer_sns">
                <li><h2><a href="#">PR TIMES公式SNS</h2></a></li>
                <li><a href="#">公式Facebookページ</a></li>
                <li><a href="#">Facebookカテゴリ</a>
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
                <li><a href="#">公式Twitterページ</a></li>
                <li><a href="#">Twitterカテゴリ</a>
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
                <li><a href="#">会社概要</a></li>
                <li><a href="#">プライバシーポリシー</a></li>
                <li><a href="#">情報セキュリティ</a></li>
                <li><a href="#">プレリリース掲載基準</a></li>
                <li><a href="#">利用規約</a></li>
            </ul>
            <ul class="footer_bottom2">
                <li><a href="#">企業様のお問い合わせ</a></li>
                <li><a href="#">報道関係者様からのお問い合わせ</a></li>
                <li><a href="#">一般の皆様からのお問い合わせ</a></li>
            </ul>
            <span>Copyright&copy; PR TIMES Inc. All Rights Reserved.</span>
        </div>
    </footer>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
