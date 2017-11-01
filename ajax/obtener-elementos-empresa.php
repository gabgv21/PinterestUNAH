<?php

$archivo = fopen("../data/elementos-empresa.csv","r");
while ($linea = fgets($archivo)) 
{
	echo "<option>".$linea."</option>";
}

/*echo 								  '<option>Tipo de empresa</option>
                                       <option>Profesional (p. ej., fotógrafo, creador de blogs, diseñador)</option>
                                       <option>Personaje público (p. ej., político, atleta, músico, actor)</option>
                                       <option>Medios de comunicación (p. ej., revista, periódico, telediario)</option>
                                       <option>Marca (p. ej., Coca-cola, C.B. Estudiantes, Mayonesa Kraft)</option>
                                       <option>Minorista (p. ej., Anthropologie, Pottery Barn)</option>
                                       <option>Tienda online (p. ej., Etsy, Amazon)</option>
                                       <option>Negocio local (p. ej., restaurante, tienda de moda)</option>
                                       <option>Institución/Organización benéfica (p. ej., El Prado, Reina Sofía)</option>
                                       <option>Otros </option>';
?>*/