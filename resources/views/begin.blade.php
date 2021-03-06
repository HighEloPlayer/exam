<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Begin</title>
</head>
<body>
    
<div class="container-sm">
    <h1>Enter the name of the students</h1>

    <form action="/enter-grades" method="POST">
        @csrf
        @for ($i = 1; $i <= 5; $i++)
        <div class="row">
            <p>Student {{ $i }} Name:</p>
            <input type="text" name="name_{{ $i }}" class="form-control" required>
        </div>
        @endfor
        <hr>
        <div class="row">
        <button class="btn btn-primary btn-lg" type="submit">
            Save Students 
        </button>
        </div>
    </form>
</div>

</body>
</html>