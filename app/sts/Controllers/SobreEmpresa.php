<?php

namespace Sts\Controllers;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Controller da página SobreEmpresa
 *
 * @author João Fernando <joaobonhin@yahoo.com.br>
 */
class SobreEmpresa
{

    /** @var array|string|null $dados Recebe os dados que devem ser enviados para VIEW */
    private array|string|null $data;

    /**
     * Instantiar a classe responsável em carregar a View
     * 
     * @return void
     */
    public function index()
    {

        $aboutCompany = new \Sts\Models\StsSobreEmpresa();
        $this->data['about-company'] = $aboutCompany->index();

        //var_dump($this->data['about-company']);
        
        $loadView= new \Core\ConfigView("sts/Views/sobreEmpresa/sobreEmpresa", $this->data);
        $loadView->loadView();
    }
}
