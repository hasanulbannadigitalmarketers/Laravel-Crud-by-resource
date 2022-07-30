<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 crud</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
        <div class="container">
            <div class="row bg-red" style="margin:20px;">
                <div class="col-12">

                            <h2>Student List</h2>
                        </div>
                        <div>
                            <a href="{{url('oliur/create')}}" class="btn btn-success btn-sm" title="Add new Student">
                                Add New
                            </a><br><br>
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>User Name</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($info as $item )


                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->username}}</td>

                                            <td>
                                                <a href="{{url('/oliur/'.$item->id)}}" class="btn btn-info btn-sm" title="View Student" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                                <a href="{{url('/oliur/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Student" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                                <form method="POST" action="{{ url('/oliur/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


</body>
</html>
