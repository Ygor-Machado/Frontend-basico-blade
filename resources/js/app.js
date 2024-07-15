import './bootstrap';

import Alpine from 'alpinejs'
import Carousel from "./carousel";

window.Alpine = Alpine

Alpine.data('carousel', Carousel)

Alpine.start()
