<?php

interface DiretorioInterface
{
    public function recuperarListaArquivos();
    public function excluirArquivo($nome_arquivo);
    public function cadastrarArquivo($arquivo);
}

class Diretorio implements DiretorioInterface
{
    public function recuperarListaArquivos()
    {
    	$arquivos = scandir('../uploads');
        unset($arquivos[0]);
        unset($arquivos[1]);


	    return $arquivos;
    }

    public function excluirArquivo($nome_arquivo)
    {
        if(file_exists('../uploads/' . $nome_arquivo)) {
            unlink ('../uploads/' . $nome_arquivo);
        }
		return true;
    }

    public function cadastrarArquivo($arquivo)
    {
        // dica de estudo para estudo de caso
        // criar código
        // tirar do script e trazer para cá
    }
}

?>