<?php
/*
 * Esta clase se encargara de resolver que medio de pago inyectar según seleccione el usuario
 */
namespace App\Resolvers;
use App\PaymentPlatform;
use Exception;

class PaymentPlatformResolver
{
    //lista de metodos de pago en el sistema
    protected $paymentPlatforms;

    //Se llena la variable con los medios de pago en el sistema
    public function  __construct()
    {
        $this->paymentPlatforms = PaymentPlatform::all();
    }

    public function resolverService($paymentPlatformId)
    {

        //obtenemos el name del método de pago
        //En el constructor se consultaron todas las plataformas de pago
        $name = strtolower( $this->paymentPlatforms->firstWhere('id', $paymentPlatformId)->name);

        //buscamos el services en config/services.php
        $service = config("services.{$name}.class");

        if($service){
            return resolve($service);
        }

        throw new Exception('The selected payment platform is not in the configuration');


    }

}
