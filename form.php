<form method="post" action="index.php">  
  FIRST Name: <input type="text" name="first" value="">
  <br><br>
  submit:<input type="submit" value=" go">
  </form>

  <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>