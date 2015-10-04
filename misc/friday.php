<?php
include ("top.php");

$query = 'SELECT pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender FROM tblStudents '
        . 'ORDER BY fldLastName '
        . 'LIMIT 10 OFFSET 999 ';
    $info2 = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
    
    $columns = 8;
    
    $variable = array_keys($info2[0]);
    
//    foreach ($info2 as $field) {
//        $columns++;
//    }
    print '<h2>Total Records: ' . count($info2) . '</h2>';
    print '<h3>SQL: ' . $query . '</h3>';
    
    print '<table class = "teacherTable">';
    print '<thead>';
    print '<tr class="even">';
    
    print '<th class="teacherTh">' . $variable[0] . '</th>';
    print '<th class="teacherTh">' . $variable[1] . '</th>';
    print '<th class="teacherTh">' . $variable[2] . '</th>';
    print '<th class="teacherTh">' . $variable[3] . '</th>';
    print '<th class="teacherTh">' . $variable[4] . '</th>';
    print '<th class="teacherTh">' . $variable[5] . '</th>';
    print '<th class="teacherTh">' . $variable[6] . '</th>';
    print '<th class="teacherTh">' . $variable[7] . '</th>';
    
    print '</tr>';
    print '</thead>';
    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td class="teacherTd">' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    
    
include ("footer.php");
?>