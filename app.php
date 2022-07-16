app.php
<?php
    $ nombre = ( string ) " Miguel Ángel ";
    $ edad = ( int ) 24 ;
    $ altura = ( float ) 1.63 ;
    $ soyProfesor =( bool ) true ;
    $ pasaTiempos =( array )[
        ( cadena ) " Programador ",
        ( cadena ) " Cocinar ",
        ( cadena ) " Trotar ",
        ( string ) " Audio Lectura "
    ];
    $ dirección = ( array ) [
        " Principal " => ( cadena ) " Calle 11 ",
        " opcional " => ( cadena ) " Calle 14 ",
    ];
    $ cuerpo = ( objeto ) [];
    $ cuerpo -> colorPiel = ( string ) " Trigeño ";
    $ cuerpo -> colorOjos = ( string ) " Cafes Oscuros ";
    $ cuerpo -> tipoPelo = ( string ) " Liso ";

    var_dump( $ nombre );
    var_dump( $ edad );
    var_dump( $ altura );
    var_dump( $ soyProfesor );
    var_dump( $ pasaTiempos );
    var_dump( $ dirección );
    var_dump( $ cuerpo );
    var_dump ( $ _SERVIDOR [" SCRIPT_FILENAME "]);
?>