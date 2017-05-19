<?php /* Smarty version 2.6.6, created on 2017-05-19 19:05:09
         compiled from login_edit.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS -->
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/assets/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/assets/css/form-elements.css">
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/assets/css/style.css">
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
                              <h3><?php echo $this->_tpl_vars['lang10']; ?>
</h3>
                              <p><?php echo $this->_tpl_vars['lang11']; ?>
</p>
                           </div>
                           <div class="form-top-right">
                              <i class="fa fa-key"></i>
                           </div>
                        </div>
                        <div class="form-bottom">
                          <p id="error_login"><?php echo $this->_tpl_vars['error']; ?>
</p>
                           <form role="form" action="login" method="post" class="login-form">
                              <div class="form-group">
                                 <input id="login_username" name="username" type="text" name="form-username" placeholder="<?php echo $this->_tpl_vars['lang36']; ?>
..." class="form-username form-control" id="form-username">
                                 <p id="null_login_name"></p>
                              </div>
                              <div class="form-group">
                                 <input id="login_password" name="password" type="password" name="form-password" placeholder="<?php echo $this->_tpl_vars['lang2']; ?>
..." class="form-password form-control" id="form-password">
                                 <p id="null_login_password"></p>
                              </div>
                              <div id="login-rememberme-block" class="field">
                                  <label><?php echo $this->_tpl_vars['lang273']; ?>
 : <input name="rememberme" type="checkbox" tabindex="4" />
                                  </label>
                              </div>
                              <input id="logsub" type="hidden" name="logsub" value="1"></input>
                              <input class="btn btn-primary btn-lg btn-block" type="submit" value="<?php echo $this->_tpl_vars['lang29']; ?>
" onclick="checkValue()" formaction="login">
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
                              <h3><?php echo $this->_tpl_vars['lang0']; ?>
</h3>
                              <p><?php echo $this->_tpl_vars['lang43']; ?>
</p>
                              <p><?php echo $this->_tpl_vars['error_signin']; ?>
</p>
                           </div>
                           <div class="form-top-right">
                              <i class="fa fa-pencil"></i>
                           </div>
                        </div>
                        <div class="form-bottom">
                           <form role="form" action="login" method="post" class="registration-form">
                              <div class="form-group">
                                 <label class="sr-only" for="form-first-name"><?php echo $this->_tpl_vars['lang36']; ?>
 :</label>
                                 <input name="name" type="text" placeholder="<?php echo $this->_tpl_vars['lang36']; ?>
..." class="form-first-name form-control" id="form-first-name">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="form-password"><?php echo $this->_tpl_vars['lang35']; ?>
</label>
                                 <input name="pass" type="password" name="form-password" placeholder="<?php echo $this->_tpl_vars['lang35']; ?>
..." class="form-last-name form-control" id="form-last-name">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="form-email"><?php echo $this->_tpl_vars['lang20']; ?>
</label>
                                 <input name="mail" type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="form-about-yourself"><?php echo $this->_tpl_vars['lang67']; ?>
</label>
                                 <textarea name="yourself" placeholder="<?php echo $this->_tpl_vars['lang67']; ?>
..."
                                    class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                              </div>
                                <input type="hidden" name="signin" value="signin"></input>
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="<?php echo $this->_tpl_vars['lang24']; ?>
"/>
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
      <script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/assets/js/jquery-1.11.1.min.js"></script>
      <script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/assets/js/scripts.js"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/login.js"></script>
   </body>
</html>