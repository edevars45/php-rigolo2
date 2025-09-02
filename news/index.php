<?php include '../config.php'; ?>
<?php include '../header.php'; ?>
<div class="general-content">
    <h1>Les news du monde</h1>
    <h2>Explications sur l'exercice</h2>
    <p>A partir de l'url suivante <a href="https://www.lemonde.fr/sitemap_news.xml"
            target="_blank">https://www.lemonde.fr/sitemap_news.xml</a>, allez chercher toutes les dernières news du
        monde, présenter le titre, la date et évidemment un lien sur le titre pour lire l'article !
    </p>
    <h2>Résultat</h2>
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Titre</th>
                <th>Date</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/15/tennis-a-melbourne-le-roi-dechu-novak-djokovic-veut-reconquerir-sa-couronne_6157956_3242.html"
                        target="_blank">Tennis : à Melbourne, le roi déchu Novak Djokovic veut reconquérir sa
                        couronne</a></td>
                <td>15/01/2023 16:00:08</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/afrique/article/2023/01/15/dans-le-nord-du-burkina-une-cinquantaine-de-femmes-enlevees-par-des-djihadistes-presumes_6157955_3212.html"
                        target="_blank">Dans le nord du Burkina, une cinquantaine de femmes enlevées par des djihadistes
                        présumés</a></td>
                <td>15/01/2023 15:51:08</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/live/2023/01/15/guerre-en-ukraine-en-direct-a-dnipro-25-personnes-sont-mortes-dans-l-effondrement-d-un-immeuble-selon-le-dernier-bilan_6157922_3210.html"
                        target="_blank">Guerre en Ukraine, en direct : à Dnipro, 25 personnes sont mortes dans
                        l’effondrement d’un immeuble selon le dernier bilan</a></td>
                <td>15/01/2023 15:39:41</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/15/reforme-des-retraites-olivier-dussopt-defend-un-projet-responsable-aurore-berge-estime-que-le-droit-greve-n-est-pas-un-droit-de-blocage_6157954_823448.html"
                        target="_blank">Réforme des retraites : Olivier Dussopt défend un projet « responsable », Aurore
                        Bergé estime que le « droit grève n’est pas un droit de blocage »</a></td>
                <td>15/01/2023 15:29:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sciences/article/2023/01/15/rembrandt-mettait-du-plomb-dans-l-huile-de-ses-toiles_6157952_1650684.html"
                        target="_blank">Rembrandt mettait du plomb dans l’huile de ses toiles</a></td>
                <td>15/01/2023 15:00:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/15/biathlon-l-appetit-d-ogre-de-johannes-boe-qui-devore-tout-sur-son-passage-en-coupe-du-monde_6157951_3242.html"
                        target="_blank">Biathlon : l’appétit d’ogre de Johannes Boe, qui dévore tout sur son passage en
                        Coupe du monde</a></td>
                <td>15/01/2023 14:41:03</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/15/face-aux-maltraitantes-dans-les-ehpad-les-pouvoirs-publics-ne-sont-pas-a-la-hauteur-selon-la-defenseure-des-droits_6157950_3224.html"
                        target="_blank">Face aux maltraitances dans les Ehpad, les pouvoirs publics ne sont « pas à la
                        hauteur », selon la Défenseure des droits</a></td>
                <td>15/01/2023 15:03:42</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/15/dakar-le-qatari-nasser-al-attiyah-remporte-un-cinquieme-titre-en-auto_6157949_3242.html"
                        target="_blank">Dakar : le Qatari Nasser Al-Attiyah remporte un cinquième titre en auto</a></td>
                <td>15/01/2023 14:21:50</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/15/au-bresil-les-defis-de-lula-dans-une-republique-en-morceaux_6157948_3232.html"
                        target="_blank">Au Brésil, les défis de Lula dans une République en morceaux</a></td>
                <td>15/01/2023 14:08:17</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/economie/video/2023/01/15/pourquoi-les-prix-de-l-electricite-s-envolent-et-ne-devraient-pas-redescendre_6157947_3234.html"
                        target="_blank">Pourquoi les prix de l’électricité s’envolent (et ne devraient pas
                        redescendre)</a></td>
                <td>15/01/2023 14:00:21</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/pixels/article/2023/01/15/la-serie-tiree-de-the-last-of-us-arrive-pourquoi-ce-jeu-video-a-autant-marque_6157946_4408996.html"
                        target="_blank">La série tirée de « The Last of Us » arrive : pourquoi ce jeu vidéo a autant
                        marqué</a></td>
                <td>15/01/2023 14:00:14</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/15/nacre-palissandre-et-argent-quand-l-accordeon-devient-objet-d-art_6157945_3246.html"
                        target="_blank">Nacre, palissandre et argent, quand l’accordéon devient objet d’art</a></td>
                <td>15/01/2023 14:00:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-styles/article/2023/01/15/un-sac-seau-aux-lignes-melodieuses_6157944_4497319.html"
                        target="_blank">Un sac seau aux lignes mélodieuses</a></td>
                <td>15/01/2023 14:00:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/livres/article/2023/01/15/lauren-groff-je-tatonne-a-la-recherche-de-quelque-chose-d-ineffable_6157943_3260.html"
                        target="_blank">Lauren Groff, écrivaine : « Je tâtonne à la recherche de quelque chose
                        d’ineffable »</a></td>
                <td>15/01/2023 14:21:39</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/15/experience-intime-et-uvre-collective-les-veilleurs-une-invitation-a-prendre-de-la-hauteur_6157942_3246.html"
                        target="_blank">Expérience intime et œuvre collective, « Les Veilleurs », une invitation à
                        prendre de la hauteur</a></td>
                <td>15/01/2023 13:00:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/15/au-perou-les-manifestants-reclament-un-contrat-social-qui-beneficie-a-tous_6157941_3210.html"
                        target="_blank">Etat d’urgence au Pérou : les manifestants réclament « un contrat social qui
                        bénéficie à tous »</a></td>
                <td>15/01/2023 13:35:39</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/15/paradis-blancs-sur-france-2-expeditions-sous-l-objectif-de-jeremie-villet_6157939_3246.html"
                        target="_blank">« Paradis blancs » sur France 2, expéditions sous l’objectif de Jérémie
                        Villet</a></td>
                <td>15/01/2023 12:00:30</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/15/l-ukraine-excuse-toute-trouvee-a-la-corruption-en-russie_6157938_3210.html"
                        target="_blank">L’Ukraine, excuse toute trouvée à la corruption en Russie</a></td>
                <td>15/01/2023 12:00:25</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/15/olivier-dussopt-est-l-invite-de-l-emission-questions-politiques_6157937_823448.html"
                        target="_blank">Olivier Dussopt était l’invité de l’émission « Questions politiques »</a></td>
                <td>15/01/2023 14:12:04</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-le-mag/article/2023/01/15/kevin-mccarthy-elu-speaker-de-la-chambre-des-representants-c-est-peut-etre-un-detail-pour-vous_6157936_4500055.html"
                        target="_blank">Kevin McCarthy élu speaker de la Chambre des représentants, c’est peut-être un
                        détail pour vous…</a></td>
                <td>15/01/2023 10:00:11</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/livres/article/2023/01/15/trio-des-ardents-de-patrick-grainville-les-tourments-de-l-art-et-du-desir_6157935_3260.html"
                        target="_blank">« Trio des Ardents », de Patrick Grainville : les tourments de l’art et du
                        désir</a></td>
                <td>15/01/2023 10:00:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/le-monde-des-religions/article/2023/01/15/a-travers-le-refus-des-dogmes-les-nouveaux-spirituels-rejettent-toute-institution-qui-nous-imposerait-ce-que-l-on-devrait-croire_6157933_6038514.html"
                        target="_blank">« Les nouveaux spirituels rejettent toute institution qui nous imposerait ce que
                        l’on devrait croire »</a></td>
                <td>15/01/2023 09:57:41</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/afrique/article/2023/01/15/najat-ou-la-survie-de-rania-berrada-itineraire-d-un-renoncement_6157932_3212.html"
                        target="_blank">« Najat ou la survie », de Rania Berrada : itinéraire d’un renoncement</a></td>
                <td>15/01/2023 09:00:10</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/15/nepal-un-avion-s-ecrase-avec-72-personnes-a-son-bord_6157931_3210.html"
                        target="_blank">Népal : au moins 67 morts dans le crash d’un avion</a></td>
                <td>15/01/2023 12:41:45</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-perso/article/2023/01/15/laurie-peret-avec-ma-fille-en-ce-moment-on-s-entraine-a-pleurer-sur-commande_6157930_4497916.html"
                        target="_blank">Laurie Peret : « Avec ma fille en ce moment, on s’entraîne à pleurer sur
                        commande »</a></td>
                <td>15/01/2023 10:26:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/15/avec-la-guerre-en-ukraine-l-avenir-incertain-du-cimetiere-russe-de-sainte-genevieve-des-bois-le-plus-grand-a-l-etranger_6157929_3224.html"
                        target="_blank">Avec la guerre en Ukraine, l’avenir incertain du cimetière russe de
                        Sainte-Geneviève-des-Bois, le plus grand à l’étranger</a></td>
                <td>15/01/2023 07:00:24</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/un-si-proche-orient/article/2023/01/15/fin-de-regne-pour-l-ayatollah-khamenei_6157928_6116995.html"
                        target="_blank">« L’aveuglement paranoïaque de l’ayatollah Khamenei explique la férocité de la
                        répression en Iran »</a></td>
                <td>15/01/2023 09:11:18</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/15/perou-face-aux-manifestations-le-gouvernement-decrete-l-etat-d-urgence_6157927_3210.html"
                        target="_blank">Au Pérou, le gouvernement décrète l’état d’urgence dans plusieurs régions en
                        raison des manifestations</a></td>
                <td>15/01/2023 12:23:17</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/15/avatar-les-aventures-de-la-saga-fournissent-des-materiaux-pour-l-anthropologie-science-des-changements-de-perspectives_6157926_3232.html"
                        target="_blank">« Avatar » : « Les aventures de la saga fournissent des matériaux pour
                        l’anthropologie, science des changements de perspectives »</a></td>
                <td>15/01/2023 06:30:05</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/15/megabassines-le-fantasme-d-une-ressource-en-eau-eternellement-disponible_6157924_3232.html"
                        target="_blank">Mégabassines : « Le fantasme d’une ressource en eau éternellement
                        disponible »</a></td>
                <td>15/01/2023 15:00:21</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/campus/article/2023/01/15/a-la-fac-aux-seules-personnes-noires-sont-confiees-les-taches-difficiles_6157923_4401467.html"
                        target="_blank">« A la fac, aux seules personnes noires sont confiées les tâches
                        difficiles »</a></td>
                <td>15/01/2023 10:28:25</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/le-monde-passe-a-table/article/2023/01/15/la-clairette-de-die-cherche-ses-fans_6157921_6082232.html"
                        target="_blank">La clairette-de-die cherche ses fans</a></td>
                <td>15/01/2023 06:00:38</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/economie/article/2023/01/15/pourtant-en-difficulte-go-sport-contraint-par-sa-maison-mere-a-lui-racheter-gap_6157919_3234.html"
                        target="_blank">Go Sport, déjà en difficulté, contraint par sa maison-mère à lui racheter
                        Gap</a></td>
                <td>15/01/2023 12:29:22</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/15/reforme-des-retraites-ces-quinquagenaires-qui-n-arrivent-pas-a-s-imaginer-travailler-jusqu-a-64-ans_6157918_823448.html"
                        target="_blank">Réforme des retraites : ces quinquagénaires qui n’arrivent pas à s’imaginer
                        travailler jusqu’à 64 ans</a></td>
                <td>15/01/2023 09:46:37</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/argent/article/2023/01/15/regime-matrimonial-a-quoi-penser-quand-on-s-expatrie_6157917_1657007.html"
                        target="_blank">Régime matrimonial : à quoi penser quand on s’expatrie ?</a></td>
                <td>15/01/2023 06:00:57</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-styles/article/2023/01/15/tourisme-industriel-cinq-endroits-etonnants-a-visiter_6157916_4497319.html"
                        target="_blank">Tourisme industriel : cinq endroits étonnants à visiter</a></td>
                <td>15/01/2023 06:00:25</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/15/migrants-en-italie-la-guerre-du-gouvernement-contre-les-ong_6157915_3210.html"
                        target="_blank">Migrants : en Italie, la « guerre » du gouvernement contre les ONG</a></td>
                <td>15/01/2023 06:01:11</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/15/dans-le-mage-du-kremlin-le-risque-est-fort-de-confondre-magie-et-realite_6157914_3232.html"
                        target="_blank">« Dans “Le Mage du Kremlin”, le risque est fort de confondre magie et
                        réalité »</a></td>
                <td>15/01/2023 06:01:16</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-perso/article/2023/01/15/la-france-buissonniere-la-petite-bouquinerie-facon-garage_6157913_4497916.html"
                        target="_blank">La France buissonnière : La petite bouquinerie, façon garage</a></td>
                <td>15/01/2023 06:00:13</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/15/jean-baptiste-eyraud-militant-pour-le-droit-au-logement-l-action-collective-ca-marche_6157912_3224.html"
                        target="_blank">Jean-Baptiste Eyraud, militant pour le droit au logement : « L’action
                        collective, ça marche »</a></td>
                <td>15/01/2023 09:32:40</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/planete/article/2023/01/15/formes-a-la-transition-ecologique-des-directeurs-d-administration-centrale-expriment-leur-envie-d-agir_6157911_3244.html"
                        target="_blank">Formés à la transition écologique, des directeurs d’administration centrale
                        expriment leur envie d’agir</a></td>
                <td>15/01/2023 05:30:37</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/15/le-plan-d-action-pour-la-justice-offre-a-eric-dupond-moretti-un-repit-politique_6157910_3224.html"
                        target="_blank">Le « plan d’action » pour la justice offre à Eric Dupond-Moretti un répit
                        politique</a></td>
                <td>15/01/2023 10:11:59</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/15/on-ne-veut-pas-devenir-une-theocratie-en-israel-des-dizaines-de-milliers-de-manifestants-contre-le-gouvernement_6157909_3210.html"
                        target="_blank">En Israël, des dizaines de milliers de manifestants contre le gouvernement :
                        « On ne veut pas devenir une théocratie »</a></td>
                <td>15/01/2023 12:07:39</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/pixels/article/2023/01/15/il-y-a-cinquante-ans-en-france-naissait-le-micral-n-premier-micro-ordinateur-commercial-au-monde_6157908_4408996.html"
                        target="_blank">Il y a cinquante ans, en France, naissait le Micral N, premier micro-ordinateur
                        commercial au monde</a></td>
                <td>15/01/2023 05:00:14</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-le-mag/article/2023/01/15/le-violeur-de-la-sambre-et-la-maire-heroique_6157907_4500055.html"
                        target="_blank">Le « violeur de la Sambre » et la maire héroïque</a></td>
                <td>15/01/2023 14:54:47</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-le-mag/article/2023/01/15/dans-le-desert-australien-les-ermites-de-l-opale_6157906_4500055.html"
                        target="_blank">Dans le désert australien, les ermites de l’opale</a></td>
                <td>15/01/2023 03:00:10</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/15/football-anne-hidalgo-ne-veut-pas-vendre-le-parc-des-princes-le-paris-sg-se-dit-pret-a-quitter-sa-maison_6157905_3242.html"
                        target="_blank">Football : Anne Hidalgo ne veut pas vendre le Parc des Princes, le PSG se dit
                        prêt « à quitter sa maison »</a></td>
                <td>15/01/2023 07:54:15</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-le-mag/article/2023/01/15/dans-le-milieu-de-l-edition-la-question-sensible-des-sensitivity-readers_6157904_4500055.html"
                        target="_blank">Censure ou progrès ? Les « sensitivity readers », qui traquent les préjugés
                        ethniques et sexuels dans les livres, émergent dans l’édition en France</a></td>
                <td>15/01/2023 12:00:50</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/en-israel-des-milliers-de-manifestants-defilent-a-tel-aviv-contre-le-gouvernement-de-benjamin-netanyahu_6157903_3210.html"
                        target="_blank">A Tel-Aviv, des dizaines de milliers de manifestants défilent contre le
                        gouvernement Nétanyahou</a></td>
                <td>15/01/2023 09:35:23</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/live/2023/01/14/guerre-en-ukraine-en-direct-a-dnipro-les-recherches-se-poursuivent-apres-le-bombardement-d-un-immeuble-qui-a-fait-au-moins-neuf-morts_6157846_3210.html"
                        target="_blank">Guerre en Ukraine, en direct : à Dnipro, les recherches se poursuivent et le
                        bilan s’alourdit après le bombardement d’un immeuble</a></td>
                <td>15/01/2023 15:00:47</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/14/mondial-de-handball-2023-sans-forcer-les-bleus-etrillent-l-arabie-saoudite-et-se-hissent-au-tour-principal_6157901_3242.html"
                        target="_blank">Mondial de handball 2023 : sans forcer, les Bleus étrillent l’Arabie saoudite,
                        et se hissent au tour principal</a></td>
                <td>14/01/2023 20:41:22</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/aux-etats-unis-de-nouveaux-documents-confidentiels-retrouves-au-domicile-de-joe-biden_6157900_3210.html"
                        target="_blank">Aux Etats-Unis, de nouveaux documents confidentiels retrouvés au domicile de Joe
                        Biden</a></td>
                <td>14/01/2023 20:14:17</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-le-mag/article/2023/01/14/le-boom-de-l-amapiano-melange-sud-africain-de-house-lounge-jazz-et-soul_6157899_4500055.html"
                        target="_blank">Le boom de l’amapiano, mélange sud-africain de house, lounge, jazz et soul</a>
                </td>
                <td>14/01/2023 20:00:07</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/14/paris-anne-hidalgo-annonce-un-vote-citoyen-quant-au-sort-des-trottinettes-electriques-en-libre-service_6157898_823448.html"
                        target="_blank">Paris : Anne Hidalgo annonce un vote citoyen sur le sort des trottinettes
                        électriques en libre-service</a></td>
                <td>15/01/2023 05:59:47</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/presidentielle-tcheque-andrej-babis-et-petr-pavel-s-affronteront-au-second-tour_6157897_3210.html"
                        target="_blank">Présidentielle tchèque : Petr Pavel et Andrej Babis s’affronteront au second
                        tour</a></td>
                <td>15/01/2023 02:21:53</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/livres/article/2023/01/14/la-terre-fertile-de-marie-helene-lafon_6157896_3260.html"
                        target="_blank">La terre fertile de Marie-Hélène Lafon</a></td>
                <td>14/01/2023 19:00:08</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/14/affaire-noel-le-graet-l-inspection-generale-va-emettre-un-signalement-a-la-justice-pour-outrage-sexiste-en-vertu-de-l-article-40_6157894_3242.html"
                        target="_blank">Affaire Noël Le Graët : l’inspection générale émet un signalement à la justice
                        pour « outrage sexiste » en vertu de l’article 40</a></td>
                <td>15/01/2023 05:59:55</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/14/pour-la-creation-d-un-institut-de-la-france-et-de-l-algerie-un-lieu-museal-ou-histoire-memoires-art-dialogue-et-cooperation-pourraient-coexister_6157893_3232.html"
                        target="_blank">« Pour la création d’un institut de la France et de l’Algérie : un lieu muséal
                        où histoire, mémoires, art, dialogue et coopération pourraient coexister »</a></td>
                <td>15/01/2023 10:21:19</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-le-mag/article/2023/01/14/je-ne-veux-pas-tomber-dans-l-hidalgo-bashing-mais-les-critiques-contrits-de-la-maire-de-paris_6157892_4500055.html"
                        target="_blank">« Je ne veux pas tomber dans l’Hidalgo bashing, mais… » : les critiques contrits
                        de la maire de Paris</a></td>
                <td>14/01/2023 18:00:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/14/rappeuses-en-liberte-et-en-serie-sur-brut_6157891_3246.html"
                        target="_blank">« Rappeuses en liberté » et en série sur « Brut »</a></td>
                <td>14/01/2023 17:30:11</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/planete/article/2023/01/14/en-allemagne-des-affrontements-ont-oppose-policiers-et-manifestants-ecologistes-a-lutzerath_6157890_3244.html"
                        target="_blank">En Allemagne, des affrontements ont opposé policiers et manifestants écologistes
                        à Lützerath</a></td>
                <td>14/01/2023 21:21:35</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/14/football-en-angleterre-manchester-united-renverse-le-derby-et-s-affirme-en-candidat-au-titre_6157889_3242.html"
                        target="_blank">Football : en Angleterre, Manchester United renverse le derby et s’affirme comme
                        candidat au titre</a></td>
                <td>14/01/2023 17:29:23</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sciences/article/2023/01/14/la-nasa-finance-aussi-des-projets-un-peu-fous_6157888_1650684.html"
                        target="_blank">La NASA finance aussi des projets un peu fous</a></td>
                <td>15/01/2023 05:59:49</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/14/en-savoie-une-affaire-de-pillage-archeologique-au-lac-d-aiguebelette-devant-la-justice_6157887_3224.html"
                        target="_blank">En Savoie, une affaire de pillage archéologique au lac d’Aiguebelette devant la
                        justice</a></td>
                <td>14/01/2023 17:00:15</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/anderson-torres-ancien-ministre-de-jair-bolsonaro-arrete-dans-le-cadre-de-l-enquete-sur-le-saccage-a-brasilia_6157886_3210.html"
                        target="_blank">Au Brésil, Anderson Torres, ancien ministre de la justice de Jair Bolsonaro, a
                        été arrêté</a></td>
                <td>14/01/2023 16:47:32</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/livres/article/2023/01/14/fille-en-colere-sur-un-banc-de-pierre-la-confiance-nouvelle-de-veronique-ovalde_6157884_3260.html"
                        target="_blank">« Fille en colère sur un banc de pierre » : la confiance nouvelle de Véronique
                        Ovaldé</a></td>
                <td>14/01/2023 16:00:14</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/14/l-incroyable-odyssee-du-photographe-erwin-blumenfeld_6157883_3246.html"
                        target="_blank">Photo : l’incroyable odyssée d’Erwin Blumenfeld</a></td>
                <td>15/01/2023 05:59:35</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/14/football-apres-hugo-lloris-steve-mandanda-annonce-sa-retraite-internationale_6157882_3242.html"
                        target="_blank">Football : après Hugo Lloris, Steve Mandanda annonce sa retraite
                        internationale</a></td>
                <td>14/01/2023 18:15:25</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/14/retraites-elisabeth-borne-assure-que-les-plus-modestes-seront-les-moins-concernes-par-le-report-de-l-age-de-depart_6157880_823448.html"
                        target="_blank">Retraites : Elisabeth Borne assure que les plus modestes seront « les moins
                        concernés » par le report de l’âge de départ</a></td>
                <td>14/01/2023 14:50:53</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/14/selection-galeries-bouchra-khalili-chez-mor-charpentier-et-mathilde-denize-chez-perrotin_6157879_3246.html"
                        target="_blank">Sélection galeries : Bouchra Khalili chez Mor Charpentier et Mathilde Denize
                        chez Perrotin</a></td>
                <td>14/01/2023 14:00:13</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/afrique/article/2023/01/14/en-tunisie-douze-ans-apres-la-revolution-la-jeunesse-desabusee-se-detourne-a-nouveau-du-vote_6157878_3212.html"
                        target="_blank">En Tunisie, douze ans après la révolution, la jeunesse désabusée se détourne à
                        nouveau du vote</a></td>
                <td>14/01/2023 14:04:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/livres/article/2023/01/14/jacques-bainville-francois-cavanna-et-aldous-huxley-la-chronique-poches-de-francois-angelier_6157876_3260.html"
                        target="_blank">Jacques Bainville, François Cavanna et Aldous Huxley : la chronique « poches »
                        de François Angelier</a></td>
                <td>14/01/2023 13:00:13</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/planete/article/2023/01/14/en-suede-une-chasse-aux-loups-tres-controversee_6157875_3244.html"
                        target="_blank">En Suède, une chasse aux loups très controversée</a></td>
                <td>15/01/2023 05:59:40</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/covid-19-en-chine-les-autorites-reconnaissent-60-000-morts-liees-au-covid-19-entre-decembre-et-janvier-apres-la-levee-des-restrictions-sanitaires_6157873_3210.html"
                        target="_blank">Covid-19 en Chine : les autorités reconnaissent 60 000 morts liées au Covid-19
                        entre décembre et janvier, après la levée des restrictions sanitaires</a></td>
                <td>14/01/2023 19:53:58</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/les-decodeurs/article/2023/01/14/femmes-pauvres-carrieres-incompletes-quelles-sont-les-premieres-victimes-des-inegalites-entre-les-retraites_6157872_4355770.html"
                        target="_blank">Réforme des retraites : quelles sont les premières victimes des inégalités après
                        la vie active ?</a></td>
                <td>14/01/2023 18:16:23</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/14/au-perou-stopper-la-spirale-de-la-violence_6157871_3232.html"
                        target="_blank">Au Pérou, stopper la spirale de la violence</a></td>
                <td>14/01/2023 12:00:55</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/14/au-mouffetard-a-paris-agnes-limbos-manipule-objets-et-symboles-pour-denoncer-les-feminicides_6157870_3246.html"
                        target="_blank">Au Mouffetard, à Paris, Agnès Limbos manipule objets et symboles pour dénoncer
                        les féminicides</a></td>
                <td>14/01/2023 12:00:21</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/14/energie-ceux-qui-pronent-le-nucleaire-comme-seul-vecteur-susceptible-d-un-mix-energetique-decarbone-se-trompent-doublement_6157869_3232.html"
                        target="_blank">Energie : « Ceux qui prônent le nucléaire comme seul vecteur susceptible d’un
                        mix énergétique décarboné se trompent doublement »</a></td>
                <td>14/01/2023 12:00:16</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/14/denes-nagy-realisateur-de-natural-light-ma-principale-source-d-inspiration-les-journaux-tenus-par-les-soldats-hongrois_6157868_3246.html"
                        target="_blank">Dénes Nagy, réalisateur de « Natural Light » : « Ma principale source
                        d’inspiration, les journaux tenus par les soldats hongrois »</a></td>
                <td>14/01/2023 12:00:11</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/14/franck-leroy-nouveau-president-de-grand-est-reaffirme-son-attachement-a-la-region_6157867_823448.html"
                        target="_blank">Franck Leroy, nouveau président de Grand-Est, déclare son « attachement »
                        à la région</a></td>
                <td>14/01/2023 11:22:59</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/france-egypte-l-intouchable-operation-antiterroriste-sirli_6157866_3210.html"
                        target="_blank">France-Egypte : l’intouchable opération antiterroriste « Sirli »</a></td>
                <td>14/01/2023 11:00:16</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-perso/article/2023/01/14/mission-travaux-sur-m6-ou-le-couple-en-chantier_6157865_4497916.html"
                        target="_blank">« Mission travaux » sur M6, ou le couple en chantier</a></td>
                <td>14/01/2023 11:00:14</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/14/chlordecone-apres-le-non-lieu-rendu-le-ministre-charge-des-outre-mer-reconnait-l-humiliation-subie-par-les-antilles_6157864_823448.html"
                        target="_blank">Chlordécone : après le non-lieu rendu, le ministre chargé des outre-mer
                        reconnaît « l’humiliation » subie par les Antilles</a></td>
                <td>14/01/2023 10:54:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/economie/article/2023/01/14/matieres-premieres-le-chou-fleur-n-a-pas-la-grosse-tete_6157863_3234.html"
                        target="_blank">Matières premières : « Le chou-fleur n’a pas la grosse tête »</a></td>
                <td>14/01/2023 10:00:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/14/retraites-le-risque-politique-d-une-reforme-desequilibree_6157861_823448.html"
                        target="_blank">Retraites : les risques politiques d’une réforme déséquilibrée</a></td>
                <td>14/01/2023 10:12:16</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/les-armeniens-du-haut-karabakh-soumis-a-un-blocus-en-appellent-a-l-aide-internationale_6157860_3210.html"
                        target="_blank">Les Arméniens du Haut-Karabakh, soumis à un blocus, en appellent à l’aide
                        internationale</a></td>
                <td>14/01/2023 10:03:15</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-perso/article/2023/01/14/que-faire-a-paris-avec-les-enfants-cinq-activites-scientifiques-pour-tous-les-ages_6157859_4497916.html"
                        target="_blank">Que faire à Paris avec les enfants ? Cinq activités scientifiques pour tous les
                        âges</a></td>
                <td>14/01/2023 09:00:10</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/14/viande-de-cheval-au-tribunal-de-marseille-voyage-au-c-ur-de-combines-frauduleuses_6157858_3224.html"
                        target="_blank">Viande de cheval : au tribunal de Marseille, voyage au cœur de combines
                        frauduleuses</a></td>
                <td>14/01/2023 09:00:18</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/economie/article/2023/01/14/france-soir-retrouve-au-moins-provisoirement-son-agrement-de-presse-en-ligne_6157857_3234.html"
                        target="_blank">« France-Soir » retrouve, au moins provisoirement, son agrément de presse en
                        ligne</a></td>
                <td>14/01/2023 10:52:35</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/economie/article/2023/01/14/la-crise-de-2008-a-surtout-penalise-les-trentenaires-et-les-seniors_6157855_3234.html"
                        target="_blank">La crise de 2008 a surtout pénalisé les trentenaires et les seniors</a></td>
                <td>14/01/2023 07:59:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/14/richard-gasquet-remporte-a-auckland-le-16-tournoi-de-sa-carriere_6157854_3242.html"
                        target="_blank">Tennis : Richard Gasquet remporte à Auckland le 16ᵉ tournoi de sa carrière</a>
                </td>
                <td>14/01/2023 09:50:49</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/teheran-execute-un-irano-britannique-accuse-d-espionnage_6157853_3210.html"
                        target="_blank">L’Iran exécute un binational britannique accusé d’espionnage : « un acte odieux
                        et barbare » pour la France, une condamnation « lâche » pour Londres</a></td>
                <td>15/01/2023 03:43:21</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/l-affaire-des-documents-classifies-decouverts-au-domicile-de-joe-biden-est-elle-comparable-a-celle-de-donald-trump_6157852_3210.html"
                        target="_blank">L’affaire des documents classifiés découverts au domicile de Joe Biden est-elle
                        comparable à celle de Donald Trump ?</a></td>
                <td>14/01/2023 07:00:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/14/tiktok-accuse-d-espionner-l-amerique-et-de-corrompre-la-jeunesse_6157851_3246.html"
                        target="_blank">TikTok accusé d’espionner l’Amérique et de corrompre la jeunesse</a></td>
                <td>14/01/2023 07:00:10</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/14/chlordecone-l-ordonnance-de-non-lieu-n-epargne-ni-l-etat-ni-les-industriels_6157850_3224.html"
                        target="_blank">Antilles : la décision de non-lieu dans l’affaire du chlordécone n’épargne ni
                        l’Etat ni les industriels</a></td>
                <td>14/01/2023 17:43:38</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/14/cartes-d-identite-passeports-le-gouvernement-tente-d-enrayer-le-derapage-des-delais_6157849_823448.html"
                        target="_blank">Cartes d’identité, passeports : le gouvernement tente d’enrayer le dérapage des
                        délais</a></td>
                <td>14/01/2023 06:38:27</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-perso/article/2023/01/14/parentologie-eloge-du-gribouillage_6157848_4497916.html"
                        target="_blank">Parentologie : éloge du gribouillage</a></td>
                <td>14/01/2023 14:07:14</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/14/retraites-bercy-reticent-a-des-mesures-budgetaires-nouvelles_6157847_823448.html"
                        target="_blank">Retraites : Bercy réticent à des mesures budgétaires nouvelles</a></td>
                <td>14/01/2023 09:18:11</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/le-monde-evenements/article/2023/01/14/pour-les-jeunes-generations-leur-qualite-de-vie-les-interesse-autant-que-leurs-perspectives-de-carriere_6157845_4333359.html"
                        target="_blank">« Pour les jeunes générations, leur qualité de vie les intéresse autant que
                        leurs perspectives de carrière »</a></td>
                <td>14/01/2023 06:30:15</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/perou-en-pleine-crise-politique-la-presidente-dina-boluarte-exclut-de-demissionner_6157844_3210.html"
                        target="_blank">Pérou : cible de violentes contestations, la présidente Dina Boluarte exclut de
                        démissionner</a></td>
                <td>14/01/2023 07:15:40</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/economie/article/2023/01/14/la-pandemie-de-covid-19-n-a-pas-fait-exploser-les-inegalites-en-europe_6157843_3234.html"
                        target="_blank">La pandémie de Covid-19 n’a pas fait exploser les inégalités en Europe</a></td>
                <td>14/01/2023 07:58:38</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/les-decodeurs/article/2023/01/14/les-infarctus-de-sportifs-de-l-obsession-antivax-morbide-a-la-manipulation-ehontee_6157842_4355770.html"
                        target="_blank">Les infarctus de sportifs, de l’obsession antivax morbide à la manipulation
                        éhontée</a></td>
                <td>14/01/2023 06:00:36</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sport/article/2023/01/14/le-racing-club-de-lens-rayonne-de-nouveau-entre-reussite-sportive-ferveur-populaire-et-soutien-de-l-economie-locale_6157841_3242.html"
                        target="_blank">Le Racing Club de Lens rayonne de nouveau, entre réussite sportive, ferveur
                        populaire et soutien de l’économie locale</a></td>
                <td>14/01/2023 16:42:41</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-le-mag/article/2023/01/14/en-france-la-contre-offensive-des-medias-prorusses_6157840_4500055.html"
                        target="_blank">La contre-offensive des médias prorusses en France</a></td>
                <td>14/01/2023 13:37:13</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/adhesion-a-l-otan-les-suedois-s-agacent-des-demandes-d-ankara_6157839_3210.html"
                        target="_blank">Adhésion à l’OTAN : les Suédois s’agacent des demandes d’Ankara</a></td>
                <td>14/01/2023 09:21:39</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/argent/article/2023/01/14/placements-les-fonds-monetaires-retrouvent-des-couleurs-avec-l-inflation_6157838_1657007.html"
                        target="_blank">Placements : les fonds monétaires retrouvent des couleurs avec l’inflation</a>
                </td>
                <td>14/01/2023 06:00:57</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/planete/article/2023/01/14/coulees-de-boue-et-effondrements-la-californie-entre-deux-deluges_6157837_3244.html"
                        target="_blank">Coulées de boue et effondrements : la Californie entre deux déluges</a></td>
                <td>14/01/2023 09:16:10</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-perso/article/2023/01/14/changer-de-nom-la-conquete-de-soi_6157836_4497916.html"
                        target="_blank">Changer de nom, la conquête de soi</a></td>
                <td>14/01/2023 20:42:18</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/au-bresil-apres-les-emeutes-dans-la-capitale-les-partisans-de-jair-bolsonaro-a-l-heure-des-doutes_6157835_3210.html"
                        target="_blank">Au Brésil, après les émeutes dans la capitale, les partisans de Jair Bolsonaro à
                        l’heure des doutes</a></td>
                <td>14/01/2023 09:22:49</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/campus/article/2023/01/14/parcoursup-une-annee-en-apnee-pour-les-familles_6157834_4401467.html"
                        target="_blank">Parcoursup, « une année en apnée » pour les familles</a></td>
                <td>14/01/2023 05:00:33</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/14/tiktok-l-algorithme-qui-secoue-la-culture_6157833_3246.html"
                        target="_blank">TikTok, l’algorithme qui secoue la culture</a></td>
                <td>14/01/2023 18:07:08</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-styles/article/2023/01/14/lorient-l-appel-du-grand-large_6157832_4497319.html"
                        target="_blank">Lorient, l’appel du grand large</a></td>
                <td>14/01/2023 05:00:14</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/14/patrick-artus-l-ajustement-de-la-pression-fiscale-a-l-inflation-peut-etre-efficace_6157831_3232.html"
                        target="_blank">Patrick Artus : « L’ajustement de la pression fiscale à l’inflation peut être
                        efficace »</a></td>
                <td>14/01/2023 05:00:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/14/au-proces-de-l-attentat-dejoue-d-avril-2017-le-seul-en-scene-de-mahiedine-merabet-lanceur-d-alerte-et-slameur-du-djihad_6157830_3224.html"
                        target="_blank">Au procès de l’attentat déjoué d’avril 2017, le seul en scène de Mahiedine
                        Merabet, « lanceur d’alerte » et slameur du djihad</a></td>
                <td>14/01/2023 11:00:00</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/14/dans-les-vosges-des-soupcons-de-harcelement-homophobe-apres-le-suicide-de-lucas-13-ans_6157829_3224.html"
                        target="_blank">Des soupçons de harcèlement homophobe après le suicide de Lucas, 13 ans</a></td>
                <td>14/01/2023 11:09:06</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/14/studios-mythiques-pirates-mur-interminable-les-replays-du-week-end_6157828_3246.html"
                        target="_blank">Les replays du week-end : studios mythiques, pirates, mur interminable…</a></td>
                <td>14/01/2023 16:17:38</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/aux-etats-unis-les-republicains-lancent-une-enquete-parlementaire-sur-le-retrait-americain-d-afghanistan_6157827_3210.html"
                        target="_blank">Aux Etats-Unis, les républicains lancent une enquête parlementaire sur le
                        retrait américain d’Afghanistan</a></td>
                <td>14/01/2023 20:26:37</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/etats-unis-le-cousin-d-une-cofondatrice-du-mouvement-black-lives-matter-meurt-apres-son-arrestation_6157826_3210.html"
                        target="_blank">A Los Angeles, un Américain noir meurt après son arrestation par la police</a>
                </td>
                <td>14/01/2023 09:10:31</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-styles/article/2023/01/14/l-extra-ordinaire-au-service-du-beau_6157825_4497319.html"
                        target="_blank">L’extra-ordinaire au service du beau</a></td>
                <td>14/01/2023 14:14:53</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/planete/article/2023/01/14/l-angleterre-va-interdire-la-vaisselle-en-plastique-a-usage-unique_6157824_3244.html"
                        target="_blank">L’Angleterre va interdire la vaisselle en plastique à usage unique</a></td>
                <td>14/01/2023 07:48:25</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-styles/article/2023/01/14/les-chelsea-boots-bottines-mondaines_6157823_4497319.html"
                        target="_blank">Les Chelsea boots, bottines mondaines</a></td>
                <td>14/01/2023 01:00:14</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/14/l-imam-iquioussen-expulse-vers-le-maroc-apres-plusieurs-rebondissements-judiciaires_6157822_3224.html"
                        target="_blank">L’imam Iquioussen expulsé vers le Maroc après plusieurs rebondissements
                        judiciaires</a></td>
                <td>14/01/2023 10:49:30</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/14/bresil-une-enquete-pourrait-etre-ouverte-contre-jair-bolsonaro-apres-la-tentative-d-insurrection-de-l-extreme-droite-a-brasilia_6157821_3210.html"
                        target="_blank">Brésil : Jair Bolsonaro désormais inclus dans l’enquête sur la tentative
                        d’insurrection de l’extrême droite à Brasilia</a></td>
                <td>14/01/2023 08:52:53</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/economie/article/2023/01/13/liquidation-de-place-du-marche-ex-toupargel-on-va-se-battre-avec-ce-qui-nous-reste_6157820_3234.html"
                        target="_blank">Liquidation de Place du Marché (ex-Toupargel) : « On va se battre avec ce qui
                        nous reste »</a></td>
                <td>14/01/2023 09:02:18</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/football/article/2023/01/13/coupe-du-monde-2022-la-fifa-ouvre-des-procedures-contre-l-argentine-et-la-croatie_6157819_1616938.html"
                        target="_blank">Coupe du monde 2022 : la FIFA ouvre des procédures contre l’Argentine et la
                        Croatie</a></td>
                <td>13/01/2023 21:59:42</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/13/au-bresil-un-ministre-de-jair-bolsonaro-au-c-ur-de-revelations-compromettantes_6157818_3210.html"
                        target="_blank">Au Brésil, un ministre de Jair Bolsonaro au cœur de révélations
                        compromettantes</a></td>
                <td>14/01/2023 08:50:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/football/article/2023/01/13/benjamin-mendy-blanchi-d-une-partie-des-accusations-de-viols-contre-lui_6157817_1616938.html"
                        target="_blank">Benjamin Mendy jugé non coupable d’une partie des accusations de viols contre
                        lui</a></td>
                <td>14/01/2023 09:56:59</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/13/shooter-tireur-d-elite-sur-rtl9-la-mort-aux-trousses-de-mark-wahlberg_6157816_3246.html"
                        target="_blank">« Shooter, tireur d’élite », sur RTL9 : la mort aux trousses de Mark
                        Wahlberg</a></td>
                <td>13/01/2023 21:00:10</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/13/congres-du-ps-oliver-faure-arrive-en-tete-avec-49-15-des-voix-selon-les-resultats-definitifs_6157815_823448.html"
                        target="_blank">Congrès du PS : Olivier Faure arrive en tête avec 49,15 % des voix, selon les
                        résultats définitifs</a></td>
                <td>13/01/2023 22:07:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/13/l-imam-hassan-iquioussen-a-ete-expulse-au-maroc-par-la-belgique_6157813_3224.html"
                        target="_blank">L’imam Hassan Iquioussen a été expulsé de Belgique, pour être renvoyé au
                        Maroc</a></td>
                <td>13/01/2023 22:39:20</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/13/a-lesbos-le-proces-pour-espionnage-contre-24-humanitaires-annule_6157812_3210.html"
                        target="_blank">A Lesbos, le procès pour « espionnage » contre 24 humanitaires annulé</a></td>
                <td>14/01/2023 08:36:43</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/live/2023/01/13/guerre-en-ukraine-en-direct-les-ukrainiens-toujours-aux-abords-de-soledar-selon-cnn_6157679_3210.html"
                        target="_blank">Guerre en Ukraine : les Ukrainiens toujours aux abords de Soledar, selon CNN</a>
                </td>
                <td>14/01/2023 06:39:42</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/13/madame-degomme-les-stereotypes-de-l-italo-pop_6157811_3246.html"
                        target="_blank">Madame dégomme les stéréotypes de l’italo-pop</a></td>
                <td>14/01/2023 06:34:44</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/13/chili-la-grace-accordee-a-des-prisonniers-de-la-revolte-de-2019-suscite-une-crise-politique_6157810_3210.html"
                        target="_blank">Chili : la grâce accordée à des prisonniers de la révolte de 2019 suscite une
                        crise politique</a></td>
                <td>13/01/2023 20:00:32</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/13/caricatures-de-charlie-hebdo-s-opposer-a-l-islamisme-consiste-d-abord-et-avant-tout-a-ne-pas-ceder-au-chantage_6157809_3232.html"
                        target="_blank">Caricatures de « Charlie Hebdo » : « S’opposer à l’islamisme consiste d’abord et
                        avant tout à ne pas céder au chantage »</a></td>
                <td>13/01/2023 20:00:23</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/livres/article/2023/01/13/mes-fragiles-ou-sont-ceux-qu-aime-jerome-garcin_6157808_3260.html"
                        target="_blank">« Mes fragiles » : où sont ceux qu’aime Jérôme Garcin ?</a></td>
                <td>13/01/2023 20:00:13</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/economie/article/2023/01/13/nouvel-appel-a-la-greve-sur-les-salaires-chez-decathlon_6157806_3234.html"
                        target="_blank">Nouvel appel à la grève pour les salaires chez Decathlon</a></td>
                <td>14/01/2023 07:18:35</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/livres/article/2023/01/13/anna-thalberg-d-eduardo-sangarcia-une-sorciere-bien-aimee_6157805_3260.html"
                        target="_blank">« Anna Thalberg », d’Eduardo Sangarcia : une « sorcière » bien-aimée</a></td>
                <td>13/01/2023 19:00:15</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-styles/article/2023/01/13/la-cravate-en-tricot-et-le-petit-gars-de-l-opera_6157804_4497319.html"
                        target="_blank">La cravate en tricot et le petit gars de l’Opéra</a></td>
                <td>13/01/2023 21:01:06</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/13/les-nathuropathes-souhaitent-une-reglementation-plus-stricte-de-leur-profession_6157803_3224.html"
                        target="_blank">Les naturopathes souhaitent une réglementation plus stricte de leur
                        profession</a></td>
                <td>13/01/2023 20:40:32</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/sports-de-glisse/article/2023/01/13/dopage-kamila-valieva-n-a-commis-aucune-faute-dans-l-affaire-qui-a-secoue-les-jo-de-pekin-selon-les-instances-russes_6157802_1616666.html"
                        target="_blank">Dopage : Kamila Valieva n’a commis « aucune faute » dans l’affaire qui a secoué
                        les JO de Pékin, selon les instances russes</a></td>
                <td>13/01/2023 18:59:43</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/afrique/article/2023/01/13/ethiopie-l-europe-en-operation-reconquete-apres-la-paix-au-tigre_6157800_3212.html"
                        target="_blank">Ethiopie : l’Europe en opération reconquête après la paix au Tigré</a></td>
                <td>13/01/2023 19:43:29</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/disparitions/article/2023/01/13/la-mort-de-francois-roussely-ancien-patron-d-edf_6157798_3382.html"
                        target="_blank">La mort de François Roussely, ancien patron d’EDF</a></td>
                <td>13/01/2023 18:56:01</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/13/un-naturopathe-promoteur-du-jeune-mis-en-examen-pour-homicide-involontaire_6157797_3224.html"
                        target="_blank">Un naturopathe promoteur du jeûne mis en examen pour « homicide
                        involontaire »</a></td>
                <td>14/01/2023 02:55:29</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/societe/article/2023/01/13/des-s-urs-jumelles-indemnisees-pour-des-incestes-subis-entre-1977-et-1984-et-donc-prescrits_6157796_3224.html"
                        target="_blank">Des sœurs jumelles indemnisées pour des incestes subis entre 1977 et 1984 et
                        donc prescrits</a></td>
                <td>13/01/2023 18:27:07</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/afrique/article/2023/01/13/football-le-maroc-renonce-a-participer-au-championnat-d-afrique-des-nations-en-algerie-faute-d-autorisation-de-vol_6157795_3212.html"
                        target="_blank">Football : le Maroc renonce à participer au Championnat d’Afrique des nations en
                        Algérie, faute d’autorisation de vol</a></td>
                <td>13/01/2023 18:14:14</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/13/guerre-en-ukraine-comprendre-la-bataille-de-soledar-verrou-du-donbass-dont-la-russie-revendique-la-prise_6157794_3210.html"
                        target="_blank">Guerre en Ukraine : comprendre la bataille de Soledar, verrou du Donbass, dont
                        la Russie revendique la prise</a></td>
                <td>14/01/2023 14:52:48</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/afrique/article/2023/01/13/affaire-orion-oil-qu-est-ce-que-cette-affaire-de-possibles-detournements-de-l-argent-du-petrole-congolais_6157793_3212.html"
                        target="_blank">Affaire Orion Oil : ce que l’on sait de cette société congolaise soupçonnée
                        d’être au centre d’un système de malversations</a></td>
                <td>13/01/2023 18:57:39</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-perso/article/2023/01/13/un-apero-avec-paul-pairet-votre-perfection-du-steak-frites-n-est-pas-la-mienne_6157792_4497916.html"
                        target="_blank">Un apéro avec Paul Pairet : « Votre perfection du steak frites n’est pas la
                        mienne ! »</a></td>
                <td>14/01/2023 01:02:41</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/afrique/article/2023/01/13/au-maroc-le-capitalisme-de-rente-joue-contre-l-emergence_6157791_3212.html"
                        target="_blank">Au Maroc, « le capitalisme de rente joue contre l’émergence »</a></td>
                <td>13/01/2023 18:01:04</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/afrique/article/2023/01/13/au-senegal-normale-sup-lance-un-programme-de-formation-inedit-entre-la-france-et-l-afrique_6157790_3212.html"
                        target="_blank">Au Sénégal, « Normale sup » lance un programme de formation inédit entre la
                        France et l’Afrique</a></td>
                <td>13/01/2023 19:09:58</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/13/pause-series-friday-night-lights-30-rock-et-le-patrimoine-seriel_6157789_3246.html"
                        target="_blank">Pause séries : « Friday Night Lights », « 30 Rock » et le patrimoine sériel</a>
                </td>
                <td>13/01/2023 18:00:12</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/13/guerre-en-ukraine-cinq-refugies-russes-coinces-dans-le-terminal-d-un-aeroport-en-coree-du-sud_6157788_3210.html"
                        target="_blank">Guerre en Ukraine : cinq réfugiés russes coincés dans le terminal d’un aéroport
                        en Corée du Sud</a></td>
                <td>13/01/2023 18:00:23</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/livres/article/2023/01/13/voyage-a-rebours-jacob-glatstein-au-bord-du-gouffre_6157787_3260.html"
                        target="_blank">« Voyage à rebours » : Jacob Glatstein au bord du gouffre</a></td>
                <td>13/01/2023 18:00:10</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/13/dans-l-arctique-la-guerre-en-ukraine-rebat-les-cartes_6157784_3210.html"
                        target="_blank">Dans l’Arctique, la guerre en Ukraine rebat les cartes</a></td>
                <td>15/01/2023 15:11:07</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/13/victor-shih-en-chine-le-pouvoir-sans-limites-de-xi-jinping-montre-ses-limites_6157783_3210.html"
                        target="_blank">Victor Shih : « En Chine, le pouvoir sans limites de Xi Jinping montre ses
                        “limites” »</a></td>
                <td>14/01/2023 03:14:56</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/13/selection-albums-patricia-kopatchinskaja-et-fazil-say-iggy-pop-vald-simon-nwambeben_6157782_3246.html"
                        target="_blank">Sélection albums : Patricia Kopatchinskaja et Fazil Say, Iggy Pop, Vald, Simon
                        Nwambeben</a></td>
                <td>13/01/2023 17:30:07</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/idees/article/2023/01/13/paul-midy-la-feminisation-comme-l-inclusion-des-diversites-dans-la-french-tech-est-un-enjeu-systemique_6157778_3232.html"
                        target="_blank">Paul Midy : « La féminisation comme l’inclusion des diversités dans la “French
                        Tech” est un enjeu systémique »</a></td>
                <td>13/01/2023 17:00:35</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/campus/article/2023/01/13/la-licence-de-droit-revelation-pour-certains-etudiants-desillusion-pour-les-autres_6157777_4401467.html"
                        target="_blank">La licence de droit, révélation pour certains étudiants, désillusion pour les
                        autres</a></td>
                <td>13/01/2023 17:00:16</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/culture/article/2023/01/13/utopie-s-d-autres-vies-d-autres-mondes-sur-france-tv-six-utopies-a-l-epreuve-du-reel_6157776_3246.html"
                        target="_blank">« Utopie.s ? D’autres vies, d’autres mondes », sur France.tv : six utopies à
                        l’épreuve du réel</a></td>
                <td>13/01/2023 17:00:13</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/m-perso/article/2023/01/13/nos-enfants-ont-ils-une-conscience-de-classe_6157775_4497916.html"
                        target="_blank">Nos enfants ont-ils une conscience de classe ?</a></td>
                <td>13/01/2023 16:45:48</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/disparitions/article/2023/01/13/la-mort-de-hans-belting-historien-de-l-art-specialiste-du-statut-des-images_6157774_3382.html"
                        target="_blank">La mort de Hans Belting, historien de l’art spécialiste du statut des images</a>
                </td>
                <td>13/01/2023 17:20:04</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/politique/article/2023/01/13/le-rassemblement-national-recrute-un-jeune-militant-lr-pour-diriger-sa-communication_6157772_823448.html"
                        target="_blank">Le Rassemblement national recrute un jeune militant LR pour diriger sa
                        communication</a></td>
                <td>13/01/2023 18:26:51</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/mondephilatelique/article/2023/01/13/gilles-livchitz-dans-l-echo-de-la-timbrologie-nous-constatons-le-vieillissement-des-philatelistes-qui-n-ont-pas-su-et-qui-ne-savent-toujours-pas-transmettre-leur-passion_6157770_5470897.html"
                        target="_blank">Gilles Livchitz, dans « L’Echo de la timbrologie » : « Nous constatons le
                        vieillissement des philatélistes qui n’ont pas su et qui ne savent toujours pas transmettre leur
                        passion »</a></td>
                <td>13/01/2023 16:18:09</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/argent/article/2023/01/13/taux-du-livret-a-pourquoi-3-seulement_6157769_1657007.html"
                        target="_blank">Taux du Livret A : pourquoi 3 % (seulement) ?</a></td>
                <td>13/01/2023 17:34:22</td>
            </tr>
            <tr>
                <td><a href="https://www.lemonde.fr/international/article/2023/01/13/la-trump-organization-condamnee-a-la-peine-maximale-pour-fraudes-fiscales_6157767_3210.html"
                        target="_blank">La Trump Organization condamnée à la peine maximale pour fraudes fiscales</a>
                </td>
                <td>13/01/2023 18:30:27</td>
            </tr>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('.menu-link').menuFullpage();
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/French.json"
            }
        });
    });
</script>
<?php include '../footer.php'; ?>