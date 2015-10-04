<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("top.php");

$query = 'SELECT DISTINCT fldCourseName, fldDays, fldStart FROM tblSections, tblTeachers, tblCourses '
        . 'WHERE fldFirstName = "Robert Raymond" '
        . 'AND fldLastName = "Snapp" '
        . 'AND pmkNetId = fnkTeacherNetId '
        . 'AND fnkCourseId = pmkCourseId '
        . 'AND fldStart NOT LIKE "00:00:00"'
        . 'ORDER BY fldStart';
    $info2 = $thisDatabaseReader->select($query, "", 1, 5, 6, 0, false, false);
    
    $columns = 3;
    
//    foreach ($info2 as $field) {
//        $columns++;
//    }
    print '<h2>Total Records: ' . count($info2) . '</h2>';
    print '<h3>SQL: ' . $query . '</h3>';
    
    print '<table class = "teacherTable">';
    print '<thead>';
    print '<tr class="even">';
    print '<th class="teacherTh">fldCourseName</th>';
    print '<th class="teacherTh">fldDays</th>';
    print '<th class="teacherTh">fldTimes</th>';
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
