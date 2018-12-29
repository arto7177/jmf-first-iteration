<?php require('partials/header.php'); ?>

<h1>Donate</h1>
<div class="container">
    <form method="post" action="/names">
        <div class="form-group">
            <label for="inputFirstName">First Name</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="inputLastName">Last Name</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" placeholder="City">
        </div><div class="form-group">
            <label for="inputState">State/Province</label>
            <input type="text" class="form-control" id="inputState" placeholder="State/Province">
        </div><div class="form-group">
            <label for="inputZip">Zip/Postal Code</label>
            <input type="number" class="form-control" id="inputZip" placeholder="Zip/Postal Code">
        </div><div class="form-group">
            <label for="inputPhone">Phone</label>
            <input type="tel" class="form-control" id="inputPhone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require('partials/footer.php'); ?>