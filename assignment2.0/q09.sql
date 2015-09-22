
SELECT fldBuilding, SUM(fldNumStudents) AS studentBuilding
         FROM tblSections 
         WHERE fldDays LIKE "%W%" 
         GROUP BY fldBuilding 
         ORDER BY studentBuilding DESC