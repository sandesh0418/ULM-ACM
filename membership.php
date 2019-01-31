<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<script type="text/javascript" src="js/port.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="membership.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */

.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
    z-index: 999999;
}

/* The Modal (background) */
.modal {
   display: none;
    position: fixed;
    z-index: 1;
    left: 20em;
    top: 7em;
    width: 100%;
    height: 100%;
    overflow: auto;
    padding-top: 50px;
    padding-left: 10em!important;
    padding-right: 50em;
}
.mainDiv{
    margin-left:  5em!important;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: red;
    opacity:1;
    margin-left:30px;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.acmMembership{
    width:50%;
    float: left;
    padding-left:  2em;
}
.joinAcm{
    width:50%;
    float:right;
    text-align: center;
    right: 1em;
}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>

<body>


<div id="content">
    <div class="welcome">
      <marquee>Welcome ACM Members</marquee></div>
      <div class="acmMembership">
      <H2 id="h-Shapethefutureofcomputing">Shape the future of computing</H2><!--  Heading -->
        <div class="clearfix">
  <p>We believe in constantly redefining what computing can and should do.&nbsp; Because we’re more than computational theorists, database engineers, UX mavens, coders and developers.&nbsp; We’re on a mission to solve tomorrow.&nbsp;</p>

<p>Joining ACM means you dare to be the best computing professional you can be.&nbsp; It means you believe in advancing the computing profession as a force for good.&nbsp; And it means joining your colleagues in your commitment to solving tomorrow’s challenges.</p>

<p>ACM membership offers resources to help you shape the future – with lifelong learning programs, publications providing original research and practical content, special interest groups and local chapters to meet peers, delve deeper into technical areas, and leadership opportunities on stimulating projects.</p>

<p>The world’s leading computing professionals choose the world’s leading computing society because it helps them be their most creative, keep abreast of emerging trends and technologies, stay connected to their colleagues and make a positive impact on the profession and the world at large.</p>

<p>No one has more exclusive content. No one offers more events. Or more prestigious awards. Or such a comprehensive learning center. And only ACM brings you the power of the ACM Digital Library, simply the world’s largest, most respected online resource for computing professionals.</p>

<p>Be creative. Stay connected. Keep inventing.</p>
      </div>
      </div>
      <div class="joinAcm">
      <img src="images/3.jpg"/>
      </div>
      </div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left: 71%">Join ACM Today</button>

<div id="id01" class="modal">
 
  <form class="modal-content">
   <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 mainDiv">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <div class="panel panel-default">
               
                <h1 style="padding-left:1em;">Join ULM ACM</h1>
                <div class="panel-heading">
                     <input type="text" class="form-control" id="cardNumber" placeholder="First Name" style="margin-bottom:4px;"
                                required autofocus />
                                 <input type="text" class="form-control" id="cardNumber" placeholder="Last Name" style="margin-bottom:4px;"
                                required autofocus />
                                 <input type="text" class="form-control" id="cardNumber" placeholder="CWID Number" style="margin-bottom:5px;"
                                required autofocus />
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>10</span> Final Payment</a>
                </li>
            </ul>
            <br/>
           <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#welcomeModal">Pay</button>
        </div>
    </div>
</div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
<?php include 'footer.php'; ?>