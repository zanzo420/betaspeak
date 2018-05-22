<?php

    /*
		GroupAssigner 1.1
		Author: Borygard
		v-Author: Multivitamin
    */

    $config = array();

    /*
    ******************************
    **** Teamspeak GŁÓWNY Config****
    ******************************
    */
    //Teamspeak Adres IP
    $config['teamspeak']['ip'] = 'localhost';      
    //Teamspeak Query Port
    $config['teamspeak']['queryport'] = '10011';   
    //Teamspeak Server IP
    $config['teamspeak']['serverport'] = '9987';      
    //Teamspeak Login Query
    $config['teamspeak']['loginname'] = 'serveradmin'; 
    //Teamspeak Hasło Query
    $config['teamspeak']['loginpass'] = 'admin_slg';              
    //Teamspeak Nick bota 
    $config['teamspeak']['displayname'] = 'STRONA ›› BETASPEAK.PL';   
    //Limit grup ( 0 = brak limitu)
    $config['teamspeak']['maxgroups'] = 1;
    //Weryfikacja adresu IP true=tak | false=nie
    $config['teamspeak']['ip-verify'] = true;
    //Które grupa nie może korzystać w skryptu
    $config['teamspeak']['groups'] = "2";
    //Only = te grupy mogą korzystać ze skryptu
    //ignore =  te grupy nie mogą korzystać ze skryptu
    $config['teamspeak']['group-mode'] = "ignore";

    /*
        Kopiowanie:
        -----------------------
        
    $config['groups'][] = array(
        'grpid' => '',                  //ID grupy
        'name' => '',                   //Nazwa grupy
        'icon' => '',                   //Ikonka grupy
    );
        
        
    */
    
    //KONFIGURACJA GRUPY
	
    $config['groups'][] = array(
        'grpid' => '120',
       'group' => 'gry',
        'name' => 'Counter-Strike: Global Offensive',
        'icon' => 'http://i.imgur.com/Vssducq.gif',
    );
    
    $config['groups'][] = array(
        'grpid' => '122',
       'group' => 'gry',
        'name' => 'League of Legends',
        'icon' => 'http://i.imgur.com/L5yIRL7.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '123',
       'group' => 'gry',
        'name' => 'Wied&zacute;min',
        'icon' => 'http://i.imgur.com/Ssr8f1q.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '124',
       'group' => 'gry',
        'name' => 'OSU!',
        'icon' => 'http://i.imgur.com/ZM27z2X.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '125',
       'group' => 'gry',
        'name' => 'Metin2',
        'icon' => 'http://i.imgur.com/CbpX5OC.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '126',
       'group' => 'gry',
        'name' => 'Dota 2',
        'icon' => 'http://i.imgur.com/HmoXcwy.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '127',
       'group' => 'gry',
        'name' => 'Overwatch',
        'icon' => 'http://i.imgur.com/tYTQBSw.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '128',
       'group' => 'gry',
        'name' => 'FIFA',
        'icon' => 'http://i.imgur.com/4zN2xxi.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '129',
       'group' => 'gry',
        'name' => 'Ghotic',
        'icon' => 'http://i.imgur.com/ETq5OmC.gif',
    );
    
    $config['groups'][] = array(
        'grpid' => '130',
       'group' => 'gry',
        'name' => 'GTA SA',
        'icon' => 'http://i.imgur.com/6RSKMVU.jpg',
    );
    
    $config['groups'][] = array(
        'grpid' => '131',
       'group' => 'gry',
        'name' => 'GTA V',
        'icon' => 'http://i.imgur.com/j9kGP9S.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '132',
       'group' => 'gry',
        'name' => 'Smite',
        'icon' => 'http://i.imgur.com/MN6BHwd.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '133',
       'group' => 'gry',
        'name' => 'Heroes of The Storm',
        'icon' => 'http://i.imgur.com/ETe5Fee.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '134',
       'group' => 'gry',
        'name' => 'Diablo',
        'icon' => 'http://i.imgur.com/oN0Q1i9.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '135',
       'group' => 'gry',
        'name' => 'Minecraft',
        'icon' => 'http://i.imgur.com/kHzxa6E.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '136',
       'group' => 'gry',
        'name' => 'NosTale',
        'icon' => 'http://i.imgur.com/Luk1hXR.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '138',
       'group' => 'gry',
        'name' => 'PAYDAY',
        'icon' => 'http://i.imgur.com/sgCo8T1.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '139',
       'group' => 'gry',
        'name' => 'StarCraft',
        'icon' => 'http://i.imgur.com/VokXnfp.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '140',
       'group' => 'gry',
        'name' => 'Tibia',
        'icon' => 'http://i.imgur.com/PaDCpBO.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '142',
       'group' => 'gry',
        'name' => 'World of Tanks',
        'icon' => 'http://i.imgur.com/iPlEUho.gif',
    );
    
    $config['groups'][] = array(
        'grpid' => '143',
       'group' => 'gry',
        'name' => 'TERA',
        'icon' => 'http://i.imgur.com/63VNolL.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '144',
       'group' => 'gry',
        'name' => 'Aion',
        'icon' => 'http://i.imgur.com/skve2Dr.gif',
    );
    
    $config['groups'][] = array(
        'grpid' => '145',
       'group' => 'gry',
        'name' => 'Left4Dead',
        'icon' => 'http://i.imgur.com/qN1VWKI.gif',
    );
    
    $config['groups'][] = array(
        'grpid' => '146',
       'group' => 'gry',
        'name' => 'Fallout',
        'icon' => 'http://i.imgur.com/NMKM9qD.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '149',
       'group' => 'gry',
        'name' => 'Paladins',
        'icon' => 'http://i.imgur.com/hSXhzDx.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '150',
       'group' => 'gry',
        'name' => 'Hurtworld',
        'icon' => 'http://i.imgur.com/s8ViVpn.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '151',
       'group' => 'gry',
        'name' => 'Call of Duty',
        'icon' => 'http://i.imgur.com/JJsKO3W.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '152',
       'group' => 'gry',
        'name' => 'MTA SA',
        'icon' => 'http://i.imgur.com/7QuCBrh.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '153',
       'group' => 'gry',
        'name' => 'Battlefield',
        'icon' => 'http://i.imgur.com/6qRHnLn.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '154',
       'group' => 'gry',
        'name' => 'H1Z1',
        'icon' => 'http://i.imgur.com/YkWVgaP.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '155',
       'group' => 'gry',
        'name' => 'Blade & Soul',
        'icon' => 'http://i.imgur.com/1aLfTa5.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '157',
       'group' => 'gry',
        'name' => 'Warframe',
        'icon' => 'http://i.imgur.com/zidwTIZ.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '158',
       'group' => 'gry',
        'name' => 'Tomb Rider',
        'icon' => 'http://i.imgur.com/MTckbLi.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '159',
       'group' => 'gry',
        'name' => 'Hearthstone',
        'icon' => 'http://i.imgur.com/pfw4XeU.gif',
    );
    
    $config['groups'][] = array(
        'grpid' => '160',
       'group' => 'gry',
        'name' => 'Battlerite',
        'icon' => 'http://i.imgur.com/zjSDLYh.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '161',
       'group' => 'gry',
        'name' => 'Rocket League',
        'icon' => 'http://i.imgur.com/MdbaKul.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '162',
       'group' => 'gry',
        'name' => 'ARMA III',
        'icon' => 'http://i.imgur.com/yALkn2S.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '163',
       'group' => 'gry',
        'name' => 'Civilization',
        'icon' => 'http://i.imgur.com/ZHHuxFh.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '164',
       'group' => 'gry',
        'name' => 'Steam',
        'icon' => 'http://i.imgur.com/eLwqCSO.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '165',
       'group' => 'gry',
        'name' => 'Blizzard APP',
        'icon' => 'http://i.imgur.com/D9zQnz7.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '166',
       'group' => 'gry',
        'name' => 'Counter-Strike 1.6',
        'icon' => 'http://i.imgur.com/aCsSSYX.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '167',
       'group' => 'gry',
        'name' => 'Assassins Creed',
        'icon' => 'http://i.imgur.com/CfqVj5V.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '168',
       'group' => 'gry',
        'name' => 'World of Warcraft',
        'icon' => 'http://i.imgur.com/wTi3Ug1.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '169',
       'group' => 'gry',
        'name' => 'Pokemon GO',
        'icon' => 'http://i.imgur.com/2Cp3SFZ.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '172',
       'group' => 'gry',
        'name' => 'Elsword',
        'icon' => 'http://i.imgur.com/dc0Fg9I.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '173',
       'group' => 'gry',
        'name' => 'Terraria',
        'icon' => 'http://i.imgur.com/AfWFOhf.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '174',
       'group' => 'gry',
        'name' => 'Shakes & Fidget',
        'icon' => 'http://i.imgur.com/wpzZuVT.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '175',
       'group' => 'gry',
        'name' => 'Plemiona',
        'icon' => 'http://i.imgur.com/DDQFnUy.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '176',
       'group' => 'gry',
        'name' => 'XBOX',
        'icon' => 'http://i.imgur.com/Lrodauh.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '177',
       'group' => 'gry',
        'name' => 'PlayStation',
        'icon' => 'http://i.imgur.com/R1tHRLu.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '226',
       'group' => 'gry',
        'name' => 'Team Fortress 2',
        'icon' => 'http://i.imgur.com/2dUHv6F.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '246',
       'group' => 'gry',
        'name' => 'Rust',
        'icon' => 'http://i.imgur.com/tiKZojv.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '247',
       'group' => 'gry',
        'name' => 'APB Reloaded',
        'icon' => 'http://i.imgur.com/G9Pg0GZ.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '251',
       'group' => 'gry',
        'name' => 'World of Warships',
        'icon' => 'http://i.imgur.com/ey3u2cH.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '253',
       'group' => 'gry',
        'name' => 'Revelation Online',
        'icon' => 'http://i.imgur.com/LDIUMH3.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '254',
       'group' => 'gry',
        'name' => '4Story',
        'icon' => 'http://i.imgur.com/EeuPbdT.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '260',
       'group' => 'gry',
        'name' => 'Paragon',
        'icon' => 'http://i.imgur.com/is9jTaJ.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '183',
       'group' => 'woj',
        'name' => 'Mazowieckie',
        'icon' => 'http://i.imgur.com/DdAmmz0.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '184',
       'group' => 'woj',
        'name' => 'Dolno&sacute;laskie',
        'icon' => 'http://i.imgur.com/3B3Vipx.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '185',
       'group' => 'woj',
        'name' => 'Lubuskie',
        'icon' => 'http://i.imgur.com/e95iZd7.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '186',
       'group' => 'woj',
        'name' => 'Lubelskie',
        'icon' => 'http://i.imgur.com/0oeLSGy.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '187',
       'group' => 'woj',
        'name' => '&Lstrok;&oacute;dzkie',
        'icon' => 'http://i.imgur.com/nMNzn5F.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '188',
       'group' => 'woj',
        'name' => 'Ma&lstrok;opolskie',
        'icon' => 'http://i.imgur.com/qAHgwcj.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '189',
       'group' => 'woj',
        'name' => 'Opolskie',
        'icon' => 'http://i.imgur.com/I0SWTK0.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '190',
       'group' => 'woj',
        'name' => 'Podlaskie',
        'icon' => 'http://i.imgur.com/e9Y6YUC.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '191',
       'group' => 'woj',
        'name' => 'Podkarpackie',
        'icon' => 'http://i.imgur.com/4M6coB2.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '192',
       'group' => 'woj',
        'name' => 'Pomorskie',
        'icon' => 'http://i.imgur.com/UytKPTg.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '193',
       'group' => 'woj',
        'name' => '&Sacute;l&aogon;skie',
        'icon' => 'http://i.imgur.com/oP5hZ5m.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '194',
       'group' => 'woj',
        'name' => '&Sacute;wi&eogon;tokrzyskie',
        'icon' => 'http://i.imgur.com/oUkM0mx.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '195',
       'group' => 'woj',
        'name' => 'Warmi&nacute;sko-mazurskie',
        'icon' => 'http://i.imgur.com/0mKeDpG.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '196',
       'group' => 'woj',
        'name' => 'Wielkopolskie',
        'icon' => 'http://i.imgur.com/gA5p7ur.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '197',
       'group' => 'woj',
        'name' => 'Zachodniopomorskie',
        'icon' => 'http://i.imgur.com/ZlChlwD.png',
    );
    
	############ 4FUN ################
	
    
    $config['groups'][] = array(
        'grpid' => '208',
       'group' => '4fun',
        'name' => 'No-life',
        'icon' => 'http://i.imgur.com/bRcoXCU.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '209',
       'group' => '4fun',
        'name' => 'Rak',
        'icon' => 'http://i.imgur.com/r2YIJmT.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '211',
       'group' => '4fun',
        'name' => 'Rudzi są Spoko',
        'icon' => 'http://i.imgur.com/DpCdT0O.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '213',
       'group' => '4fun',
        'name' => 'Świntuszek',
        'icon' => 'http://i.imgur.com/2pHYdpq.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '214',
       'group' => '4fun',
        'name' => 'Palacz',
        'icon' => 'http://i.imgur.com/ODsaDyR.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '215',
       'group' => '4fun',
        'name' => 'Zboczek',
        'icon' => 'http://i.imgur.com/fb7xbPO.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '216',
       'group' => '4fun',
        'name' => 'Całe Życie na Haju',
        'icon' => 'http://i.imgur.com/MNupcvP.gif',
    );
    
    $config['groups'][] = array(
        'grpid' => '217',
       'group' => '4fun',
        'name' => 'Toxik',
        'icon' => 'http://i.imgur.com/7DNa912.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '219',
       'group' => '4fun',
        'name' => 'Alkoholik',
        'icon' => 'http://i.imgur.com/f1BIHC0.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '220',
       'group' => '4fun',
        'name' => 'Kappa',
        'icon' => 'http://i.imgur.com/38HxDSB.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '221',
       'group' => '4fun',
        'name' => 'Diabełek',
        'icon' => 'http://i.imgur.com/RJiHkqL.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '223',
       'group' => '4fun',
        'name' => 'Gangster',
        'icon' => 'http://i.imgur.com/0Wh070S.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '224',
       'group' => '4fun',
        'name' => 'Świrus',
        'icon' => 'http://i.imgur.com/2W6s8ji.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '229',
       'group' => '4fun',
        'name' => 'Ninja',
        'icon' => 'http://i.imgur.com/bPzh109.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '230',
       'group' => '4fun',
        'name' => 'Na Banicji',
        'icon' => 'http://i.imgur.com/ZqRw26o.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '231',
       'group' => '4fun',
        'name' => 'Troll',
        'icon' => 'http://i.imgur.com/G9jA013.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '240',
       'group' => '4fun',
        'name' => 'Jabłuszko',
        'icon' => 'http://i.imgur.com/KS1b2jm.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '241',
       'group' => '4fun',
        'name' => 'Panda BaoBao',
        'icon' => 'http://i.imgur.com/b6MbnJB.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '242',
       'group' => '4fun',
        'name' => 'Cicha Myszka',
        'icon' => 'http://i.imgur.com/74qaceN.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '243',
       'group' => '4fun',
        'name' => 'Bogacz',
        'icon' => 'http://i.imgur.com/Onbh9pu.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '244',
       'group' => '4fun',
        'name' => 'Kotek',
        'icon' => 'http://i.imgur.com/u4EGLUA.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '245',
       'group' => '4fun',
        'name' => 'Tiger Rawr',
        'icon' => 'http://i.imgur.com/ZcNyERk.gif',
    );
    
    $config['groups'][] = array(
        'grpid' => '248',
       'group' => '4fun',
        'name' => 'Tykająca Bomba',
        'icon' => 'http://i.imgur.com/3xvjZnV.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '250',
       'group' => '4fun',
        'name' => 'Fan Virtus.pro',
        'icon' => 'http://i.imgur.com/hqHGhc2.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '232',
       'group' => '4fun',
        'name' => '<font color="purple"><b>DLA NIEJ</b></font> <font color="#000">&raquo;</font> Księżniczka',
        'icon' => 'http://i.imgur.com/BJLdmSj.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '252',
       'group' => '4fun',
        'name' => '<font color="purple"><b>DLA NIEJ</b></font> <font color="#000">&raquo;</font> Wiedźma',
        'icon' => 'http://i.imgur.com/abmrIJY.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '210',
       'group' => '4fun',
        'name' => '<font color="blue"><b>DLA NIEGO</b></font> <font color="#000">&raquo;</font> Słodziak',
        'icon' => 'http://i.imgur.com/V3PgomN.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '218',
       'group' => '4fun',
        'name' => '<font color="blue"><b>DLA NIEGO</b></font> <font color="#000">&raquo;</font> Playboy',
        'icon' => 'http://i.imgur.com/6lRn1QK.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '228',
       'group' => '4fun',
        'name' => '<font color="blue"><b>DLA NIEGO</b></font> <font color="#000">&raquo;</font> Superman',
        'icon' => 'http://i.imgur.com/aNTtWtH.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '233',
       'group' => '4fun',
        'name' => '<font color="blue"><b>DLA NIEGO</b></font> <font color="#000">&raquo;</font> Paker',
        'icon' => 'http://i.imgur.com/wch9Zuk.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '235',
       'group' => '4fun',
        'name' => '<font color="blue"><b>DLA NIEGO</b></font> <font color="#000">&raquo;</font> Uwodziciel',
        'icon' => 'http://i.imgur.com/q0S722g.png',
    );
    ########### SPECJALNE ##############
    $config['groups'][] = array(
        'grpid' => '255',
       'group' => 'spec',
        'name' => 'Nocny Marek',
        'icon' => 'http://i.imgur.com/Wjb0l4L.png',
    );
    ########### WIEKOWE ##############
    $config['groups'][] = array(
        'grpid' => '199',
       'group' => 'wiek',
        'name' => '12+',
        'icon' => 'http://i.imgur.com/R4yljcQ.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '200',
       'group' => 'wiek',
        'name' => '16+',
        'icon' => 'http://i.imgur.com/J32yG9O.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '201',
       'group' => 'wiek',
        'name' => '18+',
        'icon' => 'http://i.imgur.com/GcwS6gY.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '202',
       'group' => 'wiek',
        'name' => '20+',
        'icon' => 'http://i.imgur.com/7WhRrfe.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '204',
       'group' => 'wiek',
        'name' => '25+',
        'icon' => 'http://i.imgur.com/pjorV1K.png',
    );
    
    $config['groups'][] = array(
        'grpid' => '205',
       'group' => 'wiek',
        'name' => '30+',
        'icon' => 'http://i.imgur.com/6FEB8rf.png',
    );
    
?>