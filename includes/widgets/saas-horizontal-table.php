<?php
/**
 * Class: SaasHorizontalTable
 * Name: Saas Horizontal Table
 * Slug: saas-pricing
 */

 // Elementor Classes

 use Elementor\Controls_Manager;
 use Elementor\Group_Control_Typography;
 use Elementor\Group_Control_Box_Shadow;
 use \Elementor\Group_Control_Border;
 use \Elementor\Utils;
 use \Elementor\Icons_Manager;
 
 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class SaasHorizontalTable
 */

class SaasHorizontalTable extends \Elementor\Widget_Base {

public function get_name() {
    return 'saasHorizontal';
}

public function get_title() {
    return esc_html__( 'Horizontal Pricing Table', SAAS_PRICINNG_TXT_DOMAIN );
}

public function get_icon() {
    return 'eicon-device-tablet';
}

public function get_categories() {
    return ['saas_pricing_category'];
}

public function get_keywords() {
    return [ 'pricing', 'tables' , 'saaspricing', 'horizontal'];
}

public function saasp_allowed_tags(){
    
    $saasp_allowed_html_tags = array(
		'a' => array(
			'class' => array(),
			'href'  => array(),
			'rel'   => array(),
			'title' => array(),
		),
		'abbr' => array(
			'title' => array(),
		),
		'b' => array(),
		'blockquote' => array(
			'cite'  => array(),
		),
		'cite' => array(
			'title' => array(),
		),
		'code' => array(),
		'del' => array(
			'datetime' => array(),
			'title' => array(),
		),
		'dd' => array(),
		'div' => array(
			'class' => array(),
			'title' => array(),
			'style' => array(),
		),
		'dl' => array(),
		'dt' => array(),
		'em' => array(),
		'h1' => array(),
		'h2' => array(),
		'h3' => array(),
		'h4' => array(),
		'h5' => array(),
		'h6' => array(),
		'i' => array(),
		'img' => array(
			'alt'    => array(),
			'class'  => array(),
			'height' => array(),
			'src'    => array(),
			'width'  => array(),
		),
		'li' => array(
			'class' => array(),
		),
		'ol' => array(
			'class' => array(),
		),
		'p' => array(
			'class' => array(),
		),
		'q' => array(
			'cite' => array(),
			'title' => array(),
		),
		'span' => array(
			'class' => array(),
			'title' => array(),
			'style' => array(),
		),
		'strike' => array(),
		'strong' => array(),
		'ul' => array(
			'class' => array(),
		),
	);
	
	return $saasp_allowed_html_tags;
}

protected function register_controls() {

    $this->start_controls_section(
        'saasp_horizontal_content_header',
        [
            'label' => esc_html__( 'Header', SAAS_PRICINNG_TXT_DOMAIN ),
            'tab' =>  Controls_Manager::TAB_CONTENT,
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_title',
        [
            'label' => esc_html__( 'Title', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Enter Your Title', SAAS_PRICINNG_TXT_DOMAIN ),
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_description',
        [
            'label' => esc_html__( 'Description', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Enter Your Description', SAAS_PRICINNG_TXT_DOMAIN ),
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_title_tag',
        [
            'label' => esc_html__( 'Title HTML Tag', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::SELECT,
            'default' => 'h2',
            'options' => [
                'h2' => esc_html__( 'H2', SAAS_PRICINNG_TXT_DOMAIN ),
                'h3' => esc_html__( 'H3', SAAS_PRICINNG_TXT_DOMAIN ),
                'h4'  => esc_html__( 'H4', SAAS_PRICINNG_TXT_DOMAIN ),
                'h5' => esc_html__( 'H5', SAAS_PRICINNG_TXT_DOMAIN ),
                'h6' => esc_html__( 'H6', SAAS_PRICINNG_TXT_DOMAIN ),
                'span' => esc_html__( 'Span', SAAS_PRICINNG_TXT_DOMAIN ),
                'p' => esc_html__( 'P', SAAS_PRICINNG_TXT_DOMAIN ),
            ],
        ]
    );

    $this->add_control(
        'saasp_horizontal_show_divider',
        [
            'label' => esc_html__( 'Divider', 'textdomain' ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'textdomain' ),
            'label_off' => esc_html__( 'Hide', 'textdomain' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );

    $this->add_control(
        'saasp_horizontal_show_ribbon',
        [
            'label' => esc_html__( 'Ribbon', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', SAAS_PRICINNG_TXT_DOMAIN ),
            'label_off' => esc_html__( 'Hide', SAAS_PRICINNG_TXT_DOMAIN ),
            'return_value' => 'yes',
            'default' => 'yes',
            'separator' => 'before',
        ]
    );

    $this->add_control(
        'saasp_horizontal_ribbon_title',
        [
            'label' => esc_html__( 'Title', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( '20%', SAAS_PRICINNG_TXT_DOMAIN ),
            'condition' => [
                'saasp_horizontal_show_ribbon' => 'yes',
            ],
        ]
    );

    $this->add_control(
        'saasp_horizontal_ribbon_position',
        [
            'label' => esc_html__( 'Position', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', SAAS_PRICINNG_TXT_DOMAIN ),
                    'icon' => 'eicon-h-align-left',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', SAAS_PRICINNG_TXT_DOMAIN ),
                    'icon' => 'eicon-h-align-right',
                ],
            ],
            'default' => 'right',
            'toggle' => true,
            'condition' => [
                'saasp_horizontal_show_ribbon' => 'yes',
            ],
        ]
    );

    $this->add_control(
        'sassp_horizontal_ribbon_alignment',
        [
            'label' => esc_html__( 'Alignment', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::CHOOSE,
            'separator' => 'before',
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', SAAS_PRICINNG_TXT_DOMAIN ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', SAAS_PRICINNG_TXT_DOMAIN ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', SAAS_PRICINNG_TXT_DOMAIN ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'left', 
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .saaspricing-horizontal-title' => 'text-align: {{VALUE}};',
                '{{WRAPPER}} .saaspricing-horizontal-des' => 'text-align: {{VALUE}};',
            ],
        ]
    );
    
    $this->end_controls_section();

    $this->start_controls_section(
        'saasp_horizontal_features_tab',
        [
            'label' => esc_html__( 'Features', SAAS_PRICINNG_TXT_DOMAIN ),
            'tab' =>  Controls_Manager::TAB_CONTENT,
        ]
    );

    $this->add_control(
        'saasp_horizontal_features_title',
        [
            'label' => esc_html__( 'Feature Title', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Enter Feature Title', SAAS_PRICINNG_TXT_DOMAIN ),
        ]
    );

    $saasp_horizontal_features = new \Elementor\Repeater();

        $saasp_horizontal_features->add_control(
            'saasp_horizontal_features_icon',
            [
                'label' => esc_html__( 'Icon', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::ICONS,
                'skin' => 'inline',
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'fa-solid',
                ],
                'exclude_inline_options' => [ 'svg' ],
            ]
        );

		$saasp_horizontal_features->add_control(
			'saasp_horizontal_features_text',
			[
				'label' => esc_html__( 'Text', SAAS_PRICINNG_TXT_DOMAIN ),
				'type' =>  Controls_Manager::TEXT,
				'default' => esc_html__( 'Feature Text' , SAAS_PRICINNG_TXT_DOMAIN ),
				'label_block' => true,
			]
        );

        $saasp_horizontal_features->add_control(
            'saasp_horizontal_features_icon_color',
            [
                'label' => esc_html__( 'Icon Color', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} svg' => 'color: {{VALUE}}',
                ],
            ]
        );

		$this->add_control(
			'saasp_horizontal_features',
			[
				'label' => esc_html__( 'Features', SAAS_PRICINNG_TXT_DOMAIN ),
				'type' =>  Controls_Manager::REPEATER,
				'fields' => $saasp_horizontal_features->get_controls(),
				'default' => [
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature One', SAAS_PRICINNG_TXT_DOMAIN ),
					],
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature Two', SAAS_PRICINNG_TXT_DOMAIN ),
					],
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature Three', SAAS_PRICINNG_TXT_DOMAIN ),
					],
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature Four', SAAS_PRICINNG_TXT_DOMAIN ),
					],
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature Five', SAAS_PRICINNG_TXT_DOMAIN ),
					],
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature Six', SAAS_PRICINNG_TXT_DOMAIN ),
					],
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature Seven', SAAS_PRICINNG_TXT_DOMAIN ),
					],
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature Eight', SAAS_PRICINNG_TXT_DOMAIN ),
					],
					[
						'saasp_horizontal_features_text' => esc_html__( 'Feature Nine', SAAS_PRICINNG_TXT_DOMAIN ),
					],
				],
				'title_field' => '{{{ saasp_horizontal_features_text }}}',
			]
		);

        $this->add_responsive_control(
			'saasp_horizontal_features_column',
			[
				'label' => esc_html__( 'Column', 'textdomain' ),
				'type' =>  Controls_Manager::SELECT,
				'default' => '3',
				'options' => [
					'12' => esc_html__( '1', 'textdomain' ),
					'6'  => esc_html__( '2', 'textdomain' ),
					'4' => esc_html__( '3', 'textdomain' ),
					'3' => esc_html__( '4', 'textdomain' ),
				]
			]
		);

    $this->end_controls_section();

    $this->start_controls_section(
        'saasp_horizontal_cta',
        [
            'label' => esc_html__( 'CTA', SAAS_PRICINNG_TXT_DOMAIN ),
            'tab' =>  Controls_Manager::TAB_CONTENT,
        ]
    );

    $this->add_control(
        'saasp_horizontal_cta_column_reverse',
        [
            'label' => esc_html__( 'Column Reverse', 'textdomain' ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'textdomain' ),
            'label_off' => esc_html__( 'Hide', 'textdomain' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );

    $this->add_control(
        'saasp_horizontal_cta_slogan_text',
        [
            'label' => esc_html__( 'Slogan Text', 'textdomain' ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Your Slogan Title', 'textdomain' ),
        ]
    );

    $this->add_control(
        'saasp_horizontal_body_pricing_heading',
            [
                'label' => esc_html__( 'Pricing', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_currency_symbol',
            [
                'label' => esc_html__( 'Currency Symbol', SAAS_PRICINNG_TXT_DOMAIN  ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__( 'None', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'dollar' => '&#36; ' . esc_html__( 'Dollar', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'euro' => '&#128; ' . esc_html__( 'Euro', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'baht' => '&#3647; ' . esc_html__( 'Baht', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'franc' => '&#8355; ' . esc_html__( 'Franc', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'guilder' => '&fnof; ' . esc_html__( 'Guilder', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'krona' => 'kr' . esc_html__( 'Krona', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'lira' => '&#8356; ' . esc_html__( 'Lira', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'peseta' => '&#8359;' . esc_html__( 'Peseta', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'peso' => '&#8369; ' . esc_html__( 'Peso', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'pound' => '&#163; ' . esc_html__( 'Pound Sterling', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'real' => 'R$ ' . esc_html__( 'Real', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'ruble' => '&#8381; ' . esc_html__( 'Ruble', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'rupee' => '&#8360; ' . esc_html__( 'Rupee', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'indian_rupee' => '&#8377; ' . esc_html__( 'Rupee (Indian)', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'shekel' => '&#8362; ' . esc_html__( 'Shekel', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'yen' => '&#165; ' . esc_html__( 'Yen/Yuan', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'won' => '&#8361; ' . esc_html__( 'Won', 'Currency', SAAS_PRICINNG_TXT_DOMAIN  ),
                    'custom' => esc_html__( 'Custom', SAAS_PRICINNG_TXT_DOMAIN  ),
                ],
                'default' => 'dollar',
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_currency_symbol_custom',
            [
                'label' => esc_html__( 'Custom Symbol', SAAS_PRICINNG_TXT_DOMAIN  ),
                'type' => Controls_Manager::TEXT,
                'condition' => [
                    'saasp_horizontal_currency_symbol' => 'custom',
                ],
            ]
        );
    
        $this->add_control(
            'sassp_horizontal_price',
            [
                'label' => esc_html__( 'Price', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' => Controls_Manager::TEXT,
                'default' => '39.99',
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_currency_format',
            [
                'label' => esc_html__( 'Currency Format', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' => Controls_Manager::SELECT,
                'default' => ',',
                'options' => [
                    '' => '1,234.56 (Default)',
                    ',' => '1.234,56',
                ],
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_sale',
            [
                'label' => esc_html__( 'Sale', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'On', SAAS_PRICINNG_TXT_DOMAIN ),
                'label_off' => esc_html__( 'Off', SAAS_PRICINNG_TXT_DOMAIN ),
                'default' => 'yes',
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_original_price',
            [
                'label' => esc_html__( 'Original Price', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' => Controls_Manager::NUMBER,
                'default' => '59',
                'condition' => [
                    'saasp_horizontal_sale' => 'yes',
                ],
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_period',
            [
                'label' => esc_html__( 'Period', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( '/mo', SAAS_PRICINNG_TXT_DOMAIN ),
            ]
        );

        $this->add_control(
            'saasp_horizontal_show_countdown',
            [
                'label' => esc_html__( 'Countdown', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', SAAS_PRICINNG_TXT_DOMAIN ),
                'label_off' => esc_html__( 'Hide', SAAS_PRICINNG_TXT_DOMAIN ),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_expire_date',
            [
                'label' => esc_html__( 'Expire Date', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::DATE_TIME,
                'label_block' => false,
                'default'=> esc_html__('2023-12-31 12:00', SAAS_PRICINNG_TXT_DOMAIN),
                'condition' => [
                    'saasp_horizontal_show_countdown' => 'yes',
                ],
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_show_rating',
            [
                'label' => esc_html__( 'Show Rating', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', SAAS_PRICINNG_TXT_DOMAIN ),
                'label_off' => esc_html__( 'Hide', SAAS_PRICINNG_TXT_DOMAIN ),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' =>'before',
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_rating_num',
            [
                'label' => esc_html__( 'Rating', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::NUMBER,
                'min' => 0,
                'max' =>  5,
                'step' => .5,
                'default' => 5,
                'condition' => [
                    'saasp_horizontal_show_rating' => 'yes',
                ],
            ]
        );
        
        $this->add_control(
            'saasp_horizontal_rating_counter',
            [
                'label' => esc_html__( 'Rating Counter', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::TEXT,
                'default' => esc_html__( '3k', SAAS_PRICINNG_TXT_DOMAIN ),
                'condition' => [
                    'saasp_horizontal_show_rating' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'saasp_horizontal_primary_cta_switch',
            [
                'label' => esc_html__( 'Primary', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', SAAS_PRICINNG_TXT_DOMAIN ),
                'label_off' => esc_html__( 'Hide', SAAS_PRICINNG_TXT_DOMAIN ),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_primary_cta_text',
            [
                'label' => esc_html__( 'Text', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::TEXT,
                'default' => esc_html__( 'Buy Starter', SAAS_PRICINNG_TXT_DOMAIN ),
                'condition' =>[
                    'saasp_horizontal_primary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_primary_cta_url',
            [
                'label' => esc_html__( 'Link', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', SAAS_PRICINNG_TXT_DOMAIN ),
                'options' => [ 'url', 'is_external', 'nofollow', 'custom_attributes' ],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
                'condition' =>[
                    'saasp_horizontal_primary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_primary_cta_size',
            [
                'label' => esc_html__( 'Size', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::SELECT,
                'default' => 'small',
                'options' => [
                    'extra-small' => esc_html__( 'Extra Small', SAAS_PRICINNG_TXT_DOMAIN ),
                    'small'  => esc_html__( 'Small', SAAS_PRICINNG_TXT_DOMAIN ),
                    'medium' => esc_html__( 'Medium', SAAS_PRICINNG_TXT_DOMAIN ),
                    'large' => esc_html__( 'Large', SAAS_PRICINNG_TXT_DOMAIN ),
                    'extra-large' => esc_html__( 'Extra Large', SAAS_PRICINNG_TXT_DOMAIN ),
                ],
                'condition' =>[
                    'saasp_horizontal_primary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_primary_cta_icon',
            [
                'label' => esc_html__( 'Icon', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'fa-solid',
                ],
                'recommended' => [
                    'fa-solid' => [
                        'circle',
                        'dot-circle',
                        'square-full',
                    ],
                    'fa-regular' => [
                        'circle',
                        'dot-circle',
                        'square-full',
                    ],
                ],
                'condition' =>[
                    'saasp_horizontal_primary_cta_switch' => 'yes',
                ]
            ]
        );
        
        $this->add_responsive_control(
            'saasp_horizontal_primary_cta_icon_spacing',
            [
                'label' => esc_html__( 'Icon Spacing', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'selectors' => [
                    '{{WRAPPER}} .saaspricing-primary-spacing' => 'padding-left: {{SIZE}}{{UNIT}};',
                ],
                'condition' =>[
                    'saasp_horizontal_primary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_primary_cta_id',
            [
                'label' => esc_html__( 'Button ID', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::TEXT,
                'default' => esc_html__( '', SAAS_PRICINNG_TXT_DOMAIN ),
                'condition' =>[
                    'saasp_horizontal_primary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_secondary_cta_switch',
            [
                'label' => esc_html__( 'Secondary', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', SAAS_PRICINNG_TXT_DOMAIN ),
                'label_off' => esc_html__( 'Hide', SAAS_PRICINNG_TXT_DOMAIN ),
                'return_value' => 'yes',
                'default' => 'no',
                'separator'=>'before',
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_secondary_cta_text',
            [
                'label' => esc_html__( 'Text', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::TEXT,
                'default' => esc_html__( 'Learn More...', SAAS_PRICINNG_TXT_DOMAIN ),
                'condition' =>[
                    'saasp_horizontal_secondary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_secondary_cta_url',
            [
                'label' => esc_html__( 'Link', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', SAAS_PRICINNG_TXT_DOMAIN ),
                'options' => [ 'url', 'is_external', 'nofollow', 'custom_attributes' ],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
                'condition' =>[
                    'saasp_horizontal_secondary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_secondary_cta_size',
            [
                'label' => esc_html__( 'Size', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::SELECT,
                'default' => 'small',
                'options' => [
                    'extra-small' => esc_html__( 'Extra Small', SAAS_PRICINNG_TXT_DOMAIN ),
                    'small'  => esc_html__( 'Small', SAAS_PRICINNG_TXT_DOMAIN ),
                    'medium' => esc_html__( 'Medium', SAAS_PRICINNG_TXT_DOMAIN ),
                    'large' => esc_html__( 'Large', SAAS_PRICINNG_TXT_DOMAIN ),
                    'extra-large' => esc_html__( 'Extra Large', SAAS_PRICINNG_TXT_DOMAIN ),
                ],
                'condition' =>[
                    'saasp_horizontal_secondary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_secondary_cta_icon',
            [
                'label' => esc_html__( 'Icon', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::ICONS,
                'recommended' => [
                    'fa-solid' => [
                        'circle',
                        'dot-circle',
                        'square-full',
                    ],
                    'fa-regular' => [
                        'circle',
                        'dot-circle',
                        'square-full',
                    ],
                ],
                'condition' =>[
                    'saasp_horizontal_secondary_cta_switch' => 'yes',
                ]
            ]
        );
    
        
        $this->add_responsive_control(
            'saasp_horizontal_secondary_cta_icon_spacing',
            [
                'label' => esc_html__( 'Icon Spacing', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 5,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'selectors' => [
                    '{{WRAPPER}} .saaspricing-secondary-spacing' => 'padding-left: {{SIZE}}{{UNIT}};',
                ],
                'condition' =>[
                    'saasp_horizontal_secondary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_secondary_cta_id',
            [
                'label' => esc_html__( 'Button ID', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::TEXT,
                'default' => esc_html__( '', SAAS_PRICINNG_TXT_DOMAIN ),
                'condition' =>[
                    'saasp_horizontal_secondary_cta_switch' => 'yes',
                ]
            ]
        );
    
        $this->add_control(
            'saasp_horizontal_cta_alignment',
            [
                'label' => esc_html__( 'CTA Alignment', SAAS_PRICINNG_TXT_DOMAIN ),
                'type' =>  Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', SAAS_PRICINNG_TXT_DOMAIN ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', SAAS_PRICINNG_TXT_DOMAIN ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', SAAS_PRICINNG_TXT_DOMAIN ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .card-footer' => 'text-align: {{VALUE}};',
                    '{{WRAPPER}} .saaspricing-cta-card' => 'text-align: {{VALUE}};',
                ],
            ]
        );
    

    $this->end_controls_section();

    $this->start_controls_section(
        'saasp_horizontal_style_header',
        [
            'label' => esc_html__( 'Header', SAAS_PRICINNG_TXT_DOMAIN ),
            'tab' =>  Controls_Manager::TAB_STYLE,
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_padding',
        [
            'label' => esc_html__( 'Padding', 'textdomain' ),
            'type' =>  Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}} .saaspricing-horizontal-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_title_heading',
        [
            'label' => esc_html__( 'Title', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
            'separator'=>'before'
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_title_distance',
        [
            'label' => esc_html__( 'Distance', 'textdomain' ),
            'type' =>  Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 10,
            ],
            'selectors' => [
                '{{WRAPPER}} .saaspricing-horizontal-title' => 'padding-bottom: {{SIZE}}{{UNIT}};',
            ],
        ]
    );


    $this->add_control(
        'saasp_horizontal_header_title_color',
        [
            'label' => esc_html__( 'Color', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .saaspricing-horizontal-title' => 'color: {{VALUE}}',
            ],
        ]
    );
    
    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'saasp_horizontal_header_title_typography',
            'selector' => '{{WRAPPER}} .saaspricing-horizontal-title',
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_des_heading',
        [
            'label' => esc_html__( 'Description', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
            'separator'=>'before'
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_des_distance',
        [
            'label' => esc_html__( 'Distance', 'textdomain' ),
            'type' =>  Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'selectors' => [
                '{{WRAPPER}} .saaspricing-horizontal-des' => 'padding-bottom: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_des_color',
        [
            'label' => esc_html__( 'Color', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .saaspricing-horizontal-des' => 'color: {{VALUE}}',
            ],
        ]
    );
    
    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'saasp_horizontal_header_des_typography',
            'selector' => '{{WRAPPER}} .saaspricing-horizontal-des',
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_divider_heading',
        [
            'label' => esc_html__( 'Divider', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
            'separator'=>'before'
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_divider_width',
        [
            'label' => esc_html__( 'Weight', 'textdomain' ),
            'type' =>  Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 1,
            ],
            'selectors' => [
                '{{WRAPPER}} .saaspricing-border-bottom' => 'border-width: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_divider_color',
        [
            'label' => esc_html__( 'Color', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .saaspricing-border-bottom' => 'border-color: {{VALUE}}',
            ],
        ]
    );

    $this->add_control(
        'saasp_horizontal_header_divider_border_style',
        [
            'label' => esc_html__( 'Border Style', 'textdomain' ),
            'type' =>  Controls_Manager::SELECT,
            'default' => 'solid',
            'options' => [
                'solid'  => esc_html__( 'Solid', 'textdomain' ),
                'dashed' => esc_html__( 'Dashed', 'textdomain' ),
                'dotted' => esc_html__( 'Dotted', 'textdomain' ),
                'double' => esc_html__( 'Double', 'textdomain' ),
            ],
            'selectors' => [
                '{{WRAPPER}} .saaspricing-border-bottom' => 'border-bottom-style: {{VALUE}};',
            ],
        ]
    );
    
    $this->end_controls_section();

    $this->start_controls_section(
        'saasp_horizontal_style_ribbon',
        [
            'label' => esc_html__( 'Ribbon', SAAS_PRICINNG_TXT_DOMAIN ),
            'tab' =>  Controls_Manager::TAB_STYLE,
        ]
    );

    $this->add_control(
        'saasp_horizontal_ribbon_color',
        [
            'label' => esc_html__( 'Color', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .saaspricing-border-bottom' => 'border-color: {{VALUE}}',
            ],
        ]
    );

    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'saasp_horizontal_ribbon_typography',
            'selector' => '{{WRAPPER}} .saaspricing-horizontal-des',
        ]
    );

    $this->add_control(
        'saasp_horizontal_ribbon_background_color',
        [
            'label' => esc_html__( 'Background Color', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .saaspricing-border-bottom' => 'border-color: {{VALUE}}',
            ],
        ]
    );

    $this->add_control(
        'saasp_horizontal_ribbon_padding',
        [
            'label' => esc_html__( 'Padding', 'textdomain' ),
            'type' =>  Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}} .saaspricing-horizontal-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->add_group_control(
        Group_Control_Border::get_type(),
        [
            'name' => 'saasp_horizontal_ribbon_border',
            'selector' => '{{WRAPPER}} .your-class',
        ]
    );


    $this->end_controls_section();
}

private function get_currency_symbol( $saasp_symbol_name ) {
    $saasp_symbols = [
        'dollar' => '&#36;',
        'euro' => '&#128;',
        'franc' => '&#8355;',
        'pound' => '&#163;',
        'ruble' => '&#8381;',
        'shekel' => '&#8362;',
        'baht' => '&#3647;',
        'yen' => '&#165;',
        'won' => '&#8361;',
        'guilder' => '&fnof;',
        'peso' => '&#8369;',
        'peseta' => '&#8359;',
        'lira' => '&#8356;',
        'rupee' => '&#8360;',
        'indian_rupee' => '&#8377;',
        'real' => 'R$',
        'krona' => 'kr',
    ];
    return isset( $saasp_symbols[ $saasp_symbol_name ] ) ? $saasp_symbols[ $saasp_symbol_name ] : '';
}

protected function render() {
 $settings = $this->get_settings_for_display();
?>

   <!-- single pricing section start -->
   <div class="saaspricing-horizontal my-5">
            <div class="row">
                <!-- heading and feature start  -->
                <div class=" col-lg-8 ">
                    <div class="p-4 p-sm-5 d-flex flex-column justify-content-center position-relative h-100">

                        <!-- heading  -->
                        <div class="saaspricing-horizontal-header">
                        <?php
                        if('' !== $settings['saasp_horizontal_header_title']){
                        ?>
                        <?php printf('<%1$s class="saaspricing-horizontal-title">%2$s</%1$s>', esc_html($settings['saasp_horizontal_header_title_tag']) ,esc_html($settings['saasp_horizontal_header_title'])); ?>
                        <?php
                        }
                        ?>
                        <!-- sub-heading  -->
                        <?php
                        if('' !== $settings['saasp_horizontal_header_description']){
                        ?>
                        <p class="saaspricing-horizontal-des <?php if( 'yes' === ($settings['saasp_horizontal_show_divider']) ){ echo esc_attr('saaspricing-border-bottom'); } ?>">
                            <?php echo esc_html($settings['saasp_horizontal_header_description']); ?>
                        </p>
                        <?php
                        }
                        ?>
                        </div>
                        <!-- feature list  -->

                        <div class="saaspricing-horizontal-feature-list">
                            <?php
                            if( '' !== $settings['saasp_horizontal_features_title']){
                            ?>
                            <p class="saaspricing-horizontal-feature-title">
                            <?php echo esc_html($settings['saasp_horizontal_features_title']); ?>
                                <span class="line-pricing"></span>
                            </p>
                            <?php
                            }
                            ?>

                            <div class="row">
                                <?php
                                 if($settings['saasp_horizontal_features']){
                                    foreach($settings['saasp_horizontal_features'] as $saasp_horizontal_features){
                                ?>
                                <div class="col-md-<?php echo esc_attr($settings['saasp_horizontal_features_column']); ?>">
                                    <div class="mb-3 elementor-repeater-item-<?php echo esc_attr($saasp_horizontal_features['_id']); ?>">
                                        <?php Icons_Manager::render_icon( $saasp_horizontal_features['saasp_horizontal_features_icon'], [ 'aria-hidden' => 'true' ] ); ?> 
                                        <small><?php echo esc_html($saasp_horizontal_features['saasp_horizontal_features_text']); ?></small>
                                    </div>
                                </div>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- heading and feature end  -->


                <!-- sidebar start (pricing,countdown , cta)  start-->
                <div class=" col-lg-4 text-center">
                    <div
                        class="p-4 p-sm-5 h-100 saaspricing-bg-warm d-flex align-items-center justify-content-center flex-column position-relative">
                        <?php
                        if('yes' === $settings['saasp_horizontal_show_ribbon'] && '' !== $settings['saasp_horizontal_ribbon_title']){
                            if( 'left' === $settings['saasp_horizontal_ribbon_position']){
                                $saasp_ribbon_position = 'saaspricing-horizontal-left-position';
                            }elseif( 'right' === $settings['saasp_horizontal_ribbon_position']){
                                $saasp_ribbon_position = 'saaspricing-horizontal-right-position';
                            }else{
                                $saasp_ribbon_position = 'saaspricing-horizontal-right-position';  
                            }
                        ?>
                        <span class="saaspricing-horizontal-ribbon <?php echo esc_attr($saasp_ribbon_position); ?>"><?php echo esc_html($settings['saasp_horizontal_ribbon_title']); ?></span>
                        <?php
                        }
                        ?>
                        <!-- slogan -->

                        <p class="h5 w-75" role="heading"><?php echo esc_html($settings['saasp_horizontal_cta_slogan_text']); ?></p>

                        <!-- pricing  -->

                        <div class="saasprcing-vertical-pricing">
                            <?php
                            if('none' !== $settings['saasp_horizontal_currency_symbol'] && 'yes' === $settings['saasp_horizontal_sale']){
                            ?>
                            <del class="saaspricing-vertical-original"> 
                            <span>
                            <?php
                            if('custom' !== $settings['saasp_horizontal_currency_symbol']){
                                echo esc_html($this->get_currency_symbol($settings['saasp_horizontal_currency_symbol']));
                            }else{
                                echo esc_html($settings['saasp_horizontal_currency_symbol_custom']);
                            }
                            ?>
                            <?php
                            if('' !== $settings['saasp_horizontal_original_price']){
                            ?>
                            <span class="fw-bold"><?php echo esc_html($settings['saasp_horizontal_original_price']); ?></span>
                            <?php
                            }
                            ?> 
                            </span>
                            </del>
                            <?php
                            }
                            ?>

                            <?php
                            //if('before'=== $settings['saasp_horizontal_pricing_symbol_position']){
                            ?>
                            <span class="saaspricing-vertical-symbol">
                            <?php
                            if('custom' !== $settings['saasp_horizontal_currency_symbol']){
                                echo esc_html($this->get_currency_symbol($settings['saasp_horizontal_currency_symbol']));
                            }else{
                                echo esc_html($settings['saasp_horizontal_currency_symbol_custom']);
                            }
                            ?>
                            </span>
                            <?php
                            //}
                            ?>
                            <?php
                            if('' === $settings['saasp_horizontal_currency_format'] ){ 
                            ?>
                            <span class="saaspricing-vertical-price saaspricing-vertical-typography">
                            <?php echo esc_html(explode(".", $settings['sassp_horizontal_price'])[0]); ?>
                            </span>
                            <?php
                            if('' !== explode(".", $settings['sassp_horizontal_price'])[1]){
                            ?>
                            <span class="saaspricing-fraction-price"><?php echo esc_html(explode(".", $settings['sassp_horizontal_price'])[1]); ?></span>
                            <?php
                            }
                            }else{
                            ?>
                            <span class="saaspricing-vertical-price saaspricing-vertical-typography"><?php echo esc_html($settings['sassp_horizontal_price']); ?></span>
                            <?php
                            }
                            ?>
                            <?php
                            //if('after' === $settings['saasp_horizontal_pricing_symbol_position']){
                            ?>
                            <span class="saaspricing-vertical-symbol">
                            <?php
                            if('custom' !== $settings['saasp_horizontal_currency_symbol']){
                                echo esc_html($this->get_currency_symbol($settings['saasp_horizontal_currency_symbol']));
                            }else{
                                echo esc_html($settings['saasp_horizontal_currency_symbol_custom']);
                            }
                            ?>
                            </span>
                            <?php
                            //}
                            ?>
                            <?php
                            //if('' !== $settings['saasp_vertical_period']){
                            ?>
                            <span class="saaspricing-vertical-period <?php // if( 'below' === $settings['saasp_vertical_period_position']){echo esc_attr('w-100 mt-1');} ?>">
                            <?php echo esc_html($settings['saasp_horizontal_period']);?>
                            </span>
                            <?php
                            //}
                            ?>
                        </div>

                        <!-- countdown  -->

                        <?php
                        if('yes' === $settings['saasp_horizontal_show_countdown'] &&  "" !== $settings['saasp_horizontal_show_countdown']){
                        ?>
                        <div class="saaspricing-horizontal-countdown">
                            <span class="saaspricing-countdown"
                            data-countdown-index="0"
                            data-expire-date="<?php echo esc_attr($settings['saasp_horizontal_expire_date']); ?>"
                            id="countdown">
                            </span>
                        </div>
                        <?php
                        }
                        ?>

                        <!-- Rating -->

                        <?php
                        if('yes' === $settings['saasp_horizontal_show_rating'] && '' !== $settings['saasp_horizontal_rating_num'] ){
                        ?>
                        <div class="ratings saaspricing-horizontal-ratings">
                            <div class="saaspricing-star-icon fs-6"> 
                                <?php                                    
                                $saasp_rating = $settings['saasp_horizontal_rating_num'];
                                $saasp_full_stars = floor( $saasp_rating);
                                $saasp_half_star = $saasp_rating - $saasp_full_stars;
                                for ($k = 0; $k <  $saasp_full_stars; $k++) {
                                ?>
                                <span>
                                    <i class="fas fa-star-half saaspricing-star-left saaspricing-yellow"></i>
                                    <i class="fas fa-star-half saaspricing-star-right saaspricing-yellow"></i>
                                </span>
                                <?php
                                }
                                if ($saasp_half_star >= 0.5) {
                                ?>
                                <span>
                                    <i class="fas fa-star-half saaspricing-star-left saaspricing-yellow"></i>
                                    <i class="fas fa-star-half saaspricing-star-right saaspricing-unmark"></i>
                                </span>
                                <?php
                                }
                                ?>
                                <?php
                                for($j=0; $j < 5 - ceil($settings['saasp_horizontal_rating_num']); $j++){
                                ?>
                                <span>
                                    <i class="fas fa-star-half saaspricing-star-left saaspricing-unmark"></i>
                                    <i class="fas fa-star-half saaspricing-star-right saaspricing-unmark"></i>
                                </span>
                                <?php
                                }
                                ?>
                                <?php
                                if(''!==$settings['saasp_horizontal_rating_counter']){
                                ?>
                                <small class="saaspricing-review-text"> 
                                (<?php echo esc_html($settings['saasp_horizontal_rating_counter']); ?>) 
                                </small>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if('' !== $settings['saasp_horizontal_primary_cta_text'] && 'yes' === $settings['saasp_horizontal_primary_cta_switch']){
                        if ( ! empty( $settings['saasp_horizontal_primary_cta_url']['url'] ) ) {
                            $this->add_link_attributes( 'saasp_horizontal_primary_cta_url', $settings['saasp_horizontal_primary_cta_url'] );
                        }
                        ?>
                            <a class="btn saaspricing-vertical-primary btn-dark <?php
                            if('extra-small' === $settings['saasp_horizontal_primary_cta_size']){
                            echo esc_attr('saaspricing-xsm-btn');
                            }elseif('small' === $settings['saasp_horizontal_primary_cta_size']){
                            echo esc_attr('saaspricing-sm-btn');
                            }
                            elseif('medium' === $settings['saasp_horizontal_primary_cta_size']){
                            echo esc_attr('saaspricing-m-btn');
                            }
                            elseif('large' === $settings['saasp_horizontal_primary_cta_size']){
                            echo esc_attr('saaspricing-l-btn');
                            }
                            elseif('extra-large' === $settings['saasp_horizontal_primary_cta_size']){
                            echo esc_attr('saaspricing-xl-btn');
                            }
                            ?>" 
                            <?php echo $this->get_render_attribute_string( 'saasp_horizontal_primary_cta_url'); ?>
                            <?php
                            if('' !== $settings['saasp_horizontal_primary_cta_id']){
                            ?>
                            id="<?php echo esc_attr($settings['saasp_horizontal_primary_cta_id']); ?>"
                            <?php
                            }
                            ?>>
                            <?php echo esc_html($settings['saasp_horizontal_primary_cta_text']); ?> 
                            <span class="saaspricing-primary-spacing"> 
                            <?php Icons_Manager::render_icon( $settings['saasp_horizontal_primary_cta_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </span>
                            </a>
                        <?php
                        }
                        ?>

                        <?php
                        if( '' !== $settings['saasp_horizontal_secondary_cta_text'] && 'yes' === $settings['saasp_horizontal_secondary_cta_switch']){
                        if ( ! empty( $settings['saasp_horizontal_secondary_cta_url']['url'] ) ) {
                            $this->add_link_attributes( 'saasp_horizontal_secondary_cta_url', $settings['saasp_horizontal_secondary_cta_url'] );
                        }
                        ?>
                        <div class="saaspricng-secondary-main">
                        <a class="saaspricing-vertical-secondary <?php
                        if('extra-small' === $settings['saasp_horizontal_secondary_cta_size']){
                        echo esc_attr('saaspricing-xsm-btn');
                        }elseif('small' === $settings['saasp_horizontal_secondary_cta_size']){
                        echo esc_attr('saaspricing-sm-btn');
                        }
                        elseif('medium' === $settings['saasp_horizontal_secondary_cta_size']){
                        echo esc_attr('saaspricing-m-btn');
                        }
                        elseif('large' === $settings['saasp_horizontal_secondary_cta_size']){
                        echo esc_attr('saaspricing-l-btn');
                        }
                        elseif('extra-large' === $settings['saasp_horizontal_secondary_cta_size']){
                        echo esc_attr('saaspricing-xl-btn');
                        }
                        ?>" 
                        <?php echo $this->get_render_attribute_string( 'saasp_horizontal_secondary_cta_url'); ?>
                        <?php
                        if('' !== $settings['saasp_horizontal_secondary_cta_id']){
                        ?>
                        id="<?php echo esc_attr($settings['saasp_horizontal_secondary_cta_id']); ?>"
                        <?php
                        }
                        ?>>
                        <?php echo esc_html($settings['saasp_horizontal_secondary_cta_text']); ?>
                        <span class="saaspricing-secondary-spacing"> 
                        <?php Icons_Manager::render_icon( $settings['saasp_horizontal_secondary_cta_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                        </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php
 }
}