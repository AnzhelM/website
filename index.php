<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <script>
    function showdate()
    {
    var d=new Date();
    var h=d.getHours();
    var m=d.getMinutes();
    var s=d.getSeconds();
    document.getElementById("client-date").innerHTML=(h+':'+m+':'+s);
    setTimeout(showdate,1000);
    }
    </script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url(data.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    header {
      color: #fff;
      padding: 20px;
    }
    img{
        height: 50px;
        width: 50px;
        float: left;
        display: inline;
        border-radius: 8px;
    }
    
    header h1 {
      margin: 0;
      display: inline;
      color: white;
      font-family: monospace;
      font-size: 50px;
    }
    
    nav {
        display: inline;
      background-color:none;
      float: right;
      padding: 10px;
    }
    
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    nav ul li {
      display: inline;
      margin-right: 10px;
    }
    
    nav ul li a {
      color: #333;
      text-decoration: none;
      color: white;
      padding: 5px;
    }
    nav ul li a:hover {
        color: black;
        background-color: white;
        border-radius: 8px;
        padding: 20px;
    }
    
    .active {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
    }
    .active a {
        color: black;
        font-family: Arial,sans-serif;
    }
    .time {
        color: white;
        color: white;
        font-size: 20px;
        display: inline;
        margin-left: 700px;
        margin-right: 20px;
    }
    h2{
        color: white;
        text-align: center;
        font-size: 100px;
        font-family: 'Courier New', monospace;
    }
    p{
        color: white;
        text-align: center;
        font-size: 40px;
    }
    .digit {
        color: white;
    }
  </style>
</head>
<body>
  <header>
    <img src="a.jpeg" alt="logo"/>
    <h1>&nbsp;ANZHEL MARTIS</h1>
    <nav>
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
  </header>
  <h2>Hello I'm a computer science engineer</h2>
  <p>This web page is developed by me,please have a look at it</p>
  <?php
    $a = file_get_contents("counter.txt");
    echo '<div class="time">';
    echo "<a>Page Visitors&nbsp;</a>";
    file_put_contents("counter.txt",$a+1);
    echo ($a);
    echo "</div>";
    
    ?>
    <body onload="showdate()">
    <p id='client-date'></p>
    <?php
    date_default_timezone_set("Asia/Calcutta");
    echo '<p id="server-date">'.'</p>';
    ?>
</body>
</html>
