<?php
// footer
$footer = query("SELECT * FROM footer")[0];
?>
<footer class="page-footer teal">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Alamat</h5>
        <div class="gmaps">
          <?= $footer['gmaps'] ?>
        </div>
      </div>
      <div class="col l6 s12">
        <h5 class="white-text">Sosial Media</h5>
        <ul>
          <li><a class="white-text" href="<?= $footer['whatsapp'] ?>" target="_blank">Whatsapp</a></li>
          <li><a class="white-text" href="<?= $footer['facebook'] ?>" target="_blank">Facebook</a></li>
          <li><a class="white-text" href="<?= $footer['youtube'] ?>" target="_blank">Youtube</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://inovindo.co.id">Inovindo Web</a>
    </div>
  </div>
</footer>

<div class="fixed-action-btn">
  <a class="btn-floating btn-large green" target="_blank" href="<?= $footer['whatsapp'] ?>">
    <i class="large material-icons">phone</i>
  </a>
</div>

</body>
<script src="<?=BASE_URL. 'js/jquery-3.3.1.min.js'?>"></script>
<script src="<?=BASE_URL. 'js/materialize.js'?>"></script>
<script src="<?=BASE_URL. 'js/init.js'?>"></script>
</html>