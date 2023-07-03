<!DOCTYPE html>
<head>
  <title>Gallery</title>
    <style>
            
    .main header {
      color: #fff;
      padding: 20px;
    }
    .main img{
        height: 50px;
        width: 50px;
        float: left;
        display: inline;
        border-radius: 8px;
    }
    
    .main header h1 {
      margin: 0;
      display: inline;
      color: white;
      font-family: monospace;
      font-size: 50px;
    }
    
    .main nav {
        display: inline;
      background-color:none;
      float: right;
      padding: 10px;
    }
    
    .main nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    .main nav ul li {
      display: inline;
      margin-right: 10px;
    }
    
    .main nav ul li a {
      color: #333;
      text-decoration: none;
      color: white;
      padding: 5px;
    }
    .main nav ul li a:hover {
        color: black;
        background-color: white;
        border-radius: 8px;
        padding: 20px;
    }
    body {
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: sans-serif;
        background-image: url(data.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: darken;
}
h2 {
  color: white;
  text-align: center;
}
  .grid-container {
  columns: 5 200px;
  column-gap: 1.5rem;
  width: 90%;
  margin: 0 auto;
}
  .grid-container div {
    width: 150px;
    display: inline-block;
    width: 100%;
    border: solid 2px black;
    padding: 5px;
    border-radius: 5px;
}
    .grid-container div:hover {
      border-color: coral;
    }
    .grid-container div img {
      width: 100%;
      border-radius: 5px;
    }
    .main header nav ul .active {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
    }
    .main header nav ul .active a {
        color: black;
        font-family: Arial,sans-serif;
    }
    </style>
</head>
<body>
    <div class="main">
    <header>
        <img src="a.jpeg" alt="logo"/>
        <h1>&nbsp;ANZHEL MARTIS</h1>
        <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="active"><a href="gallery.php">Gallery</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
      </header>
    </div>
<h2>MY PHOTOGRAPHY</h2>
<div class="grid-container">
  <div>
    <img src='london.jpg' alt=''>
  </div>
  <div>
    <img src='mumbai.jpg' alt=''>
  </div>
  <div>
    <img  src='dog.jpeg' alt=''>
  </div>
  <div>
    <img src='ghat.jpg' alt=''>
  </div>
  <div>
    <img src='beach.jpeg' alt=''>
  </div>
  <div>
    <img src='10.jpg' alt=''>
  </div>
  <div>
    <img src='fish.jpg' alt=''>
  </div>
  <div>
    <img src='shimla.jpg' alt=''>
  </div>
  <div>
    <img src='scenery.jpeg' alt=''>
  </div>
  <div>
    <img src='jog.jpg' alt=''>
  </div>
</div>
</body>
</html>