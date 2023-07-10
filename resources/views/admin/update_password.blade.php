<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../resources/css/themify-icons.css">
<link href="../../resources/css/uplode.css" rel="stylesheet" />
<title>Admin Dashboard / Update Password</title>
<link rel="icon" type="image/png" href="../../resources/images/AdminIcon.png">
</head>
<body>
    

    @include('admin.background')
    @include('admin.Nav')
    
    <div class="center">
    <form action={{route('update_password')}} enctype="multipart/form-data" method="POST">
    @csrf
    <div class="input-container">
        <input type="text" name="old_password" required/>
        <label>Old Password</label>		
    </div>

    <div class="input-container">
        <input type="password" name="new_password" required/>
        <label>New Password</label>		
    </div>

    <div class="input-container">
        <input type="password" name="confirm_password" required/>
        <label>Confirm New Password</label>		
    </div>
    <button type="submit" class="btn" name="uploadbutton">Update</button>
    </form> 
    </div>

</body>
</html>
