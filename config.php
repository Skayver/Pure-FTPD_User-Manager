<?php

  $LANG = "English";                  	// See the directory language for the available languages.

  $LocationImages =  "images";        	// Location of images

  $DBHost = "localhost";              	// Ip-address of MySQL server

  $DBLogin = "DB-User";                	// Username of MySQL user

  $DBPassword = "DB-Pass";             	// Password of MySQL user

  $DBDatabase = "ftp-server";		// Name of database

  $FTPAddress = "192.168.0.xxx:21";	// Domain name or ip-address of your ftp server

  $DEFUserID = "1002";			// nobody     // Default user id of virtual ftp user.

  $DEFGroupID = "80";			// guest      // Default group is of virtual ftp user.

  $UsersFile = "/etc/passwd";        	// The unix user file

  $GroupFile = "/etc/group";         	// The unix group file

  $StyleSheet = "style/default.css.php"; // The location of the style sheet

  $EnableQuota = 1;                  	// Enable virtual quota's (0=Off 1=On)

  $EnableRatio = 1;                  	// Enable ratio (0=Off 1=On) The pureftpd server has to be compiled with ratio support.

  /* This list of users will NOT appear in the dropdown menu. */
  $BlacklistUsers = array ('adm','bin','bind','daemon','gopher','halt','kmem','lp','mailnull','man','named','nfsnobody','nscd',
			    'operator','pop','root','rpc','rpcuser','rpm','shutdown','smmsp','sshd','sync','toor','tty','uucp',
			    'vcsa','xfs','games','news','man','unbound','proxy','_pflogd','_dhcp','auditdistd','_ypldap','hast',
			    'messagebus','_tss','avahi','cups','vnstat','polkit','polkitd','haldaemon','webcamd','git_daemon',
			    'mysql','cyrus');

  /* This list of groups will NOT appear in the dropdown menu. */
  $BlacklistGroups = array ('adm','bin','bind','daemon','dialer','dip','disk','floppy','gopher','kmem','lock','lp','mailnull','man',
			    'named','mem','network','news','nscd','ntp','operator','pcap','root','rpc','rpcuser','rpm','slocate',
			    'smmsp','sshd','staff','sys','tty','utmp','uucp','vcsa','wheel','xfs','mail','games','ftp','smmsp',
			    'mailnull','guest','video','unbound','proxy','authpf','_pflogd','_dhcp','uucp','dialer','network',
			    'audit','_ypldap','hast','messagebus','_tss','avahi','cups','vnstat','polkit','polkitd','haldaemon',
			    'webcamd','git_daemon','mysql','cyrus');

?>