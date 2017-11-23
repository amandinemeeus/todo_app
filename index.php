<?php include "core/request.php" ?>
<?php include "core/debug.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TodoList</title>
<!-- MY CSS -->
<link rel="stylesheet" type="text/css" href="styles.css" />
<!-- MY FONTS -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
<!-- DATEPICKER PLUGIN -->
<link rel="stylesheet" href="datepicker/dist/mtr-datepicker.min.css">
<link rel="stylesheet" href="datepicker/dist/mtr-datepicker.clutterboard-theme.min.css">
</head>

<!--Body start-->
<body>

<!--Main start-->
<div class="main">


<!--First container start-->
<div class="first-container" id="contenu1" style="display:flex">
    <!--Main header start-->
    <div class="main-header">
        <div id="nickname"></div>
        <!--Centered start-->
        <div class="centered">
            <div class="title" >
                <h1>MY TODOLIST</h1>
                <button id="add"><img src="public/assets/images/add.png" width="60" height="60" alt="add" /></button>
            </div>
        </div>
        <!--Centered end-->
    </div>
    <!--Main header end-->

    <!--Main container start-->
    <div class="main-container">
        <!--Centered start-->
        <div class="centered">
            <!--Ul start-->
            <ul class="list" id="todo-list">
                <li class="list-item"> <!--relative-->
                    <!-- <span class="todo-check"></span> -->
                    <header class="item-header">

                        <li class="item-title" id="done"><span class="done"></span></li>
                        <li class="item-title" id="late"><span class="late"></span></li>
                        <li class="item-title" id="todo"></li>

                        <!-- <li class="item-title" id="done"><span class="done">Take a shower</span></li>
                        <li class="item-title" id="done"><span class="done">Make my bag</span></li>
                        <li class="item-title" id="done"><span class="done">Take a breakfast</span></li>
                        <li class="item-title" id="late"><span class="late">Go to bus stop</span></li>
                        <li class="item-title" id="todo">Be at Becode to 9:00</li>
                        <li class="item-title" id="todo">Start coding</li>
                        <li class="item-title" id="todo">I need a real BREAK</li>
                        <li class="item-title" id="todo">Go to bus stop</li> -->
                            <!-- <button class="button" type="menu">Cliquez sur moi :)</button> -->
                            <ul class="menu"> <!--absolute-->
                                <li class="menu-item"><a href="#">Delete</a></li>
                                <li class="menu-item"><a href="#">Edit</a></li>
                            </ul>
                    </header>
                    <div class="item-container">
                        <!-- My bus arrive on 7:30 I'll be on 7:15 at bus stop -->
                    </div>
                    <footer class="item-footer">
                        <span>Started on:</span>
                        <span>End time:</span>
                    </footer>
                </li>
            </ul>
            <!--Ul end-->
        </div>
        <!--Centered end-->
    </div>
    <!--Main container end-->

    <!--Main footer start-->
    <div class="main-footer">
        <div class="centered">
            <ul class="display-of-app">
                <li>Show:</li>
                <li class="underline"><a href="#">All task</a></li>
                <li><a href="#">Todo task</a></li>
                <li><a href="#">Done task</a></li>
            </ul>
        </div>
    </div>
    <!--Main footer end-->
</div>



<!--Next container start-->
<div class="next-container" id="contenu2" style="display:none">
    <!--Main header start-->
    <div class="main-header">
        <div id="nickname"></div>
        <!--Centered start-->
        <div class="centered">
            <div class="title" >
                <h1>MY TODOLIST</h1>
                <button id="close"><img src="public/assets/images/cross.png" width="60" height="60" alt="add" /></button>
            </div>
        </div>
        <!--Centered end-->
    </div>
    <!--Main header end-->
    <!--Main container start-->
    <div class="main-container">
        <!--Centered start-->
        <div class="centered">
            <div class="clear"><a href="#" id="clear">Clear</a></div>
            <!--Ul start-->
            <ul class="list" id="todo-list">
                <!--one-->
                <li class="list-item"> <!--relative-->
                    <header class="item-header">
                        <h2 class="item-big-title">TITLE</h2>
                        <p class= "item-title"><span class="retrait">My todo title</span></p>
                        <div class= "item-border"></div>
                    </header>
                    <h2 class="item-big-title">DESCRIPTION</h2>
                        <div class="item-title"><span class="retrait">My todo description</span></div>
                        <div class="item-title"><span class="retrait">...</span></div>
                        <div class="item-title"><span class="retrait">...</span></div>
                        <div class= "item-border"></div>
                    <footer class="item-footer" id="next">
                        <h2 class="item-big-title">START AT</h2>
                        <div class="item-title"><span class="retrait">December 12, 2 PM</span></div>
                        <div class= "item-border"></div>
                        <h2 class="item-big-title">END AT</h2>
                        <div class="item-title"><span class="retrait">December 12, 3 PM</span></div>
                        <div id="first-mtr-datepicker"></div>
                        <div class= "item-border"></div>

                    </footer>
                </li>
            </ul>
            <!--Ul end-->
        </div>
        <!--Centered end-->
    </div>
    <!--Main container end-->
    <!--Main footer start-->
    <div class="main-footer">
        <div class="centered">
            <ul class="action-button">
                <li><a href="#">Add task and create new one</a></li>
                <li><a href="#">Add task</a></li>

            </ul>
        </div>
    </div>
    <!--Main footer end-->

</div>
<!--Next container end-->


</div>
<!--Main end-->

<!--Script start-->
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="datepicker/dist/mtr-datepicker.min.js"></script>
<!--DATEPICKER-->
<script>
  var config = {
    target: 'first-mtr-datepicker'
  };
  var myDatepicker = new MtrDatepicker(config);
</script>
<!--Script end-->


</body>
<!--Body end-->

</html>




<!-- <form method="post">
     <input type="submit" name="getTask" value="1">
 </form> -->
