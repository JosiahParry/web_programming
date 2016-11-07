<?php include("top.html"); ?>
  <form action="signup-submit.php" method="post">

    <fieldset>
      <legend>New User Signup:</legend>
      <ul>
        <li>
          <strong class="column">Name:</strong>
          <input type="text" name="name" maxlength="16" size="16"><br>
        </li>

        <li>
          <strong class="column">Gender:</strong>
            <label for="male">Male</label>
            <input id="male" type="radio" name="gender" value="M">
            <label for="female">Female</label>
              <input id="female" type="radio" name="gender" value="F"><br>
        </li>

        <li>
          <strong class="column">Age</strong>
          <input id="age" type="text" maxlength="2" size="6" name="age">
        </li>

        <li>
          <strong class="column">Personality types:</strong>
          <input type="text" maxlength="4" size="6" name="personality">
          <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">
            Don't know your type?
          </a><br>
        </li>

        <li>
          <strong class="column">Favorite OS:</strong>
          <select name="fav_os">
            <datalist>
              <option selected="selected">Windows</option>
              <option>OS X</option>
              <option>Linux</option>
              <option>Android</option>
              <option>iOS</option>
            </datalist>
          </select><br>
        </li>

        <li>
          <strong class="column">Seeking age:</strong>
            <input type="text" name="minage" placeholder="min" maxlength="2" size="6">
            to
            <input type="text" name="maxage" placeholder="max" maxlength="2" size="6"><br>
        </li>

        <li>
          <input type="submit" name="submit"/>
        </li>

      </ul>
  </fieldset>
  </form>

<?php include("bottom.html"); ?>
