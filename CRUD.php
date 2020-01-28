select nazwa,producent,cena from leki WHERE ID =4;

insert into leki (nazwa,producent,cena)VALUES("Piramidon","Bayer",80000);
insert into leki (waga) VALUES (200);
insert into leki (nazwa,producent,cena)VALUES("Piramidon","Bayer",80000);
select * from leki where cena is not null;
select * from leki where cena is null;

update leki set nazwa="Piramidon", producent="Polfa" where id=6;

delete from leki where id=100;
delete from leki where nazwa="Piramidon";


insert into leki (nazwa,producent,cena)VALUES("Piramidon","Bayer",80000);
update leki set nazwa="Piramidon", producent="Polfa" where id=6;
delete from leki where id=100;
delete from leki where nazwa="Piramidon";

