<?php require_once('header.php');?>

<script>
function preferedBrowser() {
  prefer = document.forms[0].browsers.value;
  alert("You prefer browsing internet with " + prefer);
}
</script>


<form>
Choose which browser you prefer:
  <select id="browsers" onchange="preferedBrowser()">
    <option value="Chrome">Chrome</option>
    <option value="Internet Explorer">Internet Explorer</option>
    <option value="Firefox">Firefox</option>
  </select>
</form>

</body>
</html>
