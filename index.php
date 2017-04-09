
<?php 
  //$urlHost="http://www.konkhmerapp.com/wp-mobile/khmovie";
$urlHost="http://localhost:81/mobile-project/3.0";
  
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Welcome to KONKHMERAPP.com</title>
      <meta name="title" content="Kon Khmer App - កូនខ្មែរអែប | Khmer Movie, Video4Khmer, PhumiKhmer, Khmer Thai Khmer Movie..." />
            <meta name="description" content="Kon Khmer App top online web Entertainment in Cambodia (Khmer). You can find all Khmer Video, Movie, Lakorn, Drama from Youtube, Vimeo, Facebook..." />
                <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge,chrome=1">
                <meta name="keywords" content="Kon Khmer App, Movie, Thai Lakorn, Phumi, Khmer, Movie Khmer,khmer,mov,filmkh,filmloy,merl,free,vdo,khmer,khmer2all,khmer4all,Terk Khmom Majureach,Thai Lakorn, Lakorn, lakorn, Thai Lakhon 2013,2014, Thai Drama, Thai Movie, Thai Romantic, Khmer Thai Movie 2014, Movie Khmer, Khmer Movie, Cambodia, New Movie, Thai Lakhon, khmer movie, movie khmer, korean movie,korean, korean,drama, chinese, drama korean, khmer music, music khmer, video,khmer, karaoke,khmer, khmer radio, radio khmer, rfa khmer, rfi khmer,phum,khmer,Phumi" />
<link rel="shortcut icon" href="http://konkhmerapp.com/wp-content/uploads/2017/03/icon-1.png">

    <!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shortcut icon" href="https://m.khwall.com/public/img/favicon.ico">
<link rel="stylesheet" href="https://m.khwall.com/public/bootstrap/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Hanuman' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo $urlHost;?>/Scripts/css/custom.css">
<script src="https://m.khwall.com/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<link rel="stylesheet" href="<?php echo $urlHost;?>/common.css"/>
  <script src="//unpkg.com/angular@1.5/angular.js"></script>
    <!--<script src="//unpkg.com/angular-ui-router@1.0.0-beta.3/release/angular-ui-router.js"></script>-->

<script src="https://unpkg.com/angular-ui-router@0.4.2/release/angular-ui-router.min.js"></script>
<style>
	.m-grid-title{
		clear: both;
		padding: 7px;
		color: rgb(119, 119, 119);
		margin: 0px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		width: 160px;
	}
	.mobile-photo {
		margin: 0px !important;
		text-align: center;
		background: #444;
		overflow: hidden;
		height: 101px;
		background-position: center center;
		min-height: 174px;
		position: relative;
		box-shadow: 0px 0px 2px #444;
	}

	.mobile-photo a img {
		position: absolute;
		margin: auto;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
	}

	.media .media-left {
		padding: 6px;
	}
	.media img {
		border-radius: 50%;
		height: 50px;
	}
	.media-body {
		padding-left: 3px;
		padding-top: 9px;
	}
	.media-heading {
		font-size: 13px;
	}
	.col-xs-12 {
		background: #fff none repeat scroll 0 0;
		border-radius: 2px;
		box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8;
		height: auto;
		margin-bottom: 0px;
		padding: 0;
		width: 100%;
	}

	.btn-sq {
		font-size: 10px;
		height: 100px !important;
		padding: 10px;
		text-align: center;
		width: 100% !important;
	}

	.btn-sq-sm {
		width: 50px !important;
		height: 50px !important;
		font-size: 10px;
	}

	.btn-sq-xs {
		width: 25px !important;
		height: 25px !important;
		padding:2px;
	}
	.btn {
		border-radius: 0;
	}

	.row {
		margin-left: -15px;
		margin-right: -15px;
	}
	.col-xs-3.col-sm-3 {
		margin-bottom: -1px;
		margin-left: -1px;
		padding: 0;
	}

	.filter-tags li {
		border-radius: 2px;
		color: #888;
		display: inline;
		font-weight: bold;
		margin-right: 6px;
		padding: 6px;
		text-align: center;
	}
	.filter-tags .tags-true{
		background: #F39C12 none repeat scroll 0 0;
		color: #fff;
		border: 1px solid rgb(204, 122, 0);
	}
	.filter-tags .tags-true i{
		color: #fff !important;
	}
	.filter-tags .tags-false{
		background: #fff none repeat scroll 0 0;
		border: 1px solid #ddd;
	}
	.filter-tags .tags-false i{
		color: #F39C12 !important;
	}
	.post-list div:last-child{
		border-bottom: 0 !important;
	}
	.filter-tags li:hover{
		background: #f29e21;
		color: #fff !important;
		border: 1px solid rgb(204, 122, 0);
	}
	.filter-tags li:hover i{
		color: #fff !important;
	}

	.filter-type {
		list-style: outside none none;
		padding-left: 0;
	}
	ul.filter-tags {
		padding-left: 18px;
		padding-right: 18px;
	}
	.filter-tags li {
		border-radius: 2px;
		font-weight: bold;
		padding: 6px;
		text-align: center;
		margin-bottom: 3px;
		list-style: none;
		display: block;
		margin-right: 0;
	}
	.filter-type li:hover{
		background: #f29e21;
		color: #fff;
		border: 1px solid rgb(204, 122, 0);
	}
	.filter-type .type-true{
		background: #F39C12 none repeat scroll 0 0;
		color: #fff;
		border: 1px solid rgb(204, 122, 0);
	}
	.filter-type .type-false{
		background: #fff none repeat scroll 0 0;
		border: 1px solid #ddd;
	}
	.info .title{
		text-overflow: ellipsis;
	}

	.cate-item {
		background: #fff none repeat scroll 0 0;
		border: 3px solid #ddd;
		text-align: center;
		width: 50%;
		padding: 0;
	}
	.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-top: 6px;
}
</style>   

</head>
<body ng-app="app">
<div>
        <div class="navbar-more-overlay"></div>

    <!-- top menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top animate">
    <div style="background:#ef1313;padding: 15px;padding-bottom: 9px;padding-top: 9px; display:none">

        <div class="search">
            <i class="fa fa-search"></i>
            <form name="mySearch">
                <input type="text" ng-model="filterText" ng-keyup="searchMovie(filterText)" ng-model="q" class="search_field _field" id="search_query" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="Search">
            </form>

                    </div>

        
    </div>
    <div class="container mobile-container top-menu">
        <div class="col-sm-12">
            <ul class="nav navbar-nav mobile-bar">
                <li>
                    <a href="#/">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
                </li>
                <li ng-class="{active:m.page=='m-store-near-by'}">
                    <a  href="#/category">
                        <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li ng-class="{active:m.page=='m-category'}">
                    <a  href="#/tv">
                       <i class="fa fa-television" aria-hidden="true"></i>
                    </a>
                </li>
               <li>
                  
                    <a href="#/noty">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span ng-show="nt.global_unread>0" class="notify-number label label-success animate-hide animate-show"
                              ng-bind="nt.global_unread"></span>
                    </a>
                </li>

                            </ul>
        </div>
    </div>
</nav>
<div style="margin-bottom: -27px;"></div>
 <!--CONTENT-->
 <ui-view></ui-view>

 <!--CONTENT-->

<script src="http://www.konkhmerapp.com/wp-mobile/khmovie/Scripts/bootstrap.min.js"></script>

</div>

<style>
    #footer{
    
    position: fixed;
    bottom: 0;
    background: #ef1313;
    width: 100%;
    z-index: 99999;
    margin: 0;
    font-weight: bold;
    color: #eee;
    -moz-box-shadow: 0 -15px 30px #585858;
    /* -webkit-box-shadow: 0 -15px 30px #585858; */
    /* box-shadow: 0 -15px 30px #585858; */
    height: 53px;
    border-color: #ccc;
    /* border-width: 0 0 1px; */
    border-top: 1px solid #555;

    }
  
    </style>
    <div id="footer"> 
<center>
<div class="row footerinfo">

</div>
</center>
</div>
<div class="clearfix">&nbsp;</div>

<script src="<?php echo $urlHost;?>/app.js"></script>
<script src="<?php echo $urlHost;?>/pages/home/search.js"></script>
<script src="<?php echo $urlHost;?>/pages/category/search.js"></script>
<script src="<?php echo $urlHost;?>/pages/tv/search.js"></script>
<script src="<?php echo $urlHost;?>/pages/noty/search.js"></script>
<!--<script src="https://m.khwall.com/public/js/popup-post.js"></script>-->
<script src="<?php echo $urlHost;?>/pages/watch/search.js"></script>
<!--<script src="https://m.khwall.com/public/plugins/angular/scroll.js"></script>-->
<script src="<?php echo $urlHost;?>/filter/filterAsText.js"></script>
<script src="<?php echo $urlHost;?>/Scripts/ng-infinite-scroll.js"></script>
</body>
</html>

