<?php /* Smarty version 2.6.6, created on 2017-05-20 07:49:48
         compiled from quick.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'quick.tpl', 65, false),)), $this); ?>
<div class="row mainbody-singlecol masonry quick-submit-wrapper">
	<div class="submitContainer indexSubmit">
	<div style="width: 655px" class="fl-l">
		<div class="quickSubmitForm">
		<form method="post" enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/submit" class="modal" id="form-post-image"> 	
			<input type="text" value="" placeholder="Bạn có gì hay muốn chia sẻ?" name="title" class="whiteTextbox" id="post_title">
			<div style="display: none" id="postPhotoForm">
				<div style="padding: 0px 5px" class="whiteTextbox focus">Chọn file ảnh: <input type="file" name="image" class="file" id="photo_file_upload"></div>		
				<div class="boxAnchor"></div>
			</div>
			<div style="position: relative; display: none" id="postMusicForm">
				<div class="whiteTextbox focus">
					<input type="text" placeholder="Nhập đường dẫn đến bài hát" style="display:block;" value="" name="url" class="whiteTextbox" id="music_post_url">
					<!--<input id="type" name="t" value="v" type="hidden"/>-->
					<div title="Hỗ trợ đăng nhạc từ Zing MP3" class="zingmp3Logo"></div>
				</div>
				<div class="boxAnchor"></div>
			</div>
						
			<div style="position: relative; display: none" id="postVideoForm">
				<div class="whiteTextbox focus">
					<input type="text" placeholder="Nhập đường dẫn đến video clip" style="display:block;" value="" name="url" class="whiteTextbox" id="photo_post_url">
					<!--<input id="type" name="t" value="v" type="hidden"/>-->
					<div title="Hỗ trợ YouTube, Vimeo " class="supportedLogo"></div>
				</div>
				<div class="boxAnchor"></div>
			</div>
			
            <input type="hidden" value="Photo" name="post_type" id="post_type">					
			<input type="hidden" maxlength="300" value="Sưu tầm" name="source" id="source">				
		</form>
		<div class="submitTools">
			<div class="postType">
				<?php if ($_SESSION['USERID'] != ""): ?>
				<a title="Đăng hình" id="clickSubmitPhoto" class="submit " href="#"></a>
				<a title="Đăng nhạc" id="clickSubmitMusic" class="submit " href="#"></a>
				<a title="Đăng clip" id="clickSubmitVideo" class="submit " href="#"></a>	
				<?php else: ?>  
				<a href="#" class="submit loginRequired" id="clickSubmitPhoto" title="Đăng hình"></a>
				<a href="#" class="submit loginRequired" id="clickSubmitMusic" title="Đăng nhạc"></a>
				<a href="#" class="submit loginRequired" id="clickSubmitVideo" title="Đăng clip"></a>	
				 <?php endif; ?>
					
			</div>
			<div style="display: none" class="fl-l" id="videoLoadingImg"><img alt="loading..." src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/hnnloading.gif"></div>
			<div class="fl-r">
				<input type="button" style="margin-right: 0px; margin-left: auto; float: right" value="Ngay và luôn" class="button blue-button" id="btnSubmit">
			</div>
			<div class="tipss">
				<span id="photoTips">Ảnh JPG, JPEG, PNG Dung lượng không quá 4MB.</span>
				<span id="videoTips">Xem mẫu link</span>
			</div>				
			<div class="clear"></div>
			<div style="display: none" class="whiteTextbox videoInfo">
				<div class="videoInfoThumbnail"></div>
				<div class="videoInfoTitle"></div>
				<div class="clear"></div>
			</div>
		</div>
				
		</div>
	</div> <?php if ($_SESSION['USERID'] != ""): ?>
			<div class="fl-l userInfo">	
						<div class="notch"></div>				
			<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" title="Đến trang cá nhân">
				<img class="avatar roundedAvatar" title="" src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo ((is_array($_tmp=$_SESSION['USERID'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
.jpg?<?php echo time(); ?>
">
				<!--<img class="avatar roundedAvatar" title="" src="http://graph.facebook.com/620615063/picture?width=50&amp;height=50">-->
			</a>
			</div>
			
			   <?php else: ?>         
			<div class="fl-l userInfo">	
						<div class="notch"></div>				
			<a href="#" title="Đến trang cá nhân">
				<img class="avatar roundedAvatar" title="" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/gau.png">
				
			</a>
			</div>			
			  <?php endif; ?>
			 
		<div id="exampleLinks">
		<b>Mẫu link YouTube</b>
		<ul>
			<li>- http://www.youtube.com/watch?v=9bZkp7q19f0</li>
		
		</ul>
		
		<b>Mẫu link Vimeo</b>
		<ul>
			<li>- http://vimeo.com/780587890</li>
		
		</ul>
			
		<b>Mẫu link Zing MP3</b>
		<ul>
			<li>- http://mp3.zing.vn/bai-hat/&lt;tên bài hát&gt;/ZW66WEOF.html</li>
		
		</ul>		
	</div>
<div class="clear"></div>
</div>

<div id="fileEmptyAlert" style="display: none" title="Thiếu thông tin">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Chưa chọn file thì lấy gì mà đăng?</p>
</div>
<div id="mediaIsRequired" style="display: none" title="Thiếu thông tin">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Để chia sẻ, bạn cần phải đính kèm hình hoặc clip.</p>
</div>
<div id="titleEmptyAlert" style="display: none" title="Thiếu thông tin">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Đặt tiêu đề cho bài viết đi đã chứ =.=</p>
</div>
<div id="titleTooLong" style="display: none" title="Tiêu đề quá dài">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Tiêu đề ảnh của bạn quá dài. Hãy giới hạn dưới 150 ký tự!</p>
</div>	
<div id="wrongExtAlert" style="display: none" title="Không đúng định dạng">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>codehaivl2015.com hiện tại chỉ hỗ trợ đăng ảnh JPG và PNG. Vui lòng chọn lại.</p>
</div>
<div id="invalidVideoURL" style="display: none" title="Link clip không hợp lệ">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Địa chỉ clip bạn nhập không đúng định dạng</p>
</div>
<div id="urlEmptyAlert" style="display: none" title="Thiếu thông tin">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Chưa có đường dẫn nhạc / clip thì lấy gì mà đăng? T__T</p>
</div>
<?php echo '
<script>

$(function(){
    var moveLeft = 20;
    var moveDown = 10;

    $(\'#videoTips\').hover(function(e) {
        $(\'#exampleLinks\').show();
        }, function() {
            $(\'#exampleLinks\').hide();
        });

        $(\'#videoTips\').mousemove(function(e) {
            $("#exampleLinks").css(\'top\', e.pageY + moveDown).css(\'left\', e.pageX + moveLeft);
    });    
    $("#clickSubmitVideo-disabled, #clickSubmitMusic-disabled").mouseover(function(){
        $("#uploadDisabledTooltip").fadeIn();
    });
    $("#clickSubmitVideo-disabled, #clickSubmitMusic-disabled").mouseleave(function(){
        $("#uploadDisabledTooltip").fadeOut();
    });
    $("#clickSubmitPhoto-disabled").mouseover(function(){
        $("#photoDisabledTooltip").fadeIn();
    });
    $("#clickSubmitPhoto-disabled").mouseleave(function(){
        $("#photoDisabledTooltip").fadeOut();
    });
})

</script>'; ?>

	</div>