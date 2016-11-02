<?php include("top.html"); ?>
  <form>

    <fieldset>
      <legend>New User Signup</legend>

        First name: <input class="column" type="text" name="firstname" maxlength="16" size="16"><br>

    Gender:
        <label for="male">
          <input class="column" id="male" type="radio" name="gender" value="male">
            Male
        </label>
        <label for="female">
          <input class="column" id="female" type="radio" name="gender" value="female">
            Female
        </label><br>


    Personality types: <input class="column" type="text" maxlength="4" size="4">
      <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">
        Don't know your type?
      </a><br>

    Favorite OS:
      <select class="column" name="fav_os">
        <datalist>
        <option selected="selected">Windows</option>
        <option>OS X</option>
        <option>Linux</option>
        <option>Android</option>
        <option>iOS</option>
      </datalist>
    </select><br>

    Seeking age:
    <input class="column" type="text" name="minage" placeholder="min" maxlength="2" size="6"> to
    <input class="column" type="text" name="maxage" placeholder="max" maxlength="2" size="6"><br>

    <input class="column" type="submit" name="submit"/>

  </fieldset>
  </form>

<?php include("bottom.html"); ?>
