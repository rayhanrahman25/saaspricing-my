<?php
/**
 * Class: SaasComparisonTable
 * Name: Saas Comparison Table
 * Slug: saas-pricing
 */

 // Elementor Classes

 use Elementor\Controls_Manager;
 use Elementor\Group_Control_Typography;
 use Elementor\Group_Control_Box_Shadow;
 use Elementor\Group_Control_Image_Size;
 use \Elementor\Group_Control_Css_Filter;
 
 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class SaasComparisonTable
 */

class SaasComparisonTable extends \Elementor\Widget_Base {

public function get_name() {
    return 'saasComparison';
}

public function get_title() {
    return esc_html__( 'Comparison Pricing Table', SAAS_PRICINNG_TXT_DOMAIN );
}

public function get_icon() {
    return 'eicon-table';
}

public function get_categories() {
    return ['saas_pricing_category'];
}

public function get_keywords() {
    return [ 'pricing', 'tables' , 'saaspricing', 'comparison'];
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
        'saasp_comparison_content_section',
        [
            'label' => esc_html__( 'Header', SAAS_PRICINNG_TXT_DOMAIN ),
            'tab' => Controls_Manager::TAB_CONTENT,
        ]
    );
    
    $this->add_control(
        'saasp_select_columns',
        [
            'label' => esc_html__( 'Select Column', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::SELECT,
            'default' => '3',
            'options' => [
                '1' => esc_html__( '1', SAAS_PRICINNG_TXT_DOMAIN ),
                '2'  => esc_html__( '2', SAAS_PRICINNG_TXT_DOMAIN ),
                '3' => esc_html__( '3', SAAS_PRICINNG_TXT_DOMAIN ),
            ]
        ]
    );

    // --- Heading Content

    $this->add_control(
        'saasp_header_content_title_and_des_one',
        [
            'label' => esc_html__( 'Column One', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
            'separator'=>'before',
            'condition' => [
                'saasp_select_columns' => ['1','2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_header_title_text_1',
        [
            'label' => esc_html__( 'Title', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'First Head', SAAS_PRICINNG_TXT_DOMAIN ),
            'label_block' => false,
            'condition' => [
                'saasp_select_columns' => ['1','2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_header_title_des_1',
        [
            'label' => esc_html__( 'Description', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Enter your description', SAAS_PRICINNG_TXT_DOMAIN ),
            'label_block' => false,
            'condition' => [
                'saasp_select_columns' => ['1','2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_column_html_title_tag_1',
        [
            'label' => esc_html__( 'Title HTML Tag', 'textdomain' ),
            'type' =>  Controls_Manager::SELECT,
            'default' => 'span',
            'options' => [
                'h2' => esc_html__( 'H2', 'textdomain' ),
                'h3' => esc_html__( 'H3', 'textdomain' ),
                'h4'  => esc_html__( 'H4', 'textdomain' ),
                'h5' => esc_html__( 'H5', 'textdomain' ),
                'h6' => esc_html__( 'H6', 'textdomain' ),
                'span' => esc_html__( 'Span', 'textdomain' ),
                'p' => esc_html__( 'P', 'textdomain' ),
            ],
        ]
    );


    $this->add_control(
        'saasp_comparison_show_ribbon_1',
        [
            'label' => esc_html__( 'Ribbon', 'textdomain' ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'textdomain' ),
            'label_off' => esc_html__( 'Hide', 'textdomain' ),
            'return_value' => 'yes',
            'default' => 'no',
            'condition' => [
                'saasp_select_columns' => ['1','2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_ribbon_title_1',
        [
            'label' => esc_html__( 'Title', 'textdomain' ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Most Popular', 'textdomain' ),
            'condition' => [
                'saasp_comparison_show_ribbon_1' => 'yes',
            ],
        ]
    );

    $this->add_control(
        'saasp_comparison_show_countdown_1',
        [
            'label' => esc_html__( 'Countdown', 'textdomain' ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'textdomain' ),
            'label_off' => esc_html__( 'Hide', 'textdomain' ),
            'return_value' => 'yes',
            'default' => 'no',
            'condition' => [
                'saasp_select_columns' => ['1','2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_comparison_expire_date_1',
        [
            'label' => esc_html__( 'Expire Date', 'textdomain' ),
            'type' =>  Controls_Manager::DATE_TIME,
            'label_block' => false,
            'condition' => [
                'saasp_comparison_show_countdown_1' => 'yes',
            ],
        ]
    );

    $this->add_control(
        'sassp_column_one_combined_alignment',
        [
            'label' => esc_html__( 'Alignment', 'textdomain' ),
            'type' =>  Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'textdomain' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'textdomain' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'textdomain' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .your-class' => 'text-align: {{VALUE}};',
            ],
        ]
    );
    

    $this->add_control(
        'saasp_header_content_title_and_des_two',
        [
            'label' => esc_html__( 'Column Two', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
            'separator'=>'before',
            'condition' => [
                'saasp_select_columns' => ['2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_header_title_text_2',
        [
            'label' => esc_html__( 'Title', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Second Head', SAAS_PRICINNG_TXT_DOMAIN ),
            'label_block' => false,
            'condition' => [
                'saasp_select_columns' => ['2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_header_title_des_2',
        [
            'label' => esc_html__( 'Description', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Enter your description', SAAS_PRICINNG_TXT_DOMAIN ),
            'label_block' => false,
            'condition' => [
                'saasp_select_columns' => ['2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_column_html_title_tag_2',
        [
            'label' => esc_html__( 'Title HTML Tag', 'textdomain' ),
            'type' =>  Controls_Manager::SELECT,
            'default' => 'span',
            'options' => [
                'h2' => esc_html__( 'H2', 'textdomain' ),
                'h3' => esc_html__( 'H3', 'textdomain' ),
                'h4'  => esc_html__( 'H4', 'textdomain' ),
                'h5' => esc_html__( 'H5', 'textdomain' ),
                'h6' => esc_html__( 'H6', 'textdomain' ),
                'span' => esc_html__( 'Span', 'textdomain' ),
                'p' => esc_html__( 'P', 'textdomain' ),
            ],
        ]
    );
    
    $this->add_control(
        'saasp_comparison_show_ribbon_2',
        [
            'label' => esc_html__( 'Ribbon', 'textdomain' ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'textdomain' ),
            'label_off' => esc_html__( 'Hide', 'textdomain' ),
            'return_value' => 'yes',
            'default' => 'no',
            'condition' => [
                'saasp_select_columns' => ['2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_ribbon_title_2',
        [
            'label' => esc_html__( 'Title', 'textdomain' ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Most Popular', 'textdomain' ),
            'condition' => [
                'saasp_comparison_show_ribbon_2' => 'yes',
            ],
        ]
    );

    $this->add_control(
        'saasp_comparison_show_countdown_2',
        [
            'label' => esc_html__( 'Countdown', 'textdomain' ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'textdomain' ),
            'label_off' => esc_html__( 'Hide', 'textdomain' ),
            'return_value' => 'yes',
            'default' => 'no',
            'condition' => [
                'saasp_select_columns' => ['2','3'],
            ],
        ]
    );

    $this->add_control(
        'saasp_comparison_expire_date_2',
        [
            'label' => esc_html__( 'Expire Date', 'textdomain' ),
            'type' =>  Controls_Manager::DATE_TIME,
            'label_block' => false,
            'condition' => [
                'saasp_comparison_show_countdown_2' => 'yes',
            ],
        ]
    );

    $this->add_control(
        'sassp_column_two_combined_alignment',
        [
            'label' => esc_html__( 'Alignment', 'textdomain' ),
            'type' =>  Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'textdomain' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'textdomain' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'textdomain' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .your-class' => 'text-align: {{VALUE}};',
            ],
        ]
    );


    $this->add_control(
        'saasp_header_content_title_and_des_three',
        [
            'label' => esc_html__( 'Column Three', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
            'separator'=> 'before',
            'condition' => [
                'saasp_select_columns' => '3',
            ],
        ]
    );

    $this->add_control(
        'saasp_header_title_text_3',
        [
            'label' => esc_html__( 'Title', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Third Head', SAAS_PRICINNG_TXT_DOMAIN ),
            'label_block' => false,
            'condition' => [
                'saasp_select_columns' => '3',
            ],
        ]
    );

    $this->add_control(
        'saasp_header_title_des_3',
        [
            'label' => esc_html__( 'Description', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Enter your description', SAAS_PRICINNG_TXT_DOMAIN ),
            'label_block' => false,
            'condition' => [
                'saasp_select_columns' => '3',
            ],
        ]
    );

    $this->add_control(
        'saasp_column_html_title_tag_3',
        [
            'label' => esc_html__( 'Title HTML Tag', 'textdomain' ),
            'type' =>  Controls_Manager::SELECT,
            'default' => 'span',
            'options' => [
                'h2' => esc_html__( 'H2', 'textdomain' ),
                'h3' => esc_html__( 'H3', 'textdomain' ),
                'h4'  => esc_html__( 'H4', 'textdomain' ),
                'h5' => esc_html__( 'H5', 'textdomain' ),
                'h6' => esc_html__( 'H6', 'textdomain' ),
                'span' => esc_html__( 'Span', 'textdomain' ),
                'p' => esc_html__( 'P', 'textdomain' ),
            ],
        ]
    );

    $this->add_control(
        'saasp_comparison_show_ribbon_3',
        [
            'label' => esc_html__( 'Ribbon', 'textdomain' ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'textdomain' ),
            'label_off' => esc_html__( 'Hide', 'textdomain' ),
            'return_value' => 'yes',
            'default' => 'no',
            'condition' => [
                'saasp_select_columns' => '3',
            ],
        ]
    );

    $this->add_control(
        'saasp_ribbon_title_3',
        [
            'label' => esc_html__( 'Title', 'textdomain' ),
            'type' =>  Controls_Manager::TEXT,
            'default' => esc_html__( 'Most Popular', 'textdomain' ),
            'condition' => [
                'saasp_comparison_show_ribbon_3' => 'yes',
            ],
        ]
    );

    $this->add_control(
        'saasp_comparison_show_countdown_3',
        [
            'label' => esc_html__( 'Countdown', 'textdomain' ),
            'type' =>  Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'textdomain' ),
            'label_off' => esc_html__( 'Hide', 'textdomain' ),
            'return_value' => 'yes',
            'default' => 'no',
            'condition' => [
                'saasp_select_columns' => '3',
            ],
        ]
    );

    $this->add_control(
        'saasp_comparison_expire_date_3',
        [
            'label' => esc_html__( 'Expire Date', 'textdomain' ),
            'type' =>  Controls_Manager::DATE_TIME,
            'label_block' => false,
            'condition' => [
                'saasp_comparison_show_countdown_3' => 'yes',
            ],
        ]
    );


    $this->add_control(
        'saasp_heding_combined_alignment',
        [
            'label' => esc_html__( 'Alignment', SAAS_PRICINNG_TXT_DOMAIN ),
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
            'selectors' => [
                '{{WRAPPER}} .saaspricing-table tr.price-table-head td' => 'text-align: {{VALUE}};',
            ],
        ]
    );
    

    $this->end_controls_section();
    

    // ------ Heading Style Content

    $this->start_controls_section(
        'saasp_comparison_style_section',
        [
            'label' => esc_html__( 'Header', SAAS_PRICINNG_TXT_DOMAIN ),
            'tab' =>   Controls_Manager::TAB_STYLE,
        ]
    );

    $this->add_control(
        'saasp_header_style_tab_heading',
        [
            'label' => esc_html__( 'Heading', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
        ]
    );

    $this->add_control(
        'saasp_heading_background_color',
        [
            'label' => esc_html__( 'Background Color', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .saaspricing-table tr.price-table-head' => 'background-color: {{VALUE}}',
            ],
        ]
    );

    $this->add_control(
        'saasp_heading_table_data_padding',
        [
            'label' => esc_html__( 'Padding', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em', 'custom' ],
            'selectors' => [
                '{{WRAPPER}} .price-table-head td' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->add_control(
        'saasp_header_style_tab_heading_title',
        [
            'label' => esc_html__( 'Title', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
        ]
    );

    $this->add_control(
        'saasp_heading_title_color',
        [
            'label' => esc_html__( 'Color', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price-table-head td span' => 'color: {{VALUE}}',
            ],
        ]
    );
    
    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'saasp_heading_title_typography',
            'selector' => '{{WRAPPER}} .price-table-head td span',
        ]
    );

    $this->add_control(
        'saasp_header_style_tab_heading_des',
        [
            'label' => esc_html__( 'Description', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::HEADING,
        ]
    );

    $this->add_control(
        'saasp_heading_des_color',
        [
            'label' => esc_html__( 'Color', SAAS_PRICINNG_TXT_DOMAIN ),
            'type' =>  Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price-table-head td small' => 'color: {{VALUE}}',
            ],
        ]
    );
    
    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'saasp_heading_des_typography',
            'selector' => '{{WRAPPER}} .price-table-head td small',
        ]
    );

    

    $this->end_controls_section();
	
}

protected function render() {
 $settings = $this->get_settings_for_display();
?>
  <!-- pricing comparison table start  -->
  <div class="saaspricing-main table-responsive-xl position-relative">
            <table class="saaspricing-table" role="presentation">
                <!-- table header start  -->
                <thead class="tableHeader" id="tableHeader">

                    <!-- highlights the most popular plan -->
                    <?php
                    if($settings['saasp_comparison_show_ribbon_1'] != "no" || $settings['saasp_comparison_show_countdown_1'] != "no" || $settings['saasp_comparison_show_ribbon_2'] != "no" || $settings['saasp_comparison_show_countdown_2'] != "no" || $settings['saasp_comparison_show_ribbon_3'] != "no" || $settings['saasp_comparison_show_countdown_3'] != "no"){
                    ?>
                    <tr>
                        <td></td>
                        <?php
                        if($settings['saasp_comparison_show_ribbon_1'] != "no" || $settings['saasp_comparison_show_countdown_1'] != "no" ){
                        ?>
                        <td class="saaspricing-table-popular">
                            <div><?php echo esc_html($settings['saasp_ribbon_title_1']); ?></div>
                            <div class="saaspricing-countdown py-1 px-2 fs-sm text-dark rounded" data-expire-date-1="<?php echo "hello" //esc_attr($settings['saasp_comparison_expire_date_1']); ?>"> </div>
                        </td>
                        <?php
                        }
                        if($settings['saasp_comparison_show_ribbon_1'] == "no" && $settings['saasp_comparison_show_countdown_1'] == "no" && $settings['saasp_comparison_show_ribbon_2'] != "no" && $settings['saasp_comparison_show_countdown_2'] != "no"){
                        echo '<td></td>';
                        }
                        ?>
                        <?php
                        if($settings['saasp_comparison_show_ribbon_2'] != "no" || $settings['saasp_comparison_show_countdown_2'] != "no" ){
                        ?>
                        <td class="saaspricing-table-popular">
                            <div class="">Second popular</div>
                            <div class="saaspricing-countdown py-1 px-2 fs-sm text-dark rounded" > </div>
                        </td>
                       <?php
                        }
                        if($settings['saasp_comparison_show_ribbon_3'] == "no" && $settings['saasp_comparison_show_countdown_3'] == "no" && $settings['saasp_comparison_show_ribbon_2'] != "no" && $settings['saasp_comparison_show_countdown_2'] != "no"){
                            echo '<td></td>';
                        }
                        if($settings['saasp_comparison_show_ribbon_1'] == "no" && $settings['saasp_comparison_show_countdown_1'] == "no" && $settings['saasp_comparison_show_ribbon_2'] == "no" && $settings['saasp_comparison_show_countdown_2'] == "no"){
                            echo '<td></td>';
                            echo '<td></td>';
                        }
                        if($settings['saasp_comparison_show_ribbon_3'] != "no" || $settings['saasp_comparison_show_countdown_3'] != "no"){
                       ?>
                        <td class="saaspricing-table-popular">
                            <div class="">Third popular</div>
                            <div class="saaspricing-countdown py-1 px-2 fs-sm text-dark rounded" > </div>
                        </td>
                        <?php
                        }
                        ?>
                    </tr>
                    <?php
                    }
                    ?>
                    <!-- package title start -->

                    <tr class="price-table-head">
                        <td></td>
                        <?php
                        for ( $i = 1; $i <= $settings['saasp_select_columns'] ; $i++ ) {
                           ?>
                            <td>
                            <span><?php echo esc_html($settings['saasp_header_title_text_'.$i]); ?></span>
                            <br><small class="fs-sm"><?php echo esc_html($settings['saasp_header_title_des_'.$i]); ?></small>
                            </td>
                           <?php
                        }
                        ?>
                    </tr>

                    <!-- package header (icon, pricing, reviews, countdown timer) start -->
                    <tr>
                        <td> <span class="d-block fs-3 mb-3" role="heading">SaasPricing Comparison</span>
                            <span class="d-block fs-sm w-75 w-sm-100">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Veritatis, impedit.</span>
                        </td>

                        <td class="price saaspricing-pricing">
                            <!-- package image  -->
                            <a class="image-popup-vertical-fit" href="https://saaspricing.netlify.app/assets/images/1.svg">
                                <img src="https://saaspricing.netlify.app/assets/images/1.svg" width="80" height="80" alt=" it's a free package ">
                            </a>
                            <div><span>Free</span></div>
                        </td>

                        <td class="price saaspricing-pricing">
                            <!-- package image  -->
                            <a class="image-popup-vertical-fit" href="https://saaspricing.netlify.app/assets/images/2.svg">
                                <img src="https://saaspricing.netlify.app/assets/images/2.svg" width="80" height="80" alt="it's for personal usage">
                            </a>
                            <!-- pricing  -->
                            <div> <s class="text-danger"><span>$</span><span>20</span></s>
                                <span>€</span><span>9</span><span>/</span><span>mo</span>
                            </div>
                            <div class="ratings my-3">
                                <div class="saaspricing-star-icon fs-6">
                                    <span>
                                        <i class="fas fa-star-half saaspricing-star-left saaspricing-yellow"></i>
                                        <i class="fas fa-star-half saaspricing-star-right saaspricing-yellow"></i>
                                    </span>
                                    <span>
                                        <i class="fas fa-star-half saaspricing-star-left saaspricing-yellow"></i>
                                        <i class="fas fa-star-half saaspricing-star-right saaspricing-yellow"></i>
                                    </span>
                                    <span>
                                        <i class="fas fa-star-half saaspricing-star-left saaspricing-yellow"></i>
                                        <i class="fas fa-star-half saaspricing-star-right saaspricing-yellow"></i>
                                    </span>
                                    <span>
                                        <i class="fas fa-star-half saaspricing-star-left saaspricing-yellow"></i>
                                        <i class="fas fa-star-half saaspricing-star-right saaspricing-yellow"></i>
                                    </span>
                                    <span>
                                        <i class="fas fa-star-half saaspricing-star-left saaspricing-yellow"></i>
                                        <i class="fas fa-star-half saaspricing-star-right"></i>
                                    </span>

                                    <small class="text-success"> (3K+) </small>
                                </div>
                            </div>
                        </td>
                        <td class="price saaspricing-pricing">
                            <!-- package image  -->
                            <a class="image-popup-vertical-fit" href="https://saaspricing.netlify.app/assets/images/3.svg">
                                <img src="https://saaspricing.netlify.app/assets/images/3.svg" width="80" height="80" alt="it's for professional usage">
                            </a>
                            <div><span>€</span>39<span>/</span><span>mo</span></div>

                        </td>
                    </tr>
                    <!-- package header (icon, pricing, reviews, countdown timer) end -->

                </thead>
                <!-- table header end  -->

                <!-- table body start  -->
                <tbody>

                    <!-- features section start -->

                    <!-- feature row 1  -->
                    <tr>
                        <td><span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 1</span>
                        </td>

                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <!-- feature row 2  -->
                    <tr>
                        <td>
                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 2</span>

                        <td>30 Days</td>
                        <td>90 Days</td>
                        <td>180 Days</td>
                    </tr>
                    <!-- feature row 3  -->
                    <tr>
                        <td>
                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 3</span>

                        <td><i class="fas fa-times"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <!-- feature row 4  -->
                    <tr>
                        <td>
                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 4</span>
                        </td>
                        <td><i class="fas fa-times"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <!-- feature row 5  -->
                    <tr>
                        <td><span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 5</span></td>
                        <td><i class="fas fa-times"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <!-- feature row 6  -->
                    <tr>
                        <td><span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 6</span></td>
                        <td><i class="fas fa-times"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <!-- feature row 7  -->
                    <tr>
                        <td><span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 7</span></td>
                        <td><i class="fas fa-times"></i></td>
                        <td><i class="fas fa-times"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <!-- feature row 8  -->
                    <tr>
                        <td><span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 8</span></td>
                        <td><i class="fas fa-times"></i></td>
                        <td><i class="fas fa-times"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <!-- feature row 9  -->
                    <tr>
                        <td><span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora."
                                class="price-table-help">
                                <i class="far fa-fw fa-question-circle"></i>
                            </span> <span>Feature 9</span></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>


                    <!-- features section end -->

                </tbody>
                <!-- table body end  -->

                <!-- table footer start  -->
                <tfoot>
                    <!-- cta start  -->
                    <tr>
                        <td></td>
                        <td class="footer-cta">

                            <a href="#" class="btn btn-dark text-nowrap" role="button"> Get started <span
                                    class="ms-2"><i class="fas fa-arrow-right"></i></span> </a>
                            <a class="d-block fs-sm fw-normal mt-3" href="#"> Learn More...</a>
                        </td>
                        <td class="footer-cta">

                            <a href="#" class="btn btn-dark text-nowrap" role="button"> Get started <span
                                    class="ms-2"><i class="fas fa-arrow-right"></i></span> </a>
                            <a class="d-block fs-sm fw-normal mt-3" href="#"> Free trial?</a>
                        </td>
                        <td class="footer-cta">

                            <a href="#" class="btn btn-dark text-nowrap" role="button"> Get started <span
                                    class="ms-2"><i class="fas fa-arrow-right"></i></span> </a>
                            <a class="d-block fs-sm fw-normal mt-3" href="#"> Free trial?</a>
                        </td>
                    </tr>
                    <!-- cta start  -->
                </tfoot>
                <!-- table footer end  -->

            </table>
        </div>
        <!-- pricing comparison table end  -->
<?php
 }
}