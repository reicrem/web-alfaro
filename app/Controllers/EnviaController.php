<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EnviaController extends BaseController
{
    private $email;

    // Constructor
    public function __construct() {
        $this->email = \Config\Services::email();
    }

    // Llamamos a la vista que muestra el formulario
    
    public function index() {
        $data = [
            'msg' => 'Rellena formulario de contacto'
        ];
        
        return view('index/envia', ['msg' => $data]);
    }

    // Función que envía el email
    function sendMail() {

        // Recogemos los datos del formulario
        $subject = $this->request->getPost('asunto');
        $message = $this->request->getPost('mensaje');
        $nombreusuario = $this->request->getPost('nombre');
        $emailusuario = $this->request->getPost('email');

        // Datos el email destino. Donde irá a parar el formulario
        $this->email->setTo("email_destino@midominio.com");

        // Email desde el que se envía (el que hemos configurarado en el apartado anterior)
        $this->email->setFrom("no-reply@midominio.com", "Contacto web");

        $this->email->setSubject($subject);
        $this->email->setMessage($message . $nombreusuario . $emailusuario);

        if ($this->email->send()) {
            $data = [
                'msg' => 'Email enviado correctamente'
            ];
        } else {
            $data = [
                'msg' => 'Email No enviado<br />'. $this->email->printDebugger(['headers'])
            ];
        }

        echo view('contact_view', $data);
    }
}