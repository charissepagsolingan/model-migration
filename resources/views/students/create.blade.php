<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv ="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">

</head>
<body>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto d-grip gap 2">

                </div>
            </div>
        </div>
    </div>  

    <form action="{{ url('students') }}" method = "POST">
        @csrf 
        <div>
        <lable class="form-label">First Name</label>
        <input type="text" name="fname" class="form-control">
</div>
<div>
        <lable class="form-label">Last Name</label>
        <input type="text" name="lname" class="form-control">
</div>
<div>
        <lable class="form-label">Email</label>
        <input type="text" name="email" class="form-control">
</div>
<div>
        <lable class="form-label">Phone</label>
        <input type="text" name="Phone" class="form-control">
</div>
<div>
        <lable class="form-label">Address</label>
        <input type="text" name="address" class="form-control">
</div>
<div>
        <lable class="form-label">First Name</label>
        <input type="text" name="fname" class="form-control">
</div>
<div>
        <lable class="form-label">City</label>
        <input type="text" name="city" class="form-control">
</div>
<div>
        <lable class="form-label">Province</label>
        <input type="text" name="province" class="form-control">
</div>
<div>
        <lable class="form-label">Zip</label>
        <input type="text" name="zip" class="form-control">
</div>
<div>
        <lable class="form-label">Birthday</label>
        <input type="date" name="birthday" class="form-control">
     </div>
     <div class="form-group mb-3">
        <button class="btn btn-warning">Save Changes</button>



</div>
</div>
</body>
</html>l