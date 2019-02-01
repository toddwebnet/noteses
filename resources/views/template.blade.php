<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Noteses</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.numeric.min.js"></script>


    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>

<body>

<nav class="navbar navbar-toggleable-md  fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <h2 style="color: white; text-decoration: none">
        <span style="background-color:white; padding: 10px; height: 40px; margin-right: 10px">
            <img src="/images/notes.png" style="height:40px;"/></span>Notes</h2></a>


    <div class="collapse navbar-collapse" id="navbarsExampleDefault">


    </div>


</nav>

<div class="userbar" style="text-align:right">
    <img src="/images/ajax_loader.gif" id="waitingBody" style=" display: none;height: 25px;padding: 2px;"/>
</div>


<div id="cartHeader"></div>
<div class="container" id="mainBody">
    <div class="starter-template">
        @section('body')
        @show()
    </div>

</div><!-- /.container -->

<div class="container" id="footer">
    <div class="col-md-12" id="footer-links">

        Notes are cool!
    </div>
</div>


<div class="modal fade" id="myModal" role="dialog" tabindex="-1">

    <div class="modal-dialog" style="max-width: 900px">
        <form action="#" method="post" id="myModalForm" onsubmit="return myModalForm_submit()">
            {{ csrf_field() }}
            <input type="hidden" id="myModalFormId"/>
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="myModalFormTitle"></h4>
                </div>
                <div class="modal-body" id="myModalBody">

                </div>
                <div class="modal-footer" id="myModalFormButtons">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>

</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug
<script src="/js/ie10-viewport-bug-workaround.js"></script>
-->

<link href="/css/select2.min.css" rel="stylesheet"/>
<script src="/js/select2.min.js"></script>

<script src="/js/app.js"></script>

</body>
</html>
