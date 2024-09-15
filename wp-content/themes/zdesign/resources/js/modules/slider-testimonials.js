import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

const splide = new Splide('.splide.splide-testimonials', {
  type: 'loop',  
  drag: 'free',  
  focus: 'center', 
  perPage: 3,  
  autoScroll: {
    speed: 1,
    pauseOnHover: true,  
    pauseOnFocus: true,  
  },
  gap: '20px',  
  extensions: { AutoScroll },  
});

splide.mount();
