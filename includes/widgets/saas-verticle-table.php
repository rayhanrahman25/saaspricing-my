<?php
/**
 * Class: SaasVerticleTable
 * Name: Saas Verticle Table
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
 * Class SaasVerticleTable
 */

class SaasVerticleTable extends \Elementor\Widget_Base {

public function get_name() {
    return 'saasVerticle';
}

public function get_title() {
    return esc_html__( 'Verticle Pricing Table', SAAS_PRICINNG_TXT_DOMAIN );
}

public function get_icon() {
    return 'eicon-price-table';
}

public function get_categories() {
    return ['saas_pricing_category'];
}

public function get_keywords() {
    return [ 'pricing', 'tables' , 'saaspricing', 'verticle'];
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

	
}

protected function render() {
 $settings = $this->get_settings_for_display();
?>
  <!-- basic pricing card start   -->
  <div class="pricing-cards-all my-5">

<div class="row">
    <!-- pricing card 1 -->
    <div class="col-md-6 col-lg-4 col-xl-3 mt-auto">
        <div class="card single-pricing-card text-center">
            <!-- card header start -->
            <div class="card-header bg-success">
                <p class="text-uppercase text-center text-light fs-6 mb-0"> <small>Popular</small> </p>
            </div>
            <!-- card header end -->

            <!-- card body start -->
            <div class=" card-body position-relative">

                <!-- heading  -->
                <h2 class="card-title text-dark my-4 h3">Starter</h2>

                <!-- sub-heading  -->
                <p class="text-muted mb-2">
                    All the essentials for starting a business
                </p>

                <!-- pricing  -->
                <div class="text-center">
                    <del class="fs-4 "> <span>$</span> <span class="fw-bold">40</span> </del>
                    <span class="h1 saaspricing-heading fw-bold">$12<small
                            class="text-muted  saaspricing-align-super fs-5">/mo</small></span>
                    <span class="h1 saaspricing-heading fw-bold d-none">$12<small
                            class="text-muted  saaspricing-align-super fs-5">/mo</small></span>
                </div>

                <!-- countdown -->
                <div class="text-center my-3 mb-4  fw-bold ">
                    <span class="saaspricing-countdown text-danger border rounded-3 px-2 py-1 border-danger"
                        id="countdown"></span>
                </div>

                <!-- ratings and reviews -->
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

                <!-- feature list -->
                <div class="feature-list py-4 px-2 my-3 saaspricing-bg-warm">
                    <p class="text-uppercase fw-bold" style="font-size: 12px;">What's included</p>
                    <ol class="list-unstyled mb-0">
                        <li class="mb-3">
                            <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- card body end -->

            <!-- cta start  -->
            <div class="card-footer">

                <a href="#" class="btn saaspricing-btn-1 btn-dark d-block mb-3 mt-3 text-capitalize">Buy
                    Starter <span class="ms-2"> <i class="fas fa-arrow-right"></i></span></a>

                <div class="mb-3">
                    <a class=" d-block fs-sm" href="#">Looking for a free trial?</a>
                </div>
            </div>
            <!-- cta end  -->
        </div>
    </div>

    <!-- pricing card 2 -->
    <div class="col-md-6 col-lg-4 col-xl-3 mt-auto">
        <div class="card single-pricing-card text-center">

            <!-- card body start -->
            <div class="card-body position-relative">

                <!-- heading  -->
                <h2 class="card-title text-dark my-4 h3">Personal</h2>


                <!-- sub-heading  -->
                <p class="text-muted mb-2">
                    All the essentials for starting a business and 27/7 support.
                </p>

                <!-- pricing  -->
                <div class="text-center">
                    <span class="h1 saaspricing-heading fw-bold">$12<small
                            class="text-muted  saaspricing-align-super fs-5">/mo</small></span>
                </div>

                <!-- ratings and reviews -->
                <div class="ratings my-3">
                    <div class="star-icon">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <small class="text-success"> (3K+) </small>
                    </div>
                </div>

                <!-- feature list -->
                <div class="feature-list py-4 px-2 my-3 saaspricing-bg-warm">
                    <p class="text-uppercase fw-bold" style="font-size: 12px;">What's included</p>
                    <ol class="list-unstyled mb-0">
                        <li class="mb-3">
                            <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- card body end -->

            <!-- cta start  -->
            <div class="card-footer">

                <a href="#" class="btn saaspricing-btn-1 btn-dark d-block mb-3 mt-3 text-capitalize">Buy
                    Starter <span class="ms-2"> <i class="fas fa-arrow-right"></i></span> </a>

                <div class="mb-3">
                    <a class=" d-block fs-sm" href="#">Looking for a free trial?</a>
                </div>
            </div>
            <!-- cta end  -->
        </div>
    </div>
</div>

</div>
</div>
<!-- basic pricing card start -->
<?php
 }
}