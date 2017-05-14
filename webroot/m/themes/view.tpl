
    <!-- Container -->
	    <div id="container">

        <!-- Main Content-->
        			<!-- Sidebar -->

	        <aside id="sidemenu-container">
	        	<div id="sidemenu">
	        		<div id="author-profile">
					{if $smarty.session.USERID ne ""}
	        			<div class="author-profile-photo">
	        				{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
							<img src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" alt="">
	        			</div>

						<div class="author-profile-content">
	        				<p class="title">{$smarty.session.USERNAME|stripslashes}</p>
	        				<p class="subtitle"><a href="{$mobileurl}/logout">Thoát</a></p>
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
								<a href="{$mobileurl}">Trang chủ</a>
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

		        <div id="content" class="blog blog-single">

		        	<article class="format-standard">
		        		<div class="wrapped-content">
							<h2><a href="{$mobileurl}{$postfolder}{$p.PID}">{$p.story|stripslashes}</a></h2>
		        		</div>
						{if $p.pic ne ""}
		        		<figure>
		        			<a href="{$mobileurl}{$postfolder}{$p.PID}"><img src="{$purl}/{$p.path}/t/{$p.pic}" alt="{$p.story|stripslashes}"></a>
		        		</figure>
						 {else}
		        		  {if $p.youtube_key != ""}

							{insert name=return_youtube value=a assign=youtube youtube=$p.youtube_key}{$youtube}




							{elseif $p.fod_key != ""}
							<center>
							{insert name=return_fod value=a assign=fod fod=$p.fod_key}{$fod}
							</center>
							{elseif $p.vfy_key != ""}
							<center>
							{insert name=return_vfy2 value=a assign=vfy vfy=$p.vfy_key}{$vfy}
							</center>
							{elseif $p.vmo_key != ""}
							<center>
							{insert name=return_vmo value=a assign=vmo vmo=$p.vmo_key}{$vmo}
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
							<span class="icon-eye-1"></span>{$p.view}
							
							<span style="float:right;">
							<fb:like href="{$baseurl}{$postfolder}{$p.PID}" send="false" layout="button_count" width="90px" show_faces="false" font="" label="Post"></fb:like>
							</span></p>
		        			<hr>
							{$p.blog|stripslashes}
		        		</div>
	        			<div class="actions">
							<div class="post-next-prev">
					            {if $prev != ""}
					            <a id="prev_post" class="prev-post button radius" href="{$mobileurl}{$postfolder}{$prev}/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);">Bài trước</a>
					            {else}
					            <a id="prev_post" class="prev-post button secondary radius" href="{$mobileurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Previous', 1]);">Bài trước</a>
					            {/if}
					            {if $next ne ""}
					            <a id="next_post" class="next-post button radius" href="{$mobileurl}{$postfolder}{$next}/" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);">Bài sau</a>
					            {else}
					            <a id="next_post" class="next-post button secondary radius" href="{$mobileurl}/random" onclick="_gaq.push(['_trackEvent', 'View-Post', 'Clicked', 'Next', 1]);">Bài sau</a>
					            {/if}
					        </div>
					    </div>
		        	</article>
					<div id="comments" class="bg-dark comments wrapped-content">
						 <h3><fb:comments-count href="{$baseurl}{$postfolder}{$p.PID}"></fb:comments-count> bình luận</h3>
						   <div class="comments-content-container">
								<fb:comments href="{$baseurl}{$postfolder}{$p.PID}" num_posts="5" colorscheme="light"></fb:comments>
							</div>
					</div>
				<article class="format-standard">
				<h2>Bạn đã xem chưa?</h2>
				<div class="wrapped-content">{if $recommended eq "1"}
		        			{section name=i loop=$r}
							<p class="title">
						<span class="icon-heart-1"></span>	<a href="{$baseurl}{$postfolder}{$r[i].PID}">{if $truncate eq "1"}{$r[i].story|stripslashes|truncate:20:"...":true}{else}{$r[i].story|stripslashes}{/if}</a>
							</p>
							{/section}
		        			{/if}
		        </div>
				</article>

{literal}
<script type="text/javascript">

	$('.unlove').click(function(){
		var id=$(this).attr('entryid');
		if( $(this).hasClass('unloved')){
			$(this).removeClass('unloved');
			ulikedeg($(this).attr('entryid'),0,-1);
		}else{
			$(this).addClass('unloved');
			if($('#scriptolution_voteUp_'+id).hasClass('loved')){
				ulikedeg($(this).attr('entryid'),-1,1);	
				$('#scriptolution_voteUp_'+id).removeClass('loved');
			}else{
				ulikedeg($(this).attr('entryid'),0,1);	
			}
		}
	});
	$('.love').click(function(){
		var id=$(this).attr('entryid');
		if( $(this).hasClass('loved')){
			$(this).removeClass('loved');
			ulikedeg($(this).attr('entryid'),-1,0);
		}else{
			$(this).addClass('loved');
			if($('#scriptolution_voteDown_'+id).hasClass('unloved')){
				$('#scriptolution_voteDown_'+id).removeClass('unloved');
				ulikedeg($(this).attr('entryid'),1,-1);
			}else{
				ulikedeg($(this).attr('entryid'),1,0);
			}
		}
	});        
	function ulikedeg(p,l,u){
		jQuery.ajax({
			type:'POST',
			url:'{/literal}{$baseurl}{literal}'+ '/votegag.php',
			data:'l='+l+'&pid=' + p +'&u='+u,
			success:function(e){
				$('span#love_count_'+p).html(e);
			}
		});
	}    
</script>
{/literal}