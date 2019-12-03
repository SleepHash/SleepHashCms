<?php
   foreach ($Info_Site as $n):
   ?>
<div class="navbar">
   <div>
      <p class="title">
         <?= $n['Site_Name'] ?>
      </p>
   </div>
   <div>
      <?php
         foreach ($Navbar_Items as $s):
      ?>
      <a style="<?= $s['style'] ?>" href="<?= $s['href'] ?>"><?= $s['title'] ?></a>
      <?php
         endforeach;
      ?>
   </div>
   <div>
      <?php
         if ($n['Members_Login'] == "1"):
      ?>
      	<a class="auth">S'autentifier</a>
      <?php
         endif;
      ?>
   </div>
</div>
<style>
   @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
   *{
   margin:0;
   font-family: 'Roboto', sans-serif;
   text-decoration:none;
   }
   .navbar{
   background: linear-gradient(10deg,#197ce7,#23bbfe) padding-box;
   padding:15px;
   display:flex;
   justify-content: space-between;
   align-items: center;
   }
   .navbar .title{
   color:white;
   font-size:20px;
   }
   .navbar .auth{
   padding:5px;
   background-color:white;
   border-radius:5px;
   color:#23bbfe;
   }
</style>
<?php
   endforeach;
?>
