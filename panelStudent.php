<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Student</title>
</head>
<body>
    <h1> Panel de Estudiantes </h1>
    <table> 
        <thead>
            <tr>
                <th>ID Estudiantes</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>fecha Nacimiento</th>
                <th>Tel&eacute;fono</th>
                <th>Acciones</th>
                
            </tr>


        </thead>

        <tbody>
            <?php
            include("model/student.php");
            $student= new Student();
            $allStudents= $student->getAllStudents();
            if($allStudents){
                foreach($allStudents as $data){
                    print "<tr>";
                    print "<td>".$data["idStudent"]."</td>";
                    print "<td>".$data["Surname"]."</td>";
                    print "<td>".$data["Name"]."</td>";
                    print "<td>".$data["DNI"]."</td>";
                    print "<td>".$data["Birthdate"]."</td>";
                    print "<td>".$data["Phone"]."</td>";
                    print "<td> Los 2 Botones  </td>";
                    print "</tr>";

                }

            }else {
                print "No existe estudiantes cargados";

            }
            ?>

        </tbody>

    </table>

</body>
</html>