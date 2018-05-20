<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
    <title>Cashfer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <link href="https://fonts.googleapis.com/css?family=Stylish" rel="stylesheet">
            <h2 style="margin-top:  20px; margin-left: 20px; font-family: 'Stylish', sans-serif; color: white"> CASHFER</h2>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1">Dashboard </a>
              
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2">Budget</a>
                   
                </li>
              <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2">Report</a>
                   
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div  id="page-wrapper">
        <div style="margin-top: -140px" class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div id="content">
                    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
                    <h1 style=" font-family: 'Raleway', sans-serif;">Budgets</h1>
                </div>
            </div>

            <div class="row" id="main" >
                <div id="content">
                  <div id="wrapper">


<h1>Custom Select <span>Without Plugin</span></h1>
<!--
TO DO:
1. Add icons to List 
2. Toogle opened state
-->

<select id="mounth">
    <option value="hide">-- Month --</option>
    <option value="january" rel="icon-temperature">January</option>
    <option value="february">February</option>
    <option value="march">March</option>
    <option value="april">April</option>
    <option value="may">May</option>
    <option value="june">June</option>
    <option value="july">July</option>
    <option value="august">August</option>
    <option value="september">September</option>
    <option value="october">October</option>
    <option value="november">November</option>
    <option value="december">December</option>
</select> 

<select id="year">
    <option value="hide">-- Year --</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
</select>

<p>See the <a href="https://codepen.io/wallaceerick/pen/fEdrz">Custom File Upload</a> demo!</p> 

<style type="text/css">
  

@import "compass/css3";

@import "compass";
@import url("https://fonts.googleapis.com/css?family=Lato");

$background: #e74c3c;
$select-color: #fff;
$select-background: #c0392b;
$select-width: 220px;
$select-height: 40px; 

body { 
  font-family: Lato, Arial;
}
h1 {
  font-weight: normal;
  font-size: 40px;
  font-weight: normal;
  text-transform: uppercase;
  span { 
    font-size: 13px;
    display: block;
    padding-left: 4px;
  }
}
p {
  margin-top: 200px;
  a {
    text-transform: uppercase;
    text-decoration: none;
    display: inline-block;
    color: #fff;
    padding: 5px 10px;
    margin: 0 5px;
    background-color: darken($select-background, 2);
    @include transition(all 0.2s ease-in);
    &:hover {
      background-color: darken($select-background, 5);
    }
  }
}
.select-hidden {
  display: none;
  visibility: hidden;
  padding-right: 10px;
}
.select {
  cursor: pointer;
  display: inline-block;
  position: relative;
  font-size: 16px;
  color: $select-color;
  width: $select-width;
  height: $select-height;
}
.select-styled {
  position: absolute; 
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: $select-background;
  padding: 8px 15px;
  @include transition(all 0.2s ease-in);
  &:after {
    content:"";
    width: 0;
    height: 0;
    border: 7px solid transparent;
    border-color: $select-color transparent transparent transparent;
    position: absolute;
    top: 16px;
    right: 10px;
  }
  &:hover {
    background-color: darken($select-background, 2);
  }
  &:active, &.active {
    background-color: darken($select-background, 5);
    &:after {
      top: 9px;
      border-color: transparent transparent $select-color transparent;
    }
  }
}

.select-options {
  display: none; 
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  z-index: 999;
  margin: 0;
  padding: 0;
  list-style: none;
  background-color: darken($select-background, 5);
  li {
    margin: 0;
    padding: 12px 0;
    text-indent: 15px;
    border-top: 1px solid darken($select-background, 10);
    @include transition(all 0.15s ease-in);
    &:hover {
      color: $select-background;
      background: $select-color;
    }
    &[rel="hide"] {
      display: none;
    }
  }
}

</style>

<script type="text/javascript">
  /*
Reference: http://jsfiddle.net/BB3JK/47/
*/

$('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
</script>


                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->






<style type="text/css">
  


  @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}

#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #1a242f;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 60px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #222;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #1a242f !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
}
</style>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>