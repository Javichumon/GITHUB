  /* Este código se ejecuta una vez creados los usuarios con test.php*/
 USE chess_game;

 INSERT INTO T_Matches (title,white,black,endDate,winner,state) values 
 ("Gambito De Dama",1,2,now(),"Blancas","Terminado");
 
 INSERT INTO T_Board_Status (IDGame,board) values
 (1,"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH"),
 (1,"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,,,,,,,,,,,,,,,,,,,,PAWH,,,,,,,,,,,,,PAWH,PAWH,PAWH,,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH"),
 (1,"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,,PABL,PABL,PABL,PABL,,,,,,,,,,,,PABL,,,,,,,,PAWH,,,,,,,,,,,,,PAWH,PAWH,PAWH,,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH"),
 (1,"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,,PABL,PABL,PABL,PABL,,,,,,,,,,,,PABL,,,,,,,PAWH,PAWH,,,,,,,,,,,,,PAWH,PAWH,,,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH"),
 (1,"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,,PABL,PABL,PABL,PABL,,,,,,,,,,,,,,,,,,,PABL,PAWH,,,,,,,,,,,,,PAWH,PAWH,,,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");