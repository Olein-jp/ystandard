# 開発メモ

## 今後の予定

## テスト

- Travis CIでのテストを行う
  - テストの勉強に結構時間かかるのでは？
  - まずは出来るところからテストも導入し、徐々に増やしていく
  - v2β版 公開までテストなしでいこう。早く出したい

## フォルダ構成

ystandard
├ css
├ images                      : テーマデフォルトの画像類
├ inc                         : 関数群、基本的には表示に必要なデータを作るだけ
├ js
├ Library                     : ライブラリ関連
│├ font-awesome
│├ theme-update-checker
│
├ page-template               : カスタムテンプレート類をまとめる
├ src
│├ sass
│├ js                         : ES2015 & webpack
│
├ template-parts              : ページを構成するテンプレートをまとめる
│
├ user-custom-head.php        : 非AMPフォーマットのheadタグのユーザー拡張部分
├ user-custom-head-amp.php    : AMPフォーマットのheadタグのユーザー拡張部分
├ user-custom-append-body.php : 非AMPフォーマットの</body>直前のユーザー拡張部分
│
├ 各テーマテンプレート
├ gulpfile.js,package.json等の開発用ファイル
│
