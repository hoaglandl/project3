<style type="text/css">

* {
    margin: 0 auto;
}

h1 {
    font-family: Shadows Into Light, cursive;
  }

main {
    margin: 0 auto;
    background: #d0f5ff;
    max-width: 1025px;
    padding: 50px;
    border-radius: 20px;
    font-family: Montserrat, san-serif;
}

p {
    font-size: 18px;
    line-height: 1.75;
    color: #03243f;
}

body {
    background: #177088cc;
}

.nav {
    background: #fff2bd;
    padding: 30px;
    margin: 20px;
    border-radius: 20px;
}

.nav img {
  position: relative;
  bottom: 110px;
  left: 24px;
}

header nav ul li {
  margin: 20px;
  padding: 48px;
  border-radius: 20px;
  color: #f26f69;
  display: inline;
  position: relative;
  left: 460px;
  top: -33px;
  font-size: 30px;
}

header a {
  font-family: 'Shadows Into Light', sans-serif;
  text-decoration: none;
  color: #f26f69;
  font-size: 30px;
}

header a:hover {
  color: #0b77be;
  transition: 0.5s;
}

header h1 {
  color: #f26f69;
  text-align: left;
  font-size: 45px;
  position: relative;
  top: 20px;
}


</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="gameplay.html">Gameplay</a></li>
      <li><a href="community.html">Community</a></li>
    </ul>
  </nav>
</header>

<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
