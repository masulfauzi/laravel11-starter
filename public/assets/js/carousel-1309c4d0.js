import"./app-e81b91f2.js";/* empty css            */const i=`
  <div class="swiper swiper-with-custom-pagination">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <!-- ..... -->
    </div>
    <div class="swiper-slide">
      <!-- ..... -->
    </div>
    <div class="swiper-slide">
      <!-- ..... -->
    </div>
    <div class="swiper-slide">
      <!-- ..... -->
    </div>
    <div class="swiper-slide">
      <!-- ..... -->
    </div>
  </div>
  <div class="swiper-pagination swiper-pagination-custom"></div>

  <script>
    import Swiper, { Pagination } from 'swiper';

    const customPagination = new Swiper('.swiper-with-custom-pagination', {
      modules: [Pagination],
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="'+ className +'">'+ (index + 1) +'</span>';
          },
        }
    })
  <\/script>
`,e=`
  <div class="swiper swiper-custom">
    <div class="swiper-wrapper">
      <div class="swiper-slide" role="group" aria-label="1 / 5">
          <!--.....-->
      </div>
      <div class="swiper-slide" role="group" aria-label="2 / 5">
          <!--.....-->
      </div>
      <div class="swiper-slide" role="group" aria-label="3 / 5">
          <!--.....-->
      </div>
      <div class="swiper-slide" role="group" aria-label="4 / 5">
          <!--.....-->
      </div>
      <div class="swiper-slide" role="group" aria-label="5 / 5">
          <!--.....-->
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <script>
    import Swiper, { Navigation, Pagination } from 'swiper';
    
    const custom = new Swiper('.swiper-custom', {
      loop: true,
      modules: [Pagination, Navigation],
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  <\/script>
      
`,s=createCodeViewer("#custom-pagination-code-viewer",i),r=createCodeViewer("#custom-caroursel-code-viewer",e);s.render();r.render();
