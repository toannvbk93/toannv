<?php /* Smarty version 2.6.6, created on 2017-05-17 14:52:10
         compiled from administrator/show_message.tpl */ ?>
<?php if ($this->_tpl_vars['error'] != ""): ?>
								<ul class="messages">
                                    <li class="error-msg">
                                    	<ul><li><?php echo $this->_tpl_vars['error']; ?>
</li></ul>
                                    </li>
                                </ul>
<?php endif; ?>
<?php if ($this->_tpl_vars['message'] != ""): ?>
								<ul class="messages">
                                	<li class="success-msg">
                                    	<ul><li><?php echo $this->_tpl_vars['message']; ?>
</li></ul>
                                    </li>
                                </ul>
<?php endif; ?>