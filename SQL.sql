drop table CHARACTER cascade constraints;
drop table CIRCLET cascade constraints;
drop table FLOWER cascade constraints;
drop table GOBLET cascade constraints;
drop table PLUME cascade constraints;
drop table TIMEPIECE cascade constraints;
drop table WEAPON cascade constraints;
drop table USERS cascade constraints;

create table users (
                       userid NUMBER GENERATED ALWAYS as IDENTITY(START with 1 INCREMENT by 1),
                       username varchar(30) not null,
                       password varchar(128) not null,
                       primary key (userid)
);
grant select on users to public;

create table flower
(name varchar(50) primary key,
 set_name varchar(30),
 quality int,
 stat int
);
grant select on flower to public;

create table plume
(name varchar(50) primary key,
 set_name varchar(30),
 quality int,
 stat int
);
grant select on plume to public;

create table timepiece
(name varchar(50) primary key,
 set_name varchar(30),
 quality int,
 stat int
);
grant select on timepiece to public;

create table goblet
(name varchar(50) primary key,
 set_name varchar(30),
 quality int,
 stat int
);
grant select on goblet to public;

create table circlet
(name varchar(50) primary key,
 set_name varchar(30),
 quality int,
 stat int
);
grant select on circlet to public;

create table weapon
(name varchar(30) primary key,
 quality int,
 stat int
);
grant select on weapon to public;

create table character
(name varchar(20) primary key,
 flower varchar(50) unique,
 plume varchar(50) unique,
 timepiece varchar(50) unique,
 goblet varchar(50) unique,
 circlet varchar(50) unique,
 weapon varchar(30) unique,
 foreign key (flower) references flower(name) ON DELETE SET NULL,
 foreign key (plume) references plume(name) ON DELETE SET NULL,
 foreign key (timepiece) references timepiece(name) ON DELETE SET NULL,
 foreign key (goblet) references goblet(name) ON DELETE SET NULL,
 foreign key (circlet) references circlet(name) ON DELETE SET NULL,
 foreign key (weapon) references weapon(name) ON DELETE SET NULL
);
grant select on character to public;

INSERT INTO flower VALUES ('Magnificent Tsuba', 'Emblem of Severed Fate', '5', '10');
INSERT INTO flower VALUES ('Royal Flora', 'Noblesse Oblige', '5', '20');
INSERT INTO flower VALUES ('Ay-Khanoums Myriad','Flower of Paradise Lost', '5', '30');
INSERT INTO flower VALUES ('The First Days of the City of Kings', 'Desert Pavilion Chronicle', '4', '40');
INSERT INTO flower VALUES ('Labyrinth Wayfarer','Deepwood Memories', '4', '50');

INSERT INTO plume VALUES ('Sundered Feather', 'Emblem of Severed Fate', '5', '11');
INSERT INTO plume VALUES ('Royal Plume', 'Noblesse Oblige', '4', '21');
INSERT INTO plume VALUES ('Wilting Feast','Flower of Paradise Lost', '5', '31');
INSERT INTO plume VALUES ('End of the Golden Realm', 'Desert Pavilion Chronicle', '4', '41');
INSERT INTO plume VALUES ('Scholar of Vines','Deepwood Memories', '5', '51');

INSERT INTO timepiece VALUES ('Storm Cage', 'Emblem of Severed Fate', '5', '12');
INSERT INTO timepiece VALUES ('Royal Pocket Watch', 'Noblesse Oblige', '4', '22');
INSERT INTO timepiece VALUES ('A Moment Congealed','Flower of Paradise Lost', '5', '32');
INSERT INTO timepiece VALUES ('Timepiece of the Lost Path', 'Desert Pavilion Chronicle', '4', '42');
INSERT INTO timepiece VALUES ('A Time of Insight','Deepwood Memories', '4', '52');

INSERT INTO goblet VALUES ('Scarlet Vessel', 'Emblem of Severed Fate', '4', '13');
INSERT INTO goblet VALUES ('Royal Silver Urn', 'Noblesse Oblige', '5', '23');
INSERT INTO goblet VALUES ('Secret-Keepers Magic Bottle','Flower of Paradise Lost', '4', '33');
INSERT INTO goblet VALUES ('Defender of the Enchanting Dream', 'Desert Pavilion Chronicle', '4', '43');
INSERT INTO goblet VALUES ('Lamp of the Lost','Deepwood Memories', '4', '53');

INSERT INTO circlet VALUES ('Ornate Kabuto', 'Emblem of Severed Fate', '5', '14');
INSERT INTO circlet VALUES ('Royal Masque', 'Noblesse Oblige', '4', '24');
INSERT INTO circlet VALUES ('Amethyst Crown','Flower of Paradise Lost', '4', '34');
INSERT INTO circlet VALUES ('Legacy of the Desert High-Born', 'Desert Pavilion Chronicle','4', '44');
INSERT INTO circlet VALUES ('Laurel Coronet','Deepwood Memories','4', '54');

INSERT INTO weapon VALUES ('Dull Blade', '1', '12');
INSERT INTO weapon VALUES ('Mappa Mare', '4', '44');
INSERT INTO weapon VALUES ('Prototype Crescent', '4', '42');
INSERT INTO weapon VALUES ('Skyward Spine', '5', '48');
INSERT INTO weapon VALUES ('The Unforged', '5', '46');

INSERT INTO character VALUES ('Venti', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO character VALUES ('Nahida', 'Labyrinth Wayfarer', 'Scholar of Vines', 'A Time of Insight', 'Lamp of the Lost','Laurel Coronet', 'Mappa Mare');