SELECT count(id_member) AS movies
FROM member_history
WHERE (date(date) >= date('2006-10-30') AND date(date) <= date('2007-07-27'))
	OR (dayofmonth(date) = 24 AND month(date) = 12);
