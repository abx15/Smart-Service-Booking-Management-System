import './bootstrap';

import Alpine from 'alpinejs';

// Import Swiper
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay, EffectFade, Grid } from 'swiper/modules';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

window.Alpine = Alpine;

// Make Swiper available globally
window.Swiper = Swiper;
window.SwiperSlide = SwiperSlide;
window.SwiperModules = { Navigation, Pagination, Autoplay, EffectFade, Grid };

Alpine.start();
