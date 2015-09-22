<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("top.php");

?>

<ul>
    <li>
        <p>q01. <a href="q01.php">SQL</a> SELECT pmkNetID FROM tblTeachers</p>
    </li>
    <li>
        <p>q02. <a href="q02.php">SQL</a> SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE "Introduction%</p>
    </li>
    <li>
        <p>q03. <a href="q03.php">SQL</a> SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart, fldStop, fldDays, fldBuilding, fldRoom FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "KALKIN"</p>
    </li>
    <li>
        <p>q04. <a href="q04.php">SQL</a> SELECT pmkCourseId, fldCourseNumber, fldCourseName, fldDepartment, fldCredits FROM tblCourses WHERE fldCourseName = "Database Design For The Web" </p>
    </li>
    <li>
        <p>q05. <a href="q05.php">SQL</a> SELECT fldLastName, fldFirstNAme from tblTeachers WHERE pmkNetId LIKE "r%" AND pmkNetId LIKE "%o"</p>
    </li>
    <li>
        <p>q06. <a href="q06.php">SQL</a> SELECT fldCourseName FROM tblCourses WHERE fldCourseName LIKE "%data%" AND fldDepartment != "CS"</p>
    </li>
    <li>
        <p>q07. <a href="q07.php">SQL</a> SELECT COUNT(DISTINCT fldDepartment) FROM tblCourses</p>
    </li>
    <li>
        <p>q08. <a href="q08.php">SQL</a> SELECT fldBuilding, COUNT(fldSection) AS buildingSection FROM tblSections GROUP BY fldBuilding</p>
    </li>
    <li>
        <p>q09. <a href="q09.php">SQL</a> SELECT fldBuilding, SUM(fldNumStudents) AS studentBuilding FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY studentBuilding DESC</p>
    </li>
    <li>
        <p>q10. <a href="q10.php">SQL</a> SELECT fldBuilding, SUM(fldNumStudents) AS studentBuilding  FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY studentBuilding DESC</p>
    </li>
    <li>
        <p>q11. <a href="q11.php">SQL</a> SELECT fnkCourseId, COUNT(*) as countCRN FROM tblSections GROUP BY fnkCourseId HAVING (countCRN >= 50) </p>
    </li>
    <li>
        <p>q12. <a href="q12.php">SQL</a> SELECT SUM(fldNumStudents - fldMaxStudents) AS fldOver FROM tblSections WHERE (fldNumStudents - fldMaxStudents > 0)</p>
    </li>
</ul>

<?php
include ("footer.php");
?>
