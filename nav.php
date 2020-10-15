<?php include 'include/nossosLinksTop.php';?>

<body>
  <div class="topnav1" id="myTopnav1">
    <a href="#home" class="active">Home</a>
    <div class="dropdown1">
      <button class="dropbtn1">Dropdown 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content1">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn1">Dropdown 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content1">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn1">Dropdown 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content1">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn1">Dropdown 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content1">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn1">Dropdown 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content1">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div> 
    <a href="javascript:void(0);" style="font-size:15px;" class="icon1" onclick="myFunction()">&#9776;</a>
  </div>

  <div style="padding-left:16px">
    <h2>Responsive Topnav with Dropdown</h2>
    <p>Resize the browser window to see how it works.</p>
    <p>Hover over the dropdown button to open the dropdown menu.</p>
  </div>

  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav1");
    if (x.className === "topnav1") {
      x.className += " responsive1";
    } else {
      x.className = "topnav1";
    }
  }
</script>
<? include 'include/nossosLinksBotom.php'?>

