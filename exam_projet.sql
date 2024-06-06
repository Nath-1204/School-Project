-- Base de données : ' examen_projet '
--
------------------------------------------------------------

--
-- Structure de la table 'authentification'
--

CREATE TABLE 'authentification' (
    'id' int(100) NOT NULL,
    'nom' VARCHAR(100) NOT NULL,
    'prenom' VARCHAR(200) NOT NULL,
    'email' VARCHAR(200) NOT NULL,
    'password' VARCHAR(100) NOT NULL,
    'password_retype' VARCHAR(100) NOT NULL
)

-- Déchargement des données de la table 'authentification' ---

INSERT INTO 'authentification' ('id', 'nom', 'prenom', 'email', 'password', 'password_retype') VALUES
(1, 'USER', 'USER', 'user.user@esti.mg', '1234', '1234');

---------------------------------------------------------------------------------------------------------------

-- Structure de la table 'contacts' 
----

CREATE TABLE 'contacts' (
    'id' INT(100) NOT NULL,
    'nom' VARCHAR(100) NOT NULL ,
    'prenom' VARCHAR(200) NOT NULL,
    'fonction' VARCHAR(100) NOT NULL,
    'email' VARCHAR(200) NOT NULL, 
    'telephone' VARCHAR(100) NOT NULL
)

-- Déchargement des données de la table 'contacts'
------

INSERT INTO 'contacts' ('id', 'nom', 'prenom', 'fonction', 'email', 'telephone') VALUES
(101, 'user', 'user', 'Directeur général', 'user.user@esti.mg', '03203200320');

-----------------------------------------------------------------------------------------------

--
-- Structure de la table 'etudiants'
--

CREATE TABLE 'etudiants' (
    'id' INT(200) NOT NULL,
    'nom' VARCHAR(100) NOT NULL,
    'prenom' VARCHAR(200) NOT NULL,
    'niveau' VARCHAR(100) NOT NULL,
    'email' VARCHAR(200) NOT NULL,
    'password' VARCHAR(100) NOT NULL,
    'password_retype' VARCHAR(100) NOT NULL
);

------------
--  Déchargement des données de la table 'etudiants'
------------

INSERT INTO 'etudiants' ('id', 'nom', 'prenom', 'niveau', 'email', 'password', 'password_retype') VALUES
(200, 'USER', 'user', 'L1' , 'user.user@esti.mg', '1234', '1234');

-------------------------------------------------------------------------------------------------------------


--
-- Structure de la table 'modules'
--

CREATE TABLE 'modules' (
    'id' INT(300) NOT NULL,
    'nom' VARCHAR(100) NOT NULL,
    'code' INT(100) NOT NULL,
    'credit' INT(100) NOT NULL,
    'heure' VARCHAR(100) NOT NULL
);

--
--  Déchargement des données de la table 'modules'
--

INSERT INTO 'modules' ('id', 'nom', 'code', 'credit', 'heure') VALUES
(301, 'C++', '373', '2' , '30'),
(302, 'POO avec Java', '312', '3' , '30'),
(303, 'PHP', '320', '2.5' , '35'),
(304, 'NodeJs', '321', '1.5' , '32'),
(305, 'ReactJs', '322', '1.5' , '33'),
(306, 'UML', '313', '2' , '25');

--------------------------------------------------------------------------------------------


--
-- Structure de la table 'profs'
--

CREATE TABLE 'profs' (
    'id' INT(11) NOT NULL,
    'nom' VARCHAR(100) NOT NULL,
    'prenom' VARCHAR(200) NOT NULL,
    'matiere' VARCHAR(200) NOT NULL,
    'niveau' VARCHAR(100) NOT NULL,
    'telephone' VARCHAR(100) NOT NULL,
    'email' VARCHAR(200) NOT NULL,
    'password' VARCHAR(100) NOT NULL,
    'password_retype' VARCHAR(100) NOT NULL
);

------------
--  Déchargement des données de la table 'profs'
------------

INSERT INTO 'profs' ('id', 'nom', 'prenom', 'matiere' , 'niveau', 'telephone', 'email', 'password', 'password_retype') VALUES
(400, 'USER', 'user', 'C++', 'L2' , '0323232332', 'user.user@esti.mg', '1234', '1234'),

-----------------------------------------------------------------------------------------------------------------------------------------------------------

--
-- Index pour la table 'authentification'
--

ALTER TABLE 'authentification'
    ADD PRIMARY KEY ('id'),
    ADD UNIQUE KEY 'email' ('email');

--
-- Index pour la table 'contacts'
--

ALTER TABLE 'contacts'
    ADD PRIMARY KEY ('id'),
    ADD UNIQUE KEY 'email' ('email');

--
-- Index pour la table 'etudiants'
--

ALTER TABLE 'etudiants'
    ADD PRIMARY KEY ('id'),
    ADD UNIQUE KEY 'email' ('email');

--
-- Index pour la table 'modules'
--

ALTER TABLE 'modules'
    ADD PRIMARY KEY ('id');

--
-- Index pour la table 'profs'
--

ALTER TABLE 'profs'
    ADD PRIMARY KEY ('id'),
    ADD UNIQUE KEY 'email' ('email');

--
-- AUTO-INCREMENT pour la table 'authentification'
--

ALTER TABLE 'authentification'
    MODIFY 'id' INT(100) NOT NULL AUTO-INCREMENT, AUTO-INCREMENT=1;


--
-- AUTO-INCREMENT pour la table 'contacts'
--

ALTER TABLE 'contacts'
    MODIFY 'id' INT(100) NOT NULL AUTO-INCREMENT, AUTO-INCREMENT=1;


--
-- AUTO-INCREMENT pour la table 'etudiants'
--

ALTER TABLE 'etudiants'
    MODIFY 'id' INT(200) NOT NULL AUTO-INCREMENT, AUTO-INCREMENT=1;

--
-- AUTO-INCREMENT pour la table 'modules'
--

ALTER TABLE 'modules'
    MODIFY 'id' INT(300) NOT NULL AUTO-INCREMENT, AUTO-INCREMENT=1;

--
-- AUTO-INCREMENT pour la table 'profs'
--

ALTER TABLE 'profs'
    MODIFY 'id' INT(11) NOT NULL AUTO-INCREMENT, AUTO-INCREMENT=1;
COMMIT;
