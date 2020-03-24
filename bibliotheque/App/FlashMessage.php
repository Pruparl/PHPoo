<?php


namespace App;


class FlashMessage
{
    public static function set(string $message, string $type = 'success')
    {
        $_SESSION['flash_message'] = [
            'message' => $message,
            'type' => $type
        ];
    }

    public static function display()
    {
        if(isset($_SESSION['flash_message'])){

            // pour la classe alert-danger de bootstrap
            $type = $_SESSION['flash_message']['type'] == 'error';
            ? 'danger'
            ---


            $alert = '<div class="alert alert-' . $_SESSION['flash_message']['type'] . '">'
                . $_SESSION['flash_message']['message']
                . '</div>'
            ;

            echo $alert;

            // suppression du message pour affichage unique
            unset($_SESSION['flash_message']);
        }
    }
}