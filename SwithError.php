<?php


namespace SwithError;

/**
 * Class SwithError
 * @package Core\Lib
 * Cette classe permet de gerer les erreurs
 */
class SwithError
{
    private $params = [];
    private $headerCode;
    private $headers = [
        "401" => "HTTP/1.0 401 Unauthorized",
        "404" => "HTTP/1.0 404 Not Found",
        "500" => "HTTP/1.1 500 Internal Server Error",
    ];

    function __construct($params = [], $headerCode = "404" )
    {
        if($params) {
            $this->setParams($params);
        }

        $this->setHeaderCode($headerCode);
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * @return mixed
     */
    public function getHeaderCode()
    {
        return $this->headerCode;
    }

    /**
     * @param mixed $headerCode
     */
    public function setHeaderCode($headerCode)
    {
        $this->headerCode = $headerCode;
    }

    public function display()
    {
        header($this->headers[$this->getHeaderCode()]);
        $customStyle = "";
        $messageClass = "";
        $title = "Une erreur est survenue";
        $backtrace = debug_backtrace();
        $file = $backtrace[0]['file'];
        $line = $backtrace[0]['line'];
        if(!empty($this->params)) {
            foreach ($this->params as $name => $value) {
                $$name = $value;
            }
        }
        include( __DIR__ . '/errorLayout.php');
    }
} 