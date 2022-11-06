<?php

namespace App\Http\Controllers;

use App\Contactos;
use App\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\PHPMailer;
use League\OAuth2\Client\Provider\Google;
use Mailgun\Mailgun;
use PHPMailer\PHPMailer\SMTP;

class FrontController extends Controller
{
    /**
     * Retorna la pagina de inicio
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $servicios = Servicios::all();
        return view('index')->with(compact('servicios'));
    }

    /**
     * Retorna la pagina de acerca
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Retorna el servicio dependiendo del slug (id) especificado
     *
     * @return \Illuminate\View\View
     */
    public function service($slug)
    {
        $servicios = Servicios::all();
        $servicioActual = $servicios->where('slug', $slug)->first();

        if (!$servicioActual) abort(404);

        return view('service')->with(compact('servicioActual', 'servicios'));
    }

    /**
     * Muestra la vista de contacto
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        $contactos = Contactos::all();

        return view('contact')->with(compact('contactos'));
    }

    public function postContact(Request $request)
    {
        $errors = validator($request->all(), [
            'name' => 'required|max:30',
            'email' => 'required|email|max:30',
            // 'subject' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Su nombre es requerido',
            'name.max' => 'El nombre es muy largo',
            'email.required' => 'Su email es requerido',
            'email.max' => 'El email es muy largo',
            'email.email' => 'Su email no es valido',
            // 'subject.required' => 'El asunto es requerido',
            'message.required' => 'El mensaje es requerido',
        ])->getMessageBag()->all();

        if (count($errors) > 0) {
            $errorList = "\n";
            foreach ($errors as $er) {
                $errorList .= "- {$er}\n";
            }

            return response($errorList, 422);
        }

        $nombre = $request->name;
        $email = $request->email;
        $asunto = $request->subject;
        $mensaje = $request->message;

        return $this->sendEmail($email, $nombre, $asunto, $mensaje);
    }

    /**
     * Se encarga de enviar el correo.
     *
     * @param string $email El el correo del usuario que lo enviá
     * @param string $name El nombre de la persona quien lo esta enviando
     * @param string $subject El asunto del correo
     * @param string $message El cuerpo del mensaje
     * @return string
     */
    private function sendEmail($email, $name, $subject, $message)
    {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        try {
            $mail->SMTPDebug = 3;
            $mail->isSMTP();
            $mail->Host = config('app.mail_host');
            $mail->Port = config('app.mail_port');
            $mail->SMTPAuth = true;
            $mail->Username = config('app.mail_username');
            $mail->Password = config('app.mail_password');
            $mail->SMTPSecure = config('app.mail_encryption');
            $mail->setFrom($email, $name);
            // $mail->SMTPAutoTLS = false;
            // $mail->SMTPOptions = array(
            //     'ssl' => array(
            //         'verify_peer' => false,
            //         'verify_peer_name' => false,
            //         'allow_self_signed' => true
            //     )
            // );

            $mail->isHTML(true);

            $mail->addAddress(config('app.mail_sentto'), '');

            $mail->Subject = $subject;
            $mail->msgHTML($message);

            $mail->send();

            return response('Mensaje enviado!');
        } catch (\Exception $e) {
            return response("Mailer Error: " . $mail->ErrorInfo, 500);
        }


        $mg = Mailgun::create('98819b421beb0253ab6592f3dc2f4a85-1df6ec32-b0ad29ae');
        $domain = "sandboxf8cfb62e4c1148d396b01c03383c58f6.mailgun.org";
        # Make the call to the client.
        $result = $mg->messages()->send($domain, array(
            'from'    => $email,
            'to'    => 'ignacio.alarcon@outlook.jp',
            'subject' => 'CORHDSA - ' . $name . ' quiere ponerse en contacto',
            'text'    => ($subject ? $subject . ' - ' : '') . $message
        ));

        if ($result) {
            return response('Mensaje enviado!');
        }

        return response('Error al enviar el mensaje', 500);
    }
}
