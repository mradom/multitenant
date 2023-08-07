<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-dark-custom {
            background-color: #333333;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-sm-6 bg-dark-custom text-white p-5">
                <h1 class="display-4">{{$post->title}}</h1>
                <p>{{$post->content}}</p>
            </div>
            <div class="col-sm-6 bg-secondary p-5">
                <div class="card p-4">
                    <h1 class="text-center text-dark">Supper APP</h1>
                    <form method="POST" action="{{route('posts.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" name="title" maxlength="255" required="required">
                        </div>
                        <div class="form-group">
                            <label for="content">Message</label>
                            <textarea class="form-control" rows="2" id="content" name="content"></textarea>
                        </div>
                        <button class="btn btn-dark btn-block" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
