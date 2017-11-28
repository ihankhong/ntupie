<?php
 require_once("header.php");
 require_once("carousel.php");
?>
<section class="content-wrap">
	<div class="container-full clearfix">
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
			<div class="sidebar-wrap">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sideNavbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h3>最新消息</h3>
				</div>
				<div id="sideNavbar" class="list navbar-collapse collapse" aria-expanded="false">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">首頁</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">重要公告 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">榮譽捷報</a></li>
								<li><a href="#">演講資訊</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">系所簡介 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">系史館</a></li>
							</ul>
						</li>
						<li><a href="#">師資介紹</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">學生專區 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">獎助學金</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">招生資訊 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">大學部</a></li>
							</ul>
						</li>
						<li><a href="#">系友專區</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9"></div>
	</div>
</section>
<?php
 require_once("footer.php");
?>