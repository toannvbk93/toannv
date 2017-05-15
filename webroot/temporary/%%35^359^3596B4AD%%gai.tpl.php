<?php /* Smarty version 2.6.6, created on 2017-05-15 15:40:30
         compiled from administrator/gai.tpl */ ?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Lấy bài page hài hước</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="page.php" id="isoft_group_1" name="group_1" title="Lấy bài gái xinh" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                       Lấy bài gái xinh
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Lấy bài gái xinh</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                       <iframe width="1027" frameborder="0" scrolling="yes" height="768" seamless="seamless" src="http://codehaivl2015.com/laybai/gai.php"></iframe> 
									</div>
								</div>
    						</li>
                            

    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            <?php if ($this->_tpl_vars['message'] != "" || $this->_tpl_vars['error'] != ""): ?>
                            	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administrator/show_message.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php endif; ?>
                            </div>
                           
                            <form action="sitemap.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>