<?php require('partials/header.php'); ?>

    <div class="container">
        <h5><span>Donate</span></h5>
    </div>
<div class="container">
    <form method="post" action="/names">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" placeholder="City">
        </div><div class="form-group">
            <label for="state">State/Province</label>
            <input type="text" class="form-control" id="state" placeholder="State/Province">
        </div><div class="form-group">
            <label for="zip">Zip/Postal Code</label>
            <input type="text" class="form-control" id="zip" placeholder="Zip/Postal Code">
        </div><div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require('partials/footer.php'); ?>