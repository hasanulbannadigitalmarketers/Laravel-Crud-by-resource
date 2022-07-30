<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">

                    <h2>Create New Student</h2>
                </div>

                  <div>
                    <form action="{{url('oliur')}}" method="post" class="form">
                        {!! csrf_field() !!}
                        <label class="control-label">Name</label><br>
                        <input type="text" name="name" id="name" class="form-control"><br>
                        <label class="control-label">User Name</label><br>
                        <input type="text" name="username" id="username" class="form-control"><br>
                        <input type="submit"  value="save" class="btn btn-success"><br>


                    </form>
                  </div>
            </div>
        </div>


</body>

</html>
