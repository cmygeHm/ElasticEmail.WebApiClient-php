<?php
	namespace ElasticEmailClient; 

    class ApiConfiguration
    {
        const AVAILABLE_REQUEST_METHODS = ['GET', 'POST'];
        const API_KEY = 'apiKey';
        const API_URL = 'apiUrl';

        /**
         * @var string
         */
        private $apiKey;

        /**
         * @var string
         */
        private $apiUrl = 'https://api.elasticemail.com/v2/';

        /**
         * @var float
         */
        private $timeOut = 5.0;

        /**
         * @var \GuzzleHttp\ClientInterface
         */
        private $clientInterface;

        /**
         * ApiConfiguration constructor.
         * @param array $params
         */
        public function __construct(array $params = [])
        {
            if (isset($params[self::API_KEY])) {
                $this->setApiKey($params[self::API_KEY]);
            }
            if (isset($params[self::API_URL])) {
                $this->setApiUrl($params[self::API_URL]);
            }
        }

        /**
         * @param string $apiKey
         * @return $this
         */
        public function setApiKey(string $apiKey)
        {
            $this->apiKey = $apiKey;

            return $this;
        }

        /**
         * @return string
         */
        public function getApiKey()
        {
            return $this->apiKey;
        }

        /**
         * @param string $apiUrl
         * @return $this
         */
        public function setApiUrl(string $apiUrl)
        {
            $this->apiUrl = $apiUrl;

            return $this;
        }

        /**
         * @return string
         */
        public function getApiUrl()
        {
            return $this->apiUrl;
        }

        /**
         * @param $timeout
         * @return $this
         */
        public function setTimeout($timeout)
        {
            $this->timeOut = $timeout;

            return $this;
        }

        /**
         * @return float
         */
        public function getTimeout()
        {
            return $this->timeOut;
        }

        /**
         * @param \GuzzleHttp\ClientInterface $interface
         */
        public function setClientInterface(\GuzzleHttp\ClientInterface $interface)
        {
            $this->clientInterface = $interface;
        }

        public function getClientInterface()
        {
            return $this->clientInterface;
        }
    }
