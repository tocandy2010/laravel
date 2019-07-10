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

<form class="form-horizontal" action="/home/{{$data->home_id}}" method="post">
            @csrf
            @method('PUT');
                <fieldset>
                
                <!-- Form Name -->
                <legend>修改公告</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">title</label>  
                  <div class="col-md-4">
                  <input id="textinput" name="title" value="{{$data->title}}" type="text" placeholder="" class="form-control input-md">
                    
                  </div>
                </div>
                
                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="">content</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id=""  name="content">{{$data->content}}</textarea>
                  </div>
                </div>
                
                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for=""></label>
                  <div class="col-md-8">
                    <button id=""  class="btn btn-success">edit</button>
                    <button  type='button' id='cancel' class="btn btn-danger">Cancel</button>
                  </div>
                </div>
                
                </fieldset>
                </form>
                <script>
                    window.onload = function(){
                        let cancel =document.getElementById('cancel').addEventListener('click',function(){
                            window.location.href="{{url('/home')}}"
                        })
                    }
                    
                </script>
                

</body>
</html>