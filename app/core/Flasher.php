<?php

class Flasher{

    public static function setMessage($pesan, $aksi, $type)
    {

        $_SESSION['msg'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'type'  => $type
        ];   
    }

    public static function Pesan(){
        if( isset($_SESSION['msg']) )
        {

            echo '<div id="flash-message" class="alert alert-'. $_SESSION['msg']['type'] .' alert-dismissible fade show" role="alert">
                    Data <strong>'. $_SESSION['msg']['pesan'] .'</strong> '. $_SESSION['msg']['aksi'] .'
                  </div>';

            unset($_SESSION['msg']);
        }

    }
}