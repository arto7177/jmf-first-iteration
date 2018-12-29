  <?php require('partials/header.php'); ?>


    <h1>Submit Your Name</h1>

  <form method="post" action="/names">
      <input name="firstname" type="text">
      <input name="lastname" type="text">
      <input name="email" type="text">
      <button type="submit">Submit</button>
  </form>

  <?php require('partials/footer.php'); ?>