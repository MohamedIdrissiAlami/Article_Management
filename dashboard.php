<?php
include('database.php');
session_start();


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mohamed | dash-board</title>
  <link rel="stylesheet" href="dash-board.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="menu">
    <ul>
      <li class="profile">
        <div class="img-box">
          <img src="img/dash-board-Gamal.webp" alt="profile">
        </div>
        <h2>Hello <?php echo $_SESSION['Name'] ?></h2>
      </li>
      <li class="active">
        <a href="#">
          <i class="fas fa-home"></i>
          <p>dash-board</p>
        </a>
      </li>
      <li>
        <a id="CreateArticle" href="#">
          <i class="fas fa-user-group"></i>
          <p>clients</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-table"></i>
          <p>products</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-chart-pie"></i>
          <p>charts</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-pen"></i>
          <p>posts</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-star"></i>
          <p>favorits</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-cog"></i>
          <p>settings</p>
        </a>
      </li>
      <li class="log-out">
        <a href="#">
          <i class="fas fa-sign-out"></i>
          <p>log-out</p>
        </a>
      </li>





    </ul>
  </div>

  <div class="content">
    <div class="title-info">
      <p>dash-board</p>
      <i class="fas fa-chart-bar"></i>
    </div>

    <div class="data-info">
      <div class="box">
        <i class="fas fa-user"></i>
        <div class="data">
          <p>user</p>
          <span>180</span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-pen"></i>
        <div class="data">
          <p>posts</p>
          <span>280</span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-table"></i>
        <div class="data">
          <p>products</p>
          <span>380</span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-dollar"></i>
        <div class="data">
          <p>revenue</p>
          <span>480</span>
        </div>
      </div>




    </div>

    <div class="title-info">
      <p>products</p>
      <i class="fas fa-table"></i>
    </div>

    <div class="new-article-container">
      <form action="#" method="POST">
        <input type="text" placeholder="title" id="article-title" name="ArticleTitle">
        <input type="text" placeholder="type your article here.." id="article-content" name="ArticleContent">
        <button type="submit">Save</button>
      </form>
    </div>


  </div>
  <script src="dash-board.js"></script>
</body>

</html>