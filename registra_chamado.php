<?
    $arquivo = fopen('arquivo.txt', 'a');
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
 
    //implode pega um array e adiciona o caracter escolhido entre os itens
    //$texto = implode('-', $_POST);
    //$textoFiltro = str_replace('#', ' ', $texto);
    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location: abrir_chamado.php')
?>