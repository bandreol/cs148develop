<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("top.php");

$query = 'SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart, fldStop, fldDays, fldBuilding, fldRoom FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "KALKIN"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);
    
    $columns = 12;
    
//    foreach ($info2 as $field) {
//        $columns++;
//    }
    print '<h2>Total Records: ' . count($info2) . '</h2>';
    print '<h3>SQL: ' . $query . '</h3>';
    
    print '<table class = "teacherTable">';
    print '<thead>';
    print '<tr class="even">';
    print '<th class="teacherTh">fnkCourseId</th>';
    print '<th class="teacherTh">fldCRN</th>';
    print '<th class="teacherTh">fnkTeacherNetId</th>';
    print '<th class="teacherTh">fldMaxStudents</th>';
    print '<th class="teacherTh">fldNumStudents</th>';
    print '<th class="teacherTh">fldSection</th>';
    print '<th class="teacherTh">fldType</th>';
    print '<th class="teacherTh">fldStart</th>';
    print '<th class="teacherTh">fldStop</th>';
    print '<th class="teacherTh">fldDays</th>';
    print '<th class="teacherTh">fldBuilding</th>';
    print '<th class="teacherTh">fldRoom</th>';
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