<?php require('partials/header.php'); ?>

    <div class="container">
        <h5><span>Donate</span></h5>
    </div>
<div class="container">
    <form method="post" action="/names">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Address" name ="address">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" placeholder="City" name="city">
        </div><div class="form-group">
            <label for="state">State/Province</label>
            <input type="text" class="form-control" id="state" placeholder="State/Province" name="state">
        </div><div class="form-group">
            <label for="zip">Zip/Postal Code</label>
            <input type="text" class="form-control" id="zip" placeholder="Zip/Postal Code" name="zip">
        </div><div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
        </div>
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="container">
            <p>Choose Payment Method</p>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="pay-btn" id="paypal"><img src="public/img/paypallogo2.png" class="paypal-logo"></button>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </form>


</div>

<?php require('partials/footer.php'); ?>