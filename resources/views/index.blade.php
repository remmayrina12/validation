<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserTask</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-reboot.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>TaskName</th>
                <th>Status</th>
                <th>Description</th>
                <th>Deadline</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usertasks as $usertask)
            <tr>
                <td>{{ $usertask->task_name }}</td>
                <td>{{ $usertask->status }}</td>
                <td>{{ $usertask->description }}</td>
                <td>{{ $usertask->deadline }}</td>
                <td>
                    <a href="{{ url('usertasks', $usertask->id) }}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                    <form action="{{ url('usertasks', $usertask->id) }}" method="POST">
                    @method('delete')
                    @csrf

                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
            </div>
        </div>
    </div>
    
    



</body>
</html>