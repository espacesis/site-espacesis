<?php

    class verify{

        public function verify_matricule(string $chaine){

            if (empty($chaine) || !isset($chaine)) {
                return FALSE;
            }else{
                if (preg_match('#^[0-9]+[a-z]{2}+[0-9]{2}$',$chaine)) {
                    
                    return TRUE;
                }else{
                    return FALSE;
                }
            }
        }
}