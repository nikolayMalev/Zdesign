import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

const splide = new Splide( '.splide.splide-testimonials', {
  type   : 'loop',
  drag   : 'free',
  focus  : 'center',
  perPage: 1,
  autoScroll: {
    speed: 1,
  },
  extensions: { AutoScroll },
} );

splide.mount();
