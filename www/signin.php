<?php
    include('topmenu.php');
?>
<html>
<head>
    <style>
    .emailandpass{
      color: white;
    }
    #btn_login{
      width:100%;
    }
    </style>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  
                  <form action="validateuser.php" method="post">
                    <table cellspacing="0" role="presentation" align="right" >
                      <form action="validateuser.php" method="post">
                      <tbody>
                          <tr>
                          </tr>
                          <tr>
                            <td>
                              <label for="exampleInputEmail1" class="emailandpass">Email address</label>
                            </td>
                            <td colspan=2>
                              <label for="exampleInputPassword1" class="emailandpass">Password</label>
                            </td>
                          </tr>
                          <tr>
                            <td >
                              <input size="20" type="text" class="form-control" id="exampleInputusername1" placeholder="Email" name="emailaddress" align="right">
                            </td>
                            <td >
                              <input size="20" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" align="right">
                            </td>
                          </tr>
                          <tr>
                            <td align="center" colspan=2>
                              <button type="submit" class="btn btn-default" id="btn_login" >Login</button>
                            </td>
                          </tr>
                        </tbody>
                        </form>
                      </table>
                    </form>
                </div>
            </div>
        </div>
  </body>
</html>