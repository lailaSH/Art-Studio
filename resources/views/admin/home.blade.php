                     <!DOCTYPE html>
                     <html lang="en">
                     <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <link rel="stylesheet" href="../resources/css/themify-icons.css">
                        <title>Admin Dashboard</title>
                        <link rel="icon" type="image/png" href="../../resources/images/AdminIcon.png">
                     </head>
                     <body>
                        <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                        </div>
                        @endif
                        @include('admin.background')
                     @include('admin.Nav')
                     </body>
                     </html>