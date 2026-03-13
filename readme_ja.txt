=== Page for Random Banners ===
Contributors: rainbowlinkinc
Donate link: https://jp.Rainbow-Link.com/catalogue.htm?&item_no=RLF15ja&link_id=wp
Tags: banners, links, page, random banners, links page, ads page, pages
Requires at least: 4.4.2
Tested up to: 6.9
Stable tag: 1.3.8
Requires PHP: 8.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

ページ読み込みのたびにリンクバナーの位置がランダムに切り替わる「広告バナー表示ページ」「リンクページ」を簡単に作成できます。

== ご案内 ==

このプラグインは、ランダムな順番でバナーを表示するカスタムページを作成する機能を提供します。ページを開くたびに、表示される画像バナーの並び順がランダムに入れ替わります。

▼実物デモ  
https://www.secure-formmail.net/?rl_pfrb_headerfooter=page-for-random-banners-demo3

📺 動画:使用方法   
https://youtu.be/rxGcSPCgyfs

📺 スライドショー:使用方法
https://jp.Rainbow-Link.com/catalogue.htm?&item_no=RLF15ja#make_index3

▼付属のサンプルバナー画像（動作確認用画像）は、以下に格納されています：  
/wp-content/plugins/page-for-random-banners/example/images

【インストール方法】
(0) WordPress管理画面にログインし、本プラグインと『Custom Post Template』プラグインをインストールして有効化してください。

(1) 管理メニューの「Page for Random Banners > Add a New Page for Random Banners」から新規ページを作成します。

(2) TinyMCEエディタの「テキスト」タブを使用して、リンクバナーを下記の形式で並べたページを作成します。

  形式1: <a href=""><img src=""></a>  
  形式2: <img src="">

※完全にランダムに表示させるため、1ページ内で使用する形式は統一してください。

(3) 投稿テンプレート欄から『Page for Random Banners [Header Footer]』を選択してください。

(4) 「公開」ボタンをクリックしてページを保存します。

(5) 必要に応じてスタイルシートを作成し、テーマの 「header.php」 に追加してください。
　▼参考：サンプルCSSは 以下に格納されています：  
　/wp-content/plugins/page-for-random-banners/example


【FAQ】
▼全FAQはこちら
https://jp.Rainbow-Link.com/catalogue.htm?&item_no=RLF15ja#faq


【問い合わせ先】
▼不具合・ご質問はWordPress.orgではなく、開発元公式サイトよりご連絡ください。
https://jp.Rainbow-Link.com/catalogue.htm?&item_no=RLF15ja#inquiry



== インストール方法 ==

1. プラグインファイルを /wp-content/plugins/page-for-random-banners ディレクトリにアップロードするか、管理画面から直接インストールします。
2. WordPress管理画面の「プラグイン」より本プラグインを有効化します。
3. /wp-content/plugins/page-for-random-banners/templates  にあるテンプレートファイルを、使用中のテーマディレクトリへコピーします。
4. 『Custom Post Template』プラグイン（https://wordpress.org/plugins/custom-post-template/）をインストールして有効化します。

▼参考：インストール方法の動画
https://jp.Rainbow-link.com/catalogue.htm?&item_no=RLF15ja#make_index2

== スクリーンショット ==

1. screenshot-1.png: 必須プラグイン
2. screenshot-2.png: 子ページの作り方
3. screenshot-3.png: 親ページの作り方
3. screenshot-4.png: デモ

== よくあるご質問 ==
= FAQ一覧 =  
https://jp.Rainbow-Link.com/catalogue.htm?&item_no=RLF15ja#faq

== 更新履歴 ==
= 1.3.8 =
Jan 2, 2026: ハウツー動画とassetsを更新しました。Githubに部品として公開していたパーツをtemplatesに組み入れました。
- 本プラグインの新規ロゴは、 ChatGPT-5.2 に作成していただきました！

=1.3.7=
May 5, 2025: タグエラーを解消しました。

= 1.3.6 =
Apr 24, 2025: バージョンエラーを解消しました。

= 1.3.5 =
2025年4月24日: 『ChatGPT』の支援を得て、readme.txt と　readme_ja.txt とをリライトしました。
2025年1月21日: `Requires PHP` 等のヘッダ情報を追加

= 1.3.4 =
2024年10月10日: WordPress公式チームから指摘されたタグを修正

= 1.3.3 =
2024年9月11日: バージョン1.3.2のバグ修正

= 1.3.2 =
2024年9月11日: 新テンプレート `single-pfrb_HeaderFooter_2024.php` を追加

= 1.3.1 =
2023年5月7日: `banner-1544x500.png` を追加

2022年11月2日: PHP8対応・1.3.0のバグ修正

= 1.3.0 =
2022年11月1日: PHP8対応

= 1.2 =
2018年11月22日: カタログURL変更

= 1.1 =
2018年10月5日: WordPressのバージョン記載ミスを修正

= 1.0 =
84行目： $post_types = rl_pfrb_headerfooter;

= 0.1 =
84～89行目のデバッグ用コメント追加  
旧バージョンのWordPress環境で不具合がある場合は、コメント行（//）を削除してご利用ください。

== アップグレードに関するご案内 ==

= 1.1 =
- readme_ja.txt を更新しました（DEMO URL、テキスト、インストール動画の追加・修正）

= 1.0 =
- 初回リリース

= 0.1 =
- 依存プラグイン "Custom Post Template" に関するデバッグメッセージ対応
