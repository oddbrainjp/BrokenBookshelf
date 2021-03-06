<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=viewport content="width=device-width, initial-scale=1" />
<meta name="keywords" content="oddbrain, BrokenBookshelf, 本棚, 蔵書管理">
<title>BrokenBookshelf</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/pure/0.6.2/pure-min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="system-style.css">
<script type="text/javascript" src="//code.jquery.com/jquery-2.2.1.min.js"></script>
</head>
<body>
	<?php
		require_once('../controller/common/userInfo.php');
		ini_set('display_errors', 'On');
		session_start();
		$userInfo = $_SESSION['userInfo'];
	?>
<div id="wrap">
	<div class="custom-wrapper pure-g header" id="menu">
		<div class="pure-u-1-5 pure-u-md-1-5">
			<div class="pure-menu">
				<a href="/" class="pure-menu-heading custom-brand">
					<img src="./logo_header__full__w.png" alt="BrokenBookshelf" />
				</a>
			</div>
		</div>
		<div class="pure-u-3-5 pure-u-md-3-5">
			<div class="pure-menu-heading">
				<form class="pure-form pure-form-aligned" method="get" action="#">
					<select>
						<option selected>カテゴリを選択</option>
						<option>キーワード</option>
						<option>タイトル</option>
						<option>著者</option>
						<option>出版社</option>
						<option>ISBN</option>
						<option>ASIN</option>
					</select>
					<input id="name" type="text">
					<button type="submit" class="pure-button pure-button-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
		<div class="pure-u-1-5 pure-u-md-1-5">
			<a href="./mypage.html" class="pure-menu-heading align-center" title="マイページへ">マイページへ移動<br /><strong><?php echo $userInfo->getName();?>さん</strong></a>
		</div>
	</div>
	<div class="custom-wrapper pure-g">
		<div class="pure-u-1 pure-u-md-1 border-notice">
			<div class="color-accent"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>重要</div>
			<div>
				<span>重要なお知らせを表示するメッセージボックス。まだ開発中だよ。It works!</span>
			</div>
		</div>
	</div>
	<div class="pure-g b-top-box">
		<form class="pure-form pure-form-aligned" method="get" action="#">
			<fieldset>
		<div class="pure-u-3-4">
			<div class="pure-control-group">
				<label for="name">Keywords:</label>
				<input id="name" type="text" placeholder="Kaywords">
			</div>
	
			<div class="pure-control-group">
				<label for="ISBN">ISBN:</label>
				<input id="ISBN" type="text" placeholder="ISBN">
			</div>
	
			<div class="pure-control-group">
				<label for="Author">Author:</label>
				<input id="Author" type="text" placeholder="Author">
			</div>
	
			<div class="pure-control-group">
				<label for="Publisher">Publisher</label>
				<input id="Publisher" type="text" placeholder="Publisher">
			</div>
	
			<div class="pure-controls">
				<label class="pure-checkbox">
					<input type="checkbox"> 蔵書になければAmazonを検索
				</label>
				<label class="pure-checkbox">
					<input type="checkbox"> 蔵書になければ登録処理に移行
				</label>
			</div>
		</div>
		<div class="pure-u-1-4">
			<button class="button-xlarge pure-button button-10 buttom-m-v-05">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				登録
			</button>
			<button class="button-xlarge pure-button button-10 buttom-m-v-05">
				<i class="fa fa-cog" aria-hidden="true"></i>
				利用情報の更新
			</button>
			<hr />
			<button type="submit" class="pure-button pure-button-primary button-xlarge button-10">
				<i class="fa fa-search" aria-hidden="true"></i>
				検索
			</button>
		</div>
				</fieldset>
			</form>
	</div>

	<div class="custom-wrapper pure-g">
		<div class="pure-u-3-4 pure-u-md-3-4">
			<div id="reccomend-item-list" class="item-list">
				<h2>あなたにおすすめの書籍 <span class="fontsize-08"><a href="#" title="more">もっと見る</a></span></h2>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
			</div>
			<div id="current-lending-item-list" class="item-list">
				<h2>現在貸出し中の書籍 <span class="fontsize-08"><a href="#" title="more">もっと見る</a></span></h2>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
			</div>
			<div id="recently-lending-item-list" class="item-list">
				<h2>直近で貸し出されたことのある書籍 <span class="fontsize-08"><a href="#" title="more">もっと見る</a></span></h2>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
				<div class="reccomend-item">
					<img src="./noimage-200x200.jpg" alt="reccomend item image" class="" />
				</div>
			</div>
			<p>こことかの参考サイト　http://kwski.net/jquery/1208/</p>
		</div>
		<div class="pure-u-1-4 pure-u-md-1-4 border-base">
			<div><i class="fa fa-info-circle" aria-hidden="true"></i>お知らせ</div>
			<div>
				<p>
					<span class="display-block">2017.2.17.fri</span>
					<span>重要なお知らせを表示</span>
				</p>
				<p>
					<span class="display-block">2017.2.17.fri</span>
					<span>重要なお知らせを表示</span>
				</p>
				<p>
					<span class="display-block">2017.2.17.fri</span>
					<span>重要なお知らせを表示</span>
				</p>
				<p>
					<span class="display-block">2017.2.17.fri</span>
					<span>重要なお知らせを表示</span>
				</p>
			</div>
		</div>

	</div>
	<div class="footer">
		<p class="align-center fontsize-08">create and copyright by oddbrain.jp at 2015-2017</p>
	</div>
</div>
</body>
</html>