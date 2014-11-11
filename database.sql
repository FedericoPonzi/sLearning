create type sesso as enum ('maschio', 'femmina');
create type tipofilemateriale as enum ('Documento', 'Video', 'Audio', 'Altro');
create type generemateriale as enum ('Quiz', 'Lezione', 'Esercitazione', 'Altro');

create domain annoaccademico as int
    CHECK (VALUE >= extract(year from current_date));

    
-----------------------------------
--------- Creazione tabelle:
create table utente
(
	id serial not null primary key,
	nome varchar(100) not null,
	cognome varchar(100) not null,
	sex sesso not null,
	email varchar(100) not null,
	password varchar(100) not null,
	unique(email)
);

create table professore
(
	id int not null primary key,
	biografia varchar(100),
	foreign key (id) references utente(id) deferrable
);
create table studente
(
	id int not null primary key,
	mailinglist boolean not null default false,
	foreign key (id) references utente(id) deferrable
);


create table corso
(
	codice int not null primary key,
	titolo varchar(100) not null,
	abstract varchar(100) not null,
	annoac annoaccademico not null,
	richiestaaccettazione boolean not null, 
	professoreid int not null,
	foreign key (professoreid) references professore(id),
	unique( professoreid, annoac, codice)
);

create table lezione
(
	id serial not null primary key,
	titolo varchar(100) not null,
	descrizione varchar(1000),
	data date not null default CURRENT_DATE,
	corsoid int not null,
	foreign key (corsoid) references corso(codice)
);

create table materiale
(
	id serial not null primary key,
	nomefile varchar(100) not null,
	tipofile TipoFileMateriale not null,
	genere GenereMateriale not null,
	datacarcamento date not null,
	statopubblicazione boolean,
	professoreid int not null,
	lezioneid int not null,
	foreign key (professoreid) references professore(id),
	foreign key (lezioneid) references lezione(id)
);

create table annuncio
(
	id serial not null primary key,
	data timestamp not null default CURRENT_TIMESTAMP,
	titolo varchar(100) not null,
	contenuto varchar(1000) not null,
	autoreid int not null,
	foreign key (autoreid) references professore(id),	
	corsocodice int not null,
	foreign key (corsocodice) references corso(codice)
);

create table categoria
(
	id serial not null primary key,
	nome varchar(100) not null
);

create table thread
(
	id serial not null primary key,
	argomento varchar(100) not null,
	corsoid int not null,
	categoriaid int not null,
	foreign key (corsoid) references corso(codice),
	foreign key (categoriaid) references corso(codice)
);

create table messaggio
(
	id serial not null primary key,
	oggetto varchar(100) not null,
	testo varchar(1000) not null,
	dataora timestamp not null,
	utenteid int not null,
	threadid int not null,
	foreign key (utenteid) references utente(id),
	foreign key (threadid) references thread(id)
);

create table permesso
(
	codice int not null primary key,
	descrizione int not null
);

create table esame
(
	id serial not null primary key,
	pubblicato boolean not null,
	numerotentativi int not null,
	corsoid int not null,
	foreign key (corsoid) references corso(codice)
);

create table quiz
(
	id serial not null primary key,
	domanda varchar(100),
	esameid int not null,
	foreign key (esameid) references esame(id)
);

create table alternativeQuiz
(
	id serial not null primary key,
	soluzione boolean not null,
	valore varchar(100) not null,
	quizid int not null,
	foreign key (quizid) references quiz(id)
);

create table domanda
(
	id serial not null primary key,
	valore varchar(100) not null,
	esameid int not null,
	foreign key (esameid) references esame(id)
);

create table rispostaDomanda
(
	domandaid int not null,
	studenteid int not null,
	risposta varchar(100) not null,
	primary key (domandaid, studenteid),
	foreign key (domandaid) references domanda(id),
	foreign key (studenteid) references studente(id)
);

create table rispostaQuiz
(
	domandaid int not null,
	studenteid int not null,
	risposta int not null,
	primary key (domandaid, studenteid),
	foreign key (domandaid) references domanda(id),
	foreign key (studenteid) references studente(id)
);



create table richiestaaccettazione
(
	studenteid int not null,
	corsoid int not null,
	primary key (corsoid, studenteid),
	foreign key (studenteid) references studente(id),
	foreign key (corsoid) references corso(codice)
);

create table esamestudente
(
	studenteid int not null,
	esameid int not null,
	primary key (studenteid, esameid),
	foreign key (studenteid) references studente(id),
	foreign key (esameid) references esame(id)
);

create table esercita
(
	professoreid int not null,
	corsoid int not null,
	primary key (professoreid, corsoid),
	foreign key (professoreid) references professore(id),
	foreign key (corsoid) references corso(codice)
);




create table studia
(
	studenteid int not null,
	corsoid int not null,
	primary key (studenteid, corsoid),
	foreign key (studenteid) references studente(id),
	foreign key (corsoid) references corso(codice)
);


CREATE TABLE permessiutente
(
    permessoCodice int not null,
    utenteid int not null,
    primary key (permessoCodice, utenteId),
    foreign key (permessoCodice) references permesso(codice),
    foreign key (utenteid) references utente(id)
);

--------------------
----- Foreign keys:
alter table corso add foreign key (codice) references insegna(corsoId) deferrable;


--------------------
------ Triggers:

CREATE FUNCTION utente_comp_dis() RETURNS TRIGGER AS $utcompdis$
begin
    if ( not ( exists (select * from studente where id = new.id) = 
    not exists (select * from professore where id = new.id))) THEN
            RAISE EXCEPTION 'Errore: utente deve essere o studente o professore.';
    END if;
    
    RETURN new;
END;
$utcompdis$ language plpgsql;
create constraint trigger utentecompdis
AFTER insert or update or delete
on utente
deferrable INITIALLY DEFERRED 
for each row 
execute procedure utente_comp_dis();



------------------
---------Dummy data!
------------------

create table utente
(
	id serial not null primary key,
	nome varchar(100) not null,
	cognome varchar(100) not null,
	sex sesso not null,
	email varchar(100) not null,
	password varchar(100) not null,
	unique(email)
);

create table professore
(
	id int not null primary key,
	biografia varchar(100),
	foreign key (id) references utente(id) deferrable
);

begin transaction;
INSERT INTO utente (nome, cognome, sex, email, password) VALUES
    ('Federico', 'Mari','maschio', 'mari@di.uniroma1.it', 'marifederico');
INSERT INTO professore (id, biografia) VALUES (23, 'Nato a roma!');
commit work; 

abstract: varchar(100), annoaccademico: AnnoAccademico, professoreId: int, richiestaAccettazione: boolean

profid = 23
INSERT INTO corso (codice, titolo, abstract, annoac, richiestaaccettazione, professoreid) VALUES 
    (1234, 'Base di dati', 'Il corso di base di dati, tenuto dal professor Mari', 2014, false, 23);
    
    