<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../resources/css/themify-icons.css">
   <title>Admin Dashboard / Site Info</title>
   <link rel="icon" type="image/png" href="../../resources/images/AdminIcon.png">
   <link href="../../resources/css/uplode.css" rel="stylesheet" />

</head>
<body>
    @include('admin.background')
    @include('admin.Nav')
        <div class="center">
            <div>
                <br>
                <br>
            </div>
            <form method="POST" enctype="multipart/form-data"  action="{{route('admin.site_info_update')}}" >
                @csrf
            <div class="input-container">
                <input type="text" name="number" required value="{{$info->number}}"/>
                <label>Number</label>		
            </div>
            <div class="input-container">
                <input type="email" name="email" required  value="{{$info->email}}" />
                <label>Email</label>		
            </div>   
            <div class="input-container">
                <input type="text" name="fb" required  value="{{$info->FB}}"/>
                <label>facebook link</label>		
            </div> 
            <div class="input-container">
                <input type="text" name="ig" required value="{{$info->IG}}"/>
                <label>Insta link</label>		
            </div> 
            <div class="input-container">
                <input type="text" name="pin" required  value="{{$info->PIN}}"/>
                <label>Pin link</label>		
            </div>          
            <button type="submit" class="btn" name="uploadbutton">Update</button>
            </form>
        </div>
   
</body>
</html>