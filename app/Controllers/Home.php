<?php

namespace App\Controllers;
use App\Models\ArticulosModel;
use App\Models\PreciosModel;

class Home extends BaseController
{
    private $email;

    // Constructor
    public function __construct() {
    $this->email = \Config\Services::email();
    }

    public function index(): string
    {

        $ArticulosModel = new ArticulosModel();
        
        $result = $ArticulosModel->join("precios", "precios.codart=articulos.id")
            ->select("articulos.*, precios.pventa as precio")
            ->where("articulos.oferta", 1)
            ->findAll();

        $desta = $ArticulosModel->join("precios", "precios.codart=articulos.id")
            ->select("articulos.*, precios.pventa as precio")
            ->where("articulos.destaca", 1)
            ->findAll();
      
        return view('index/index', ['ofertas' => $result, 'destacados' => $desta]);
    }

    public function baterias(): string
    {
        $ArticulosModel = new ArticulosModel();
        $result = $ArticulosModel->join("precios", "precios.codart=articulos.id")
            ->select("articulos.*, precios.pventa as precio")
            ->where("articulos.oferta", 1)
            ->where("articulos.catesub", 1701)
            ->findAll();
        return view('index/categorias', ['result' => $result,'titulo' => 'Baterías']);
    }

    public function bate(): string
    {
    
    $ArticulosModel = new ArticulosModel();
    $result = $ArticulosModel->join("precios", "precios.codart=articulos.id")
    ->select("articulos.*, precios.pventa as precio")
    ->where("articulos.oferta", 1)
    ->where("articulos.catesub", 1701)
    ->findAll();
    return view('index/categorias', ['titulo' => 'Baterías']);
    }

    public function compras(): string
    {
    return view('index/envia', ['titulo' => 'Compras']);
    }

    public function sendMail(): string
    {
        // Recogemos los datos del formulario
        $subject = "Carro de Compras";
        $nombreusuario = $this->request->getPost('nombre');
        $emailusuario = $this->request->getPost('emailr');
        $rut=$this->request->getPost('rut');
        $telf=$this->request->getPost('telef');
        $deta=$this->request->getPost("deta");
        
        /*
        $str = str_replace("<tr>", "<br>", $deta);
        $str2 = str_replace("<td>", "<span> ", $str);
        $str3 = str_replace("</td>", "</span> ", $str2);
        $str4 = str_replace("</tr>", " ", $str3);
        */
      
        $str5 = "<table style='border: 0px solid #000000; width: 60%;'>
            <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>".$deta."</td>
                </tr>
            </tbody>
        </table>";

        $message = (
        
        "<div style='background-color:#e0f1e3; color: #000000; padding: 10px; border-radius: 15px; '>
            <h2 style='text-align: center;'>¡Gracias por su preferencia, hemos recibido tu pedido!</h2>
            <h2 style='text-align: center; color: #01b72e'>Te avisaremos mediante correo cuando esté listo para su retiro</h2>
            <h2 style='text-align: center; color: #01b72e'>El número de pedido es: </h2>"
        ."<br>".
        "<h3>A continuación adjuntamos el detalle de la compra</h3>".
        "Email: <b>".$emailusuario." </b><br>".
        "Nombre: <b>".$nombreusuario." </b><br>".
        "Rut: <b>".$rut." </b><br>".
        "Telefono: <b>".$telf." </b><br>".
        "Detalle: <br>".$str5."<br>
        </div>"
        );

        // Datos el email destino. Donde irá a parar el formulario
        $this->email->setTo($emailusuario);
        $this->email->setBCC("ventas@alfarorepuestos.cl");

        // Email desde el que se envía (el que hemos configurarado en el apartado anterior)
        $this->email->setFrom("ventas@alfarorepuestos.cl", "Alfaro Repuestos");

        $this->email->setSubject($subject);
        $this->email->setMessage($message);

        if ($this->email->send()) {
        $data = [
        'msg' => 'Gracias por su preferencia, en instantes recibirá un Email con la confirmación de su compra.'
        ];
        } else {
        $data = [
        'msg' => 'Ha ocurrido un problema, favor vuelva a intentar realizar su compra, o contacte a nuestra
        tienda.<br />'. $this->email->printDebugger(['headers'])
        ];
        }

        return view('index/envia', [ 'msg' => $data]);

    }
}