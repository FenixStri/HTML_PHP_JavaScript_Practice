<?php require_once('header.php');?>


<script>
function myFunction(x) {
  x.style.background = "yellow";
}
</script>


Enter your name: <input type="text" onfocus="myFunction(this)">

<p>When the input field gets focus, a function is triggered which changes the background-color.</p>

</body>
</html>
