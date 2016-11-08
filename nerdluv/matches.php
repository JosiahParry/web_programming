
<?php include("top.html"); ?>
<form action="matches-submit.php" method="GET">
    <fieldset>
      <legend>Returning User: </legend>
      <ul>
        <li>
          <strong class="column">Name:</strong>
          <input type=text id="name" name="name" size="16" maxlength="16"/>
        </li>
        <li>
          <br><input type="submit" value="View My Matches!">
        </li>
      <ul>
    </fieldset>
  </form>
<?php include("bottom.html"); ?>
