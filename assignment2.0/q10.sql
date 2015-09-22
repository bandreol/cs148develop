
SELECT fldBuilding, SUM(fldNumStudents) AS studentBuilding 
        FROM tblSections 
        WHERE fldDays LIKE "%F%" 
        GROUP BY fldBuilding 
        ORDER BY studentBuilding DESC