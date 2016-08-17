<?php

$config =array( 

	'login' => array(
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|strip_tags|valid_email'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|strip_tags|alpha_dash'
        )
	),



	'contactanos' => array(
        array(
                'field' => 'nombre',
                'label' => 'Nombre',
                'rules' => 'trim|required'
        ),
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required'
        ),
        array(
                'field' => 'comentario',
                'label' => 'Comentario',
                'rules' => 'trim|required|strip_tags'
        )
      ),



	'comentarios' => array(
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|strip_tags|xss_clean|valid_email'
        )
      ),



    'clientes_validation' => array(
        array(
                'field' => 'imagencliente',
                'label' => 'Imagen',
                'rules' => 'trim|required|strip_tags'
        ),
        array(
                'field' => 'nombrecliente',
                'label' => 'Nombre del cliente',
                'rules' => 'trim|required|strip_tags|xss_clean|valid_email'
        ),
        array(
                'field' => 'telefono',
                'label' => 'Telefono',
                'rules' => 'trim|required|strip_tags|xss_clean|valid_email'
        ),
        array(
                'field' => 'emailcliente',
                'label' => 'Email',
                'rules' => 'trim|required|strip_tags|xss_clean|valid_email'
        ),
        array(
                'field' => 'password',
                'label' => 'Contraseña',
                'rules' => 'trim|required|strip_tags|xss_clean|valid_email'
        ),
        array(
                'field' => 'iddireccion',
                'label' => 'Id',
                'rules' => 'trim|required|strip_tags|xss_clean|valid_email'
        )
      )


	);

?>