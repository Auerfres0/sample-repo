<?php
  define("TITLE", "Team | Franklin's Fine Dining")
  include(inclues/header.php);
?>

  <div id="team-members" class="cf">
    <h1>Our team at Franklin's</h1>
    <p>We imagine a world where there are no barriers between Boston residents, sloppily produced pizza doesn’t exist, and local farmers are able to live prosperously.</p>
    <hr>

    <?php
      foreach($teammembers as $member){
    ?>

    <div class="member">
      <img src="img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
      <h2> <?php echo $member[name]; ?> </h2>
      <p><?php echo $member[bio]; ?></p>
    </div>

    <?php
      }
    ?>
  </div>
      
<?php
  include(inclues/footer.php);
?>  