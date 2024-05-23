<?php 

function cek_login() {
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('Auth');
    } else {
        $id_role = $ci->session->userdata('id_role');
    }
}
