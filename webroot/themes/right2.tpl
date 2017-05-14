
		<div style="margin-bottom:5px;">          
            
           
        	{insert name=get_advertisement AID=1}

            </div>
    	{if $smarty.session.USERID ne ""}
		<div class="user-block">
				<h3>{$lang257} <a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}">{$smarty.session.USERNAME|stripslashes}</a></h3>
				{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
				<img id="uploaded_img" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" alt="avatar" style="border: 2px solid rgb(187, 187, 187); float: left; margin-right: 10px;width:80px;height:80px" />
				<div class="userinfoblock"> 
					<a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}">{$lang192}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/likes">{$lang193}</a><br>
					<a href="{$baseurl}/settings">{$lang45}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{$baseurl}/user/{$smarty.session.USERID|stripslashes}/messages">{$lang194}</a><br>
				</div>
				{literal}
                <script type="text/javascript">
                function loadContent(elementSelector, sourceURL) {
                $(""+elementSelector+"").load(""+sourceURL+"");
                }
                </script>
                {/literal}
                <div id="loadme"></div>
			<div style="clear: both;"></div>
			<div style="margin-top: 15px; padding-top: 10px; border-top: 1px solid rgb(187, 187, 187);">
				 <a href="javascript:loadContent('#loadme', '{$baseurl}/log_out');">{$lang198}</a>
				<div style="clear: both;"></div>
			</div>
			</div>
		{else}  
			<div class="social-block">
				
				<div id="signup-desc" class="description">
				<div class="spcl-button-wrap">
			
				{if $TC eq "1"}
				<a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me">{$lang14}</a>
			
				{/if}
				</div>
				</div>
			</div>
		{/if}
     