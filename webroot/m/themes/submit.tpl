   
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
		        	<li class="current">
		        		<a href='{$mobileurl}/submit' class='submit'>Đăng bài</a>
		        		<span class="nav-child-container"><span class="nav-child-trigger">+</span></span>
		        		<ul style="height: 0;">
		        			<li><a href="{$mobileurl}/submit" class="current">Gửi ảnh</a></li>
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
			{if $error ne ""}
			<p class="form-message error">{$error}</p>
			{elseif $message ne ""}
			<p class="form-message success">{$message}</p>
			{/if}




			<article class="format-standard">
				<div class="wrapped-content">
						<!--<div class="author-profile-photo-be">
						<a href="{$baseurl}/user/{$posts[i].USERID|stripslashes}">
						<img src="{$membersprofilepicurl}/thumbs/{$posts[i].USERID|stripslashes}.jpg?{$smarty.now}"/> 
						{$posts[i].username|stripslashes}</a>
					
					</div>	-->
					<h2><a href="{$mobileurl}{$postfolder}{$posts[i].PID}">{$posts[i].story|stripslashes}</a></h2>

				</div>

				<figure>
					<div id="comments-form-container" class="wrapped-content comments-form-container">
						<form id="form-b9gcs-soft-post-image" class="modal" action="{$mobileurl}/submit{if $smarty.request.file eq "1"}?file=1{/if}" enctype="multipart/form-data" method="post">
							<input type="hidden" name="type" value="Photo"/>
							<input id="post_type" type="hidden" name="post_type" value="Photo"/>
							<h3>{$lang102}</h3>
							{if $smarty.request.file eq "1"}



							<div class="field">
								<label>
									<h4>{$lang103}</h4>                            
									<input id="photo_file_upload" class="file text " type="file" name="image" style="display:block;"></input>
								</label>
								<p class="info"><a class="upload_photo" href="{$mobileurl}/submit"><strong>{$lang106}</strong></a> {$lang107}</p>
							</div>
							{else}
							<div class="field">
								<label>
									<h4>{$lang104}</h4>                        
									<input id="photo_post_url" type="text" class="text" name="url" value="{$url|stripslashes}" style="display:block;"></input>
								</label>
								<p class="info"><a class="upload_photo" href="{$mobileurl}/submit?file=1"><strong>{$lang105}</strong></a> {$lang107}</p>
							</div>
							{/if}


							<div class="field">
								<label>
									<h4>{$lang111}</h4>
									<input id="post_title" type="text" class="text tipped" name="title" maxlength="60" value=""/>
									<p class="info" style="visibility:hidden">{$lang112}</p>
								</label>
							</div>
							<div class="field">
								<label>
									<h4>{$lang269}</h4>
									<select name="CID" id="CID">
										<option value="">{$lang270}</option>
										{section name=i loop=$c}                  
										<option value="{$c[i].CID}">{$c[i].cname}</option>
										{/section}
									</select>                        
									<p class="info" style="visibility:hidden">{$lang271}</p>
								</label>
							</div>
							<div class="field">
								<label>
									<h4>{$lang113}<span>({$lang114})</span></h4>
									<input id="photo_tag_input" type="text" class="text tag_input tipped" name="tags" value="" placeholder="tag 1, tag 2, tag 3, tag 4, tag 5"/>
									<p class="info" style="visibility:hidden">{$lang118}</p>
								</label>
							</div>
							<div class="field">
								<label>
									<h4>{$lang115}<span>({$lang114})</span></h4>
									<input type="text" class="text tipped" name="source" value="" maxlength="300"/>
									<p class="info" style="visibility:hidden">{$lang116}</p>
								</label>                    
							</div>
							<hr />
							{if $safemode eq "1"}
							<div class="field checkbox">
								<label for="submit-nsfw">
									<input id="submit-nsfw" type="checkbox" class="checkbox" name="nsfw" value="1" />{$lang117}</label>
								</div>
								{/if}
								<hr>
								<div class="wrapped-content">
									<div class="actions">
										<ul class="buttons">
											<li class="loading-btn" style="visibility:hidden"><a class="button loading"></a></li>
											

											<input class="push-right push-small button radius secondary" type="reset" value="{$lang119}">
											<input class="button radius ui-state-valid" type="submit" id="ekle" value="{$lang120}">

										</ul>
									</div>
									{literal}
									<script type="text/javascript">
										$('input').each(function()
										{
											$(this).focus(function()
											{
												$(this ).next('.info').css('visibility','visible');
											})
											$(this).blur(function()
											{
												$(this).next('.info').css('visibility','hidden');
											})
										});
										$('#ekle').click(function(){
											$('#form-b9gcs-soft-post-image').submit();
										});
									</script>
									{/literal}

								</div>
							</form>
						</div>
					</figure>

					
				</article>










			</div>

		</section>

		<!-- =Main Content -->




	</div>
	<!-- =Container -->
