<style type="text/css">

*{
margin: 0;
padding: 0;
border: 0;
}

header {
    background-color: #c1d1c2;
    color: white;
    padding: 20px;
    width: 100%;
    position: fixed;
    z-index: 99;
}

header a{
color: white;
text-decoration: none;
position: fixed;
width: 100%;
top: 25px;
font-family: sans-serif;
}

header li{
  display: inline-block;
  margin: 0 70px 0 0px;
}

nav {
    display: inline-block;
}

header nav a:hover{
  color: #d1a7c4
}


.container {
    max-width: 900px;
    margin: 50px;
    padding-top: 200px;
    padding-bottom: 90px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    margin-top: 40px;
    font-family: 'Dancing Script', cursive;
    font-size: 35px;
    color: #d1a7c4
}

p{
  font-family: 'Raleway', sans-serif;
}

h1{
  font-family: 'Dancing Script', cursive;
  font-size: 40px;

}

</style>


<header>
  <nav>
    <ul>
      <li><img class="icon" src="images/bunny-icon.png" alt="Icon" width="30"></li>
      <li><a href="index.html">Home</a></li>
      <li><a href="https://www.petmd.com/rabbit/care/what-you-need-know-you-adopt-rabbit" target="_blank">More</a></li>
    </ul>
  </nav>
  </header>




<div class="container">
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
</div>
