<!DOCTYPE html>
<html>
<head>
  <title>Contact Me</title>
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

form {
  max-width: 400px;
  margin: 0 auto;
}

h2 {
  text-align: center;
}

label {
  display: block;
  margin-bottom: 5px;
  color: white;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

textarea {
  resize: vertical;
}

input[type="file"] {
  margin-bottom: 10px;
  color: white;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #45a049;
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
    form div{
        border-color: none;
    }
    .black {
        background-color: black;
        padding: 1px;
    }
    .adr {
        display: inline;
        background-color: none;
        margin-bottom: 50px;
    }
    .adr ul li{
        display: inline;
        margin-right: 20px;
        float: right;
    }
    .adr ul li a{
        color: white;
    }
    .adr .add{
        float: left;
        color: rgb(0, 0, 0);
        margin-left: 20px;
        margin-bottom: 50px;
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
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
  </header>
  <form action="connect.php" method="POST">
    <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    </div>
    <div>
    <label for="number">Number:</label>
    <input type="text" id="number" name="number"  required><br><br>
    </div>
    <div>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address"  required><br><br>
    </div>
    <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"  required><br><br>
    </div>
    <div>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50"  ></textarea><br><br>
    </div>
    <input type="submit" value="Submit">
  </form><br>
  <div class="black">
  </div>
  <div class="adr">
    <div class="add">
        <h5>Contact info</h5>
    <a>Anzhel Ujwal Martis</a><br>
    <a>Divine Grace,Loretto post,bantwal,574211</a><br>
    <a>anzhel.martis@gmail.com</a><br>
    <a>+91 9611750023</a>
    </div>
    <ul>
        <li><a href="https://instagram.com/anzhel_martis?igshid=MzNlNGNkZWQ4Mg=="><img src="insta.png"></a></li>
        <li><a href="#"><img src="facebook.png"></a></li>
        <li><a href="https://www.linkedin.com/in/anzhel-martis-4053a4246"><img src="linked.png"></a></li>
    </ul>
  </div>
</body>
</html>
