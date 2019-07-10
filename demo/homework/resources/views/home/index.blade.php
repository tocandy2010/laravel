<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>公告欄</h2>
  <p style="text-align:right"><a href='home/create'><button type="button" class="btn btn-success btn-lg">Add</button></a></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>title</th>
        <th>time</th>
        <th>修改</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $k=>$v)
      <tr>
        <td>{{$v->home_id}}</td>
        <td><a href='#'>{{$v->title}}</a></td>
        <td>{{date('Y-m-d H:i:s',$v->time)}}</td>
        <td><a href="/home/{{$v->home_id}}/edit"><button type="text" class="btn btn-info">Edit</button></a></td>
        <td><button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>