<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Todo List App</title>
</head>
<body>
<div class="container"> 
  <div class="col-md-offset-2 col-md-8">
     <div class="row">
      <h1>Todo List</h1>
     </div>

    <div class="row">
      <form action="{{route('tasks.store')}}" method='POST'>
        {{ csrf_field() }}

        <div class="col-md-9">
        <input type="text" class="form-control">
        </div>
        <div class="col-md-3">
           <input type="submit" class="btn btn-primary" style="" value="Add Task">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
