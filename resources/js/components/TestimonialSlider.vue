<template>
  
    <!--sec-heading-main-wrap-open-->
    <div class="col-md-12 sec-heading-main-wrap ">
        <p>Testimonials</p>
        <h2>
            <span>What Our</span>
            <span class="gradient-text"> Customers Say</span>
            <div class="handle-slider-btns-wrap">
                <button href="#" class="handle-slider-btn-prev" @click="prev">
                    <i class="fa fa-angle-left"></i>
                </button>
                <button href="#" class="handle-slider-btn-next" @click="next">
                    <i class="fa fa-angle-right"></i>
                </button>
            </div>
        </h2>
        
    </div>
    <!--sec-heading-main-wrap-close-->

    <!--services-tab-main-wrap-open-->
    <div class="col-md-12 testimonial-slider-main-wrap">

      <!--testimonial-slider-main-row-open-->
      <div class="row testimonial-slider-main-row"> 

        <!--testimonial-slider-main-box-open-->
        <div 
            v-for="(testimonial, index) in testimonials" 
            :key="index" 
            class="col-md-6 testimonial-slider-main-box"
            :class="{ 
              'active': currentIndex === index || currentIndex === index - 1,
              'next': currentIndex === index - 2,
              'prev': currentIndex === index + 1
            }"
        >
            
            <!--testimonial-slider-box-open-->
            <div class="testimonial-slider-box">
              <div class="star-rating-wrap">
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
              </div>

              <p class="testimonial-slider-main-box-content">
                  {{ testimonial.text }}              
              </p>

              <p class="testimonial-slider-user-box">
                  {{ testimonial.name }}
              </p>
            </div>
            <!--testimonial-slider-box-open-->
            
        </div>
        <!--testimonial-slider-main-box-close-->

        <div class="col-md-12 testimonial-slider-bolits text-center">
          <div 
          class="testimonial-slider-bolit" 
          v-for="(testimonial, index) in testimonials" :key="index" :class="{ 'active': currentIndex === index || currentIndex === index - 1 }"></div>
        </div>

      </div>
      <!--testimonial-slider-main-row-close-->

    </div>
    <!--services-tab-main-wrap-close-->

</template>

<script>
export default {
  data() {
    return {
      currentIndex: 0,
      testimonials: [
        {
          name: 'John Smith',
          position: 'CEO at TechCorp',
          text: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
          avatar: '/path/to/avatar1.jpg'
        },
        {
          name: 'Sarah Johnson',
          position: 'Designer',
          text: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
          avatar: '/path/to/avatar2.jpg'
        },
        {
          name: 'Mike Wilson',
          position: 'Developer',
          text: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
          avatar: '/path/to/avatar3.jpg'
        },
        {
          name: 'Mike Wilson',
          position: 'Developer',
          text: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
          avatar: '/path/to/avatar3.jpg'
        }
      ]
    }
  },
  methods: {
    next() {
        
        let testimonialActiveIndex = this.currentIndex;
        let testimonialLength = this.testimonials.length - 1;
        if(testimonialActiveIndex < testimonialLength)
        {
            this.currentIndex = testimonialActiveIndex + 1;
        }
              else
        {
            this.currentIndex = 0
        }
      
    },
    prev() {
        let testimonialActiveIndex = this.currentIndex;
        if(testimonialActiveIndex > 0)
        {
            this.currentIndex = testimonialActiveIndex - 1;
        }
        else
        {
            this.currentIndex = this.testimonials.length -1;
        }
    }
  },
  mounted() {
    // Optional: Auto-advance slides
    //setInterval(this.next, 5000)
  },
  beforeDestroy() {
    clearInterval(this.interval)
  }
}
</script>

<style>
.testimonial-slider-main-box{
  padding-bottom: 50px;
}
.testimonial-slider-main-wrap
{
  padding-top: 60px;
}
.testimonial-slider-box {
    border-radius: 15px;
    background-image: linear-gradient(34deg, #07244170 0%, #07244194 1%, #080e1e 100%);
    border: 1px solid;
    padding: 45px 30px;
}
.testimonial-slider-main-box .star-rating-wrap .fa-star
{
  font-size: 20px;
  color: #fdbd11;
  text-align: center;
  padding: 0px 4px;
}
.testimonial-slider-main-box .testimonial-slider-main-box-content{
  font-size: 22px;
  color: #ffffff;
  letter-spacing: 0px;
  padding: 20px 0px 0px;
  line-height: 36px;
  margin: 0px;
  font-family: "GalanoGrotesque";
}
.testimonial-slider-main-box .testimonial-slider-user-box
{
  font-size: 22px;
  font-family: "GalanoGrotesque";
  letter-spacing: 0px;
  line-height: 36px;
  font-weight: bold;
  color: #ffffff;
  padding-top: 15px;
}

.testimonial-slider-main-row {
    position: relative;
}
.testimonial-slider-main-box
{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}
.testimonial-slider-main-box.active {
    position: relative; 
    opacity: 1;
    transition: opacity 0.5s ease-in-out;
    transform: scale(1);
}
  /* .testimonial-slider-main-box.next, .testimonial-slider-main-box.prev {
    transform: scale(0.5);
    transition: transform 0.5s ease-in-out, opacity 1s;
    opacity: 0;
  } */

.testimonial-slider-bolit {
    opacity: 0.110;
    width: 15px;
    height: 15px;
    border-radius: 7px;
    background-color: #ffffff;
    display: inline-block;
    margin: 0px 3px;
    transition: all 0.3s ease;
}
.testimonial-slider-bolit.active {
  width: 16px;
  height: 16px;
  border-radius: 10px;
  background-image: linear-gradient(-87deg, #1775c3 0%, #1775c3 1%, #0b3d89 100%);
  opacity: 1;
  transition: all 0.3s ease;
}

</style>