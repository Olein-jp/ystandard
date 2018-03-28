# ystandard

![ystandard](./screenshot.png "ystandard")

## 普通とは一味違ったテーマ

サイト高速化、Google PageSpeed Insightsでの高得点獲得に重点を置きながら、比較的カスタマイズしやすい形を目指したテーマ

テンプレートと機能面をなるべく分離し、子テーマで拡張することを前提に作っています。

表示に関するいろいろな部分が関数化されていてやや癖のあるテーマですが、慣れれば子テーマでガツガツカスタマイズしていけるはずです…

## 標準的にあると嬉しい機能を盛り込む

ブログ運営・サイト制作をしていて「この機能が標準的に使えたらいい」という機能を続々盛り込んでいます。
（≒いつも同じようなプラグインをインストールして設定したり、同じようなコードを何度も書くのがめんどくさい）

詳しくは「主な機能」を御覧ください。

（※設定した情報は他のテーマと共有できませんので、テーマ変更の際に設定の変更・移行が大変になるかと思います。運営スタイルに合わせて利用を検討ください）

## 「ystandard」の由来

「標準」の意の「standard」に作者が自作物やハンドルネームによく使う「ys」というプレフィックスをくっつけて、「ystandard」にしました。
（「ys-standard」という案もありました。）

先頭の「y」に意味はなく、発音する必要も無いと思っておりましたが、「ystandard」を「y」の部分まで発音すると「why standard」に聞こえることから「普通とは一味違ったテーマ」というコンセプトを掲げています

## 必要な動作環境

- WordPress : 4.5以上
- PHP : 5.6以上

## 主な機能・特徴

- レスポンシブウェブデザイン（SP/Tablet/PC）
- Google Analyticsのタグ出力を管理画面から設定可
- OGPの出力（管理画面で設定を行う必要あり）
- カテゴリー、タグ、日別ページのnoindex設定
- AMPフォーマット出力（β版）
- 筆者のSNSリンク出力機能
- 筆者の画像変更機能
- 記事毎にnoindexの設定が可能
- PageSpeed Insightsの提案に沿ったCSSの配信最適化
- 追従サイドバー機能
- 簡易的なPVカウント機能
- 関連する人気記事出力ウィジェット
- 広告表示用ウィジェット

## 注意事項

- モバイル表示ではサイドバー部分が出力されません（設定ページにて変更可）
- AMP表示では各ウィジェットが出力されません
- 絵文字関連のcss、JavaScriptが出力されません（設定ページにて変更可）
- oembed関連のcss、JavaScriptが出力されません（設定ページにて変更可）

## テーマ独自のウィジェット

### 関連する人気記事出力ウィジェット

テーマに実装されている簡易PVカウント機能でカウントしたPV数を使用し人気記事のランキングを出力します。

個別記事・カテゴリーアーカイブページでは同一カテゴリーに属する記事のランキングを表示し、それ以外の場合はサイト全体の人気記事ランキングを表示します。

### 広告表示用ウィジェット

404ページと検索結果が0件の場合に設定した内容を出力しないウィジェットです。

「価値のないページ」に出力すると警告を受ける広告コード等の表示にお使いください。

## メニューについて

### メニュー位置

1. グローバルメニュー
2. フッターメニュー

上記2種類のメニューを用意

### メニュー階層

- グローバルメニュー
  - 子項目まで対応（孫項目については設定しても表示されません）
- フッターメニュー
  - 階層メニュー非対応。階層メニューを設定しても、親メニューしか表示されません。

## スタイルについて

### ブレークポイント

- SP
  - 指定なし
- Tablet
  - `@media (min-width: 600px) {}`（テーマデフォルト）
- PC
  - `@media (min-width: 960px) {}`（テーマデフォルト）
- 大画面
  - `@media (min-width: 1200px) {}`（テーマデフォルト）

### 汎用的なスタイル

- `.ys-box`
- `.ys-button`
- `.ys-button-block`
- `.ys-button-origin`
- `.ys-text-left`
- `.ys-text-center`
- `.ys-text-right`
- `.ys-small`
- `.ys-large`

## カスタマイズ

### CSS,JSの読み込み

- ファーストビューにかかわらない部分のCSSの追加読み込み
  - `ys_enqueue_non_critical_css( $id, $src, $ver = false )`
    - `$id`  : CSSファイルのid(プログラム内で判断する用の文字列)
    - `$src` : CSSファイルのURL
    - `$ver` : バージョン文字列(キャッシュ対策用。クエリストリングに追加されます)

- 遅延読み込みさせるCSS
  - `ys_enqueue_lazyload_css( $id, $src, $ver = false )`
    - `$id`  : linkタグに追加するid
    - `$src` : CSSファイルのURL
    - `$ver` : バージョン文字列(キャッシュ対策用。クエリストリングに追加されます)

- ページ表示後にすぐ読み込むJavaScript
  - `ys_enqueue_onload_script( $id, $src )`
    - `$id`  : scriptタグに追加するid
    - `$src` : JavaScriptファイルのURL

- 遅延読み込みさせるJavaScript
  - `ys_enqueue_lazyload_script( $id, $src )`
    - `$id`  : scriptタグに追加するid
    - `$src` : JavaScriptファイルのURL

## Third-party resources

### Font Awesome

Font License: SIL OFL 1.1
Code License: MIT License
Source      : <https://fortawesome.github.io/Font-Awesome/>

### Theme Update Checker Library

License: GPL
Source : <http://w-shadow.com/>

### object-fit-images

License: MIT License
Source : <https://github.com/bfred-it/object-fit-images>

### stickyfill

License: MIT License
Source : <https://github.com/wilddeer/stickyfill>

### \_decimal.scss

License: MIT License
Source : <https://gist.github.com/terkel/4373420>

## 変更履歴

### v1.0.x

- v1.1.1 : 2017/11/30
  - 不具合修正
    - フロントページに指定している固定ページで「1カラム」テンプレートを選択しても1カラム表示にならない不具合の修正
    - amp-imgタグ置換の不具合修正
- v1.1.0 : 2017/11/10
  - 機能追加
    - 投稿のヘッダー部分にシェアボタンを表示できるオプションを追加
    - ys_is_amp, ys_is_amp_enableにフィルターフックを追加
  - 不具合修正
    - コメント欄周りのスタイル微調整
    - ページャーの表示崩れ修正
    - 設定ページの不具合修正

- v1.0.1 : 2017/09/14
  - 機能追加
    - 著者情報表示ショートコードにユーザー指定機能を追加
  - 不具合修正
    - 投稿内で著者情報表示ショートコードを使った時のスタイル調整
    - ヘッダーナビゲーションホバー時に表示される下層メニューの背景色を設定
    - リストの左に画像を回り込ませた場合に「・」が画像に近くなる点の調整

- v1.0.0
  - 機能追加
    - AMPページでのFont Awesomeをサポート
    - デフォルトのフォントカラーを黒濃いめに調整
    - AMP設定メニューはAMP有効化した時のみに表示する
    - AMPページ生成でWordPressサイトのoembed関連iframeの削除
    - AMP用 Google Analytics トラッキングID設定の追加
    - 広告のキャプション変更フィルターフック追加
    - 広告用HTML作成メソッドに広告ラベル無しオプションを追加
    - AMP正規表現置換処理を関数化
    - AMP用置換でテーマが置換する内容より先に置換処理をするためのフィルタを追加
  - 不具合修正
    - ギャラリーが機能していない点の修正
    - パーマリンク設定が「基本」の時にAMPページのURLが正しく出力されない点の修正
    - 記事下広告に高さの違うものを設定した時、上揃えにする
    - apple touch iconが反映されていない点の修正

### v0.7.x

- v0.7.0
  - 不具合修正
    - firefoxで一覧の画像が表示されない問題対処
    - ページングありのページでnext,prevのlinkタグがうまく設定出来ていない点対処
  - 機能追加
    - フォントを細く特徴的にする
    - 現在のテーマバージョン情報を表示する
    - シェアボタンで使うタイトルからWordPress標準で出力される&#8211;をハイフンに置換する
    - ツイート後におすすめユーザーを表示するオプションの追加
    - ワンカラム機能の追加

### v0.6.x

- v0.6.2 : 2017/05/15
  - 不具合修正
    - AMP表示で画像が横に飛び出している
    - 追従サイドバー直上の余白がなくなっている

- v0.6.1 : 2017/05/12
  - 不具合修正
    - 改行時の単語の切れ方を調整
    - 大きい画像を表示した際にAMPフォーマットで画像がはみ出る場合があるの対処
    - AMPフォーマットで記事下フォローボタンのアイコンフォントがお豆腐になる
    - 記事先頭のアイコン（SVG）がsafariで見た時に余分な余白がある
    - 次の記事・前の記事でHOMEボタンが表示されている時、中央寄せになっていない
    - 記事本文の相対的なフォントサイズの指定がうまくいってない
    - safariで追従サイドバーが見えなくなる

- v0.6.0 : 2017/05/02
  - preタグの改行指定変更
  - 構造化データhentryでauthorがありませんのエラーが出る点の対処
  - 固定ページでは記事内に広告を表示しないように修正

### v0.5.x

- v0.5.0 : 2017/04/21
  - 追加機能
    - 記事ごとにシェアボタン表示・非表示を設定できる機能
  - 不具合修正
    - 設定画面の設定更新時に「更新しました」表示が出ない不具合対処
    - フォーム設置した際にチェックボックスなどが表示されない不具合対処
    - オフカンバスメニュー開閉時に、メニューアイテムがごちゃごちゃする不具合対処
    - 長いブログ名の時、ブログ名がハンバーガーアイコンに激突する不具合修正
    - パンくずが2段になるときの余白が足りない不具合修正

### v0.4.x

- v0.4.0 : 2017/04/14
  - 記事直下に表示するウィジェット機能追加(スタイリングは`.widget-entry-footer`にて可能)
  - Twitterカードのカード種類を`summary_large_image`に変更
  - 次の記事・前の記事のリンクに画像を追加

### v0.3.x

- v0.3.2 : 2017/04/08
  - RSSフィードにアイキャッチ画像を表示
  - Twitter埋め込みの余白調整
  - タイトルとブログ名の区切り文字の変更機能追加
  - アイキャッチ画像の出力方法変更
- v0.3.1 : 2017/04/01
  - 汎用ボタンクラスのスタイル調整
  - 汎用ボタン、カスタマイズ用クラス追加
  - ブラウザキャッシュ対策（CSSのURLにクエリストリングを追加）
  - 広告用ウィジェットのスタイル調整
- v0.3.0 : 2017/03/24 全体的な色調整、シェアボタンのフック追加、購読リンク4種設定、jQuery読み込みオプション、遅延js,css読み込み機能、コンテンツ幅調整（800px）

### v0.2.x

- v0.2.2 : 2017/03/17 構造化エラー対処、次の記事・前の記事スタイル調整
- v0.2.1 : 2017/03/10 HTML5 バリデーションエラー対処等のバグフィックス（#8~#11,#14~#23,#25）
- v0.2.0 : 2017/03/01 ベータ版一般公開

### v0.1.x

- v0.1.4 : 2017/02/27 テーマカスタマイザーに色変更機能を追加
- v0.1.3 : 2017/02/19 ログイン中はGoogle Analyticsのトラッキングタグを出力しないように調整、一覧ページの画像が縦横比固定で出力されるように調整
- v0.1.2 : 2017/02/16 404ページ調整,検索結果ページのアーカイブタイトル修正
- v0.1.1 : 2017/02/12 個別投稿の構造化データでauthorがエラーになる問題対処
- v0.1.0 : ~~2017/02/12 ベータ版公開~~

### v0.0.x

- 2017/02/06：ソース管理をGitHubに移行
- 2016/12/xx：「Google PageSpeed Insightsでの高得点を出しやすい」「速い」をコンセプトに再作成開始
- 2016/11/15：とりあえずGithubにて公開…の予定をやっぱりやめてもう一度構想から練り直し
- 2016/10/xx：開発開始
