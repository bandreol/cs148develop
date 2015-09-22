
SELECT SUM(fldNumStudents - fldMaxStudents) AS fldOver
        FROM tblSections
        WHERE (fldNumStudents - fldMaxStudents > 0)