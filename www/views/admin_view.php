<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Hey, <?php echo $_SESSION['user_name']; ?>. You are logged into the Admin View.
Try to close this browser tab and open it again. Still logged in! ;)
</br>
<a href="htmldocs/Dash_Home.php">Dash_Home</a>
<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="index.php?logout">Logout</a>
