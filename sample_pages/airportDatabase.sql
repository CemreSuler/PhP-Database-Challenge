create table checkin_information ( checkin_id integer primary key, checkin_booth numeric, departure_hall text );
insert into
   checkin_information
values
   (
      1, 1, 'A'
   )
,
   (
      2, 2, 'A'
   )
,
   (
      3, 3, 'A'
   )
,
   (
      4, 4, 'A'
   )
,
   (
      5, 5, 'B'
   )
,
   (
      6, 6, 'B'
   )
,
   (
      7, 7, 'B'
   )
,
   (
      8, 8, 'C'
   )
,
   (
      9, 9, 'C'
   )
,
   (
      10, 10, 'C'
   )
;
create table destination_information ( destination_id integer primary key, destination_iata text, destination_country text, destination_city text, destination_airport text );
insert into
   destination_information
values
   (
      1, 'MAD', 'Spain', 'Madrid', 'Banajas Airport'
   )
,
   (
      2, 'LPA', 'Spain', 'Las Palmas', 'Las Palmas Airport'
   )
,
   (
      3, 'IST', 'Turkey', 'Istanbul', 'Ataturk Airport'
   )
,
   (
      4, 'TXL', 'Germany', 'Berlin', 'Tegel Airport'
   )
,
   (
      5, 'CDG', 'France', 'Paris', 'Charles de Guelle'
   )
;
create table gate_information ( gate_id integer primary key, gate_name text, gate_building text );
insert into
   gate_information
values
   (
      1, 'A1', 'East'
   )
,
   (
      2, 'A2', 'East'
   )
,
   (
      3, 'A3', 'South'
   )
,
   (
      4, 'A4', 'West'
   )
,
   (
      5, 'B1', 'North'
   )
,
   (
      6, 'B2', 'East'
   )
,
   (
      7, 'B3', 'South'
   )
,
   (
      8, 'C1', 'West'
   )
,
   (
      9, 'C2', 'East'
   )
,
   (
      10, 'C3', 'South'
   )
;
create table luggage_information ( luggage_id integer primary key, luggage_belt numeric, arrival_hall text );
insert into
   luggage_information
values
   (
      1, 1, 'A'
   )
,
   (
      2, 2, 'A'
   )
,
   (
      3, 3, 'A'
   )
,
   (
      4, 4, 'A'
   )
,
   (
      5, 5, 'B'
   )
,
   (
      6, 6, 'B'
   )
,
   (
      7, 7, 'B'
   )
,
   (
      8, 8, 'C'
   )
,
   (
      9, 9, 'C'
   )
,
   (
      10, 10, 'C'
   )
;
create table origin_information ( origin_id integer primary key, origin_iata text, origin_country text, origin_city text, origin_airport text );
insert into
   origin_information
values
   (
      1, 'MAD', 'Spain', 'Madrid', 'Banajas Airport'
   )
,
   (
      2, 'LPA', 'Spain', 'Las Palmas', 'Las Palmas Airport'
   )
,
   (
      3, 'IST', 'Turkey', 'Istanbul', 'Ataturk Airport'
   )
,
   (
      4, 'TXL', 'Germany', 'Berlin', 'Tegel Airport'
   )
,
   (
      5, 'CDG', 'France', 'Paris', 'Charles de Guelle'
   )
;
create table passenger_information ( passenger_id integer primary key unique, passenger_firstname text, passenger_lastname text, passenger_city text, passenger_gender integer, passenger_flighthours integer, passenger_username text, passenger_password text);
insert into
   passenger_information
values
   (
      1, 'Sybrand', 'Coremans', 'Haarlem', 0, 143, 'Sybrand', 'Coremans'
   )
,
   (
      2, 'Cemre', 'Suler', 'Nieuw-Vennep', 1, 12, 'Cemre', 'Suler'
   )
,
   (
      3, 'Destina', 'Smeder', 'Eindhoven', 1, 132, 'Destina', 'Smeder'
   )
,
   (
      4, 'Zerda', 'Wagenwoord', 'Hoofddorp', 1, 1928, 'Zerda', 'Wagenwoord'
   )
,
   (
      5, 'Joost', 'Naron', 'Groningen', 0, 145, 'Joost', 'Naron'
   )
;
create table tail_information ( tail_id integer primary key unique, tail_number text, airplane text );
insert into
   tail_information
values
   (
      1, 'N573QS', 'A380'
   )
,
   (
      2, 'N540KL', 'A320'
   )
,
   (
      3, 'N635SW', 'A330'
   )
,
   (
      4, 'N157KY', 'A330'
   )
,
   (
      5, 'N386FR', 'A380'
   )
;
create table flight_information ( flight_id integer primary key, destination_id integer references destination_information (destination_id), origin_id integer references origin_information (origin_id), luggage_id integer references luggage_information (luggage_id), checkin_id integer references checkin_information (checkin_id), gate_id integer references gate_information (gate_id), tail_id integer references tail_information (tail_id), departure_date text, departure_time integer, arrival_date text, arrival_time integer, duration_minutes integer, boarding_time integer, passenger_count integer, crew_count integer );
insert into
   flight_information
values
   (
      1, 3, 1, 4, 8, 4, 2, '13 December', 1100, '13 December', 1200, 60, 1030, 347, 12
   )
,
   (
      2, 2, 2, 6, 2, 7, 1, '13 December', 1450, '13 December', 1630, 100, 1420, 281, 9
   )
,
   (
      3, 4, 4, 7, 2, 9, 3, '14 December', 0900, '14 December', 1250, 230, 0830, 493, 14
   )
,
   (
      4, 1, 5, 2, 3, 6, 5, '14 December', 1400, '14 December', 1900, 300, 1030, 124, 7
   )
,
   (
      5, 2, 1, 7, 2, 7, 2, '15 December', 1330, '15 December', 1430, 60, 1030, 291, 9
   )
,
   (
      6, 5, 4, 6, 4, 10, 5, '15 December', 0500, '15 December', 0730, 60, 1030, 239, 8
   )
,
   (
      7, 4, 2, 3, 2, 8, 3, '16 December', 0700, '16 December', 1030, 60, 1030, 120, 7
   )
,
   (
      8, 2, 4, 2, 10, 5, 2, '16 December', 2100, '16 December', 2350, 60, 1030, 346, 14
   )
,
   (
      9, 1, 3, 4, 10, 9, 4, '17 December', 2350, '18 December', 0130, 60, 1030, 325, 12
   )
,
   (
      10, 3, 3, 3, 5, 6, 2, '17 December', 1200, '17 December', 1450, 60, 1030, 247, 11
   )
,
   (
      11, 3, 4, 6, 2, 4, 1, '18 December', 1150, '18 December', 1320, 60, 1030, 231, 13
   )
,
   (
      12, 4, 1, 10, 2, 6, 3, '18 December', 1030, '18 December', 1130, 60, 1030, 287, 12
   )
,
   (
      13, 2, 4, 4, 5, 3, 4, '19 December', 0930, '19 December', 1030, 60, 1030, 298, 18
   )
,
   (
      14, 3, 2, 10, 3, 10, 5, '19 December', 1730, '19 December', 1850, 60, 1030, 315, 14
   )
,
   (
      15, 4, 4, 2, 3, 4, 1, '20 December', 1900, '20 December', 1930, 60, 1030, 114, 9
   )
,
   (
      16, 1, 5, 6, 7, 2, 4, '20 December', 2000, '20 December', 2330, 60, 1030, 402, 16
   )
,
   (
      17, 2, 3, 1, 9, 6, 2, '21 December', 1000, '21 December', 1230, 60, 1030, 319, 14
   )
,
   (
      18, 4, 2, 6, 6, 10, 4, '21 December', 0650, '21 December', 0830, 60, 1030, 145, 15
   )
,
   (
      19, 2, 5, 2, 2, 2, 2, '22 December', 0430, '22 December', 0630, 60, 1030, 235, 12
   )
,
   (
      20, 1, 1, 7, 10, 9, 5, '22 December', 0030, '22 December', 0200, 60, 1030, 356, 14
   )
;
create table passengers_on_flight ( flight_id integer references flight_information (flight_id), passenger_id integer references passenger_information (passenger_id), passenger_seat text);
insert into
   passengers_on_flight
values
   (
      1, 1, '13F'
   )
,
   (
      3, 3, '43A'
   )
,
   (
      4, 1, '1A'
   )
,
   (
      5, 2, '57D'
   )
,
   (
      5, 2, '31B'
   )
,
   (
      6, 4, '47C'
   )
,
   (
      7, 5, '86A'
   )
,
   (
      8, 2, '29E'
   )
,
   (
      9, 3, '76D'
   )
,
   (
      10, 1, '97A' 
   )
;
create table airlines_on_flight ( flight_id integer references flight_information (flight_id), flight_number text, airline_name text );
insert into
   airlines_on_flight
values
   (
      1, 'AF4314', 'AirFrance'
   )
,
   (
      2, 'KL1321', 'KLM'
   )
,
   (
      3, 'ET2442', 'Ethiad'
   )
,
   (
      4, 'KL4235', 'KLM'
   )
,
   (
      5, 'KL2413', 'KLM'
   )
,
   (
      6, 'KL1342', 'KLM'
   )
,
   (
      7, 'AF4512', 'AirFrance'
   )
,
   (
      8, 'LH4234', 'Lufthanza'
   )
,
   (
      9, 'KL4242', 'KLM'
   )
,
   (
      10, 'KL1391', 'KLM'
   )
,
   (
      11, 'EM4123', 'Emirates'
   )
,
   (
      12, 'EM4311', 'Emirates'
   )
,
   (
      13, 'EH3817', 'Ethiad'
   )
,
   (
      14, 'KL9981', 'KLM'
   )
,
   (
      15, 'KL4123', 'KLM'
   )
,
   (
      16, 'AF3123', 'AirFrance'
   )
,
   (
      17, 'LH4353', 'Lufthanza'
   )
,
   (
      18, 'AF7634', 'Airfrance'
   )
,
   (
      19, 'KL4235', 'KLM'
   )
,
   (
      20, 'KL9842', 'KLM'
   )
;
