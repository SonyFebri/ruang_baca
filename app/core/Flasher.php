<?php

class Flasher
{
    public static function setFlash($type, $msg)
    {
        Session::getInstance()->push('flash', [
            'msg' => $msg,
            'type' => $type
        ]);
    }

    public static function flash()
    {
        $session = Session::getInstance();
        if ($session->has('flash')) {
            echo '<div class="alert alert-' . $session->get('flash')['type'] . ' alert-dismissible fade show" role="alert">
                    <strong>' . $session->get('flash')['msg'] . '</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            $session->pop('flash');
        }
    }
}