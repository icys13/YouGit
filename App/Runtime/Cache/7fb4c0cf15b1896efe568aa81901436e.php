<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>YouGit</title>
</head>
<body>
	<a href='__APP__/Settings/profile'>Account Settings</a><br>
	<a href='__APP__/Index/logout'>Logout</a><br><br>
	<a href='__APP__/Repository/admin'>admin</a><br>
	<a href="http://<?php echo ($info["homepage"]); ?>"><?php echo ($info["homepage"]); ?></a><br>
	<br>-----------------------------------------<br>
	<a href="__APP__/Repository/index?project=<?php echo ($info["project"]); ?>">Files</a>&nbsp<a
		href='__APP__/Repository/commits'>Commits</a>
	<br>-----------------------------------------<br>
<h5><?php echo ($info["project"]); ?>/</h5>
<?php echo ($info["description"]); ?><br>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><a href="__APP__/Repository/repository?<?php echo ($vo["path"]); ?>"><?php echo ($vo["name"]); ?></a><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>