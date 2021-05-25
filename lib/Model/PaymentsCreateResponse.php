<?php
/**
 * PaymentsCreateResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Khipu
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Khipu\Model;

use \ArrayAccess;
/**
 * PaymentsCreateResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Khipu
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentsCreateResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'payment_id' => 'string',
        'payment_url' => 'string',
        'simplified_transfer_url' => 'string',
        'transfer_url' => 'string',
        'webpay_url' => 'string',
        'hites_url' => 'string',
        'payme_url' => 'string',
        'app_url' => 'string',
        'ready_for_terminal' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'payment_id' => 'payment_id',
        'payment_url' => 'payment_url',
        'simplified_transfer_url' => 'simplified_transfer_url',
        'transfer_url' => 'transfer_url',
        'webpay_url' => 'webpay_url',
        'hites_url' => 'hites_url',
        'payme_url' => 'payme_url',
        'app_url' => 'app_url',
        'ready_for_terminal' => 'ready_for_terminal'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'payment_id' => 'setPaymentId',
        'payment_url' => 'setPaymentUrl',
        'simplified_transfer_url' => 'setSimplifiedTransferUrl',
        'transfer_url' => 'setTransferUrl',
        'webpay_url' => 'setWebpayUrl',
        'hites_url' => 'setHitesUrl',
        'payme_url' => 'setPaymeUrl',
        'app_url' => 'setAppUrl',
        'ready_for_terminal' => 'setReadyForTerminal'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'payment_id' => 'getPaymentId',
        'payment_url' => 'getPaymentUrl',
        'simplified_transfer_url' => 'getSimplifiedTransferUrl',
        'transfer_url' => 'getTransferUrl',
        'webpay_url' => 'getWebpayUrl',
        'hites_url' => 'getHitesUrl',
        'payme_url' => 'getPaymeUrl',
        'app_url' => 'getAppUrl',
        'ready_for_terminal' => 'getReadyForTerminal'
    );
  
    
    /**
      * $payment_id Identificador único del pago, es una cadena alfanumérica de 12 caracteres. Cómo este identificador es único, se puede usar, por ejemplo, para evitar procesar una notificación repetida. (Khipu espera un código 200 al notificar un pago, si esto no ocurre se reintenta hasta por dos días).
      * @var string
      */
    protected $payment_id;
    
    /**
      * $payment_url URL principal del pago, si el usuario no ha elegido previamente un método de pago se le muestran las opciones
      * @var string
      */
    protected $payment_url;
    
    /**
      * $simplified_transfer_url URL de pago simplificado
      * @var string
      */
    protected $simplified_transfer_url;
    
    /**
      * $transfer_url URL de pago normal
      * @var string
      */
    protected $transfer_url;
    
    /**
      * $webpay_url URL de pago usando Webpay
      * @var string
      */
    protected $webpay_url;
    
    /**
      * $hites_url URL de pago usando Hites
      * @var string
      */
    protected $hites_url;
    
    /**
      * $payme_url URL de pago usando Hites
      * @var string
      */
    protected $payme_url;
    
    /**
      * $app_url URL para invocar el pago desde un dispositivo móvil usando la APP de khipu
      * @var string
      */
    protected $app_url;
    
    /**
      * $ready_for_terminal Es 'true' si el pago ya cuenta con todos los datos necesarios para abrir directamente la aplicación de pagos khipu
      * @var bool
      */
    protected $ready_for_terminal;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->payment_id = $data["payment_id"];
            $this->payment_url = $data["payment_url"];
            $this->simplified_transfer_url = $data["simplified_transfer_url"];
            $this->transfer_url = $data["transfer_url"];
            $this->webpay_url = $data["webpay_url"];
            $this->hites_url = $data["hites_url"];
            $this->payme_url = $data["payme_url"];
            $this->app_url = $data["app_url"];
            $this->ready_for_terminal = $data["ready_for_terminal"];
        }
    }
    
    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }
  
    /**
     * Sets payment_id
     * @param string $payment_id Identificador único del pago, es una cadena alfanumérica de 12 caracteres. Cómo este identificador es único, se puede usar, por ejemplo, para evitar procesar una notificación repetida. (Khipu espera un código 200 al notificar un pago, si esto no ocurre se reintenta hasta por dos días).
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        
        $this->payment_id = $payment_id;
        return $this;
    }
    
    /**
     * Gets payment_url
     * @return string
     */
    public function getPaymentUrl()
    {
        return $this->payment_url;
    }
  
    /**
     * Sets payment_url
     * @param string $payment_url URL principal del pago, si el usuario no ha elegido previamente un método de pago se le muestran las opciones
     * @return $this
     */
    public function setPaymentUrl($payment_url)
    {
        
        $this->payment_url = $payment_url;
        return $this;
    }
    
    /**
     * Gets simplified_transfer_url
     * @return string
     */
    public function getSimplifiedTransferUrl()
    {
        return $this->simplified_transfer_url;
    }
  
    /**
     * Sets simplified_transfer_url
     * @param string $simplified_transfer_url URL de pago simplificado
     * @return $this
     */
    public function setSimplifiedTransferUrl($simplified_transfer_url)
    {
        
        $this->simplified_transfer_url = $simplified_transfer_url;
        return $this;
    }
    
    /**
     * Gets transfer_url
     * @return string
     */
    public function getTransferUrl()
    {
        return $this->transfer_url;
    }
  
    /**
     * Sets transfer_url
     * @param string $transfer_url URL de pago normal
     * @return $this
     */
    public function setTransferUrl($transfer_url)
    {
        
        $this->transfer_url = $transfer_url;
        return $this;
    }
    
    /**
     * Gets webpay_url
     * @return string
     */
    public function getWebpayUrl()
    {
        return $this->webpay_url;
    }
  
    /**
     * Sets webpay_url
     * @param string $webpay_url URL de pago usando Webpay
     * @return $this
     */
    public function setWebpayUrl($webpay_url)
    {
        
        $this->webpay_url = $webpay_url;
        return $this;
    }
    
    /**
     * Gets hites_url
     * @return string
     */
    public function getHitesUrl()
    {
        return $this->hites_url;
    }
  
    /**
     * Sets hites_url
     * @param string $hites_url URL de pago usando Hites
     * @return $this
     */
    public function setHitesUrl($hites_url)
    {
        
        $this->hites_url = $hites_url;
        return $this;
    }
    
    /**
     * Gets payme_url
     * @return string
     */
    public function getPaymeUrl()
    {
        return $this->payme_url;
    }
  
    /**
     * Sets payme_url
     * @param string $payme_url URL de pago usando Hites
     * @return $this
     */
    public function setPaymeUrl($payme_url)
    {
        
        $this->payme_url = $payme_url;
        return $this;
    }
    
    /**
     * Gets app_url
     * @return string
     */
    public function getAppUrl()
    {
        return $this->app_url;
    }
  
    /**
     * Sets app_url
     * @param string $app_url URL para invocar el pago desde un dispositivo móvil usando la APP de khipu
     * @return $this
     */
    public function setAppUrl($app_url)
    {
        
        $this->app_url = $app_url;
        return $this;
    }
    
    /**
     * Gets ready_for_terminal
     * @return bool
     */
    public function getReadyForTerminal()
    {
        return $this->ready_for_terminal;
    }
  
    /**
     * Sets ready_for_terminal
     * @param bool $ready_for_terminal Es 'true' si el pago ya cuenta con todos los datos necesarios para abrir directamente la aplicación de pagos khipu
     * @return $this
     */
    public function setReadyForTerminal($ready_for_terminal)
    {
        
        $this->ready_for_terminal = $ready_for_terminal;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
