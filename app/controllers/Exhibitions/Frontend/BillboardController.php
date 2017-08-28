<?php

namespace Filmoteca\Exhibitions\Controllers\Frontend;

use Filmoteca\Repository\BillboardsRepository;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

/**
 * Class BillboardController
 * @package Filmoteca\Exhibitions\Controllers\Frontend
 */
class BillboardController extends Controller
{
    /**
     * @var BillboardsRepository
     */
    protected $repository;

    /**
     * BillboardController constructor.
     * @param BillboardsRepository $repository
     */
    public function __construct(BillboardsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $earlierBillboards = [];
        $currentYear = date('Y');
        $previousYear = (string)((int)$currentYear - 1);

        $thisYearBillboards = $this->repository->thisYear();
        $previousYearBillboards = $this->repository->previousYear();
        

        if ($thisYearBillboards->isEmpty()) {
            $lastBillboard = $previousYearBillboards->first();
        } else {
            $lastBillboard = $thisYearBillboards->shift();
        }

        $earlierBillboards[$currentYear] = $thisYearBillboards;
        $earlierBillboards[$previousYear] = $previousYearBillboards;

        $viewData = compact(
            'lastBillboard',
            'earlierBillboards'
        );

        return View::make('exhibitions.frontend.billboards.index', $viewData);
    }

    public function subscribe()
    {
            session_start();
            if(isset($_POST['submit'])){
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                    // MailChimp API credentials
                    $apiKey = 'e662d3bd1a71e42f2d942e36afe8df74-us16';
                    $listID = '7b682a5a51';
                    
                    // MailChimp API URL
                    $memberID = md5(strtolower($email));
                    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
                    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
                    
                    // member information
                    $json = json_encode([
                        'email_address' => $email,
                        'status'        => 'subscribed',
                        'merge_fields'  => [
                            'FNAME'     => $fname,
                            'LNAME'     => $lname
                        ]
                    ]);
                    
                    // send a HTTP POST request with curl
                    $ch = curl_init($url);
                    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                    $result = curl_exec($ch);
                    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    curl_close($ch);
                    
                    // store the status message based on response code
                    if ($httpCode == 200) {
                        $_SESSION['msg'] = '<p style="color: #34A853">Tu subscripción a la cartelera está lista.</p>';
                    } else {
                        switch ($httpCode) {
                            case 214:
                                $msg = 'Ya estás subscrito.';
                                break;
                            default:
                                $msg = 'Ocurrio un problema, intentalo de nuevo.';
                                break;
                        }
                        $_SESSION['msg'] = '<p style="color: #EA4335">'.$msg.'</p>';
                    }
                }else{
                    $_SESSION['msg'] = '<p style="color: #EA4335">Por favor ingresa un correo electrónico valido.</p>';
                }
            }
            // redirect to homepage
            
         return \Redirect::to(\Input::get('fromchimp'));

    }
}
