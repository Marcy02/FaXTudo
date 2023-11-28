<?php
	// directorio das imagens - só alterar pelo directorio da sua imagem na variavel $dir
	$dir = "logos/";
	$num_ficheiros = 0;
	$dh = opendir($dir); //abrir o directorio
	while (false !== ($filename = readdir($dh))) {
		$files[] = $filename; //criar array com os nomes do ficheiro
		$num_ficheiros++; //contar o numero de ficheiros
	}
	//ordenar os ficheiros de forma crescente
	sort($files);

	//que indeice do Array começar
	$inicio = "2"; //começar no indice 2 do array porque os indices 1 e 2 contem . e ..
	$num_ficheiros -- ; //Obter o numero exacto de indices

	//aleatoriedade dos indeces da imagem
	$random = mt_rand($inicio,$num_ficheiros);

	//nome do ficheiro
	$image_name = $files[$random];

	//imprimir as imagens
	print("<img src=\"$dir/$image_name\" alt=\"$image_name\" style=\"width:235px\" />");

?>