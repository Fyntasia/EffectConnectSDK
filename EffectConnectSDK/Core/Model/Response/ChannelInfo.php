<?php
    namespace EffectConnect\PHPSdk\Core\Model\Response;

    use EffectConnect\PHPSdk\Core\Helper\Payload;

    /**
     * Class ChannelInfo
     *
     * @author  Stefan Van den Heuvel
     * @company Koek & Peer
     * @product EffectConnect
     * @package EffectConnectSDK
     */
    final class ChannelInfo
    {

        /**
         * @var int $_id
         */
        private $_id;
        /**
         * @var string $_type
         */
        private $_type;
        /**
         * @var string $_subtype
         */
        private $_subtype;
        /**
         * @var string $_title
         */
        private $_title;

        /**
         * ChannelInfo constructor.
         *
         * @param $payload
         */
        public function __construct($payload)
        {
            if ($payload === null)
            {
                return;
            }
            $this->_id      = Payload::extract($payload, 'id');
            $this->_type    = Payload::extract($payload, 'type');
            $this->_subtype = Payload::extract($payload, 'subtype');
            $this->_title   = Payload::extract($payload, 'title');
        }

        /**
         * @return int
         */
        public function getId()
        {
            return $this->_id;
        }

        /**
         * @return string
         */
        public function getType()
        {
            return $this->_type;
        }

        /**
         * @return string
         */
        public function getSubtype()
        {
            return $this->_subtype;
        }

        /**
         * @return string
         */
        public function getTitle()
        {
            return $this->_title;
        }
    }
