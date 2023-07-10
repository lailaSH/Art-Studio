<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="../../../resources/css/test.css" rel="stylesheet" />
    <link href="../../resources/css/uplode.css" rel="stylesheet" />
    <link rel="icon" type="image/png"  href="../../resources/images/ImageIcon.png">

    <title>Admin Dashboard / projects Gallery</title>
</head>
<body>
	@include('admin.background')
    @include('admin.Nav')
        <div class="center">
            <form method="POST" enctype="multipart/form-data"  action="{{route('admin.store')}}" >
                @csrf

            <div class="dropzone" style="display: inline-block">
                <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />	
                <input type="file" name="file" class="upload-input" />
            </div>

            <div class="dropzone" style="display: inline-block">
                <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                <input type="file" name="file2" class="upload-input" />
            </div>

            <div class="dropzone" style="display: inline-block">
                <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                <input type="file" name="file3" class="upload-input" />
            </div>

            <br>
            <br>
            <div class="input-container">
                <input type="text" name="title" required />
                <label>Title</label>		
            </div>
            <br>
            <div class="input-container">
                <input type="text" name="description" required/>
                <label>Description</label>		
            </div>            
            <button type="submit" class="btn" name="uploadbutton">Upload Image</button>
            </form>
        </div>
    

        


</body>
</html>
