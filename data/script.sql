--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
                            `id_adherent` int(11) NOT NULL,
                            `prenom` varchar(250) NOT NULL,
                            `nom` varchar(250) NOT NULL,
                            `telephone` text NOT NULL,
                            `mdp` varchar(250) NOT NULL,
                            `mail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
    ADD PRIMARY KEY (`id_adherent`);

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
    MODIFY `id_adherent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
                            `id_user` int(11) NOT NULL,
                            `prenom` varchar(250) NOT NULL,
                            `nom` varchar(250) NOT NULL,
                            `telephone` text NOT NULL,
                            `mail` varchar(250) NOT NULL,
                            `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
    ADD PRIMARY KEY (`id_user`);
--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
    MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Structure de la table `myseminar`
--

CREATE TABLE `myseminar` (
                             `id_ms` int(11) NOT NULL,
                             `id_adherent` int(11) NOT NULL DEFAULT '0',
                             `id_user` int(11) NOT NULL DEFAULT '0',
                             `id_we` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `myseminar`
--
ALTER TABLE `myseminar`
    ADD PRIMARY KEY (`id_ms`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `myseminar`
--
ALTER TABLE `myseminar`
    MODIFY `id_ms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
                          `id_panier` int(11) NOT NULL,
                          `id_we` int(11) NOT NULL,
                          `id_adherent` int(11) DEFAULT '0',
                          `id_user` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
    ADD PRIMARY KEY (`id_panier`);

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
    MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Structure de la table `weekend`
--

CREATE TABLE `weekend` (
                           `id_we` int(11) NOT NULL,
                           `date_debut` date NOT NULL,
                           `date_fin` date NOT NULL,
                           `prix_adherent` int(11) NOT NULL DEFAULT '50',
                           `prix_user` int(11) NOT NULL DEFAULT '60',
                           `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour la table `weekend`
--
ALTER TABLE `weekend`
    ADD PRIMARY KEY (`id_we`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `weekend`
--
ALTER TABLE `weekend`
    MODIFY `id_we` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

