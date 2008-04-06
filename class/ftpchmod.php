<?php

class SmartcloneFtpchmod {

	var $_conn_id;
	var $_ftp_root;
	var $_logs;

	function SmartcloneFtpchmod() {

	}

	function addLog($v) {
		$this->_logs[$v];
	}
	
	function getLogs() {
		return $this->_logs;
	}
	
	function chmod_open()
	{
	   	// Use your own FTP info
	   	/**
	   	 * @todo capture FT details via the form 
	   	 * for now we will deactivate this feature
	   	 */
		
		$ftp_user_name = 'marcan@test.com';
	   	$ftp_user_pass = 'test';
	   	$ftp_server = 'localhost';
	   	$this->_ftp_root = '/';
	   	//$this->_conn_id =  ftp_connect($ftp_server);
	   	//$login_result = ftp_login($this->_conn_id, $ftp_user_name, $ftp_user_pass);
	   	//$this->addLog('login result = ' . $login_result);
	   return $this->_conn_id;
	}

	function chmod_file($permissions, $path)
	{
	   if (ftp_site($this->_conn_id, 'CHMOD ' . $permissions . ' ' . $this->_ftp_root . $path) !== false)
	   {
	       return TRUE;
	   }
	   else
	   {
	       return FALSE;
	   }
	}

	function chmod_close()
	{
	   ftp_close($this->_conn_id);
	}

	function changePermissions($permission)
	{
		// CHMOD the required setup files

		// Connect to the FTP
		$this->chmod_open();

		// CHMOD each file and echo the results
		$this->addLog($this->chmod_file($permission, 'modules') ? 'CHMODed successfully!' : 'Error');

		// Close the connection
		$this->chmod_close();
	}
}
?>