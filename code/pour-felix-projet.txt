#DocumentDescriptif

##1.0 -Description du projet:
    Dans le but de proposer une alternative à la seule plate-forme du domaine automobile en Outaouais, nous recrérons un 
    un produit sembable, en s'inspirant du fonctionnement technique de celle deja en place.
    
##2.0 - Analyse et descriptions du projet
##2.1.0- Phase de développement et de livraison de projet.
##2.1.1   
    ###Phase 1: Analyse du projet
    Dans un premier temps. Il nous sera indispensable de bien analyser la plate-forme déjà présente afin de                 schmématiser cette dernière le plus fidèlement possible. Nous ne voulons pas copier le produit, mais                   l'améliorer, donc,en analysante le fonctionnement des sites présents, il nous sera possible de mieux compendre le       fonctionnent de la plate-forme et de l'implémenter en fonctions de ce qu'elle offre déjà, au lieu de tout               réinventer     from-sratch. 
    
    Cette phase de projet se veut principalement a la création d'uml, l'analyse des classes, la schématisation des liens     entre les données et l'approche technique utilisé lors de la création de notre projet. En ayant bien regarder et
    approfondi la plate-forme déjà en place, nous comprendrons mieux le projet demandé et, par ce fait même, pourrons       nous attarder à la programmation sur une note plus "informatique" et non pas de compréhension de projet. 
    
    Au niveau du STACK (choix des technologies utilisés). Le présent document comprend une section réservé à ce sujet. 
##2.1.2    
    ###Phase 2: 
    Cette phase se veut comme un plans de travail, sans tomber dans les grands détails technique, cette partie du projet permettra aux développeurs et au client de suivre approximativement l'avancement de son projet. Il nous sera donc possible de suivre une courve de travail organisé et de réalisé si les dates butoires fixées sont réellement atteignable, si les délais sont trop long ou trop court.
##2.1.3    
    ###Phase 3: 
    Cette section du projet est la période de programmation, donc, en suivant le plan élaboré en phase 2, il nous sera
    possible de programmer et suivre un avancement logique du projet. Sans tomber dans des rats wholes ou de perdre         trop de temps à se perdre dans le développement. Une fois l'organisation du projet terminé (Phase 2), nous             programmerons le tout et s'assurerons de tester les components et de suivre ce que nous avons établis comme plan. 
##2.1.4    
    ###Phase 4:
    Mise en ligne, délvrer le projet. 
    
##2.2 
    ###Description des partis du projets 
 
 ##2.2.1-Refonte du présent site web. 
            ###Back-end:
            -Assurer un back-end solide et permettant la gestion de données faciles et accessibles
            -Assurer la créations de templates représentatif de l'analyse préalablement réalisée
            -Assurer une bonne structure de données, en suivant la logique de la technologie de base de données                      sélectionnée
            Gestions des données: 
            ####API
            -Données sur les voitures provenant d'un API(CRON Job vers notre BD pour avoir les données sur nos serveur)
            -Donnés des données de voiture usagé(Demandé de l'infos sur ca). CRON job 1 x par jour pour avoir les                    données en local
           #####Formulaire: 
            -Créer des formulaires nécessaires quant a cette sections du projet (créations du site)
           ###Front-End
            -Bien gérer la nomenclature des fichiers CSS et JS pour permettre une flexibilité et facilité de                        développement
            -Suivre la nomenclature des templates pour la gestions des fichiers associés (Feuiles de styles, script and             shits))
            
##2.2.2-Implémentation du projet
        ###Nouveau Client 
        ####-Intégrer un chat**ou chien (à voir pour la technologies utilisés)
            -Chat doit avoir une panoplie de features que nous implémenterons au fur et à mesure.
            Notamment: Interactions avec quelqu'un lors de son arrivée sur le site, suivis, proposition de prouit                   etc...
        ####-Chaque client doit être reconnaissable lors de sa visite sur le site. 
            -Établir une détection du IP et tracker l'ip,
            -Faire un système de connexion client simple
            -Activer la géolocalisation...
        ####-Établir à quel endroit les données seront stockés? et qui les rentrera... Manuel a l'interne ou directement            sur notre bd
        
        ####-Préparer un système de mailing pour envoyer de l'information relative à ce client précis. 
        
        ####Client intéressé a acheter une voiture
        -S'assurer d'une gestion de validation si la voiture est acheté 
        -S'assurer de remailing et repoursuite du client si la voiture n'est pas acheté. 
      
      ###Tracking de clients: 
        -S'assurer de tracker chaque fois qu'un client entre sur le site (s'il est identifié)
        -Demander à Dave d'autres infos(cette section est beaucoup plus business drive que technologiques, donc                 demandez à Dave de sortir les informations et les features qu'il veut.)

##3.0-Choix technologique
#   ***************************************************************************************************
#   *                                                                                                 *   
#   *   -Le choix des technologies est relative aux changement et rien n'est pas ancré dans le béton. *
#   *                                                                                                 *   
#   ***************************************************************************************************
    ##3.1- Stack
    -Il faudra, avant de se lancer dans la programmation du projet, s'assurer que le choix se fera judiscieusement en        lien avec la production et la programmation. En gros, le choix de notre stack peut être bien custom et innovateur,      cependant, le tout doit être quelque chose de solide et non pas de cool et hype. 
    
    Donc, nous choisirons le stack et les technologies en fonctions des outils disponible nous permettant d'être plus       productif dans notre programmation et non pas pour être des cool ReactJS Kid!! On est déjà cool. 
    
    ##3.2.1-Base de données
         -Cette section explique les avantages et inconvénient d'avoir certaines technologies au lieu de d'autres
   ##3.2.2-NOSql? 
    ###-Persistance ou mimique du Non relationnel. 
         -Dans le projet décrit si haut, une approche non-relationnel pourrait être utile, au niveau du tracking des            clients notamment. Il sera donc, clair et net que nous utiliserons une technologie non-relationnel pour la              gestion du projet. Pour se faire, nous pourront utiliser une technologie de persistance comme Doctrine pour            permettre une schématision objet vers BD en suivant le Polymorphisme, héritage etc..!
        
         ####Plus: 
         -Permet d'utiliser une approche et des outils de gestions de données relationnels pour permettre une meilleur          gestion
         -Permet une meilleure sécurités et facilité quant au déploiment.   
         -Doctrine (ou autre technologies de persistance) est rien d'autre qu'un add-on à du bon vieux SQL lui                   permettant de devenir plus "Flexible", sans que l'on se complique la vie avec la gestions d'héritage, de               partage de classe et compagnie
         -Plus sécuritaire
         
         ####Contre
         -Plus de chiar pour la gestions des données au niveau des données recupérer par API
         -Certaines limitations quant au purement non-relationnel. 
         
    ###-Purement non-relationnel? (Mongo)
        -Certe, cette approche se veut flexbile, rapide et facilement extensible. 
        -Dans la gestion de notre projets, il serait utiles d'avoir une base de données 100% NOSql qui permettrait une          flexibilité quand a la gestions des données. L'un des gros plus de cette technologies est sa très grande              facilité à être extensier.
     
        ####-Plus
            -Flexible
            -Extensible
            -Parfait pour la gestion de données d'API (Sous Mongo, tout est straight-pipe en JSOn)
            
        ####-Contre
            -Peut-être s'asseoir sur notre back-end?
            -Peut-être s'intégrer comme nous le voulons sur n'importe quelle sphère du projet. 
            
   ##3.3.0-Back-end
        ###-PHP
          -Certe cette technologie a fait ses preuves et permettrait une gestion directe et solide du projet. 
          -Beaucoup d'outils existe deja, notamment (Framework Puissant, outil de gestions etc.. etc...). À voir, certe          une option.
          -Au niveau d'un framework, Symfony serait tout de même possiblement une bonne solution, ou encore seulement            quelques-uns de ces features(Bolt#Sylex)
            
        ###-Node-JS
           -Certe, il serait approprié de travailler avec Node, notamment quant à la gestion des données en purement              NoSql.
          -Node-JS est somme toute assez puissant quant à la gestions des routage#Url#Manipulation de Request-Response            et suit la logique de Sylex
        
        La seule peur que je crois peut-être avoir reste quant à la gestion de services que nous relayons sur. Le chat          notamment.
        
   ##3.4.0-Front-End
        -Webpack, Gulp, Grunt 
        -Angular ou React pour le render... A voir 
        
   
   ##3.5-Serveur NGINX


#4.0- IMPORTANT 
    -Gestion du projet et des versions-
    -Nous utiliserons GIT
    -Voici comment, il est important de procédé pour la création du projet
    
    #Repo-
        _BranchesMères_
        ##-VeryInitialMaster
        ##-Master(Celle qui va servir au déploiment)    
        ##-Staging(Pré Déploiment)
        ##-Dev(Sur laquelle nous travaillons)
        *
        *
        ****##-FeaturesNomDuFeature
            *
            *
            ****##-InitialAvantModif(Copie du Dev)
                *##-Expérimentation/Création 
                *
                *******##-Autant de Branche que tu veux...
                *
               ********##-Une autre bébelle... 
                *    
               ********##-Un cossins de porn 
               *      ********##-Une fille tout nu
               *      ********##-Une paire de fesse...
               *
               ##-Final
                
            ##-UnAutreFeautre 
                etc...
            ##-UnAutreFeatures
 #Description des branches:
    ##Master:
      Représente notre HelloWorld On est prêt a travailler, une fois que tout est sétté et ready to go
      On décline cette copie vers Staging et Developmmement 
    ##Staging:
        C'est notre pré-déploiement, c'est dans cette branche que les modifications de développement seront           merger. Pour ensuite être amener en Master
      ##Developmment:
        Sur cette branche se déroule le développement de l'applications. 
      #Features/Nom DU Features: 
        Avant chaque début de features, il est important de créer une nouvelle branche!!! 
        *****Ne jamais travailler sur le dev directement, sinon Antoine PAS CONTENT MÉCHANT FACHÉ***** 
             A partir du DEV, on décline la version courant vers une branche
             **TRÈS IMPORTANT: Respecter cette nomenclature pour le nommage**
             **Features/NomsDuFeature-> Permet une meilleure gestion lors des merging.** 
        
                ##-InitialFromDev: 
                    Cette branche est une copie du DEV avant toute modifications sur votre branche de feature feautres. Très important de se faire une copie du dev avant de commencer un features! 
                    **Sinon Antoine Faché Pas Content(!!!FireEmoji!!!!)
                ##-FeatureDevelopment:
                    Ici, tu peux t'amuser comme tu veux, je m'en calice, faire des temlates avec des femmes nus, changer nos valeurs pour des noms coquins de pornstar! I actually                                         give fuck fuck fuck
                    **Je conseille tout de même de créer des sous-Branche du développement du features.** 
                ##-FeatureFinal:
                    -C'est cette branche qui s'en va en Dev! Donc, idéalement, tu y touches pas. 

###**Mais comment je fais pour intégrer un feature en DEV ???** 
-Une fois que tu es content de ce que tu as fait sur ton Features. 
-Tu merges toute tes sousbranche de FeaturesDevelopment dans la branche FeaturesDevelopment
    -Tu montes de Un niveau pis merge le dev actuel avec la branche Features/NomduFeature
    -Tu de déplace dans la branche Features/NomDuFeature--FeaturesFinal...
    -Tu merge le Features/NomDuFeature avec cette Branche. Donc, le dev actuel devient FeatureFinal. 
        ##**Si y'a pas eu de changement sur le dev entre quand je suis pret a pousser le features pis quand j'ai  commencer... Bin, tant mieux, mais tu fais cet étape pareil.** 
    -Ensuite, Tu vas Merger la Branches FeatureDevelopment dans la branche FeatureFinal
     ###   "
     ###   -?WOW!!! Osti je capote, fack la, c'est comme si j'avais une version du dev actuel, avec mon nouveau Features!!! 
     ###   -Answer: Yes Mon Gino!!! All Good and Ready to GO!
     ###   "
    -Et la,tu retourne sur la branche Features/NomDuFeatures et tu merges FeaturesFinal Dedans 
    -Retourne en Dev, Merge le Dev avec Features/NomDuFeatures. 
    
    ###"
    ###Osti c'est magique!!! Mais pourquoi tu on a fait une copie du dev actuel avant de commencer a faire le feature 
    ###"
    Bon, admettons la, que, hypothétiquement parlant, tu passes 360 jours sur un features, pis que la, entre le moment que tu 
    veux le mettre en dev pis celui que tu as commencé la création de ce feature... Pis, le Dev y'a changé quel criss
    Bin cette branche la, te permet juste de faire une copie du dev avant que tu commences a l'implémenter avec un features. 
    Fack, si admettons, y'a un bug lors du Merging et que tout pètes... Bin on a quand meme une copie du Dev du moment que tu
    as commencé a programmer ton features. 
    
    **Parce que je te le jure, remonter dans le temps pour essayer de trouver la date, pis le moment, pis le calice de fichier qui a changer pis toute toute, c'est chiant en tabarnak.
    Fack si admettons toute pète, on va pouvoir comparer la versions du dev de maintenant avec le Dev de quand quand tu as commencer a travailler sur ton features.**
    
    ###Écoute, c'est par précaution, ca sert pas tout le temps! Pas mal jamais en fait. 
    
##Pis pour le déploiement?? 
    -Tu criss ton dev dans Staging... Tu teste, tout est bon, pis apres on s'en va sur le serveur...! 8-) 
    -La, si nous étions fou quel criss on pourrait faire un peu le meme principe que de dev--->Features
     mais, normallement, quand ca marche en dev... puis en staging... ca marche en Master
     
        ##**Pis ci vraiiiment ca bug...** 
            Retourne voir les branches en haut dans le schéma... y'en a une qui s'appelle initial-master.
            Mettons que toute toute pète... Bin on a encore une copie initial du master. 
        

##Pis comment on marche sur le serveur? FTP, SFTP?? 
    **Wussup, on est plus dans les années 2006!** 
    -On se connecte en SSH sur une belle machine qui roule un shell Linux... 
        -Idéalement, on s'en va dans le dossier var/temp/docs/...
        -Une fois rendu la, on vérifie que git est bien installer.
        -On git clone le repo!!
        -On roule un petit coup de NPM Update Install ou Composer.
        Et la tu Merges Staging dans Master!
    
    #SWAAG!!
 
    
    
        
