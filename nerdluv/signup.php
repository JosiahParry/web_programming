<form>
  First name: <input type="text" name="firstname" maxlength="16" size="16"><br>
  Gender: <label>
            <input type="radio" name="gender" value="male">
              Male
          </label>
          <label>
            <input type="radio" name="gender" value="female">
              Female
          </label><br>
  <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">
  Personality types</a>: <input type="text" maxlength="4" size="4"><br>
  Favorite OS:
    <select name="fav_os">
      <option selected="selected">Windows</option>
      <option>OS X</option>
      <option>Linux</option>
      <option>Android</option>
      <option>iOS</option>
    </select>
  Seeking age:
  <input type="text" name="minage" placeholder="min" maxlength="2"> to 
  <input type="text" name="maxage" placeholder="max" maxlength="2">
</form>
