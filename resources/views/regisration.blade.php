<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>regisration</title>
</head>
<body>
<body>
    <div class="header">
     <center><img src="{{ asset('img/starthub.png')}}"></center>
     <div> Registration  </div>
     <form>
     <div class="form-group row">
         <label for="formGroupExampleInput" Class= "col-sm-2 col-form-label">First name</label>
         <div class="col-sm-10">
         <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
         </div>
     </div>
     <div class="form-group row">
        <label for="formGroupExampleInput2" Class= "col-sm-2 col-form-label">Last name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your lastname">
        </div>
     </div>
     <div class="form-group row">
        <label for="formGroupExampleInput2" Class= "col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder=" Enter your email">
        </div>
     </div>
     <div>
         <a class="btn btn-primary" href="#" role="button">Link</a>
         <button class="btn btn-primary" type="Register">Register</button> 
     </div>

     </form>
    </div>
</body>
<!--bootstrap js-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>