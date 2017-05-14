   
<!-- Container -->
<div id="container">

	<!-- Main Content-->
	<!-- Sidebar -->
	
	<aside id="sidemenu-container">
		<div id="sidemenu">
			<!--<center><img src="{$mobileurl}/static/logo.png" width="80"></center>-->
			<div id="author-profile">
				{if $smarty.session.USERID ne ""}
				<div class="author-profile-photo">
					{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
					<img src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" alt="">
				</div>

				<div class="author-profile-content">
					<p class="title">{$smarty.session.USERNAME|stripslashes}</p>
					<p class="subtitle"><a href={$mobileurl}/logout>Thoát</a></p>
				</div>
				{else}  
				<div>
					Bạn chưa <a href="{$mobileurl}/login">Đăng nhập</a> <br />
					Chưa có tài khoản?<a href="{$mobileurl}/login"> Đăng ký</a>
				</div>
				{/if}
			</div>

			<nav id="nav-container">
				<ul class="nav">
					<li class='current'>
						<a class='current' href="{$mobileurl}">Trang chủ</a>
					</li>
					<li>
						<a href="{$mobileurl}/vote" class="nav-with-ul">Bình chọn</a>
        				<!--<span class="nav-child-container"><span class="nav-child-trigger">+</span></span>
        				<ul style="height: 0;">
		        			<li><a href="typography.html">Typography</a></li>
		        			
		        		</ul>-->
				    </li>
		        	<li>
		        		<a href="{$mobileurl}/video" class="nav-with-ul">Video</a>
		        	</li>
		        	<li>
		        		<a href="{$mobileurl}/hot" class="nav-with-ul">Đang Hot</a>
		        	</li>
		        	<li>
		        		<a href='{$mobileurl}/submit' class='submit'>Đăng bài</a>
		        		<span class="nav-child-container"><span class="nav-child-trigger">+</span></span>
		        		<ul style="height: 0;">
		        			<li><a href="{$mobileurl}/submit">Gửi ảnh</a></li>
		        			<li><a href="{$mobileurl}/submit?t=v">Gửi video</a></li>
		        		</ul>
		        	</li>
		        	<!-- <li>
		        		<a href="{$mobileurl}/trending" class="nav-with-ul">Cũ mà hay</a>
        				<span class="nav-child-container"><span class="nav-child-trigger">+</span></span>
        				<ul style="height: 0;">
		        			<li><a href="gallery-2.html">2 Collumn</a></li>
		        			
		        		</ul>
		        	</li> -->
		        	<li>
		        		<form action="{$mobileurl}/search">
		        			<input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="{$lang189}"/>
		        		</form>
		        	</li>
		        </ul>
			</nav>
		</div>
	</aside>

			<!-- =Sidebar -->

			<section id="content-container" class="dark">

				<!-- Header -->

				<header id="header">
					<div id="menu-trigger" class="header-button left icon-menu"></div>
					<h1><a class='current' href="{$mobileurl}">{$site_name|stripslashes}</a></h1>
				</header>

				<!-- =Header -->

				<div id="content" class="blog">

					{section name=i loop=$posts}

			<article class="format-standard">
				<div class="wrapped-content">
					<div style="float: right;">
						<span><fb:like href="{$baseurl}{$postfolder}{$posts[i].PID}" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like></span>
						<span><fb:share-button href="{$baseurl}{$postfolder}{$posts[i].PID}" type="button_count"></fb:share-button></span>
					</div>
					<h2><a href="{$mobileurl}{$postfolder}{$posts[i].PID}">{$posts[i].story|stripslashes}</a></h2>
				</div>
				{if $posts[i].pic ne ""}
					{if $posts[i].isgif eq "1"}
					<figure>
						<a href="{$mobileurl}{$postfolder}{$posts[i].PID}"><img src="{$purl}/{$posts[i].path}/t/static-{$posts[i].pic}" alt="{$posts[i].story|stripslashes}"><span>GIF</span></a>
					</figure>
					{else}
					<figure>
						<a href="{$mobileurl}{$postfolder}{$posts[i].PID}"><img src="{$purl}/{$posts[i].path}/t/{$posts[i].pic}" alt="{$posts[i].story|stripslashes}"></a>
					</figure>
					{/if}
				{else}
				{if $posts[i].youtube_key != ""}<div class="videobox">
				<a href="{$mobileurl}{$postfolder}{$posts[i].PID}">
					{insert name=return_youtube2 value=a assign=youtube youtube=$posts[i].youtube_key}{$youtube}

					<span></span></a>
				</div>

				{elseif $posts[i].fod_key != ""}
				<center>
					{insert name=return_fod value=a assign=fod fod=$posts[i].fod_key}{$fod}
				</center>
				{elseif $posts[i].vfy_key != ""}
				<center>
					{insert name=return_vfy2 value=a assign=vfy vfy=$posts[i].vfy_key}{$vfy}
				</center>
				{elseif $posts[i].vmo_key != ""}
				<center>
					{insert name=return_vmo value=a assign=vmo vmo=$posts[i].vmo_key}{$vmo}
				</center>
				{else}
				<center>
					{$lang143}
				</center>
				{/if}
				{/if}
				<hr>
				<div class="wrapped-content">
					<p class="title">
						<span class="icon-eye-1">{$posts[i].view}</span>
						<span class="icon-comment" style="float: right; padding: 2px 0;"><fb:comments-count href="{$baseurl}{$postfolder}{$posts[i].PID}"></fb:comments-count></span>
					</p>
				</div>
			</article>


			{/section}





			<div class="text-center" style="margin-bottom: 40px;">
				{if $tpp ne ""}
				<a href="{$mobileurl}/?page={$tpp}" class="button radius">Trang trước</a>
				{else}
				<a href="#" class="button secondary radius">Trang trước</a>
				{/if}
				{if $tnp ne ""}
				<a href="{$mobileurl}/?page={$tnp}" class="button radius">Trang sau</a>
				{else}
				<a href="#" class="button secondary radius">Trang sau</a>
				{/if}	
			</div>

		</div>

	</section>

	<!-- =Main Content -->




</div>
<!-- =Container -->
