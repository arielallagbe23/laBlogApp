<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>

@include('layout')
@section('content')



<body style="background-color:grey; padding-bottom:80px" >
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-1">
                <div class="card">  
                    <div class="card-header">
                    <h1>Hello</h1>
                    <p>Begin new post with us !</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea id="" name="text" rows ="9" cols="49"></textarea>
                        </div><br/>
                        <button type="submit" class="btn btn-danger">post</button><br/><br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
</body>
</html>