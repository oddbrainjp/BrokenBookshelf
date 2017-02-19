#What’s BrokenBookshelf?
あなたのサーバーにインストールすることで、自分の本棚を仮想的に再現します。
自分の本棚にいつでもどこからでもアクセスすることができ、同じ本を買ってしまうようなことが無くなります。
Amazonや国会図書館の情報も一緒に確認することができ、本の詳細や評価を確認することもできます。
チームで使用することも可能です。

#System requirements
##サポートOS
CentOS7.x
CentOS6.5以降なら動くと思いますが、動作確認していませんのでOSに合わせて修正してください。

##PHP
5.4以降
わたし達は実験的にPHP7で開発をしておりますが、5.4以降の機能を使っておりますので(7の機能は使ってない…)それ以降のバージョンでご利用ください。
mbstringは必須です。コマンドラインから ```yum install -y php-mbstring``` でインストールが可能です。

##MySQL(MariaDB)
5.5以降
MySQLi, PDO, マルチバイトが使用できる環境であること。
DBの文字コードはutf8に設定してください。

#Recommend Web Browser
##PC/AT
・GoogleChrome 50.x ~
・Firefox 50.x~

##Macintosh(ここ適当)
・Safari 10.9~
・GoogleChrome 50.x~
・Firefox 50.x~

#Installation
1.　$ git clone https://github.com/oddbrainjp/BrokenBookshelf.git
2.　Webからsetting.phpにアクセス。必要な情報を入力する
3.　:)

#Usage
・ログイン
インストールが完了すると、ドキュメントルート(設置したディレクトリ)がログインページになります。
インストール時に登録したユーザでログインを行なってください。
・検索したり、蔵書登録したり
検索したり、蔵書登録したり、チーム情報を整備したり、色々できます。
・貸し出し
チームでの使用の場合や、一時的な本の移動の際に貸出機能を用いて本棚から無い状態であることを記録することができます。
・購入
Amazonへのリンク機能があるので、本棚にない本をその場で購入することができます。

#License
BrokenBookshelf is licensed under Copyright by oddbrain.jp：印籠会

#Credits
印籠会：[Website](https://oddbrain.jp)/[@oddbrainjp](https://twitter.com/oddbrainjp)
