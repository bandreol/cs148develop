<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("top.php");

$query = 'SELECT fldFirstName, fldLastName, SUM(fldNumStudents) as total FROM tblTeachers, tblSections, tblCourses '
        . 'WHERE fnkTeacherNetId = pmkNetId '
        . 'AND fnkCourseId = pmkCourseId '
        . 'AND fldDepartment = "CS" '
        . 'AND fldType NOT LIKE "LAB" '
        . 'AND fldNumStudents NOT LIKE 0 '
        . 'GROUP BY fldLastName '
        . 'ORDER BY total DESC';
    $info2 = $thisDatabaseReader->select($query, "", 1, 7, 4, 0, false, false);
    
    $columns = 3;
    
//    foreach ($info2 as $field) {
//        $columns++;
//    }
    print '<h2>Total Records: ' . count($info2) . '</h2>';
    print '<h3>SQL: ' . $query . '</h3>';
    
    print '<table class = "teacherTable">';
    print '<thead>';
    print '<tr class="even">';
    print '<th class="teacherTh">fldFirstName</th>';
    print '<th class="teacherTh">fldLastName</th>';
    print '<th class="teacherTh">total</th>';
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

