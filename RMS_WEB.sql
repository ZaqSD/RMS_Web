INSERT INTO routes 
() 
VALUES 
();

INSERT INTO routes (linType, linTag, linStart, linDestination) VALUES('IC', 'IC1', 'Genève Aéroport', 'Zürich Hbf');

/*Start here*/

/* 3:00 => No Time available*/
/*
12345
1=Type
23=TagNr
45=Nr
*/

INSERT INTO routes (id, linType, linTag, linStart, linDestination) VALUES('10101', 'IC', 'IC1', 'Genève Aéroport', 'Zürich Hbf');
INSERT INTO routes (id, linType, linTag, linStart, linDestination) VALUES('10102', 'IC', 'IC1', 'Zürich Hbf', 'Genève Aéroport');
INSERT INTO routes (id, linType, linTag, linStart, linDestination) VALUES('10103', 'IC', 'IC1', 'Genève Aéroport', 'Zürich Hbf');
INSERT INTO routes (id, linType, linTag, linStart, linDestination) VALUES('10104', 'IC', 'IC1', 'Zürich Hbf', 'Genève Aéroport');
INSERT INTO routes (id, linType, linTag, linStart, linDestination) VALUES('10105', 'IC', 'IC1', 'Genève Aéroport', 'Zürich Hbf');
INSERT INTO routes (id, linType, linTag, linStart, linDestination) VALUES('10106', 'IC', 'IC1', 'Zürich Hbf', 'Genève Aéroport');



INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10101', 'Basel', '03:00', '06:30', '4');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10101', 'Olten', '06:37', '06:40', '6');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10101', 'Luzern', '07:16', '07:20', '1');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10101', 'Zug', '08:01', '08:02', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10101', 'Bellinzona', '08:25', '08:29', '7');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10101', 'Lugano', '09:26', '03:00', '33');

INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10102', 'Zürich Hbf', '03:00', '06:30', '32');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10102', 'Bern', '07:26', '07:32', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10102', 'Fribourg/Freiburg', '07:53', '07:54', '2');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10102', 'Lausanne', '08:38', '08:40', '5');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10102', 'Genève', '09:16', '09:18', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10102', 'Genève Aéroport', '09:25', '03:00', '3');

INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10103', 'Genève Aéroport', '03:00', '12:30', '4');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10103', 'Genève', '12:37', '12:40', '6');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10103', 'Lausanne', '13:16', '13:20', '1');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10103', 'Fribourg / Freiburg', '14:01', '14:02', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10103', 'Bern', '14:25', '14:29', '7');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10103', 'Zürich Hbf', '15:26', '03:00', '33');

INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10104', 'Zürich Hbf', '03:00', '12:30', '32');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10104', 'Bern', '13:26', '13:32', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10104', 'Fribourg/Freiburg', '13:53', '13:54', '2');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10104', 'Lausanne', '14:38', '14:40', '5');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10104', 'Genève', '15:16', '15:18', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10104', 'Genève Aéroport', '15:25', '03:00', '3');

INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10105', 'Genève Aéroport', '03:00', '18:30', '4');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10105', 'Genève', '18:37', '18:40', '6');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10105', 'Lausanne', '19:16', '19:20', '1');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10105', 'Fribourg / Freiburg', '20:01', '20:02', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10105', 'Bern', '20:25', '20:29', '7');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10105', 'Zürich Hbf', '21:26', '03:00', '33');

INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10106', 'Zürich Hbf', '03:00', '18:30', '32');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10106', 'Bern', '19:26', '19:32', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10106', 'Fribourg/Freiburg', '19:53', '19:54', '2');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10106', 'Lausanne', '20:38', '20:40', '5');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10106', 'Genève', '21:16', '21:18', '3');
INSERT INTO stationTimetable (linId, timStaName, timTimeOnArrival, timTimeOnDeparture, timPlatform) VALUES('10106', 'Genève Aéroport', '21:25', '03:00', '3');
