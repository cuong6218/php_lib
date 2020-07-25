<?php
    namespace App\Model;
    class Reader{
        private $id;
        private $readerName;
        private $phone;
        private $email;
        private $address;
        function __construct($readerName, $phone, $email, $address)
        {
            $this->readerName = $readerName;
            $this->phone = $phone;
            $this->email = $email;
            $this->address = $address;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of readerName
         */ 
        public function getReaderName()
        {
                return $this->readerName;
        }

        /**
         * Set the value of readerName
         *
         * @return  self
         */ 
        public function setReaderName($readerName)
        {
                $this->readerName = $readerName;

                return $this;
        }

        /**
         * Get the value of phone
         */ 
        public function getPhone()
        {
                return $this->phone;
        }

        /**
         * Set the value of phone
         *
         * @return  self
         */ 
        public function setPhone($phone)
        {
                $this->phone = $phone;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of address
         */ 
        public function getAddress()
        {
                return $this->address;
        }

        /**
         * Set the value of address
         *
         * @return  self
         */ 
        public function setAddress($address)
        {
                $this->address = $address;

                return $this;
        }
    }