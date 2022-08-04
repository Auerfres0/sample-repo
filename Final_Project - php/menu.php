<?php
  define("TITLE", "Menu | Franklin's Fine Dining")
  include(inclues/header.php);
?>

<div id="menu-items">
  <h1>Our Delicious Menu</h1>
  <p>Like our team, our menu is very small &mdash; but dang, does it ever pack a punch</p>
  <p><em>Click any menu item to learn more about it.</em></p>
  <hr>
  <ul>
    <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?> <sup>$</sup>11</a></li>
  </ul>
</div>

<?php
  include(inclues/footer.php);
?> 