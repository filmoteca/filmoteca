<activities>
	@foreach($exhibitions as $exhibition)
	    <activity>
            <ID_ACT_UNAM>{{ $exhibition->id }}</ID_ACT_UNAM>
            <TITULO_PROGRAMA_ACT>{{ $exhibition->exhibition_film->film->title }}</TITULO_PROGRAMA_ACT>
            <SUBTITULO_ACT>-</SUBTITULO_ACT>
            <ID_ORGANIZA_UNAM>414</ID_ORGANIZA_UNAM>
            <ORGANIZA_UNAM>Filmoteca UNAM</ORGANIZA_UNAM>
            <ID_RECINTO_UNAM>15</ID_RECINTO_UNAM>
            <!-- El nombre del recinto dentro sistema de FILMOTECA de la UNAM  -->
            <RECINTO_UNAM>Sala José Revueltas, CCU</RECINTO_UNAM>
            <AUTOR_ACT>-</AUTOR_ACT>
            <DIRECTOR_ACT>-</DIRECTOR_ACT>
            <REPARTO_ACT>-</REPARTO_ACT>
            <URL_ACT>-</URL_ACT>
            <TIPO_PUBLICO>GENERAL</TIPO_PUBLICO>
            <!-- Informes relacionados con la actividad como teléfonos, contactos, redes, etc. -->
            <INFORMES_ACT/>
            <FECHA_HORA>2015-06-09, 2015-06-09, 0100000, 20:00:00, 22:50:00|2015-06-11, 2015-06-11, 0001000, 20:00:00, 22:50:00|2015-06-14, 2015-06-14, 0000001, 17:00:00, 19:50:00</FECHA_HORA>
            <!-- Este nodo se compone de los horarios separados por un pipe “|”, con el siguiente orden: Fecha inicial, Fecha final, días en los que se llevara a cabo (LMMJVSD), Horario Inicial, Horario Final, se ponen tantos horarios diferentes se tenga todos separados por el pipe “|”-->
            <!-- Si se tiene más de un horario en la misma fecha, se pondría el horario inicial y el horario final -->
            <HORARIOS_ADICIONALES>20:00-22:50, 23:00-24:00|20:00-22:50|17:00-19:50</HORARIOS_ADICIONALES>
            <!-- Este nodo se compone de los precios separados por un pipe “|”, en este caso como son dos horarios en el nodo anterior se considera que puede tener tres precios independientes aunque para este caso solo tenga uno, si es entrada libre se pone la palabra “Libre" -->
            <PRECIOS>||650,500,400,250,150</PRECIOS>
            <!-- Este nodo se compone de los descuentos separados por un pipe “|”, en este caso como son dos horarios se considera que puede tener tres descuentos independientes aunque para este caso solo tenga uno -->
            <DESCUENTOS>||</DESCUENTOS>
            <!-- Este nodo se compone de los comentarios separados por un pipe “|”, en este caso como son dos horarios se considera que puede tener dos comentarios independientes aunque para este caso solo tenga uno -->
            <COMENTARIOS>||Luneta 1~Luneta 2~Anfiteatro bajo~Anfiteatro alto~Galería</COMENTARIOS>
            <!-- Siempre debe de tener una categoría, que por la información que se está presentando será siempre Cine, sin embargo se consideran otros temas -->
            <TEMA>Cine</TEMA>
            <!-- Aquí se debe de tener la imagen muestra de la actividad(.gif, .jpg, .png), la cual debe de medir al menos 600px X 480px, puede ser más grande esto como medida recomendada. La ruta seria absoluta (Ej. http://www.filomteca/imagnes/muestra.jpg) -->
            <IMG_MUESTRA_ACT>-</IMG_MUESTRA_ACT>
            <!-- Es una imagen que se obtiene de la anterior y que nos sirve para otras secciones la cual debe medir 155px X 200px, -->
            <IMG_THUMB_ACT>-</IMG_THUMB_ACT>
            <!-- Si la actividad es cancelada por alguna razón el valor debería ser “S” -->
            <CANCELADO_ACT>N</CANCELADO_ACT>
            <!-- Si la actividad es cancelada se requiere una breve explicación de las razones. -->
            <CANCELADO_RAZONES_ACT>-</CANCELADO_RAZONES_ACT>
            <!--Reseña de la actividad -->
            <RESENA_COMPLETA_ACT>
                <p style="text-align: justify;"><strong>Dir.</strong> Charles Chaplin | EUA | 1947 | 124 min. | 35 mm | <strong>Gui&oacute;n</strong>: Charles Chaplin (Idea original: Orson Welles). <strong>M&uacute;sica</strong>: Charles Chaplin. <strong>Fotograf&iacute;a</strong>: Rollie Totheroh, Curt Courant, Wallace Chewing. <strong>Reparto</strong>: Charles Chaplin, Martha Raye, Marilyn Nash, Isobel Elsom, Robert Lewis, Mady Correll, Allison Rodell, Arthur Hohl. Productora: United Artists. (FILMAFFINITY).</p>
            </RESENA_COMPLETA_ACT>
	    </activity>
	@endforeach

</activities>