<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page </title>
</head>
<body>
    <!-- add/edit form modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Edit User<i class="fa fa-user-circle-o"
            aria-hidden="true"></i>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
    </div>
    <!-- Start of the form -->
    <form  method="POST"  action = "addUser.php" action= "">
        <div class="modal-body">
             <!-- User ID -->
        <div class="form-group">
            <label for="recipient-id" class="col-form-label">ID:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o"
                    aria-hidden="true"></i>
              </div>
              <input type="text" class="form-control" id="uid" name="uid" required>
            </div>
        </div>
         <!-- User Nom -->
          <div class="form-group">
            <label for="recipient-nom" class="col-form-label">NOM:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o"
                    aria-hidden="true"></i>
              </div>
              <input type="text" class="form-control" id="fname" name="fname" required>
            </div>
        </div>
             <!-- User Prenom -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">PRENOM:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o"
                    aria-hidden="true"></i>
              </div>
              <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
          </div>
              <!-- Username -->
              <div class="form-group">
            <label for="message-text" class="col-form-label">Username:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o"
                    aria-hidden="true"></i>
                </span>
            </div>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
    </div>
             <!-- User Email -->
          <div class="form-group">
            <label for="message-text" class="col-form-label">EMAIL:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o"
                    aria-hidden="true"></i>
                </span>
            </div>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>
     <!-- User Password -->
    <div class="form-group">
            <label for="message-text" class="col-form-label">PASSWORD:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"
                    aria-hidden="true"></i></span>
              </div>
              <input type="password" class="form-control" id="pwd" name="pwd" required >
            </div>
          </div>
           <!-- User Password confirmation-->
    <div class="form-group">
            <label for="message-text" class="col-form-label">CONFIRM PASSWORD:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"
                    aria-hidden="true"></i></span>
              </div>
              <input type="password" class="form-control" id="pwd" name="conPwd" required >
            </div>
          </div>
           <!-- Type of user: team leader or team member -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">USER TYPE:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o"
                    aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" id="usertype" name="usertype" required>
            </div>
          </div>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="addButton" name ="addButton">Submit</button>
        </div>
    </div>
    <!--
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="addButton" name ="addButton">Submit</button>
        <input type="hidden" name="action" value="adduser">
        <input type="hidden" name="userid" id="userid" value="">
    </div> -->
</form>   <!-- End of the form -->
</div>
</div>
</div>
<!-- add/edit form modal end -->
</body>
</html>
