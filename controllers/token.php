<?php
        if(!session_id()) session_start();

    Class TokenMaker {
        public function __construct($name) {
            $this->name = $name;
            $this->token = str_shuffle(md5(time()));
        }
        function get_token(){
            $token = !isset($_SESSION["$this->name"]) ? $_SESSION["$this->name"] = $this->token : $_SESSION["$this->name"];
            // $_SESSION["$this->name"] = $this->token;
            return $_SESSION["$this->name"];
        }
        function token_exists(){
            if(isset($_SESSION["$this->name"])) return true;
            return false;
        }
        function valid_token(){
            if($this->token_exists()){
                if($_SESSION["$this->name"] == $this->token) return true;
                return false;
            }
            else return false;
        }
    }
    
?>