<template>
    <div class="col-md-12 price-plan-slider-main-wrap">
        <div
        v-for="(slide, index) in slides" 
        :key="index" 
        :class="{ active: currentIndex === index }"
        class="container-lg price-plan-slider">
            
            <div class="row sec-6-heading-wrap">
                
                <div class="col-md-4">
                    <h2 class="sec-main-heading">{{ slide.title }}</h2>
                </div>
                <div class="col-md-4">
                    <p class="sec-6-text">{{ slide.description }}</p>
                </div>
                <div class="col-md-4 text-right">
                    <p class="sec-6-text text-right m-0"> Need custom plan?</p>
                    <a href="#" class="btn btn-primary-link">Contact Us</a>
                </div>
                
            </div>

            <div class="row sec-6-pricing-row">
                <div
                v-for="(plan, index) in slide.plans" :key="index"
                :class="`price-box-wrap-${index + 1}`" 
                class="col-md-4 price-box-wrap">
                    <div class="price-box-wrap-inner">
                        
                        <div class="row title-box box-{{ index + 1 }}">
                            <h2 class="col-md-6">{{ plan.name }}</h2>
                            <p class="tag col-md-6"><span class="tag-inner">{{ plan.tag }}</span></p>
                        </div>
                        <div class="price-box">
                            <span class="price">{{ plan.price }}</span><span class="duration">{{ plan.duration }}</span>   
                        </div>
                        <div class="price-btn-warp">
                            <a :href="plan.btnLink" class="price-btn">Get Started</a>
                        </div>
                        <div class="price-feature-box">
                            <h6>Features</h6>
                            <ul>
                                <li v-for="(feature, index) in plan.features" :key="index"> <i aria-hidden="true" class="fas fa-check"></i> {{ feature }}</li>
                            </ul>    
                        </div>  

                    </div>
                </div>

                <!-- <div class="col-md-4 price-box-wrap price-box-wrap-2">
                    <div class="price-box-wrap-inner">
                        
                        <div class="row title-box box-1">
                            <h2 class="col-md-6">Pro</h2>
                            <p class="tag col-md-6"><span class="tag-inner">Great</span></p>
                        </div>
                        <div class="price-box">
                            <span class="price">$500</span><span class="duration">/Month</span>   
                        </div>
                        <div class="price-btn-warp">
                            <a href="" class="price-btn">Get Started</a>
                        </div>
                        <div class="price-feature-box">
                            <h6>Features</h6>
                            <ul>
                                <li> <i aria-hidden="true" class="fas fa-check"></i> Social media management for up</li>
                                <li> <i aria-hidden="true" class="fas fa-check"></i> Premium SEO, including link</li>
                                <li> <i aria-hidden="true" class="fas fa-check"></i> Weekly analytics, reporting</li>
                            </ul>    
                        </div>  

                    </div>
                </div>

                <div class="col-md-4 price-box-wrap price-box-wrap-3">
                    <div class="price-box-wrap-inner">
                        
                        <div class="row title-box box-1">
                            <h2 class="col-md-6">Pro</h2>
                            <p class="tag col-md-6"><span class="tag-inner">Great</span></p>
                        </div>
                        <div class="price-box">
                            <span class="price">$200</span><span class="duration">/Month</span>   
                        </div>
                        <div class="price-btn-warp">
                            <a href="" class="price-btn">Get Started</a>
                        </div>
                        <div class="price-feature-box">
                            <h6>Features</h6>
                            <ul>
                                <li> <i aria-hidden="true" class="fas fa-check"></i> Full social media management</li>
                                <li> <i aria-hidden="true" class="fas fa-check"></i> Premium SEO, including link building</li>
                                <li> <i aria-hidden="true" class="fas fa-check"></i> Weekly analytics, reporting, strategy</li>
                            </ul>    
                        </div>  

                    </div>
                </div> -->
                
            </div>

        </div>

    </div>
</template>

<script>
export default {
    props: {
        
    },
    data() {
        return {
            currentIndex: 0,
            slides: [
                {
                    title: 'Choose your perfect plan for web development',
                    description: 'Lorem ipsum dolor sit amet consectetur. Lacinia ante sed amet laoreet cras',
                    plans: [
                        {
                            name: 'Elite',
                            price: '$1000',
                            tag: 'Popular',
                            duration: '/Month',
                            btnLink:"#1",
                            features: [
                                'Full social media management',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting, strategy',
                                'Unlimited posts + 8 premium',
                            ]
                        },
                        {
                            name: 'Pro',
                            price: '$500',
                            tag: 'Great',
                            duration: '/Month',
                            btnLink:"#2",
                            features: [
                                'Social media management for up',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting strategy',
                            ]
                        },
                        {
                            name: 'Pro',
                            price: '$200',
                            tag: 'Great',
                            duration: '/Month',
                            btnLink:"#2",
                            features: [
                                'Social media management for up',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting strategy',
                            ]
                        }

                    ]
                },
                {
                    title: 'Choose your perfect plan for mobile development',
                    description: 'Lorem ipsum dolor sit amet consectetur. Lacinia ante sed amet laoreet cras',
                    plans: [
                        {
                            name: 'Elite',
                            price: '$800',
                            tag: 'Popular',
                            duration: '/Month',
                            btnLink:"#1",
                            features: [
                                'Full social media management',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting, strategy',
                                'Unlimited posts + 8 premium',
                            ]
                        },
                        {
                            name: 'Pro',
                            price: '$400',
                            tag: 'Great',
                            duration: '/Month',
                            btnLink:"#2",
                            features: [
                                'Social media management for up',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting strategy',
                            ]
                        },
                        {
                            name: 'Pro',
                            price: '$100',
                            tag: 'Great',
                            duration: '/Month',
                            btnLink:"#2",
                            features: [
                                'Social media management for up',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting strategy',
                            ]
                        }

                    ]
                },
                {
                    title: 'Choose your perfect plan for Socal Media marketing',
                    description: 'Lorem ipsum dolor sit amet consectetur. Lacinia ante sed amet laoreet cras',
                    plans: [
                        {
                            name: 'Elite',
                            price: '$500',
                            tag: 'Popular',
                            duration: '/Month',
                            btnLink:"#1",
                            features: [
                                'Full social media management',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting, strategy',
                                'Unlimited posts + 8 premium',
                            ]
                        },
                        {
                            name: 'Pro',
                            price: '$250',
                            tag: 'Great',
                            duration: '/Month',
                            btnLink:"#2",
                            features: [
                                'Social media management for up',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting strategy',
                            ]
                        },
                        {
                            name: 'Pro',
                            price: '$50',
                            tag: 'Great',
                            duration: '/Month',
                            btnLink:"#2",
                            features: [
                                'Social media management for up',
                                'Premium SEO, including link building',
                                'Weekly analytics, reporting strategy',
                            ]
                        }

                    ]
                },
            ],
            intervalId: null // Store the interval ID
        };
    },
    methods: {
        next() {
            // Updated condition to increment currentIndex
            if (this.currentIndex < this.slides.length - 1) {
                this.currentIndex += 1; // Move to the next slide
            } else {
                this.currentIndex = 0; // Reset to the first slide
            }
        },
        prev() {
           // Updated logic to decrement currentIndex
           if (this.currentIndex > 0) {
                this.currentIndex -= 1; // Move to the previous slide
            } else {
                this.currentIndex = this.slides.length - 1; // Wrap to the last slide
            }
        },
        // New method to automatically move to the next slide every minute
        autoNext() {
            this.intervalId = setInterval(() => { // Store the interval ID
                this.next();
            }, 5000); // 60000 milliseconds = 1 minute
        }
    },
    mounted() {
        this.autoNext(); // Start the autoNext method when the component is mounted
    },
    beforeDestroy() {
        clearInterval(this.intervalId); // Clear the interval when the component is unmounted
    }
};
</script>

<style>
.slider {
    position: relative;
    width: 100%;
    max-width: 600px;
    margin: auto;
}

.price-plan-slider-main-wrap {
    height: 870px;
    overflow: hidden;
    position: relative;
}
.price-plan-slider
{
    height: 0px;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 100%;
    right: 0;
    bottom: 0;
    transition: all 1s ease-in-out;
}
.price-plan-slider.active
{
    height: auto;
    opacity: 1;
    left: 0%;
}


</style> 