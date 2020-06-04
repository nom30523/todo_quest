# 課題ソーシャルアプリ
PHP、Laravelを使用し、Todoアプリを作成しました。  
私はゲームが趣味のため、レベルアップ機能付きのTodoアプリに致しました。  
<img src="https://i.gyazo.com/df696080efd44bb8211603863e684ee3.png" width="400"/>

## 作品URL
http://todo-quest2020.herokuapp.com/  

- テストユーザー
  - e-mail:   test_1@gmail.com
  - password: test_password_1

## 使用した技術
- PHP 7.4
- Laravel 7.13.0
- bootstrap
- docker

## 主な機能
- ログイン/ログアウト/新規登録機能
- Todoリスト作成機能
- Todoリスト編集/削除機能
- レベルアップ機能
- ユーザー検索機能（ユーザー名あいまい検索、レベルでの検索）

### Todoリスト機能
<img src="https://i.gyazo.com/82a41785fd9e089998c1fedb30761c8f.png" width="400"/>  

- マイページのフォームより、Todoリストの作成をすることができます。
- 「編集」「削除」のリンクをクリックすることで、編集/削除の動作を実行することができます。

### レベルアップ機能
<img src="https://user-images.githubusercontent.com/60598776/83735547-7c0b4600-a68b-11ea-9876-374c6662dd30.jpg" width="400">  

- Todoリストのタスクをこなすことで経験値を獲得でき、レベルアップすることができます。

<img src="https://i.gyazo.com/2a18e86edfeb97cdca887c643306b12c.png" width="300"> <img src="https://i.gyazo.com/26cabf7ce82f6e4e1fec8333b0322185.png" width="300">  

- レベルアップすることによって、キャラクターの画像が成長していきます。

### ユーザー検索機能
<img src="https://i.gyazo.com/de54ce020d58b371bffe7cbfb58110c7.png" width="400">  

- ユーザー名でのあいまい検索、レベルでの絞り込み検索に対応しています。
- ユーザー名のみでの検索、レベルのみでの検索にも、もちろん対応しております。

### レスポンシブ対応
<img src="https://i.gyazo.com/f331c2e848b4f37ab398f0c255751d3c.png" width="300"> <img src="https://i.gyazo.com/1e4839f16378fc6d94ffa64dd36b4be7.png" width="200">  

- bootstrapを利用し、レスポンシブに対応しております。
