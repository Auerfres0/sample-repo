      <div id="footer" class="cf">
      
        <div class="column three">
          <strong>Phone</strong>
          808.529.3819
        </div><!-- column -->
        
        <div class="column three">
          <strong>Location</strong>
          124 Conch Street, Bikini Bottom, Pacific Ocean<br>
        </div><!-- column -->
        
        <div class="column three last">
          
        
          <strong>Hours</strong>
          <em>Tuesday - Thursday</em><br>
          01:00pm - 09:00pm<br><br>
          
          <em>Friday - Saturday</em><br>
          04:00pm - 11:00pm<br><br>
          
          <em>Sunday - Monday</em><br>
          Closed<br><br>

          <?php include('includes/StoreHours.php'); ?>
          
        </div><!-- column -->
      
      </div><!-- footer -->
      
      <small>&copy; <?php echo date('Y') ?> - <?php echo $companyName; ?></small>
    
    </div><!-- content -->
    
  </div><!-- wrapper -->
  
  <div class="copyright-info">
    <?php include('../assets/includes/copyright.php'); ?>
    <?php echo date("l jS \of F Y h:i:s A")?>
  </div><!-- copyright-info -->
</body>
</html>