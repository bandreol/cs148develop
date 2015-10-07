SELECT fldFirstName, fldLastName, SUM(fldNumStudents) as total FROM tblTeachers, tblSections, tblCourses WHERE fnkTeacherNetId = pmkNetId AND fnkCourseId = pmkCourseId AND fldDepartment = "CS" AND fldType NOT LIKE "LAB" AND fldNumStudents NOT LIKE 0 GROUP BY fldLastName ORDER BY total DESC