<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="spitIt">
    <meta name="author" content="Nishant">

    <title>Spit It</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/spitit.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Spit it</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group form-inline">
                    <label for="exampleInputName2">Manager: </label>
                    <input type="text" class="form-control" id="manager" placeholder="Jane Doe">
                  </div>
                <div class="modal-footer">
                    <button id="save" type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
            </div>
        </div>
        
        <!-- app start -->
        <div id="app" style="display:none">
            <div class="container-fluid">
            <div id="cid" class="row" style="min-height:80%;">
                <!--table id="conversation" class="table table-hover">
                    <tbody>
                    <tr class="well"><td class="manamer"></td><td>Hi, what's up?</td></tr>
                    </tbody>
                </table-->
            </div>
            <div class= "row" style="min-height:20%;">
              <div class= "col-xs-11">
                <input id="msg" type="text" class="form-control" placeholder="Text input"  onkeydown="sendMsg();">
              </div>
              <div class= "col-xs-1">
                    <button id="send" type="button" class="btn btn-primary">Send</button>
              </div>
            </div>
        </div>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/spitit.js"></script>
</html>
