<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>YouGit</title>
</head>
<body>
	<h5>Global setup:</h5>
	git config --global user.name "<?php echo ($data["name"]); ?>"<br>
	git config --global user.email <?php echo ($data["email"]); ?><br>
	<h5>Next steps:</h5>
	mkdir <?php echo ($data["project"]); ?><br>
	cd <?php echo ($data["project"]); ?><br>
	git init<br>
	touch README<br>
	git add README<br>
	git commit -m 'first commit'<br>
	git remote add origin git@<?php echo ($data["ip"]); ?>:<?php echo ($data["project"]); ?>.git<br>
	git push -u origin master<br>
	<h5>Existing Git Repo?</h5>
	cd existing_git_repo<br>
	git remote add origin git@<?php echo ($data["ip"]); ?>:<?php echo ($data["project"]); ?>.git<br>
	git push -u origin master<br>
</body>
</html>