<?php 
    class ab
    {
        private function hello($a)
        {
            return $this->$a;
        }
        private function world($b)
        {
            return $this->$b;
        }

        public function linux()
        {
            
        }

        public function kali($d)
        {
            return $this->$d;
        }

        protected function windows($e)
        {
            return $this->$e;
        }

        protected function mac($f)
        {
            return $this->$f;
        }

    
    }

    $obj=new ab();
    //$obj->linux("hello");
    //$obj->kali("Os");
?>