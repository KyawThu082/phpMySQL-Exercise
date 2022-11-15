<html>

<head>

</head>

<body>
    <!-- 1. First Connect MySQL Database -->
    <h1> Employee Information System</h1>

    <input type="text" id="eid" placeholder="ID" /><br /><br />
    <input type="text" id="name" placeholder="Name" /><br /><br />
    <input type="text" id="city" placeholder="City" /><br /><br />
    <input type="text" id="year" placeholder="Year" /><br /><br />
    <br />

    <input type="button" id="submitbtn1" value="SUBMIT" /><br />

    <br />
    <br />
    <input type="button" id="displaybtn" value="VIEW" /><br />

    <br />
    <br />
    <h2> Updated Name by checking ID </h2>
    <input type="text" id="uid" placeholder="old ID" /><br /><br />
    <input type="text" id="uname" placeholder="new Name" /><br /><br />
    <input type="button" id="updatebtn" value="UPDATE" /><br />

    <br />
    <br />
    <h2> Delete record by checking ID </h2>
    <input type="text" id="did" placeholder="old ID" /><br /><br />
    <input type="button" id="deletebtn" value="DELETE" /><br />

    <!-- Add jQuery -->
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="./index.js"></script>

    </script>

</body>

</html>