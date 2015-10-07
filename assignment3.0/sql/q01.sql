 SELECT DISTINCT(fldCourseName) FROM tblEnrolls, tblCourses WHERE fldGrade = 100 AND fnkCourseId = pmkCourseId ORDER BY fldCourseName ASC
