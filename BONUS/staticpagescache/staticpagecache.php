<?php
/* Reminder: always indent with 4 spaces (no tabs). */

	set_time_limit(120);

	$page=$argv[1];

	//      ↓フォルダ位置が変わる場合は修正してください
	include('/path/to/geeklog/public_html/lib-common.php');
	$path=$_ASSIST_CONF["path_cache"].'staticpages/'.$page.".html";

	//
	$query = '';
    $comment_order = '';
    $comment_mode  = '';
    $comment_page = 1;
	$display_mode = '';
	$msg = 0;
	$retval = SP_returnStaticpage($page, $display_mode, $comment_order, $comment_mode, $comment_page, $msg, $query);
	file_put_contents($path, $retval);

	$logmsg="[staticpagecache] ".$path;
	COM_errorLog($logmsg);

?>
