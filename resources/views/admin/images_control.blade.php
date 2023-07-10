<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="../../../resources/css/test.css" rel="stylesheet" />
    <link href="../../../resources/css/uplode.css" rel="stylesheet" />
    <link rel="icon" type="image/png"  href="../../resources/images/ImageIcon.png">

    <title>Admin Dashboard / Main Images</title>
</head>
<body>
	@include('admin.background')
    @include('admin.Nav')
        <div class="center">
            <div class="title">
                <h1>Drop Image to upload</h1>
            </div>
            <form method="POST" enctype="multipart/form-data"  action="{{route('admin.Main_Image_Uplode',$id)}}" >
                @csrf
            <div class="dropzone">
                <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon"  required />
                <input type="file" name="file" class="upload-input" />
            </div>
            <br>
            <div class="input-container">
                <input type="text" name="name" required />
                <label>Type</label>		
            </div>
            <br>
            <div class="input-container">
                <input type="text" name="title" required/>
                <label>Title</label>		
            </div>            
            <button type="submit" class="btn" name="uploadbutton">Upload Image</button>
            </form>
        </div>
    

        


</body>
</html>
