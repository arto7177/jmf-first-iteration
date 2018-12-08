<?php include 'incs/header.php'; ?>

    <title>The Jack Mattsson Foundation</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">News/Events </a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="donate.view.php">Donate <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <h1>Hello, world!</h1>

    <form method="post">
    	<fieldset>
    	<p>First Name:</p>
    	<input type="text" name="firstname">
    	<p>Last Name:</p>
    	<input type="text" name="lastname">
    	<p><input type="checkbox" name="anonymous"> I'd prefer to make an anonymous donation.</p>
    	<?php
    	//If checkbox was checked require first and last name
    	//Else do not require first and last name and make fields un-editable
    	?>
    	<p>E-mail:</p>
    	<input type="text" name="email">
    	<p><input type="radio" name="newsletter" value="yes" checked> Yes! Please add me to the JMF Newsletter and keep me updated on upcoming events and news!</p>
    	<p><input type="radio" name="newsletter" value="no"> No, thank you, I get too many emails already.</p>
    	<button type="button">Donate!</button>
    	</fieldset>
    </form>

<?php include 'incs/footer.php'; ?> 