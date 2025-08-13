
drop database if exists pharmatrixdb;


create database pharmatrixdb;
use pharmatrixdb;

CREATE TABLE users (
    id_users INT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    location VARCHAR(100),
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL
);

CREATE TABLE pharmacie (
    pharmacie_id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL
);

CREATE TABLE all_medicament (
    all_medicament_id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
);

CREATE TABLE program_id (
    reference VARCHAR(50) PRIMARY KEY,
    create_at DATE NOT NULL
);

CREATE TABLE coupon_medicament (
    coupon_id INT PRIMARY KEY,
    program_reference VARCHAR(50) NOT NULL,
    medicament_id INT NOT NULL,
    FOREIGN KEY (program_reference) REFERENCES program_id(reference),
    FOREIGN KEY (medicament_id) REFERENCES all_medicament(all_medicament_id)
);

CREATE TABLE user_spharmacie (
    user_id INT NOT NULL,
    pharmacie_id INT NOT NULL,
    PRIMARY KEY (user_id, pharmacie_id),
    FOREIGN KEY (user_id) REFERENCES users(id_users),
    FOREIGN KEY (pharmacie_id) REFERENCES pharmacie(pharmacie_id)
);

CREATE TABLE avoir (
    pharmacie_id INT NOT NULL,
    medicament_id INT NOT NULL,
    PRIMARY KEY (pharmacie_id, medicament_id),
    FOREIGN KEY (pharmacie_id) REFERENCES pharmacie(pharmacie_id),
    FOREIGN KEY (medicament_id) REFERENCES all_medicament(all_medicament_id)
);
