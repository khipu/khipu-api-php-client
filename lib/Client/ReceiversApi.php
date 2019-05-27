<?php
/**
 * ReceiversApi
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

namespace Khipu\Client;

use \Khipu\Configuration;
use \Khipu\ApiClient;
use \Khipu\ApiException;
use \Khipu\ObjectSerializer;

/**
 * ReceiversApi Class Doc Comment
 *
 * @category Class
 * @package  Khipu
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReceiversApi
{

    /**
     * API Client
     * @var \Khipu\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Khipu\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://khipu.com/api/2.0');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Khipu\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Khipu\ApiClient $apiClient set the API client
     * @return ReceiversApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * receiversPost
     *
     * Crear una nueva cuenta de cobro
     *
     * @param string $admin_first_name Nombre de pila del administrador de la cuenta de cobro a crear. (requerido)
     * @param string $admin_last_name Apellido del administrador de la cuenta de cobro a crear. (requerido)
     * @param string $admin_email Correo electrónico del administrador de la cuenta de cobro a crear. (requerido)
     * @param string $country_code Código alfanumérico de dos caractéres ISO 3166-1 del país de la cuenta de cobro a crear. (requerido)
     * @param string $business_identifier Identificador tributario del cobrador asociado a la cuenta de cobro a crear. (requerido)
     * @param string $business_category Categoría tributaria o rubro tributario del cobrador asociado a la cuenta de cobro a crear. (requerido)
     * @param string $business_name Nombre tributario del cobrador asociado a la cuenta de cobro a crear. (requerido)
     * @param string $business_phone Teléfono del cobrador asociado a la cuenta de cobro a crear. (requerido)
     * @param string $business_address_line_1 Dirección del cobrador de la cuenta de cobro a crear. (requerido)
     * @param string $business_address_line_2 Segunda línea de la dirección del cobrador de la cuenta de cobro a crear. (requerido)
     * @param string $business_address_line_3 Tercera línea de la dirección del cobrador de la cuenta de cobro a crear. (requerido)
     * @param string $contact_full_name Nombre del contacto del cobrador. (requerido)
     * @param string $contact_job_title Cargo del contacto del cobrador. (requerido)
     * @param string $contact_email Correo electrónico del contacto del cobrador. (requerido)
     * @param string $contact_phone Teléfono del contacto del cobrador. (requerido)
     * @param array $options Arreglo de par��metros opcionales (opcional)
     * - string 'bank_account_bank_id' Identificador del banco. (opcional)
     * - string 'bank_account_identifier' Identificador personal del dueño de la cuenta de banco. (opcional)
     * - string 'bank_account_name' Nombre de la cuenta de banco. (opcional)
     * - string 'bank_account_number' Número de la cuenta en el banco. (opcional)
     * - string 'notify_url' URL por omisión para el webservice donde se notificará el pago. (opcional)
     * - string 'rendition_url' URL para el webservice donde se notificará la rendición. (opcional)
     * @return \Khipu\Model\ReceiversCreateResponse
     * @throws \Khipu\ApiException on non-2xx response
     */
    public function receiversPost($admin_first_name, $admin_last_name, $admin_email, $country_code, $business_identifier, $business_category, $business_name, $business_phone, $business_address_line_1, $business_address_line_2, $business_address_line_3, $contact_full_name, $contact_job_title, $contact_email, $contact_phone, $options = null)
    {
        
        // verify the required parameter 'admin_first_name' is set
        if ($admin_first_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $admin_first_name when calling receiversPost');
        }
        // verify the required parameter 'admin_last_name' is set
        if ($admin_last_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $admin_last_name when calling receiversPost');
        }
        // verify the required parameter 'admin_email' is set
        if ($admin_email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $admin_email when calling receiversPost');
        }
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling receiversPost');
        }
        // verify the required parameter 'business_identifier' is set
        if ($business_identifier === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_identifier when calling receiversPost');
        }
        // verify the required parameter 'business_category' is set
        if ($business_category === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_category when calling receiversPost');
        }
        // verify the required parameter 'business_name' is set
        if ($business_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_name when calling receiversPost');
        }
        // verify the required parameter 'business_phone' is set
        if ($business_phone === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_phone when calling receiversPost');
        }
        // verify the required parameter 'business_address_line_1' is set
        if ($business_address_line_1 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_address_line_1 when calling receiversPost');
        }
        // verify the required parameter 'business_address_line_2' is set
        if ($business_address_line_2 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_address_line_2 when calling receiversPost');
        }
        // verify the required parameter 'business_address_line_3' is set
        if ($business_address_line_3 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_address_line_3 when calling receiversPost');
        }
        // verify the required parameter 'contact_full_name' is set
        if ($contact_full_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_full_name when calling receiversPost');
        }
        // verify the required parameter 'contact_job_title' is set
        if ($contact_job_title === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_job_title when calling receiversPost');
        }
        // verify the required parameter 'contact_email' is set
        if ($contact_email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_email when calling receiversPost');
        }
        // verify the required parameter 'contact_phone' is set
        if ($contact_phone === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_phone when calling receiversPost');
        }
  
        // parse inputs
        $resourcePath = "/receivers";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/x-www-form-urlencoded'));
  
        

        if( $options != null ) {
          
        }


        

        if( $options != null ) {
            
        }


        

        if( $options != null ) {
            
        }

        // form params
        $formParams['admin_first_name'] = $this->apiClient->getSerializer()->toFormValue($admin_first_name);
        // form params
        $formParams['admin_last_name'] = $this->apiClient->getSerializer()->toFormValue($admin_last_name);
        // form params
        $formParams['admin_email'] = $this->apiClient->getSerializer()->toFormValue($admin_email);
        // form params
        $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        // form params
        $formParams['business_identifier'] = $this->apiClient->getSerializer()->toFormValue($business_identifier);
        // form params
        $formParams['business_category'] = $this->apiClient->getSerializer()->toFormValue($business_category);
        // form params
        $formParams['business_name'] = $this->apiClient->getSerializer()->toFormValue($business_name);
        // form params
        $formParams['business_phone'] = $this->apiClient->getSerializer()->toFormValue($business_phone);
        // form params
        $formParams['business_address_line_1'] = $this->apiClient->getSerializer()->toFormValue($business_address_line_1);
        // form params
        $formParams['business_address_line_2'] = $this->apiClient->getSerializer()->toFormValue($business_address_line_2);
        // form params
        $formParams['business_address_line_3'] = $this->apiClient->getSerializer()->toFormValue($business_address_line_3);
        // form params
        $formParams['contact_full_name'] = $this->apiClient->getSerializer()->toFormValue($contact_full_name);
        // form params
        $formParams['contact_job_title'] = $this->apiClient->getSerializer()->toFormValue($contact_job_title);
        // form params
        $formParams['contact_email'] = $this->apiClient->getSerializer()->toFormValue($contact_email);
        // form params
        $formParams['contact_phone'] = $this->apiClient->getSerializer()->toFormValue($contact_phone);
        

        if( $options != null ) {
          // form params
          if (array_key_exists("bank_account_bank_id", $options) && $options["bank_account_bank_id"] != null) {
            $formParams['bank_account_bank_id'] = $this->apiClient->getSerializer()->toFormValue($options["bank_account_bank_id"]);
          }// form params
          if (array_key_exists("bank_account_identifier", $options) && $options["bank_account_identifier"] != null) {
            $formParams['bank_account_identifier'] = $this->apiClient->getSerializer()->toFormValue($options["bank_account_identifier"]);
          }// form params
          if (array_key_exists("bank_account_name", $options) && $options["bank_account_name"] != null) {
            $formParams['bank_account_name'] = $this->apiClient->getSerializer()->toFormValue($options["bank_account_name"]);
          }// form params
          if (array_key_exists("bank_account_number", $options) && $options["bank_account_number"] != null) {
            $formParams['bank_account_number'] = $this->apiClient->getSerializer()->toFormValue($options["bank_account_number"]);
          }// form params
          if (array_key_exists("notify_url", $options) && $options["notify_url"] != null) {
            $formParams['notify_url'] = $this->apiClient->getSerializer()->toFormValue($options["notify_url"]);
          }// form params
          if (array_key_exists("rendition_url", $options) && $options["rendition_url"] != null) {
            $formParams['rendition_url'] = $this->apiClient->getSerializer()->toFormValue($options["rendition_url"]);
          }
        }

        

        if( $options != null ) {
            
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        
        
        $encoded = array();

        foreach ($formParams as $key => $value) {
          $encoded[rawurlencode($key)] = rawurlencode($formParams[$key]);
        }
        foreach ($queryParams as $key => $value) {
          $encoded[rawurlencode($key)] = rawurlencode($queryParams[$key]);
        }

        $keys = array_keys($encoded);
        sort($keys);

        $url = $this->apiClient->getConfig()->getHost() . $resourcePath;

        $toSign = "$method&" . rawurlencode($url);
        foreach ($keys as $key) {
          $toSign .= "&$key=" . $encoded[$key];
        }
        if (isset($_tempBody)){
          $json_body = json_encode($this->apiClient->getSerializer()->sanitizeForSerialization($_tempBody));
          $toSign .="&".$json_body;
        }
        $hash = hash_hmac('sha256', $toSign , $this->apiClient->getConfig()->getSecret()); //sha1($concatenated . "&secret=" . $secret) . "\n";

        $headerParams['Authorization'] = $this->apiClient->getConfig()->getReceiverId() . ":" . $hash;

        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Khipu\Model\ReceiversCreateResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Khipu\Model\ReceiversCreateResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Khipu\Model\ReceiversCreateResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Khipu\Model\ValidationError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 403:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Khipu\Model\AuthorizationError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 503:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Khipu\Model\ServiceError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
