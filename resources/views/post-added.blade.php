<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Added</title>
</head>

@include('layout')
@section('content')

<body style="background-color:grey; padding-bottom:80px" >
    

@foreach($posts as $post)
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">  
                <div class="card-header">
                    <h1>personne ayant ajouter le post</h1>
                </div>
                <div class="card-body">
                    <p>{{ $post->text }}</p>
                </div>
            </div>
        </div>
    </div>
</div>  
@endforeach

</body>
</html>