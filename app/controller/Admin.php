<?php

use App\Lib\ControllerMain;

class Admin extends ControllerMain
{
	public function signin()
	{
		$this->loadView('admin/signin');
	}

  public function authenticate(){
    $post = $this->dados['post'];

        $user = $this->model->getLogin($post['email']);

        if (!$user) {
            Redirect::route("admin/signin", [
                "msgErros" => "Login ou senha inválidos !"
            ]);
        } else {

            if ($user->status == "I") {
                Redirect::route("admin/signin", [
                    "msgErros" => "Usuário inativo, favor contactar o administrador !"
                ]);
            } else {
                if (!password_verify(trim($post['password']), $user->password)) {
                    Redirect::route("admin/signin", [
                        "msgErros" => "Login ou senha inválidos !"
                    ]);
                } else {

                    Session::set('isLogged'     , true);
                    Session::set('loginId'      , $user->id);
                    Session::set('loginEmail'   , $user->email);
                    Session::set('loginType'   , $user->type);

                }
            }

        }
  }
}
