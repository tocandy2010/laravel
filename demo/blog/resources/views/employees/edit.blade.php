<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form method="post" action="/employees/{{$data->id}}" class="form-horizontal">
      @csrf
      @method('PUT')
        <fieldset>
        <!-- Form Name -->
        <legend>Form Name</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">FirstName</label>  
          <div class="col-md-4">
          <input id="textinput" name="FirstName" type="text" placeholder="" value="{{$data->firstName}}" class="form-control input-md">
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">LastName</label>  
          <div class="col-md-4">
          <input id="textinput" name="LastName" type="text" placeholder="" value="{{$data->lastName}}" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="button1id"></label>
          <div class="col-md-8">
            <button id="button1id"  class="btn btn-success">增加</button>
            <button id="button2id" type='button'  class="btn btn-danger">取消</button>
          </div>
        </div>
        
        </fieldset>
        </form>
</div>

</body>
</html>