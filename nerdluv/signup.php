<?php include("top.html"); ?>
  <form>

    <fieldset>
        <legend>New User Signup</legend>
    <ul>
    <li>First name: <input type="text" name="firstname" maxlength="16" size="16"><br> </li>
    <li>Gender: <label>
              <input type="radio" name="gender" value="male">
                Male
            </label><
            <label>
              <input type="radio" name="gender" value="female">
                Female
            </label><br></li>
    <li>Personality types: <input type="text" maxlength="4" size="4">
      <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a><br></li>
    <li>Favorite OS:
      <select name="fav_os">
        <datalist>
        <option selected="selected">Windows</option>
        <option>OS X</option>
        <option>Linux</option>
        <option>Android</option>
        <option>iOS</option>
      </datalist>
    </select><br></li>
    <li>Seeking age:
    <input type="text" name="minage" placeholder="min" maxlength="2" size="6"> to
    <input type="text" name="maxage" placeholder="max" maxlength="2" size="6"><br>
    <input type="submit" name="submit"/></li>
  </ul>
  </fieldset>
  </form>

<?php include("bottom.html"); ?>
