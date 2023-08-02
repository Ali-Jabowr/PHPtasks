<?php
require 'data_model.php'; // Include the Model

function sort_data($data){
    /**
     * function to resort the data, because the data is a little bit messy
     */
    $students = [];
    foreach ($data as $record){
        $temp = ["name" => $record[0],
                "subj" => $record[1], 
                "marks" => $record[2],
            ];
        array_push($students, $temp);
    }
    return $students;
}

$data = getStudentData(); // Call the Model function to fetch data
$students = sort_data($data);

$final_students = []; // array holds student info
$subjects = []; // array holds subjects name and marks
foreach ($students as $student){
    $name = $student['name'];
    $subj = $student['subj'];
    $marks = $student['marks'];
    
    
    #if the name of the student doesn't exict in the final_students arr
    if (!isset($final_students[$name])) {
        $final_students[$name] = ['name' => $name, 'subj' => []];
    }

    # if the subject already exict, update marks
    if (isset($final_students[$name]['subj'][$subj])){
        $final_students[$name]['subj'][$subj] += $marks;
    }
    
    # if it is not, add it to the array
    else{
        $final_students[$name]['subj'][$subj] = $marks;
        $subjects[$subj] = $marks;
    }
}

// Load the View template
require 'index.php';
?>

