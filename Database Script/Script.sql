CREATE DATABASE hacba;

-- Departments
CREATE TABLE departments(
    DEPID INT PRIMARY KEY AUTO_INCREMENT,
    DEPT_name VARCHAR(255) NOT NULL
);

-- Sectors
CREATE TABLE sectors(
    SID INT PRIMARY KEY AUTO_INCREMENT,
    setor_name VARCHAR(255) NOT NULL
);

-- Doners
CREATE TABLE doners(
    DID INT PRIMARY KEY AUTO_INCREMENT,
    doner_name VARCHAR(255),
    doner_logo VARCHAR(255)
);

-- Empolyee
CREATE TABLE empolyee(
    EMPID INT PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(255) NT NULL,
    lname VARCHAR(255) NT NULL,
    father_name VARCHAR(255) NT NULL,
    DOB DATENOT NULL,
    POB VARCHAR(255) NT NULL,
    gender VARCHAR(8) NOT NULL,
    marital_status VARCHAR(16) NOT NULL,
    TIN VARCHAR(255) NT NULL,
    NID VARCHAR(255) NT NULL,
    nationality VARCHAR(255) NT NULL,
    photo VARCHAR(255) NT NULL,
    reg_date DATE NOT NULL,
    DEPTID INT NULL FOREIGN KEY departments(DEPID),
    managerID INT NULL FOREIGN KEY empolyee(EMPID)
);

-- Empolyee Education
CREATE TABLE emp_education(
    EDUID INT PRIMARY KEY AUTO_INCREMENT,
    deg_name VARCHAR(255) NOT NULL,
    university_name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    completed INT NOT NULL DEFAULT 0,
    edu_type VARCHAR(32) NOT NULL
    -- Training
    -- Degree
);

-- Empolyee Experince
CREATE TABLE emp_experince(
    EXPID INT PRIMARY KEY AUTO_INCREMENT,
    empolyer VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    leave_reason VARCHAR(255) NOT NULL
);

-- Projects
CREATE TABLE projetcs(
    PID INT PRIMARY KEY AUTO_INCREMENT,
    sectorID INT REFERENCES sectors(SID) NULL,
    donerID INT REFERENCES doners(DID) NULL,
    project_name VARCHAR(255) NOT NULL,
    abbbrivation VARCHAR(255),
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    details TEXT NOT NULL,
    img VARCHAR(255) NOT NULL,
    status  int default 1
);

CREATE TABLE project_beneficaries(
    BID INT PRIMARY KEY AUTO_INCREMENT,
    EMPID INT FOREIGN KEY empolyee(EMPID),
    type VARCHAR(32) NOT NULL DEFAULT 'direct'
);

-- Project foundraising
CREATE TABLE project_fundraising(
    FRID INT PRIMARY KEY AUTO_INCREMENT,
    goal FLOAT,
    raised FLOAT
);

-- Donations
CREATE TABLE donations(
    DID INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    public VARCHAR(8) NOT NULL,
    PID REFERENCES projetcs(PID)
);

-- HACBA services
CREATE TABLE services(
    SID INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(128) NOT NULL,
    details TEXT NOT NULL,
    icon VARCHAR(255) NOT NULL
);