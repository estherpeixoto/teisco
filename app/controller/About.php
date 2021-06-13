<?php
use App\Lib\ControllerMain;
use App\Lib\Redirect;
use App\Lib\Session;
use App\Lib\Utilitarios;

class About extends ControllerMain
{
	public function __construct($dados)
    {
        parent::__construct($dados);

        // verifica se o usuário está logado, caso não esteja redireciona para a view de login

        $this->estaLogado();
    }

    /*
    *   Listagem de About
    */

    public function index()
    {
        $this->loadView('admin/about/list', $this->model->lista());
    }
		
    /*
    *
    */

    public function form()
    {

        $dbDados = [];

        if ($this->dados['acao'] != 'new') {
            // buscar a noticia pelo $id no banco de dados
            $dbDados = $this->model->getAboutId($this->dados['id']);
        }
        $this->loadView('admin/about/form', $dbDados);
    }

    /*
    *   insere uma nova noticia
    */

    public function new()
    {

        //pasta para onde o arquivo será movido no webSite
        $pasta = 'assets/img/';
        //$pasta = 'assets/img/blog/main-blog/';

        //lista de tipos de arquivos permitidos
        $tiposPermitidos =  array('image/gif', 'image/jpeg', 'image/jpg', 'image/png');

        //tamanho máximo (em bytes)
        $tamanhoPermitido = 1024 * 1024 * 100; //5mb

        //nome original do arquivo no computador do usuario
        $Imagem = Utilitarios::gerarNomeAleatorio($_FILES['imagemDestaque']['name']);

        //o tipo do arquivo
        $ImagemType = $_FILES['imagemDestaque']['type'];

        //o tamanho do arquivo
        $ImagemSize = $_FILES['imagemDestaque']['size'];

        // o nome temporario do arquivo
        $ImagemTemp = $_FILES['imagemDestaque']['tmp_name'];

        //codigos de possiveis erros na imagem
        $ImagemError = $_FILES['imagemDestaque']['error'];

        $upload = false;

        if ($ImagemError === 0) {
            //veririca o tipo de arquivo enviado
            if (array_search($ImagemType, $tiposPermitidos) === false) {
                $_SESSION["msgError"] = "O tipo de arquivo enviado é inválido! (" . $Imagem . ")";
            } else if ($ImagemSize > $tamanhoPermitido) { //veririca o tamanho doa rquivo enviado
                $_SESSION["msgError"] = "O tamanho do arquivo enviado é inválido! (" . $Imagem . ")";
            } else { // não houve error, move o arquivo
                $upload = move_uploaded_file($ImagemTemp, $pasta . $Imagem);

                if (!$upload) {
                    $_SESSION["msgError"] = "Houve uma falha ao realizar o upload da imagem (" . $Imagem . ")";
                }
            }
        }

        if ($upload) {

            if ($this->model->insert([
                $this->dados['post']['status'],
                $this->dados['post']['title'],
                $this->dados['post']['subtitle'],
                $this->dados['post']['text'],
                $Imagem
            ])) {
                Redirect::route("About", [
                    "msgSucesso"    => "Notícia inserida com sucesso !"
                ]);
            } else {
                Redirect::route("About", [
                    "msgErros"    => "Falha na inserção dos dados da Notícia !"
                ]);
            }
        }
    }

    /*
    *   Altera uma noticia   
    */

    public function update()
    {

        $Imagem =  $this->dados['post']['excluirImagem'];
        $upload = true;

        if ( $this->dados['post']['excluirImagem'] != $_FILES['imagemDestaque']['name'] and $_FILES['imagemDestaque']['name'] != "") {

            //pasta para onde o arquivo será movido no webSite
            //$pasta = 'assets/img/blog/main-blog/';
            $pasta = 'assets/img/';

            //lista de tipos de arquivos permitidos
            $tiposPermitidos =  array('image/gif', 'image/jpeg', 'image/jpg', 'image/png');

            //tamanho máximo (em bytes)
            $tamanhoPermitido = 1024 * 1024 * 100; //5mb

            //nome original do arquivo no computador do usuario
            $Imagem = $_FILES['imagemDestaque']['name'];

            //o tipo do arquivo
            $ImagemType = $_FILES['imagemDestaque']['type'];

            //o tamanho do arquivo
            $ImagemSize = $_FILES['imagemDestaque']['size'];

            // o nome temporario do arquivo
            $ImagemTemp = $_FILES['imagemDestaque']['tmp_name'];

            //codigos de possiveis erros na imagem
            $ImagemError = $_FILES['imagemDestaque']['error'];

            if ($ImagemError === 0) {
                $upload = false;
                //veririca o tipo de arquivo enviado
                if (array_search($ImagemType, $tiposPermitidos) === false) {
                    Redirect::route("About", [
                        "msgErros"    => "O tipo de arquivo enviado é inválido!"
                    ]);
                } else if ($ImagemSize > $tamanhoPermitido) { //veririca o tamanho doa rquivo enviado
                    Redirect::route("About", [
                        "msgErros"    => "O tamanho do arquivo enviado é inválido!"
                    ]);
                } else { // não houve error, move o arquivo

                    $Imagem = Utilitarios::gerarNomeAleatorio($Imagem);
                    $upload = move_uploaded_file($ImagemTemp, $pasta . $Imagem);

                    if (!$upload) {
                        Redirect::route("About", [
                            "msgErros"    => "Houve uma falha ao realizar o uploud da imagem!"
                        ]);
                    } else {
                        unlink('assets/img/' . $this->dados['post']['excluirImagem']);
                    }
                }
            }
        }

        if ($upload) {

            if ($this->model->update([
								$this->dados['post']['status'],
								$this->dados['post']['title'],
								$this->dados['post']['subtitle'],
								$this->dados['post']['text'],
                $Imagem,
                $this->dados['post']['id']
            ])) {
                Redirect::route("About", [
                    "msgSucesso"    => "Notícia alterada com sucesso !"
                ]);
            } else {
                Redirect::route("About", [
                    "msgErros"    => "Falha na alteração dos dados da Notícia !"
                ]);
            }
        }
    }

    /*
    *   Exclui uma noticia no banco de dados
    */

    public function delete()
    {
        if ($this->model->delete($this->dados['post']['id'])) {
            unlink("assets/img/" . $this->dados['post']['excluirImagem']);
            Redirect::route("About", [
                "msgSucesso"    => "Notícia excluída com sucesso !"
            ]);
        } else {
            Redirect::route("About", [
                "msgErros"    => "Falha na exclusão da Notícia !"
            ]);
        }
    }
}
