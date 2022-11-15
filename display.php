<html>

<head>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <!-- 1. First Connect MySQL Database -->
    <h1> Employee Information System</h1>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>city</th>
            <th>year</th>
        </tr>

        <?php
        include_once "./includes/config.php";
        $sql = "SELECT * FROM `employee`";
        $db = mysqli_query($conn, $sql);
        $row = null;

        if (mysqli_num_rows($db) > 0) {
            while ($row = mysqli_fetch_assoc($db)) {
                echo "
            <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['city'] . "</td>
                <td>" . $row['year'] . "</td>

            </tr>
            ";
            }
        }


        ?>
        <!-- Add jQuery -->
        <script src="./js/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="./index.js"></script>

        </script>

</body>

</html>