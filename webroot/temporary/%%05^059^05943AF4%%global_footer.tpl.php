<?php /* Smarty version 2.6.6, created on 2017-05-15 16:03:59
         compiled from administrator/global_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'administrator/global_footer.tpl', 7, false),)), $this); ?>
	<div class="footer">
        <p class="bug-report">
    	<a id="footer_bug_tracking">Powered by Codehaivl.com</a>
    	</p>

        <p class="legality">
            Copyright &copy; 2014 <?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<br />
            All Rights Reserved.
        </p>
        
	</div>

</div>

</body>
</html>