### Criar o arquivo composer.json
{
    "description": "Projeto Site",
    "authors":[
        {
            "name": "João Fernando Bonhin Jr",
            "email": "jbonhin@gmail.com"
        }
    ],
    "autoload": {
        "psr-4":{
            "Core\\": "core"
        }
    },
    "require":{}
}

### Criar a pasta core na raiz do projeto.

### Executar o "composer update" na raiz do projeto

### Trabalhar com URL Amigável
.htaccess
    # Documentação: https://httpd.apache.org/docs/2.4/rewrite/flags.html
    # Ativa o módulo Rewrite, que faz a reescrita de URL.
    RewriteEngine On

    # RewriteCond: Define uma condição para uma regra.
    # REQUEST_FILENAME é o caminho completo do diretório que atende ao request original, tomando por base o filesystem da máquina, 
    #                  e não relativo à hospedagem
    # RewriteCond %{REQUEST_FILENAME} !-d Informa que será criado uma condição a ser aplicado ao nome do diretório requisitado. 
    #                                   A exclamação é o sinal de negação e -d pede para verificar a existência de um diretório físico. 
    #                                   Ex: CONDIÇÃO = SE ARQUIVO_REQUISITADO NÃO EXISTE COMO DIRETÓRIO FISICAMENTE  
    RewriteCond %{REQUEST_FILENAME} !-d

    # RewriteCond %{REQUEST_FILENAME} !-f Informa que será criado uma condição a ser aplicado ao nome do arquivo requisitado. 
    #                                     A exclamação é o sinal de negação e -f pede para verificar a existência de um arquivo físico. 
    #                                     Ex: CONDIÇÃO = SE ARQUIVO_REQUISITADO NÃO EXISTE FISICAMENTE
    RewriteCond %{REQUEST_FILENAME} !-f

    # RewriteCond %{REQUEST_FILENAME} !-l Informa que será criado uma condição a ser aplicado ao link simbólico requisitado. 
    #                                     A exclamação é o sinal de negação e -l pede para verificar a existência de um link simbólico.
    RewriteCond %{REQUEST_FILENAME} !-l

    # RewriteRule: Faz a reescrita do URL
    # Circunflexo indica inicio e Cifrão indica o fim
    # (.+) pege todo o conteúdo da url
    # index.php?params=$1 Indica para substituir a requisição, redirecionando o fluxo para index.php e colocando-a inteiramente como um 
    #                     parametro.
    # Exemplo: index.php?url=blog/index
    # QSA significa que se houver uma string de consulta passada com a URL original, ela será anexada à reescrita
    # Exemplo: blog?situacao=1 será reescrita como index.php?url=blog&p=situacao
    # O sinalizador [L] faz mod_rewrite com que o processamento do conjunto de regras seja interrompido
    RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]


### Converter uma string em Array
$this->urlArray = explode("/", $this->url);

### Acrescer no arquivo composer.json
{
    ...
    ...
    ...
    
        "psr-4":{
            ...
            "App\\": "app",
            "Sts\\": "app/sts"
        }
}
### Executar o comando composer no prompt dentro da raiz do projeto
> composer dumpautoload

