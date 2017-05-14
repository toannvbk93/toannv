<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS -->
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
      <link rel="stylesheet" href="{$baseurl}/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="{$baseurl}/assets/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="{$baseurl}/assets/css/form-elements.css">
      <link rel="stylesheet" href="{$baseurl}/assets/css/style.css">
      <script></script>
   </head>
   <body>
      <!-- Top content -->
      <div class="top-content">
         <div class="inner-bg">
            <div class="container">
               <div class="row">
                  <div class="col-sm-5">
                     <div class="form-box">
                        <div class="form-top">
                           <div class="form-top-left">
                              <h3>{$lang10}</h3>
                              <p>{$lang11}</p>
                           </div>
                           <div class="form-top-right">
                              <i class="fa fa-key"></i>
                           </div>
                        </div>
                        <div class="form-bottom">
                          <p id="error_login">{$error}</p>
                           <form role="form" action="login" method="post" class="login-form">
                              <div class="form-group">
                                 <input id="login_username" name="username" type="text" name="form-username" placeholder="{$lang36}..." class="form-username form-control" id="form-username">
                                 <p id="null_login_name"></p>
                              </div>
                              <div class="form-group">
                                 <input id="login_password" name="password" type="password" name="form-password" placeholder="{$lang2}..." class="form-password form-control" id="form-password">
                                 <p id="null_login_password"></p>
                              </div>
                              <div id="login-rememberme-block" class="field">
                                  <label>{$lang273} : <input name="rememberme" type="checkbox" tabindex="4" />
                                  </label>
                              </div>
                              <input id="logsub" type="hidden" name="logsub" value="1"></input>
                              <input class="btn btn-primary btn-lg btn-block" type="submit" value="{$lang29}" onclick="checkValue()" formaction="login">
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-1 middle-border"></div>
                  <div class="col-sm-1"></div>
                  <div class="col-sm-5">
                     <div class="form-box">
                        <div class="form-top">
                           <div class="form-top-left">
                              <h3>{$lang0}</h3>
                              <p>{$lang43}</p>
                              <p>{$error_signin}</p>
                           </div>
                           <div class="form-top-right">
                              <i class="fa fa-pencil"></i>
                           </div>
                        </div>
                        <div class="form-bottom">
                           <form role="form" action="login" method="post" class="registration-form">
                              <div class="form-group">
                                 <label class="sr-only" for="form-first-name">{$lang36} :</label>
                                 <input name="name" type="text" placeholder="{$lang36}..." class="form-first-name form-control" id="form-first-name">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="form-password">{$lang35}</label>
                                 <input name="pass" type="password" name="form-password" placeholder="{$lang35}..." class="form-last-name form-control" id="form-last-name">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="form-email">{$lang20}</label>
                                 <input name="mail" type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="form-about-yourself">{$lang67}</label>
                                 <textarea name="yourself" placeholder="{$lang67}..."
                                    class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                              </div>
                                <input type="hidden" name="signin" value="signin"></input>
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="{$lang24}"/>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-sm-offset-2">
                  <div class="footer-border"></div>
                  <i class="fa fa-smile-o"></i></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- Javascript -->
      <script src="{$baseurl}/assets/js/jquery-1.11.1.min.js"></script>
      <script src="{$baseurl}/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="{$baseurl}/assets/js/scripts.js"></script>
      <script type="text/javascript" src="{$baseurl}/js/login.js"></script>
   </body>
</html>
