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
        <li class="about"><a href="/create">ADD</a></li>
        <li class="news"><a href="/account">MY ACCOUNT</a></li>
        <li class="news"><a href="/logout">LOGOUT</a></li>
       <form class="form-horizontal" method="POST" action="/browse">
        <input type="text" name="search" class="form-control" id="name" placeholder=>
        <button type = 'submit' class="go_button"> GO </button>
        </form>
        
      </ul>
    </div>
  </header>
    <?php endif; ?>