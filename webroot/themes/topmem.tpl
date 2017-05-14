<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link href="{$baseurl}/css/style_LTR.css" media="screen" rel="stylesheet" type="text/css" />


</head>
     
                <div class="popular-block">
                    <h3>Top học sinh giỏi</h3>
                   
                    	<div id="topUserContent">

                    <div class="topUsers">
                 	{section name=i loop=$users}   
                 	{insert name=get_member_profilepicture assign=profilepicture value=var username=$posts[i].username}
            <div class="item">
                <a target="_parent" href="{$baseurl}/user/{$users[i].USERID}">
                    <img src="{$membersprofilepicurl}/thumbs/{if $users[i].profilepicture eq ""}noprofilepicture.jpg{else}{$users[i].profilepicture}{/if}?{$smarty.now}">
                    <div class="info">
                        <span class="name">{$users[i].username}</span> </a> <span class="loved">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$users[i].points}</span>
                    </div>
               
            </div>
        	{/section}    
    </div>
    <div class="clear">

    <div class="moreTop"><a href="{$baseurl}/top-users" target="_parent">xem thêm »</a></div>

            </div>
      
                </div>
    