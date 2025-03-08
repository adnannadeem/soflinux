<template>
    
    <!--services-tab-main-wrap-open-->
    <div class="col-md-12 services-tab-main-wrap">

        <!--services-tab-sec-row-open-->
        <div class="row services-tab-sec-row">
            
            <!--left-icon-wrap-open-->
            <div class="icon-wrap left-icon-wrap" @click="ServiceTabPrev()">
                <span class="fas fa-angle-left">  </span>
            </div>
            <!--left-icon-wrap-close-->
            
            <!--services-tab-box-wrap-open-->
            <div v-for="(service, index) in services" :key="index" class="col-md-2 services-tab-box-wrap">
                
                <!--services-tab-box-open-->
                <div 
                    class="services-tab-box"
                    :class="{ active: serviceActiveIndex === index }"
                    @click="setServiceActiveOnClick(index)"
                >

                    <img  
                        class="img-fluid" 
                        :src="service.icon" 
                        alt="Image"
                    >
                    <p>{{ service.description }}</p>

                </div>
                <!--services-tab-box-close-->

            </div>
            <!--services-tab-box-wrap-close-->

            <!--left-icon-wrap-open-->
            <div class="icon-wrap right-icon-wrap" @click="ServiceTabNext()">
                <span class="fas fa-angle-right"></span>
            </div>
            <!--left-icon-wrap-close-->

        </div>
        <!--services-tab-sec-row-close-->

        <!--services-tab-sec-content-row-open-->
        <div class="row services-tab-sec-content-row">

            <!--services-tab-sec-content-wrap-open-->
            <div 
                v-for="(service, index) in services" 
                :key="index" 
                class="col-mm-12 services-tab-sec-content-wrap"
                :class="{
                    'active': serviceActiveIndex === index,
                    'next': serviceActiveIndex === index - 1 || (serviceActiveIndex === 0 && index === serviceActiveIndex + 1),
                    'prev': serviceActiveIndex === index + 1 || (serviceActiveIndex === index === services.length - 1)
                }"
            >

                <!--services-tab-sec-content-inner-row-open-->
                <div 
                    class="row services-tab-sec-content-inner-row"
                    :style="{ backgroundImage: `url(${baseUrl}imgs/services-tab-box-bg-2.png)` }"
                    >
                    
                    <!---services-tab-sec-content-box-open-->
                    <div class="col-md-6 services-tab-sec-content-box">
                        <h2>{{ service.boxContent.title }}</h2>
                        <p>{{ service.boxContent.desc }}</p>
                        <a href="#" class="btn btn-primary-website btn-website-round">Learn More</a>
                    </div>
                    <!---services-tab-sec-content-box-close-->

                    <!--services-tab-sec-img-wrap-open-->
                    <div class="col-md-6 services-tab-sec-img-wrap">
                        <img :src="baseUrl + 'imgs/sec-2-img.png'" class="img-fluid" />
                    </div>
                    <!--services-tab-sec-img-wrap-open-->

                </div>
                <!--services-tab-sec-content-inner-row-close-->

            </div>
            <!--services-tab-sec-content-wrap-close-->

        </div>
        <!--services-tab-sec-content-row-close-->

    </div>
    <!--services-tab-main-wrap-close-->

</template>

<script>
export default {
    props: {
      baseUrl: {
        type: String,
        required: true
      }  
    },
    data() {
        return {
           serviceActiveIndex:0, 
           services: [
            {
                icon: this.baseUrl+'imgs/icon1.png',
                description: 'Social Media Management',
                boxContent:{
                    "title":"Social Media Management",
                    "desc":"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum.",
                },
                
            },
            {
                icon: this.baseUrl+'imgs/icon2.png',
                description: 'Game Development',
                boxContent:{
                    "title":"Game Designing and Development",
                    "desc":"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum.",
                },
            },
            {
                icon: this.baseUrl+'imgs/icon3.png',
                description: 'Web Designing & Development',
                boxContent:{
                    "title":"Web Designing and Development",
                    "desc":"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum.",
                },
            },
            {
                icon: this.baseUrl+'imgs/icon4.png',
                description: 'E-commerce Solutions',
                boxContent:{
                    "title":"E-commerce Solutions & Consultancy",
                    "desc":"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum.",
                },
            },
            {
                icon: this.baseUrl+'imgs/icon5.png',
                description: 'Brand Creative',
                boxContent:{
                    "title":"Complete Brand Identity Creation",
                    "desc":"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum.",
                },
            },
            {
                icon: this.baseUrl+'imgs/icon6.png',
                description: 'App Development',
                boxContent:{
                    "title":"Mobile App Development ",
                    "desc":"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum.",
                },
            },
            
           ]
        };
    },
    methods: {
        ServiceTabNext() {

            let serviceActiveIndex = this.serviceActiveIndex;
            let serviceLength = this.services.length - 1;
            if(serviceActiveIndex < serviceLength)
            {
                this.serviceActiveIndex = serviceActiveIndex + 1;
            }
            else
            {
                this.serviceActiveIndex = 0
            }
            
        },
        ServiceTabPrev() {
            let serviceActiveIndex = this.serviceActiveIndex;
            if(serviceActiveIndex > 0)
            {
                this.serviceActiveIndex = serviceActiveIndex - 1;
            }
            else
            {
                this.serviceActiveIndex = this.services.length -1;
            }
        },
        setServiceActiveOnClick(index) {
            this.serviceActiveIndex = index;
        },
        
    },
    mounted() {
      
    },
    beforeDestroy() {
        
    },
    computed: {
        
    }
};
</script>

<style scoped>

.services-tab-sec-row {
    padding: 0px 40px;
    position: relative;
}
.services-tab-main-wrap .services-tab-box
{
    border-radius: 15px;
    background: linear-gradient(34deg, #072441 0%, #072441 1%, #080e1e 60%);
    padding: 30px 0px;
    min-height: 190px;
    cursor: pointer;
    transition: ease-in 0.5s;
    position: relative;
    z-index: 1;
    
    /* Border Gradient Trick */
    border: 3px solid transparent;
    background-clip: padding-box, border-box;
    background-origin: padding-box, border-box;
    
    
}
.services-tab-main-wrap .services-tab-box:hover
{
    background: linear-gradient(34deg, #072441 0%, #072441 1%, #080e1e 60%) padding-box, 
    linear-gradient(to bottom, #5cdaf9, #9b64fe) border-box;
}
.services-tab-main-wrap .services-tab-box.active
{
    background: linear-gradient(34deg, #072441 0%, #072441 1%, #080e1e 60%) padding-box, 
    linear-gradient(to bottom, #5cdaf9, #9b64fe) border-box;
}

.services-tab-main-wrap .services-tab-box .img-fluid {
    display: block;
    max-width: 40px;
    margin: 0 auto;
    max-height: 40px;
}
.services-tab-main-wrap .services-tab-box p
{
    font-size: 20px;
    color: #ffffff;
    font-weight: 500;
    font-family: "GalanoGrotesque";
    text-align: center;
    margin: 0px;
    padding: 20px 6px 0px;
    line-height: 30px;
}

.services-tab-main-wrap .icon-wrap
{
    position: absolute;
    width: 30px;
    height: 30px;
    border-radius: 15px;
    background-color: #55585f;
    color: #77797f;
    top: 80px;
    padding: 5px 0px 0px 10px;
    cursor: pointer;
}
.services-tab-main-wrap .icon-wrap:hover
{
    background-color: #ffffff;
    color: #4013d1;
}
.services-tab-main-wrap .icon-wrap.left-icon-wrap
{
    left: 0px;
}
.services-tab-main-wrap .icon-wrap.right-icon-wrap
{
    right: 0px;
}


.services-tab-sec-content-row
{
    position: relative;
}
.services-tab-sec-content-wrap
{
    padding: 20px 15px 30px;
    position: absolute;
    top: 0px;
    left: 0;
    opacity: 0;
    z-index: 1;
    transform: translatey(10%); /* Start off-screen*/
    transition: transform 0.5s ease-in-out, opacity 1s;

    
}

/* .services-tab-sec-content-wrap.next
{
    opacity: 0;
    transition: transform 0.5s ease-in-out, opacity 1s;
    transform: translateX(10%)
}

.services-tab-sec-content-wrap.prev
{
    opacity: 0;
    transform: translateX(-10%)
} */

.services-tab-sec-content-wrap.active
{
    padding: 20px 15px 30px;
    top: 0px;
    left: 0%;
    position: relative;
    opacity: 1;
    z-index: 2;
    transform: translatey(0); /* Bring to view */
}

.services-tab-sec-content-wrap .services-tab-sec-content-inner-row
{
    padding: 60px 90px 0px;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 30px;
    position: relative;
}
.services-tab-sec-content-wrap h2
{
    font-size: 40px;
    line-height: 50px;
    color: #ffffff;
    font-weight: bold;
    font-family: "GalanoGrotesque";
    padding: 0px 30px 20px 0px;
    margin: 0px;
}

.services-tab-sec-content-wrap p 
{
    font-size: 19px;
    letter-spacing: 0px;
    line-height: 30px;
    color: #ffffff;
    font-family: "GalanoGrotesque";
    margin: 0px;
    padding: 0px 40px 20px 0px;
}

.services-tab-sec-content-wrap .btn-primary-website
{
    border-radius: 28px;
    background-color: #020610;
    color: #fff;
    background-image: none;
    padding: 10px 45px;
}
.services-tab-main-wrap .services-tab-sec-img-wrap {
    position: relative;
    top: 25px;
}


</style> 