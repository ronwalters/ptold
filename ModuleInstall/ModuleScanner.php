<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

class ModuleScanner{
	private $manifestMap = array(
			'pre_execute'=>'pre_execute',
			'install_mkdirs'=>'mkdir',
			'install_copy'=>'copy',
			'install_images'=>'image_dir',
			'install_menus'=>'menu',
			'install_userpage'=>'user_page',
			'install_dashlets'=>'dashlets',
			'install_administration'=>'administration',
			'install_connectors'=>'connectors',
			'install_vardefs'=>'vardefs',
			'install_layoutdefs'=>'layoutdefs',
			'install_layoutfields'=>'layoutfields',
			'install_relationships'=>'relationships',
			'install_languages'=>'language',
            'install_logichooks'=>'logic_hooks',
			'post_execute'=>'post_execute',

	);

	/**
	 * config settings
	 * @var array
	 */
	private $config = array();
	private $config_hash;

	private $blackListExempt = array();
	private $classBlackListExempt = array();

	private $validExt = array('png', 'gif', 'jpg', 'css', 'js', 'php', 'txt', 'html', 'htm', 'tpl', 'pdf', 'md5', 'xml');
	private $classBlackList = array(
        // Class names specified here must be in lowercase as the implementation
        // of the tokenizer converts all tokens to lowercase.
        'reflection',
        'reflectionclass',
        'reflectionzendextension',
        'reflectionextension',
        'reflectionfunction',
        'reflectionfunctionabstract',
        'reflectionmethod',
        'reflectionobject',
        'reflectionparameter',
        'reflectionproperty',
        'reflector',
        'reflectionexception',
        'lua',
    );
	private $blackList = array(
    'popen',
    'proc_open',
    'escapeshellarg',
    'escapeshellcmd',
    'proc_close',
    'proc_get_status',
    'proc_nice',
	'passthru',
    'clearstatcache',
    'disk_free_space',
    'disk_total_space',
    'diskfreespace',
    'fclose',
    'feof',
    'fflush',
    'fgetc',
    'fgetcsv',
    'fgets',
    'fgetss',
    'file_exists',
    'file_get_contents',
    'filesize',
    'filetype',
    'flock',
    'fnmatch',
    'fpassthru',
    'fputcsv',
    'fputs',
    'fread',
    'fscanf',
    'fseek',
    'fstat',
    'ftell',
    'ftruncate',
    'fwrite',
    'glob',
    'is_dir',
    'is_file',
    'is_link',
    'is_readable',
    'is_uploaded_file',
    'parse_ini_string',
    'pathinfo',
    'pclose',
    'readfile',
    'readlink',
    'realpath_cache_get',
    'realpath_cache_size',
    'realpath',
    'rewind',
    'set_file_buffer',
    'tmpfile',
    'umask',
    'ini_set',
	'eval',
	'exec',
	'system',
	'shell_exec',
	'passthru',
	'chgrp',
	'chmod',
	'chwown',
	'file_put_contents',
	'file',
	'fileatime',
	'filectime',
	'filegroup',
	'fileinode',
	'filemtime',
	'fileowner',
	'fileperms',
	'fopen',
	'is_executable',
	'is_writable',
	'is_writeable',
	'lchgrp',
	'lchown',
	'linkinfo',
	'lstat',
	'mkdir',
    'mkdir_recursive',
	'parse_ini_file',
	'rmdir',
    'rmdir_recursive',
	'stat',
	'tempnam',
	'touch',
	'unlink',
	'getimagesize',
	'call_user_func',
	'call_user_func_array',
	'create_function',


	//mutliple files per function call
	'copy',
    'copy_recursive',
	'link',
	'rename',
	'symlink',
	'move_uploaded_file',
	'chdir',
	'chroot',
	'create_cache_directory',
	'mk_temp_dir',
	'write_array_to_file',
	'write_encoded_file',
	'create_custom_directory',
	'sugar_rename',
	'sugar_chown',
	'sugar_fopen',
	'sugar_mkdir',
	'sugar_file_put_contents',
	'sugar_chgrp',
	'sugar_chmod',
	'sugar_touch',

        // Functions that have callbacks can circumvent our security measures.
        // List retrieved through PHP's XML documentation, and running the
        // following script in the reference directory:

        // grep -R callable . | grep -v \.svn | grep methodparam | cut -d: -f1 | sort -u | cut -d"." -f2 | sed 's/\-/\_/g' | cut -d"/" -f4

        // AMQPQueue
        'consume',

        // PHP internal - arrays
        'array_diff_uassoc',
        'array_diff_ukey',
        'array_filter',
        'array_intersect_uassoc',
        'array_intersect_ukey',
        'array_map',
        'array_reduce',
        'array_udiff_assoc',
        'array_udiff_uassoc',
        'array_udiff',
        'array_uintersect_assoc',
        'array_uintersect_uassoc',
        'array_uintersect',
        'array_walk_recursive',
        'array_walk',
        'uasort',
        'uksort',
        'usort',

        // EIO functions that accept callbacks.
        'eio_busy',
        'eio_chmod',
        'eio_chown',
        'eio_close',
        'eio_custom',
        'eio_dup2',
        'eio_fallocate',
        'eio_fchmod',
        'eio_fchown',
        'eio_fdatasync',
        'eio_fstat',
        'eio_fstatvfs',
        'eio_fsync',
        'eio_ftruncate',
        'eio_futime',
        'eio_grp',
        'eio_link',
        'eio_lstat',
        'eio_mkdir',
        'eio_mknod',
        'eio_nop',
        'eio_open',
        'eio_read',
        'eio_readahead',
        'eio_readdir',
        'eio_readlink',
        'eio_realpath',
        'eio_rename',
        'eio_rmdir',
        'eio_sendfile',
        'eio_stat',
        'eio_statvfs',
        'eio_symlink',
        'eio_sync_file_range',
        'eio_sync',
        'eio_syncfs',
        'eio_truncate',
        'eio_unlink',
        'eio_utime',
        'eio_write',

        // PHP internal - error functions
        'set_error_handler',
        'set_exception_handler',

        // Forms Data Format functions
        'fdf_enum_values',

        // PHP internal - function handling
        'call_user_func_array',
        'call_user_func',
        'forward_static_call_array',
        'forward_static_call',
        'register_shutdown_function',
        'register_tick_function',

        // Gearman
        'setclientcallback',
        'setcompletecallback',
        'setdatacallback',
        'setexceptioncallback',
        'setfailcallback',
        'setstatuscallback',
        'setwarningcallback',
        'setworkloadcallback',
        'addfunction',

        // Firebird/InterBase
        'ibase_set_event_handler',

        // LDAP
        'ldap_set_rebind_proc',

        // LibXML
        'libxml_set_external_entity_loader',

        // Mailparse functions
        'mailparse_msg_extract_part_file',
        'mailparse_msg_extract_part',
        'mailparse_msg_extract_whole_part_file',

        // Memcache(d) functions
        'addserver',
        'setserverparams',
        'get',
        'getbykey',
        'getdelayed',
        'getdelayedbykey',

        // MySQLi
        'set_local_infile_handler',

        // PHP internal - network functions
        'header_register_callback',

        // Newt
        'newt_entry_set_filter',
        'newt_set_suspend_callback',

        // OAuth
        'consumerhandler',
        'timestampnoncehandler',
        'tokenhandler',

        // PHP internal - output control
        'ob_start',

        // PHP internal - PCNTL
        'pcntl_signal',

        // PHP internal - PCRE
        'preg_replace_callback',

        // SQLite
        'sqlitecreateaggregate',
        'sqlitecreatefunction',
        'sqlite_create_aggregate',
        'sqlite_create_function',

        // RarArchive
        'open',

        // Readline
        'readline_callback_handler_install',
        'readline_completion_function',

        // PHP internal - session handling
        'session_set_save_handler',

        // PHP internal - SPL
        'construct',
        'iterator_apply',
        'spl_autoload_register',

        // Sybase
        'sybase_set_message_handler',

        // PHP internal - variable handling
        'is_callable',

        // XML Parser
        'xml_set_character_data_handler',
        'xml_set_default_handler',
        'xml_set_element_handler',
        'xml_set_end_namespace_decl_handler',
        'xml_set_external_entity_ref_handler',
        'xml_set_notation_decl_handler',
        'xml_set_processing_instruction_handler',
        'xml_set_start_namespace_decl_handler',
        'xml_set_unparsed_entity_decl_handler',
);
    private $methodsBlackList = array('setlevel');

	public function printToWiki(){
		echo "'''Default Extensions'''<br>";
		foreach($this->validExt as $b){
			echo '#' . $b . '<br>';

		}
		echo "'''Default Black Listed Functions'''<br>";
		foreach($this->blackList as $b){
			echo '#' . $b . '<br>';

		}

	}

	public function __construct(){
	    if(!empty($GLOBALS['sugar_config']['moduleInstaller'])) {
	        $this->config = $GLOBALS['sugar_config']['moduleInstaller'];
	    }

		if(!empty($this->config['blackListExempt'])){
			$this->blackListExempt = array_merge($this->blackListExempt, $this->config['blackListExempt']);
		}
		if(!empty($this->config['blackList'])){
			$this->blackList = array_merge($this->blackList, $this->config['blackList']);
		}
        if(!empty($this->config['classBlackListExempt'])){
            $this->classBlackListExempt = array_merge($this->classBlackListExempt, $this->config['classBlackListExempt']);
        }
        if(!empty($this->config['classBlackList'])){
            $this->classBlackList = array_merge($this->classBlackList, $this->config['classBlackList']);
        }
	  if(!empty($this->config['validExt'])){
			$this->validExt = array_merge($this->validExt, $this->config['validExt']);
		}

	}

	private $issues = array();
	private $pathToModule = '';

	/**
	 *returns a list of issues
	 */
	public function getIssues(){
		return $this->issues;
	}

	/**
	 *returns true or false if any issues were found
	 */
	public function hasIssues(){
		return !empty($this->issues);
	}

	/**
	 *Ensures that a file has a valid extension
	 */
	private function isValidExtension($file){
		$file = strtolower($file);

		$extPos = strrpos($file, '.');
		//make sure they don't override the files.md5
		if($extPos === false || $file == 'files.md5')return false;
		$ext = substr($file, $extPos + 1);
		return in_array($ext, $this->validExt);

	}

	/**
	 *Scans a directory and calls on scan file for each file
	 **/
	public function scanDir($path){
		static $startPath = '';
		if(empty($startPath))$startPath = $path;
		if(!is_dir($path))return false;
		$d = dir($path);
		while($e = $d->read()){
		$next = $path . '/' . $e;
		if(is_dir($next)){
			if(substr($e, 0, 1) == '.')continue;
			$this->scanDir($next);
		}else{
			$issues = $this->scanFile($next);


		}
		}
    	return true;
	}

	/**
	 * Check if the file contents looks like PHP
	 * @param string $contents File contents
	 * @return boolean
	 */
	public function isPHPFile($contents)
	{
	    if(stripos($contents, '<?php') !== false) return true;
	    for($tag=0;($tag = stripos($contents, '<?', $tag)) !== false;$tag++) {
            if(strncasecmp(substr($contents, $tag, 13), '<?xml version', 13) == 0) {
                // <?xml version is OK, skip it
                $tag++;
                continue;
            }
            // found <?, it's PHP
            return true;
	    }
	    return false;
	}

	/**
	 * Given a file it will open it's contents and check if it is a PHP file (not safe to just rely on extensions) if it finds <?php tags it will use the tokenizer to scan the file
	 * $var()  and ` are always prevented then whatever is in the blacklist.
	 * It will also ensure that all files are of valid extension types
	 *
	 */
	public function scanFile($file){
		$issues = array();
		if(!$this->isValidExtension($file)){
			$issues[] = translate('ML_INVALID_EXT');
			$this->issues['file'][$file] = $issues;
			return $issues;
		}
		$contents = file_get_contents($file);
		if(!$this->isPHPFile($contents)) return $issues;
		$tokens = @token_get_all($contents);
		$checkFunction = false;
		$possibleIssue = '';
		$lastToken = false;
		foreach($tokens as $index=>$token){
			if(is_string($token[0])){
				switch($token[0]){
					case '`':
						$issues['backtick'] = translate('ML_INVALID_FUNCTION') . " '`'";
					case '(':
						if($checkFunction)$issues[] = $possibleIssue;
						break;
				}
				$checkFunction = false;
				$possibleIssue = '';
			}else{
				$token['_msi'] = token_name($token[0]);
				switch($token[0]){
					case T_WHITESPACE: continue;
					case T_EVAL:
						if(in_array('eval', $this->blackList) && !in_array('eval', $this->blackListExempt))
						$issues[]= translate('ML_INVALID_FUNCTION') . ' eval()';
						break;
					case T_STRING:
						$token[1] = strtolower($token[1]);
						if($lastToken !== false && $lastToken[0] == T_NEW) {
                            if(!in_array($token[1], $this->classBlackList))break;
                            if(in_array($token[1], $this->classBlackListExempt))break;
                        } elseif ($token[0] == T_DOUBLE_COLON) {
                            if(!in_array($lastToken[1], $this->classBlackList))break;
                            if(in_array($lastToken[1], $this->classBlackListExempt))break;
                        } else {
                            //if nothing else fit, lets check the last token to see if this is a possible method call
                            if ($lastToken !== false &&
                            ($lastToken[0] == T_OBJECT_OPERATOR ||  $lastToken[0] == T_DOUBLE_COLON))
                            {
                                //this is a method call, check the black list
                                if(in_array($token[1], $this->methodsBlackList)){
                                    $issues[]= translate('ML_INVALID_METHOD') . ' ' .$token[1].  '()';
                                }
                                break;
                            }


                            if(!in_array($token[1], $this->blackList))break;
                            if(in_array($token[1], $this->blackListExempt))break;

                        }
					case T_VARIABLE:
						$checkFunction = true;
						$possibleIssue = translate('ML_INVALID_FUNCTION') . ' ' .  $token[1] . '()';
						break;

					default:
						$checkFunction = false;
						$possibleIssue = '';

				}
				if ($token[0] != T_WHITESPACE)
				{
					$lastToken = $token;
				}
			}

		}
		if(!empty($issues)){
			$this->issues['file'][$file] = $issues;
		}

		return $issues;
	}


	/*
	 * checks files.md5 file to see if the file is from sugar
	 * ONLY WORKS ON FILES
	 */
	public function sugarFileExists($path){
		static $md5 = array();
		if(empty($md5) && file_exists('files.md5'))
		{
			include('files.md5');
			$md5 = $md5_string;
		}
		if(isset($md5['./' . $path]))return true;


	}


	/**
	 *This function will scan the Manifest for disabled actions specified in $GLOBALS['sugar_config']['moduleInstaller']['disableActions']
	 *if $GLOBALS['sugar_config']['moduleInstaller']['disableRestrictedCopy'] is set to false or not set it will call on scanCopy to ensure that it is not overriding files
	 */
	public function scanManifest($manifestPath){
		$issues = array();
		if(!file_exists($manifestPath)){
			$this->issues['manifest'][$manifestPath] = translate('ML_NO_MANIFEST');
			return $issues;
		}
		$fileIssues = $this->scanFile($manifestPath);
		//if the manifest contains malicious code do not open it
		if(!empty($fileIssues)){
			return $fileIssues;
		}
		$this->lockConfig();
		list($manifest, $installdefs) = MSLoadManifest($manifestPath);
		$fileIssues = $this->checkConfig($manifestPath);
		if(!empty($fileIssues)){
			return $fileIssues;
		}

		//scan for disabled actions
		if(isset($this->config['disableActions'])){
			foreach($this->config['disableActions'] as $action){
				if(isset($installdefs[$this->manifestMap[$action]])){
					$issues[] = translate('ML_INVALID_ACTION_IN_MANIFEST') . $this->manifestMap[$action];
				}
			}
		}

		//now lets scan for files that will override our files
		if(empty($this->config['disableRestrictedCopy']) && isset($installdefs['copy'])){
			foreach($installdefs['copy'] as $copy){
				$from = str_replace('<basepath>', $this->pathToModule, $copy['from']);
				$to = $copy['to'];
				if(substr_count($from, '..')){
					$this->issues['copy'][$from] = translate('ML_PATH_MAY_NOT_CONTAIN').' ".." -' . $from;
				}
				if(substr_count($to, '..')){
					$this->issues['copy'][$to] = translate('ML_PATH_MAY_NOT_CONTAIN'). ' ".." -' . $to;
				}
				while(substr_count($from, '//')){
					$from = str_replace('//', '/', $from);
				}
				while(substr_count($to, '//')){
					$to = str_replace('//', '/', $to);
				}
				$this->scanCopy($from, $to);
			}
		}
		if(!empty($issues)){
			$this->issues['manifest'][$manifestPath] = $issues;
		}



	}



	/**
	 * Takes in where the file will is specified to be copied from and to
	 * and ensures that there is no official sugar file there. If the file exists it will check
	 * against the MD5 file list to see if Sugar Created the file
	 *
	 */
	function scanCopy($from, $to){
				//if the file doesn't exist for the $to then it is not overriding anything
				if(!file_exists($to))return;
				//if $to is a dir and $from is a file then make $to a full file path as well
				if(is_dir($to) && is_file($from)){
					if(substr($to,-1) === '/'){
						$to = substr($to, 0 , strlen($to) - 1);
					}
					$to .= '/'. basename($from);
				}
				//if the $to is a file and it is found in sugarFileExists then don't allow overriding it
				if(is_file($to) && $this->sugarFileExists($to)){
					$this->issues['copy'][$from] = translate('ML_OVERRIDE_CORE_FILES') . '(' . $to . ')';
				}

				if(is_dir($from)){
					$d = dir($from);
					while($e = $d->read()){
						if($e == '.' || $e == '..')continue;
						$this->scanCopy($from .'/'. $e, $to .'/' . $e);
					}
				}





			}


	/**
	 *Main external function that takes in a path to a package and then scans
	 *that package's manifest for disabled actions and then it scans the PHP files
	 *for restricted function calls
	 *
	 */
	public function scanPackage($path){
		$this->pathToModule = $path;
		$this->scanManifest($path . '/manifest.php');
		if(empty($this->config['disableFileScan'])){
			$this->scanDir($path);
		}
	}

	/**
	 *This function will take all issues of the current instance and print them to the screen
	 **/
	public function displayIssues($package='Package'){
		echo '<h2>'.str_replace('{PACKAGE}' , $package ,translate('ML_PACKAGE_SCANNING')). '</h2><BR><h2 class="error">' . translate('ML_INSTALLATION_FAILED') . '</h2><br><p>' .str_replace('{PACKAGE}' , $package ,translate('ML_PACKAGE_NOT_CONFIRM')). '</p><ul><li>'. translate('ML_OBTAIN_NEW_PACKAGE') . '<li>' . translate('ML_RELAX_LOCAL').
'</ul></p><br>' . translate('ML_SUGAR_LOADING_POLICY') .  ' <a href=" http://kb.sugarcrm.com/custom/module-loader-restrictions-for-sugar-open-cloud/">' . translate('ML_SUGAR_KB') . '</a>.'.
'<br>' . translate('ML_AVAIL_RESTRICTION'). ' <a href=" http://developers.sugarcrm.com/wordpress/2009/08/14/module-loader-restrictions/">' . translate('ML_SUGAR_DZ') .  '</a>.<br><br>';


		foreach($this->issues as $type=>$issues){
			echo '<div class="error"><h2>'. ucfirst($type) .' ' .  translate('ML_ISSUES') . '</h2> </div>';
			echo '<div id="details' . $type . '" >';
			foreach($issues as $file=>$issue){
				$file = str_replace($this->pathToModule . '/', '', $file);
				echo '<div style="position:relative;left:10px"><b>' . $file . '</b></div><div style="position:relative;left:20px">';
				if(is_array($issue)){
					foreach($issue as $i){
						echo "$i<br>";
					}
				}else{
					echo "$issue<br>";
				}
				echo "</div>";
			}
			echo '</div>';

		}
		echo "<br><input class='button' onclick='document.location.href=\"index.php?module=Administration&action=UpgradeWizard&view=module\"' type='button' value=\"" . translate('LBL_UW_BTN_BACK_TO_MOD_LOADER') . "\" />";

	}

	/**
	 * Lock config settings
	 */
	public function lockConfig()
	{
	    if(empty($this->config_hash)) {
	        $this->config_hash = md5(serialize($GLOBALS['sugar_config']));
	    }
	}

	/**
	 * Check if config was modified. Return
	 * @param string $file
	 * @return array Errors if something wrong, false if no problems
	 */
	public function checkConfig($file)
	{
	    $config_hash_after = md5(serialize($GLOBALS['sugar_config']));
	    if($config_hash_after != $this->config_hash) {
	        $this->issues['file'][$file] = array(translate('ML_CONFIG_OVERRIDE'));
	        return $this->issues;
	    }
	    return false;
	}

}

/**
 * Load manifest file
 * Outside of the class to isolate the context
 * @param string $manifest_file
 * @return array
 */
function MSLoadManifest($manifest_file)
{
	include( $manifest_file );
	return array($manifest, $installdefs);
}

?>