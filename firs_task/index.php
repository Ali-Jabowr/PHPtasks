<!DOCTYPE html>
<html>
    <head>
        <title>Student Scores</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                border: 1px solid #dddddd;
                text-align: center;
                padding: 8px;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h2>Student Scores</h2>
        <table>
            <tr>
                <th>Name</th>
                <!-- loop through the subjects name -->
                <?php foreach ($subjects as $subject => $mark): ?>
                    <td><?php echo $subject; ?></td>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($final_students as $final_student): ?>
                <tr>
                    <td><?php echo $final_student['name']; ?></td>
                    
                    <!--loop thorugh the subjects that the student has -->
                    <?php foreach ($subjects as $subject => $marks): ?>
                        <?php if (isset($final_student['subj'][$subject])): ?>
                            <td><?php echo $final_student['subj'][$subject]; ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            
        </table>

    </body>
</html>
