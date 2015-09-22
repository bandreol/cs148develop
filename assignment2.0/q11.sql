
SELECT fnkCourseId, COUNT(*) as countCRN
        FROM tblSections
        GROUP BY fnkCourseId
        HAVING (countCRN >= 50)