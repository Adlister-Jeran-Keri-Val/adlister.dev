 <?php

require_once __DIR__ . '/../../models/Shoes.php';



?>
<?php if(!Auth::check()): ?>
  <header>
    <div class="nav">
      <ul>
        <li class="home"><a href="/">HOME</a></li>
        <li class="about"><a href="/login">LOGIN</a></li>
        <li class="news"><a href="/signup">SIGN UP</a></li>
        <li class="contact"><a href="/browse">BROWSE</a></li>
      </ul>
    </div>
  </header>
<?php else: ?>


  <header>
    <div class="nav">
      <ul>
        <li class="home"><a href="/">HOME</a></li>
        <li class="contact"><a href="/browse">BROWSE</a></li>
        <li class="about"><a href="/create">CREATE LISTING</a></li>
        <li class="news"><a href="/account">MY ACCOUNT</a></li>
        <li class="news"><a href="/logout">LOGOUT</a></li>
        
      </ul>
    </div>
  </header>
    <?php endif; ?>