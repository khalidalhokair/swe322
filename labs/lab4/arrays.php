!DOCTYPE html>
<html>
<head>
    <title>Classmates and Courses</title>
    <style>
        .classmates {
            font-weight: bold;
            color: blue;
        }
        
        .courses {
            font-weight: bold;
            color: green;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
   
    $classmates = array( "saud", "khalid alhokair", "fahad");

    echo "<h1>Classmates</h1>";
    echo "<ul>";
    foreach ($classmates as $classmate) {
        echo "<li class='classmates'>$classmate</li>";
    }
    echo "</ul>";

    
    $finishedCourses = array(
        "CSC101" => "Introduction to Computer Science",
        "ENG201" => "English ",
        "MAT301" => "Calculus II",
        "PHY200" => "Physics for Engineers",
        "isl" => "islamc"
    );

    echo "<h1>Finished Courses</h1>";
    echo "<table>";
    echo "<tr><th>Course Code</th><th>Course Name</th></tr>";
    foreach ($finishedCourses as $courseCode => $courseName) {
        echo "<tr><td class='courses'>$courseCode</td><td class='courses'>$courseName</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
