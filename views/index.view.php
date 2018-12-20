  <?php require('partials/header.php'); ?>


    <p><?php foreach ($donees as $donee): ?>
      <?= $donee->firstname?>
      <?= $donee->lastname?>
      <?= $donee->email?>
    <?php endforeach; ?>
    </p>

  <?php require('partials/footer.php'); ?>