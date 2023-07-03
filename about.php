<!DOCTYPE html>
<html>
<head>
  <title>Qualifications</title>
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
    header img{
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
    .school {
        color: white;
        border-style: solid;
        border-color: black;
        margin-left: 200px;
        margin-right: 200px;
        border-radius: 8px;
        
    }
    .school img{
        height: 250px;
        width:350px;
        display: block;
        border-radius: 8px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5px;
    }
    .school:hover {
      background-color: white;
    }
    .new {
        color: white;
        border-style: solid;
        border-color: black;
        margin-left: 200px;
        margin-right: 200px;
        padding: 50px;
        border-radius: 8px;
    }
    .new ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: inline;
    }
    
    .new ul li {
      display: inline;
      margin-right: 10px;
      background-color: white;
      border-radius: 8px;
      margin-left: 250px;
      padding: 20px;
    }
    
    .new ul li a {
      color: #333;
      text-decoration: none;
      color: black;
    }
    .new ul li:hover {
        background-color: rgb(43, 41, 41);
    }
    h1 {
      font-size: 50px;
      text-align: center;
      color: white;
    }
    .school p{
      text-align: center;
      color: black;
    }
  </style>
</head>
<body>
  <header>
    <img src="a.jpeg" alt="logo"/>
    <h1>&nbsp;ANZHEL MARTIS</h1>
    <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
  </header>
  <h1>EDUCATION</h1>
  <div class="school">
    <img src="school.jpg" alt="photo"/>
    <p>LORETTO ENGLISH MEDIUM SCHOOL</p>
    <p>I studied from my class 1 to class 10 in Lorreto English Medium School.This school is where I spent most of my childhood and made a lot of friends.I was also chosen as the School President in my standard 10. </p>
  </div>
  <br>
  <div class="school">
    <img src="aloy.jpg" alt="photo"/>
    <p>ST. ALOYSIUS PU COLLEGE</p>
    <p>After my standard 10 results I decided to do  my Pre University education in St Aloysius PU College. I chose PCME as my core subjects.</p>
  </div>
  <br>
  <div class="school">
    <img src="sjec.jpg" alt="photo"/>
    <p>ST. JOSEPHS ENGINEERING COLLEGE</p>
    <p>After my 12th I had decided to do engineering, I chose Computer science and engineering as my major.Now I am in the end of my third year of engineering.</p>
  </div>
  <br>
  <div class="new">
    <ul>
        <li><a href="achieve.php">achievements</a></li>
        <li><a href="hobby.php">hobbies</a></li>
    </ul>
  </div>
  <br>
</body>
</html>
