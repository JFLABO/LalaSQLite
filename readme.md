©GNU This was produced by Emacs

昔、300MBまでしかDB(MySQL)が利用できない環境にいました。
おっきいデータをファイルに書けばいいんじゃないかということで
sqliteに書いてみました。

性能測定　キャパシティがどれだけのものかわからず
その測定のためやってみました。

Laravel+sqliteで画像を保存　SSDワークエリアがあることが前提です。

節約するより、変えちゃおう　というアプローチです。

蛇足ですが
おっきいデータをまとめてファイルに書けばいいんじゃないか
そんなことして動くの？重くならないの？
さあな、そんなことやろうと思ったことないし
私たちにもわからないよ

そんな感じの会議もありましたが。

やってみました。

冷静なRさんがきて、どれだけデータが貯められて、それだけの負荷に耐えられるか
測ってみましょう。ってことになりました。

んー　このくらいなら　毎日、sqliteファイルを変えるとか
いざとなったら画像ファイルに戻せる作りにしとけばいいんじゃない？

みたいなかんじになって　今日にいたります。

個性的ですね。デザインや表現の世界ではオリジナリティのある個性あふれる
たくさんのものがあるところがいいのです。

やったことないことだからやってくれって言ってるんですよ　とか
・高性能機＞＞相手に合わせ画像を圧縮して送信　GPUレンダ
・Laravel　保守性　改造
・SQLite：RDB　SSDオンメモリ処理を前提としてセクタを細かく分けて
　読み込み・書き込みの衝突が起きにくくする。書き込みアドレス予約
　読み込みアクセスロック領域の細分化
　画像ファイルがあったら圧縮してネットワークで伝送する。

ハードウエアとソフトウエアのバランスを取る。


いまはgitkrakenでメンテナンスしています。
https://www.gitkraken.com/pricing
