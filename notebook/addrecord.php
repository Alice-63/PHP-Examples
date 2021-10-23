<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Person</title>
    <?php include("../includes/head.php")?>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3>Add Person</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
            <form action="save.php" method="get">
            <div class="form-group">
                <label for="">Name</label>
                <input require type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="">Lastname</label>
                <input require type="text" class="form-control" name="lastname" placeholder="Lastname">
            </div>
            <div class="form-group">
                <label for="">Web</label>
                <input require type="text" class="form-control" name="web" placeholder="Web">
            </div>
            <div class="form-group">
                <label for="">E-Mail</label>
                <input require type="text" class="form-control" name="email" placeholder="E-Mail">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input require type="number" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="">Facebook</label>
                <input require type="text" class="form-control" name="facebook" placeholder="Facebook">
            </div>
            <div class="form-group">
                <label for="">Twitter</label>
                <input require type="text" class="form-control" name="twitter" placeholder="Twitter">
            </div>
         
            <div class="form-group">
                <label for="">Birthday</label>
                <input require type="date" class="form-control" name="birthday" placeholder="Birthday">
            </div>
            <div class="form-group">
                <label for="">Note</label>
                <textarea rows="3" type="text" class="form-control" name="note" placeholder="Note"></textarea>
            </div>
            <div class="form-group">
                <label for="">Adress</label>
                <textarea rows="3"  type="text" class="form-control" name="adress" placeholder="Adress"></textarea>
            </div>
        
            </div>
        </div>
       <button class="btn btn-primary mt-3"><a href="notebook.php" class="btn btn-primary mt-3">Save</a></button>
        <a href="notebook.php" class="btn btn-danger mt-3">Cancel</a>
        </form>
    </div>
</body>
</html>