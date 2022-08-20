CREATE TABLE IF not exists 'employees'(
    'id' int(11) not null auto_increment,
    'name' varchar(100) Not null,
    'address' varchar(255) not null,
    'salary' int(10) not null,
    primary key ('id')
) Engine = InnoDB Default Charset = latin1 AUto_Increment = 4;

insert into 'employees' ('id','name','address','salary') values
                                                             (1, 'Roland Mendel','C/ Araquil, 67, Madrid',5000),
                                                             (2,'Victoria Ashworth', '35 King George, London', 6500),
                                                             (3, 'Martin Blank', '25, Rue Lauriston, Paris', 8000);