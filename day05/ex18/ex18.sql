SELECT *
FROM distrib
WHERE id_distrib IN (42, 62, 63, 64, 65, 66, 67, 68, 69, 71, 88, 89, 90)
	OR length(name) - length(replace(lower(name), 'y', '')) = 2
LIMIT 3, 5;
