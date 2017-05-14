{if $error ne ""}
<p class="form-message error">{$error}</p>
{elseif $message ne ""}
<p class="form-message success">{$message}</p>
{/if}
<div id="main">
    <div id="content-holder">
        <div id="b9gcs-soft-post" class="b9gcs-soft-box static">
        
            <div class="head">
                <ul class="switch">
                	<li class="tab_photo current"><a class="photo" href="{$baseurl}/submit">{$lang100}</a></li>
					{if $vupload eq "1"}
                	<li class="tab_video "><a class="video" href="{$baseurl}/submit?t=v">{$lang101}</a></li>
					{/if}
                </ul>
            </div>
        
            <div class="content form_photo">
                <form id="form-b9gcs-soft-post-image" class="modal" action="{$baseurl}/submit{if $smarty.request.file eq "1"}?file=1{/if}" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="type" value="Photo"/>
                    <input id="post_type" type="hidden" name="post_type" value="Photo"/>
                    <h3>{$lang102}</h3>
                    {if $smarty.request.file eq "1"}
                    <div class="field">
                        <label>
                            <h4>{$lang103}</h4>                            
                            <input id="photo_file_upload" class="file text " type="file" name="image" style="display:block;"></input>
                        </label>
                    	<p class="info"><a class="upload_photo" href="{$baseurl}/submit"><strong>{$lang106}</strong></a> {$lang107}</p>
                    </div>
                    {else}
                    <div class="field">
                        <label>
                            <h4>{$lang104}</h4>                        
                            <input id="photo_post_url" type="text" class="text" name="url" value="{$url|stripslashes}" style="display:block;" placeholder="Copy và dán link ảnh tại đây"></input>
                        </label>
                        <p class="info"><a class="upload_photo" href="{$baseurl}/submit?file=1"><strong>{$lang105}</strong></a> {$lang107}</p>
                    </div>
                    {/if}
                    <div class="field">
                        <label>
                            <h4>{$lang111}</h4>
                            <input id="post_title" type="text" class="text tipped" name="title" maxlength="120" value=""/>
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
                    
            
                 
                    <hr />
					{if $safemode eq "1"}
                    <div class="field checkbox">
                    	<label for="submit-nsfw">
                    	<input id="submit-nsfw" type="checkbox" class="checkbox" name="nsfw" value="1" />{$lang117}</label>
                    </div>
					{/if}
                </form>
            </div>
        
        
            <div class="actions">
                <ul class="buttons">
                    <li class="loading-btn" style="visibility:hidden"><a class="button loading"></a></li>
                   
                       <li class="form-btn"><a class="cancel" href="{$baseurl}/submitfull?file=1" >Khung soạn thảo đầy đủ</a></li>
                    <li class="form-btn"><a class="button send" id="ekle" >{$lang120}</a></li>
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
    </div>
</div>

<div class="side-bar">
    <div class="msg-box notice">
    	<h3>{$lang121}</h3>
    	<p>Số bài cho phép trong ngày:{$quota}</p>
    </div>

    <div class="msg-box">
        <h3>{$lang123}</h3>
        <ol class="submit-info">
            <li><b>{$lang124}</b></li>
            <li><b>{$lang125} </b></li>
            <li><b>{$lang127}</b></li>
            <li><b>{$lang128}</b></li>
            <li><b>{$lang129}</b></li>
            <li><b>{$lang130}</b></li>
          
                                    
        </ol>
        <p class="memo"><b>{$lang136}</b><br> {$lang137}<span class="badge-js" key="!"></span></p>
    </div>
</div>
<div id="footer" class="">