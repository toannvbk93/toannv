<!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="{$lang254}" dir="{$lang255}">
<head>
<title>{$pagetitle|stripslashes}</title>
<link rel="shortcut icon" href="{$baseurl}/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html, charset=utf-8" />
<meta content="width=device-width,initial-scale=1" name="viewport" />
<link rel="stylesheet" href="{$baseurl}/css/connect_{$lang255}.css" media="screen,projection" type="text/css" />
</head>

<body id="page-signup">
    <div class="signup-wrapper">

        <div class="header">
        	<a href="{$baseurl}"><h1></h1></a>
        </div>
        <div class="content">
            <form id="form-signup-login" class="generic" action="{$baseurl}/login" method="post">
                	{if $error ne ""}
                    <p id="setup-msg" class="message red">{$error}</p>
                  {/if}
                  <div id="login-username-block" class="field">
                  	<label>{$lang36}</label>
                  	<input id="login-username" type="text" class="text" name="username" placeholder="{$lang36}" tabindex="1" maxlength="200" value=""/>
                  </div>
                  <div id="login-email-block" class="field">
                      <label>{$lang20}<span> (<a id="recover-to-login" href="#">{$lang27}</a>)</span>
                      </label>
                      <input id="login-email" type="text" class="text" name="email" placeholder="{$lang20}" tabindex="2" maxlength="200" value=""/>
                  </div>
                  <div id="login-password-block" class="field">
                      <label>{$lang2}
                      <span>(<a id="login-to-recover" href="#">{$lang28}<span class="badge-js" style="color:#a900f0;" key="?"></span></a>)</span>
                      </label>
                      <input id="login-password" type="password" class="text" name="password" placeholder="{$lang2}" tabindex="3" maxlength="32"/>
                  </div>
  				        <div id="login-rememberme-block" class="field">
                      <label>{$lang273} : <input name="rememberme" type="checkbox" tabindex="4" />
                      </label>
                  </div>
                  <div class="action">
                  	<input id="logsub" type="hidden" name="logsub" value="1"></input>
                  	<input id="login-submit" type="submit" class="submit-button" value="{$lang29}"></input>
                  </div>
            </form>
        </div>
    </div>
    <div id="fb-root"></div>
    <script type="text/javascript" src="{$baseurl}/js/connect.js"></script>
</body>
</html>
