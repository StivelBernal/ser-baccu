<?php

function ser_contact_customizer_section( $wp_customize ){

    $wp_customize->add_setting( 'ser_contact_sales_label', [
        'default' => 'Contacto Ventas'
    ]);

    $wp_customize->add_setting( 'ser_contact_sales_email', [
        'default' => 'ventas@baccu.co'
    ]);

    $wp_customize->add_setting( 'ser_contact_sales_text', [
        'default' => '¿Busca un presupuesto personalizado? ¿Necesita contarnos más sobre su proyecto? ¿Quieres una demostración? Escríbanos'
    ]);

    $wp_customize->add_setting( 'ser_contact_support_label', [
        'default' => 'Soporte Técnico'
    ]);

    $wp_customize->add_setting( 'ser_contact_support_email', [
        'default' => 'support@baccu.co'
    ]);


    /**colores */
    $wp_customize->add_setting( 'ser_contact_support_text', [
        'default' => '¿Alguna pregunta sobre cómo integrar su producto? No te preocupes, nuestro equipo está listo para ti.'
    ]);


    $wp_customize->add_section( 'ser_contact_section', [
        'title'     =>  __( 'Contacto', 'ser' ),
        'priority'  =>  30,
        'panel'     =>  'Ser'
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_contact_label_sales_input',
            array(
                'label'          => __( 'Titular del correo ventas', 'ser' ),
                'section'        => 'ser_contact_section',
                'settings'       => 'ser_contact_sales_label' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_contact_email_sales_input',
            array(
                'label'          => __( 'email ventas', 'ser' ),
                'section'        => 'ser_contact_section',
                'settings'       => 'ser_contact_sales_email' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_contact_texto_sales_input',
            array(
                'label'          => __( 'texto sección de ventas', 'ser' ),
                'section'        => 'ser_contact_section',
                'settings'       => 'ser_contact_sales_text' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_contact_label_support_input',
            array(
                'label'          => __( 'Titular del correo soporte', 'ser' ),
                'section'        => 'ser_contact_section',
                'settings'       => 'ser_contact_support_label' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_contact_email_support_input',
            array(
                'label'          => __( 'email sopporte', 'ser' ),
                'section'        => 'ser_contact_section',
                'settings'       => 'ser_contact_support_email' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_contact_texto_support_input',
            array(
                'label'          => __( 'texto sección de soporte', 'ser' ),
                'section'        => 'ser_contact_section',
                'settings'       => 'ser_contact_support_text' 
                )
        )
    );
}

