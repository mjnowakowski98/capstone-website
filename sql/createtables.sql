CREATE TABLE Users (
    user_id INT NOT NULL AUTO_INCREMENT,
    user_username VARCHAR(50) NOT NULL,
    user_email VARCHAR(50) NOT NULL,
    user_passhash CHAR(60) NOT NULL,
    user_isdisabled BIT NOT NULL,
    user_ispublic BIT NOT NULL,
    user_createddate DATE NOT NULL,
    CONSTRAINT users_pk PRIMARY KEY (user_id)
);

CREATE TABLE Administrators (
    admin_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    admin_firstname VARCHAR(50),
    admin_lastname VARCHAR(50),
    CONSTRAINT administrators_pk PRIMARY KEY (admin_id),
    CONSTRAINT administrators_user_id_fk FOREIGN KEY (user_id)
        REFERENCES Users (user_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

CREATE TABLE ReportedAnimations (
    report_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    report_subject VARCHAR(50) NOT NULL,
    report_detail VARCHAR(500) NOT NULL,
    report_reporteddate DATE NOT NULL,
    report_resolved BIT NOT NULL,
    CONSTRAINT ReportedAnimations_pk PRIMARY KEY (report_id),
    CONSTRAINT ReportedAnimations_user_id_fk FOREIGN KEY (user_id)
        REFERENCES Users (user_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

CREATE TABLE Animations (
    animation_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    animation_name VARCHAR(50) NOT NULL,
    animation_createddate DATE NOT NULL,
    animation_timesviewed INT NOT NULL,
    CONSTRAINT animations_pk PRIMARY KEY (animation_id),
    CONSTRAINT animations_user_id_fk FOREIGN KEY (user_id)
        REFERENCES Users (user_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

CREATE TABLE FavoritedAnimations (
    user_id INT NOT NULL,
    animation_id INT NOT NULL,
    CONSTRAINT favoritedanimations_user_id_fk FOREIGN KEY (user_id)
        REFERENCES Users (user_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT favoritedanimations_animation_id_fk FOREIGN KEY (animation_id)
        REFERENCES Animations (animation_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

CREATE TABLE ReportedAnimations (
    report_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    report_subject VARCHAR(50) NOT NULL,
    report_detail VARCHAR(500) NOT NULL,
    report_reporteddate DATE NOT NULL,
    report_resolved BIT NOT NULL,
    CONSTRAINT reportedanimations_pk PRIMARY KEY (report_id),
    CONSTRAINT reportedanimations_user_id_fk FOREIGN KEY (animation_id)
        REFERENCES Animations (animation_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);