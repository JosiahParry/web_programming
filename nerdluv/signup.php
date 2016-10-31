<?php include("top.html"); ?>
  <form>
    <fieldset>
    First name: <input type="text" name="firstname" maxlength="16" size="16"><br>
    Gender: <label>
              <input type="radio" name="gender" value="male">
                Male
            </label>
            <label>
              <input type="radio" name="gender" value="female">
                Female
            </label><br>
    Personality types: <input type="text" maxlength="4" size="4">
      <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a><br>
    Favorite OS:
      <select name="fav_os">
        <option selected="selected">Windows</option>
        <option>OS X</option>
        <option>Linux</option>
        <option>Android</option>
        <option>iOS</option>
      </select><br>
    Seeking age:
    <input type="text" name="minage" placeholder="min" maxlength="2" size="6"> to
    <input type="text" name="maxage" placeholder="max" maxlength="2" size="6"><br>
    <input type="submit" name="submit"/>
  </fieldset>
  </form>

<?php include("bottom.html"); ?>
