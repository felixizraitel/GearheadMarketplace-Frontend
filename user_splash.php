<?php

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GearHead Marketplace</title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/user_splash.css">
</head>

<link rel="stylesheet" href="css/header.css">
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Gearhead Market Place</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="">Settings</a></li>
                        <li><a class="dropdown-item" href="">Logout</a></li>
                    </ul>

                </li>
                <a href="/testForms/offer-form-test.php">
                    <button class="btn btn-primary" action="">Create Listing</button>
                </a>
            </div>
        </div>
    </nav>
</header>

<body>

<br>
<br>
<br>
<br>
<br>
<br>

<center>

<table>
    <colgroup>
        <col style="background-color:darkorange">
        <col style="background-color:darkorange">
        <col style="background-color:darkorange">
        <col style="background-color:darkorange">
        <col style="background-color:darkorange">
    </colgroup>
    <tr>
        <td><img id="tag1" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p1"></p></td>
        <td><img id="tag2" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p2"></p></td>
        <td><img id="tag3" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p3"></p></td>
        <td><img id="tag4" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p4"></p></td>
        <td><img id="tag5" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p5"></p></td>
    </tr>
    <tr>
        <td><img id="tag6" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p6"></p></td>
        <td><img id="tag7" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p7"></p></td>
        <td><img id="tag8" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p8"></p></td>
        <td><img id="tag9" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p9"></p></td>
        <td><img id="tag10" height="200" width="200" src="assets/images/blank.png" onclick=""><p id="p10"></p></td>
    </tr>
</table>
<br>
<br>
<br>
    <div>

        <button class="btn btn-primary" id="page1">1</button>
        <button class="btn btn-primary" id="page2">2</button>
        <button class="btn btn-primary" id="page3">3</button>
        <button class="btn btn-primary" id="page4">4</button>
        <button class="btn btn-primary" id="page5">5</button>
    </div>


<div id="offerings">
</div>

</center>
</body>
</html>

<script>

    // let backendURL = 'http://0.0.0.0:8000/';
    let backendURL = 'https://backend-gearheadmarketplace.herokuapp.com/';
    $("button#page1").click(function (e) {
        e.preventDefault();

        fetch(backendURL + 'offers/', {
            method: 'get',
        })
            .then(response => response.json()).then(data => {
            console.log(data)
            renderOffering(data,0,9)

        }).catch(error => {
            // console.log(error)
        })

        $("#tag1").attr("src", "https://gearhead-images.s3.amazonaws.com/images/Screen Shot 2021-06-28 at 3.20.56 PM.png")
        $("#tag2").attr("src", "https://gearhead-images.s3.amazonaws.com/images/IMG_1740.jpg")
        $("#tag3").attr("src", "https://gearhead-images.s3.amazonaws.com/images/Screen Shot 2021-07-15 at 7.23.18 PM.png")
        $("#tag4").attr("src", "")
        $("#tag5").attr("src", "")
        $("#tag6").attr("src", "")
        $("#tag7").attr("src", "")
        $("#tag8").attr("src", "")
        $("#tag9").attr("src", "")
        $("#tag10").attr("src", "")

    });

    
    function renderOffering(data,start,finish)
    {

        $("p#p1").append(data[start].title)
        $("p#p2").append(data[start + 1].title)
        $("p#p3").append(data[start + 2].title)
        $("p#p4").append(data[start + 3].title)
        $("p#p5").append(data[start + 4].title)
        $("p#p6").append(data[start + 5].title)
        $("p#p7").append(data[start + 6].title)
        $("p#p8").append(data[start + 7].title)
        $("p#p9").append(data[start + 8].title)
        $("p#p10").append(data[start + 9].title)

    }
</script>


