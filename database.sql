create table Profil(
	p_id int not null auto_increment,
	username varchar(30) not null,
	registration date not null,
	p_bilddatei varchar(150),
	p_beschreibung varchar(250),
    primary key(p_id)
);

create table Werk(
	w_id int not null auto_increment,
	titel varchar(60) not null,
	w_bilddatei varchar(150),
	w_beschreibung varchar(250),
    erstellerID int,
    erstelldatum date,
    primary key(w_id),
    foreign key (erstellerID) references Profil(p_id) ON DELETE CASCADE
);

create table Treffen(
	t_id int not null auto_increment,
    titel varchar(60) not null,
    datum date not null,
	t_bilddatei varchar(150),
	t_beschreibung varchar(250),
    primary key(t_id)
);

create table likes(
    profilID int not null,
    werkID int not null,
    primary key(profilID, werkID),
    foreign key (profilID) references Profil(p_id) ON DELETE CASCADE,
    foreign key (werkID) references Werk(w_id) ON DELETE CASCADE
);

create table kommentar(
    profilID int not null,
    werkID int not null,
    datum datetime not null,
    input varchar(250),
    primary key(profilID, werkID, datum),
    foreign key (profilID) references Profil(p_id),
    foreign key (werkID) references Werk(w_id) ON DELETE CASCADE
);

create table zusage(
    profilID int not null,
    treffenID int not null,
    primary key(profilID, treffenID),
    foreign key (profilID) references Profil(p_id) ON DELETE CASCADE,
    foreign key (treffenID) references Treffen(t_id) ON DELETE CASCADE
);

/*
TODO:
Username muss auf unique gestellt werden
*/

