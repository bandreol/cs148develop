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
        q01. <a href="q01.php">SQL</a> SELECT DISTINCT(fldCourseName) FROM tblEnrolls, tblCourses WHERE fldGrade = 100 AND fnkCourseId = pmkCourseId ORDER BY fldCourseName ASC
    </li>
    <li>
        q02. <a href="q02.php">SQL</a> SELECT DISTINCT(fldDays), fldStart FROM tblSections, tblTeachers WHERE fldFirstName = "Robert Raymond" AND fldLastName = "Snapp" AND pmkNetId = fnkTeacherNetId AND fldStart NOT LIKE "00:00:00"ORDER BY fldStart
    </li>
    <li>
        q03. <a href="q03.php">SQL</a> SELECT DISTINCT fldCourseName, fldDays, fldStart FROM tblSections, tblTeachers, tblCourses WHERE fldFirstName LIKE "Jackie%" AND fldLastName = "Horton" AND pmkNetId = fnkTeacherNetId AND fnkCourseId = pmkCourseId AND fldStart NOT LIKE "00:00:00" ORDER BY fldStart
    </li>
    <li>
        q04. <a href="q04.php">SQL</a> SELECT pmkStudentId, fldLastName, fldFirstName FROM tblStudents, tblEnrolls, tblCourses WHERE pmkStudentId = fnkStudentId AND pmkCourseId = fnkCourseId AND fldCourseName = "Database Design for the Web"
    </li>
    <li>
        q05. <a href="q05.php">SQL</a> SELECT fldFirstName, fldLastName, SUM(fldNumStudents) as total FROM tblTeachers, tblSections, tblCourses WHERE fnkTeacherNetId = pmkNetId AND fnkCourseId = pmkCourseId AND fldDepartment = "CS" AND fldType NOT LIKE "LAB" AND fldNumStudents NOT LIKE 0 GROUP BY fldLastName ORDER BY total DESC
    </li>
    <li>
        q06. <a href="q06.php">SQL</a> SELECT fldFirstName, fldPhone, fldSalary FROM tblTeachers WHERE fldSalary < (SELECT AVG(fldSalary) FROM tblTeachers)
    </li>
    <li>
        q07. <a href="q07.php">SQL</a> SELECT fldFirstName, fldLastName, COUNT(fnkCourseId) AS courseTotal, AVG(fldGrade) AS gradeAvg FROM tblStudents, tblEnrolls WHERE fnkStudentId = pmkStudentId AND fldState = "VT" GROUP BY fnkStudentId HAVING gradeAvg > 81 ORDER BY gradeAvg DESC
    </li>
    <li>
        q08. <a href="q08.php">SQL</a> SELECT fldFirstName, fldLastName, SUM(fldNumStudents) AS totalStudents, fldSalary, fldSalary/SUM(fldNumStudents) AS iBB FROM tblTeachers, tblSections, tblCourses WHERE pmkNetId = fnkTeacherNetId AND pmkCourseId = fnkCourseId AND fldDepartment = "CS" AND fldType NOT LIKE "LAB%" AND fldNumStudents NOT LIKE "0" GROUP BY fnkTeacherNetId ORDER BY iBB
    </li>
</ul>
    
<?php
include ("footer.php");