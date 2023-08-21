<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .aa{
            margin-left: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <button class="btn btn-success btn-sm mx-auto" onclick="append(this)" id="append">+</button>
    <div class="container">
    <form action="save.php" method="POST">
    <div class="card" id="appendHere">
        <div classs="row" style="display: flex;">
            <div class="form-group aa">
                <label for="exampleInputEmail1">Qualifications : University</label>
                <input type="text" name="qualifications['university'][]"   id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter University">
                 
            </div>
            <div class="form-group aa">
                <label for="exampleInputEmail1">Qualifications : Courses</label>
                <input type="text" name="qualifications['courses'][]"   id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter course name">
                 
            </div>
         
            <div class="form-group aa">
                <label for="exampleInputPassword1">Qualifications : Year</label>
                <input type="text" name="qualifications['year'][]"  id="exampleInputPassword1" placeholder="Enter Passing Year">
            </div>
          
            </div>
        </div>
            <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>
</body>
<script>
function append(ele){
   add = '';
   add+='\ <div classs="row" style="display: flex;"><div class="form-group aa">\
                <label for="exampleInputEmail1">Qualifications : University</label><input type="text" name="qualifications[\'university\'][]"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter University"></div><div class="form-group aa"><label for="exampleInputEmail1">Qualifications : Courses</label>\
                <input type="text" name="qualifications[\'courses\'][]"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter course name">\
              </div><div class="form-group aa">\
                <label for="exampleInputPassword1">Qualifications : Year</label>\
                <input type="text" name="qualifications[\'year\'][]"  id="exampleInputPassword1" placeholder="Enter Passing Year"></div></div></div>';

    $('#appendHere').append(add);
}

</script>
</html>