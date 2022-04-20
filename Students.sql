/*
 * Copyright (c) 2022.
 * Giacchini Valerio - 5AIN
 */

CREATE DATABASE IF NOT EXISTS Students;
USE Students;

CREATE TABLE Student (
    id int auto_increment,
    name varchar(20),
    surname varchar(20),
    birth date,
    PRIMARY KEY (id)
);

INSERT INTO Student(name, surname, birth) VALUES
    ('Giacomo','Fogli','2000-05-03');