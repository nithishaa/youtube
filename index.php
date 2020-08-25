<?php
if(isset($_POST['submit'])){
$url=$_POST['url'];
$value=explode("v=",$url);
$videoId=$value[1];
}


?>


<html>
<style>
:root {
  --rad: .7rem;
  --dur: .3s;
  --color-dark: #2f2f2f;
  --color-light: #fff;
  --color-brand: #57bd84;
  --font-fam: 'Lato', sans-serif;
  --height: 5rem;
  --btn-width: 6rem;
  --bez: cubic-bezier(0, 0, 0.43, 1.49);
}

body {
  background: var(--color-dark);
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  min-height: 100vh;
}

html {
  box-sizing: border-box;
  height: 100%;
  font-size: 10px;
}

*, *::before, *::after {
  box-sizing: inherit;
}

form {
  position: relative;
  width: 30rem;
  background: var(--color-brand);
  border-radius: var(--rad);
}

input, button {
  height: var(--height);
  font-family: var(--font-fam);
  border: 0;
  color: var(--color-dark);
  font-size: 1.8rem;
}

input[type="search"] {
  outline: 0;
  width: 100%;
  background: var(--color-light);
  padding: 0 1.6rem;
  border-radius: var(--rad);
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-transition: all var(--dur) var(--bez);
  transition: all var(--dur) var(--bez);
  -webkit-transition-property: width, border-radius;
  transition-property: width, border-radius;
  z-index: 1;
  position: relative;
}

button {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  width: var(--btn-width);
  font-weight: bold;
  background: var(--color-brand);
  border-radius: 0 var(--rad) var(--rad) 0;
}

input:not(:placeholder-shown) {
  border-radius: var(--rad) 0 0 var(--rad);
  width: calc(100% - var(--btn-width));
}
input:not(:placeholder-shown) + button {
  display: block;
}

label {
  position: absolute;
  clip: rect(1px, 1px, 1px, 1px);
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}

</style>
<body>
<form onsubmit="event.preventDefault();" role="search" method="post" action="">
  <label for="search">Search for stuff</label>
  <input id="search" type="search" name="url" placeholder="Search." autofocus required />
  <button type="submit" name="submit">Go</button>    
</form>
<?php
if(!empty($videoId))
{

?>


<h3>Thumbnail Image:</h3>
<img src:"https://img.youtube.com/vi/<?php $videoId?>/
hqdefault.jpg" width="250">
  <?php
}
  ?>
</body>
</html>
