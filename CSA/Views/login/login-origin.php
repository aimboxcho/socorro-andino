<body>
    <div class="login-box">
      <img src="<?=base_url?>Views/assets/img/socorro-andino.png" alt="Logo">
      <h2>Usuario Autorizado</h2>
      <form action="<?=base_url?>voluntario/login" method="POST">
        <div class="user-box">
          <input type="email" name="email_volun" require>
        </div>
        <div class="user-box">
          <input type="password" name="password" require>
        </div>
        <input type="submit" value="Ingresar">
        <div class="social-icons">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        </div>

        <?php if(isset($_SESSION['complete']) && $_SESSION['complete'] == "Ingreso"):;?>
        <br>
        <div class="button-message-correct">
          <?=$_SESSION['complete'];?>
          <?php Utils::deletemessage();?>
        </div>
        <?php elseif(isset($_SESSION['complete']) && $_SESSION['complete'] == "Fallo el ingreso"):;?>
        <br>
        <div class="button-message-incorrect">
          <?=$_SESSION['complete'];?>
          <?php Utils::deletemessage();?> 
        </div>
      <?php endif; ?>
      </form>

    </div>
</body>
</html>
