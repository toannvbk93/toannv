<?php /* Smarty version 2.6.6, created on 2014-12-23 03:44:37
         compiled from administrator/ads_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'administrator/ads_edit.tpl', 59, false),)), $this); ?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Quảng Cáo</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="ads_manage.php" id="isoft_group_1" name="group_1" title="Quảng Cáo" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Quảng Cáo
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Sửa Quảng Cáo</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

										<fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                            	<table cellspacing="0" class="form-list">
                                                <tbody>
                                                	<tr class="hidden">
                                                        <td class="label"><label for="name">ID </label></td>
                                                        <td class="value">
                                                        	<?php echo $this->_tpl_vars['ad']['AID']; ?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                	<tr class="hidden">
                                                        <td class="label"><label for="name">Mô tả </label></td>
                                                        <td class="value">
                                                        	<input id="details" name="details" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ad']['description'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MÔ TẢ CỦA QUẢNG CÁO]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                	<tr class="hidden">
                                                        <td class="label"><label for="name">Nội dung </label></td>
                                                        <td class="value">
                                                        	<textarea id="code" name="maqc" class=" textarea" type="textarea" ><?php echo ((is_array($_tmp=$this->_tpl_vars['ad']['code'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
                                                        </td>
                                                        <td class="scope-label">[NỘI DUNG CỦA QUẢNG CÁO]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Kích hoạt </label></td>
                                                        <td class="value">
                                                        	<select name="active" id="active">
                                                            <option value="1" <?php if ($this->_tpl_vars['ad']['active'] == 1): ?>selected<?php endif; ?>>Có</option>
                                                            <option value="0" <?php if ($this->_tpl_vars['ad']['active'] == 0): ?>selected<?php endif; ?>>Không</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[TÍNH TRẠNG CỦA QUẢNG CÁO]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
                                        
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
    						</li>
                            
                            <li >
                                <a href="ads_create.php" id="isoft_group_2" name="group_2" title="Tạo Quảng Cáo" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Tạo Quảng Cáo
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
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

                            <div class="content-header">
                               <h3 class="icon-head head-products">Quảng Cáo - Sửa Quảng Cáo</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Lưu Thay Đổi</span></button>			
                                </p>
                            </div>
                            
                            <form action="ads_edit.php?AID=<?php echo $_REQUEST['AID']; ?>
" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>