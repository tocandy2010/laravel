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

        <form class="form-horizontal" action="/home" method="post">
            @csrf
                <fieldset>
                
                <!-- Form Name -->
                <legend>新增公告</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">title</label>  
                  <div class="col-md-4">
                  <input id="textinput" name="title" type="text" placeholder="" class="form-control input-md">
                    
                  </div>
                </div>
                
                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="">content</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" style="resize:none;height:500px;overflow-y:scroll;" name="content"></textarea>
                  </div>
                </div>
                
                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for=""></label>
                  <div class="col-md-8">
                    <button id=""  class="btn btn-success">Add</button>
                    <button  type='button' id='cancel' class="btn btn-danger">Cancel</button>
                    @if(Session::has('error'))
                      <span style="color:darkred">{{session('error')}}</span>
                    @endif
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