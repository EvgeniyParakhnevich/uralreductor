@extends('main')
@section('head')
    @include('parts.head',['meta'=>$meta])
@endsection
@section('content')
    <main>
        <section class="cta">
            <div class="container cta__container">
                <div class="cta__img" data-aos="fade-up" data-aos-delay="250">
                    <picture>
                        <source type="image/png" srcset="resources/images/cta-img--desktop-large.png" media="(min-width:1440px)">
                        <source type="image/png" srcset="resources/images/cta-img--desktop.png" media="(min-width:1024px)">
                        <source type="image/png" srcset="resources/images/cta-img--tablet.png" media="(min-width:768px)">
                        <img src="resources/images/cta-img--mobile.png" loading="lazy" decoding="async" alt="image" width="550" height="322">
                    </picture>
                </div>
                <div class="cta__info">
                    <h1 class="title title-h1">Уралредуктор</h1>
                    <p class="cta__descr">Производство, подбор и ремонт  всех типов общепромышленных и крановых редукторов.</p>
                </div>
            </div>
        </section>

        <!-- <script>
            function restartAOSAnimationOnClick(elems) {
              const el = document.querySelectorAll(elems);
              el.forEach(element => {
                element.classList.remove('aos-animate');
                setTimeout(() => {
                  element.classList.add('aos-animate');
                }, 250);
              });
            }
            </script> -->

        <section class="reductor-types">
            <div class="container reductor-types__container">
                <h2 class="title title-h2">Типы редукторов</h2>
                <!-- Slider main container -->
                <div class="swiper reductor-types__slider">
                    <!-- Additional required wrapper -->
                    <ul class="swiper-wrapper reductor-types__slider-wrapper" role="list">
                        <!-- Slides -->
                        @foreach($categories as $category)
                            <li class="swiper-slide reductor-types__card" data-aos="fade-in" data-aos-delay="{{$loop->iteration*200}}">
                                <figure>
                                    <a href="/catalog/{{$category->slug}}">
                                        <div class="reductor-types__card-top">
                                            <picture>
                                                <img src="{{asset('storage/images/categories/'.$category->image)}}" loading="lazy" decoding="async" alt="image" width="241" height="300">
                                            </picture>
                                            <div class="reductor-types__descr">
                                                <p>{{$category->descr}}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <figcaption>
                                        <a href="/catalog/{{$category->slug}}">
                                            <h3 class="title title-h3">{{$category->name}}</h3>
                                        </a>
                                    </figcaption>
                                </figure>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev reductor-types__button-prev">
                    <svg width="24" height="46">
                        <use xlink:href="resources/svgSprites/svgSprite.svg#icon-slider-left"></use>
                    </svg>
                </div>
                <div class="swiper-button-next reductor-types__button-next">
                    <svg width="24" height="46">
                        <use xlink:href="resources/svgSprites/svgSprite.svg#icon-slider-right"></use>
                    </svg>
                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination reductor-types__pagination"></div>
            </div>
        </section>

        <section class="pros">
            <div class="container pros__container">
                <ul role="list">
                    <li>
                        <figure>
                            <div data-aos="fade-up" data-aos-easing="linear" data-aos-delay="250">
                                <svg width="88" height="80" viewBox="0 0 88 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M38 61H50V72H38V61Z" fill="#07012E"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M48 63H40V70H48V63ZM38 61V72H50V61H38Z" fill="#07012E"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M76 6H12C8.68629 6 6 8.68629 6 12V55C6 58.3137 8.68629 61 12 61H76C79.3137 61 82 58.3137 82 55V12C82 8.68629 79.3137 6 76 6ZM12 4C7.58172 4 4 7.58172 4 12V55C4 59.4183 7.58172 63 12 63H76C80.4183 63 84 59.4183 84 55V12C84 7.58172 80.4183 4 76 4H12Z" fill="#07012E"/>
                                    <mask id="path-4-inside-1_639_6300" fill="white">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M64.8529 57H23.1471C23.1518 56.9914 23.1567 56.9829 23.1619 56.9744L27.491 49.9396C27.5103 49.9083 27.5132 49.8696 27.4992 49.8357C27.4851 49.8017 27.4556 49.7765 27.4199 49.768L19.3842 47.8547C19.159 47.8011 19 47.5999 19 47.3683V38.6344C19 38.4029 19.159 38.2016 19.3842 38.148L27.415 36.2359C27.4523 36.227 27.4829 36.2007 27.4976 36.1654C27.5123 36.13 27.5092 36.0897 27.4891 36.057L23.1623 29.026C23.0409 28.8288 23.0708 28.5741 23.2346 28.4104L29.4104 22.2345C29.5741 22.0708 29.8288 22.0409 30.026 22.1622L37.0563 26.4886C37.0887 26.5085 37.1287 26.5116 37.1639 26.497C37.199 26.4825 37.225 26.452 37.2338 26.4151L39.146 18.3842C39.1996 18.159 39.4008 18 39.6324 18H48.3663C48.5978 18 48.7991 18.159 48.8527 18.3842L50.7643 26.4129C50.7733 26.4505 50.7998 26.4814 50.8354 26.4962C50.8711 26.511 50.9117 26.5079 50.9447 26.4876L57.974 22.1618C58.1712 22.0405 58.4259 22.0704 58.5896 22.2341L64.7655 28.41C64.9292 28.5737 64.9591 28.8284 64.8377 29.0256L60.5121 36.0547C60.4917 36.0878 60.4886 36.1288 60.5035 36.1647C60.5184 36.2007 60.5495 36.2274 60.5874 36.2364L68.6158 38.1479C68.841 38.2016 69 38.4028 69 38.6343V47.3683C69 47.5998 68.841 47.8011 68.6158 47.8547L60.5912 49.7653C60.5494 49.7753 60.515 49.8047 60.4986 49.8444C60.4864 49.8736 60.489 49.907 60.5056 49.934L64.8382 56.9744C64.8433 56.9828 64.8483 56.9914 64.8529 57ZM51.1431 42.9978C51.1431 46.9427 47.9451 50.1406 44.0002 50.1406C40.0553 50.1406 36.8574 46.9427 36.8574 42.9978C36.8574 39.0529 40.0553 35.8549 44.0002 35.8549C47.9451 35.8549 51.1431 39.0529 51.1431 42.9978Z"/>
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M64.8529 57H23.1471C23.1518 56.9914 23.1567 56.9829 23.1619 56.9744L27.491 49.9396C27.5103 49.9083 27.5132 49.8696 27.4992 49.8357C27.4851 49.8017 27.4556 49.7765 27.4199 49.768L19.3842 47.8547C19.159 47.8011 19 47.5999 19 47.3683V38.6344C19 38.4029 19.159 38.2016 19.3842 38.148L27.415 36.2359C27.4523 36.227 27.4829 36.2007 27.4976 36.1654C27.5123 36.13 27.5092 36.0897 27.4891 36.057L23.1623 29.026C23.0409 28.8288 23.0708 28.5741 23.2346 28.4104L29.4104 22.2345C29.5741 22.0708 29.8288 22.0409 30.026 22.1622L37.0563 26.4886C37.0887 26.5085 37.1287 26.5116 37.1639 26.497C37.199 26.4825 37.225 26.452 37.2338 26.4151L39.146 18.3842C39.1996 18.159 39.4008 18 39.6324 18H48.3663C48.5978 18 48.7991 18.159 48.8527 18.3842L50.7643 26.4129C50.7733 26.4505 50.7998 26.4814 50.8354 26.4962C50.8711 26.511 50.9117 26.5079 50.9447 26.4876L57.974 22.1618C58.1712 22.0405 58.4259 22.0704 58.5896 22.2341L64.7655 28.41C64.9292 28.5737 64.9591 28.8284 64.8377 29.0256L60.5121 36.0547C60.4917 36.0878 60.4886 36.1288 60.5035 36.1647C60.5184 36.2007 60.5495 36.2274 60.5874 36.2364L68.6158 38.1479C68.841 38.2016 69 38.4028 69 38.6343V47.3683C69 47.5998 68.841 47.8011 68.6158 47.8547L60.5912 49.7653C60.5494 49.7753 60.515 49.8047 60.4986 49.8444C60.4864 49.8736 60.489 49.907 60.5056 49.934L64.8382 56.9744C64.8433 56.9828 64.8483 56.9914 64.8529 57ZM51.1431 42.9978C51.1431 46.9427 47.9451 50.1406 44.0002 50.1406C40.0553 50.1406 36.8574 46.9427 36.8574 42.9978C36.8574 39.0529 40.0553 35.8549 44.0002 35.8549C47.9451 35.8549 51.1431 39.0529 51.1431 42.9978Z" fill="#FAFAFA"/>
                                    <path d="M64.8529 57V59H68.198L66.6147 56.0533L64.8529 57ZM23.1471 57L21.3854 56.0532L19.8018 59H23.1471V57ZM23.1619 56.9744L24.8651 58.0227L24.8652 58.0226L23.1619 56.9744ZM27.491 49.9396L25.7877 48.8914L25.7877 48.8914L27.491 49.9396ZM27.4992 49.8357L25.6518 50.6019L25.6518 50.6019L27.4992 49.8357ZM27.4199 49.768L27.8832 47.8224L27.8831 47.8224L27.4199 49.768ZM19.3842 47.8547L19.8474 45.9091H19.8474L19.3842 47.8547ZM19.3842 38.148L19.8474 40.0936H19.8474L19.3842 38.148ZM27.415 36.2359L27.8782 38.1815L27.8783 38.1815L27.415 36.2359ZM27.4976 36.1654L29.3452 36.9312L29.3452 36.9312L27.4976 36.1654ZM27.4891 36.057L29.1924 35.0089L29.1924 35.0088L27.4891 36.057ZM23.1623 29.026L24.8656 27.9778L24.8656 27.9778L23.1623 29.026ZM23.2346 28.4104L24.6488 29.8246L24.6488 29.8246L23.2346 28.4104ZM29.4104 22.2345L30.8246 23.6487L30.8246 23.6487L29.4104 22.2345ZM30.026 22.1622L28.9778 23.8656L28.9778 23.8656L30.026 22.1622ZM37.0563 26.4886L36.0081 28.1919L36.0081 28.1919L37.0563 26.4886ZM37.1639 26.497L36.3976 24.6497L36.3976 24.6497L37.1639 26.497ZM37.2338 26.4151L35.2882 25.9518L35.2882 25.9518L37.2338 26.4151ZM39.146 18.3842L41.0916 18.8474V18.8474L39.146 18.3842ZM48.8527 18.3842L46.9071 18.8474V18.8474L48.8527 18.3842ZM50.7643 26.4129L52.7099 25.9497L52.7099 25.9497L50.7643 26.4129ZM50.8354 26.4962L50.0694 28.3437L50.0694 28.3437L50.8354 26.4962ZM50.9447 26.4876L51.9928 28.1909L51.9928 28.1909L50.9447 26.4876ZM57.974 22.1618L56.9258 20.4585L56.9258 20.4585L57.974 22.1618ZM58.5896 22.2341L60.0038 20.8199L60.0038 20.8199L58.5896 22.2341ZM64.7655 28.41L63.3512 29.8242L63.3513 29.8242L64.7655 28.41ZM64.8377 29.0256L63.1344 27.9774L63.1344 27.9774L64.8377 29.0256ZM60.5121 36.0547L58.8088 35.0065L58.8088 35.0065L60.5121 36.0547ZM60.5035 36.1647L62.3511 35.399L62.351 35.3988L60.5035 36.1647ZM60.5874 36.2364L61.0506 34.2908L61.0506 34.2908L60.5874 36.2364ZM68.6158 38.1479L68.1526 40.0935L68.1526 40.0935L68.6158 38.1479ZM68.6158 47.8547L68.1526 45.9091L68.1526 45.9091L68.6158 47.8547ZM60.5912 49.7653L60.128 47.8197L60.128 47.8197L60.5912 49.7653ZM60.4986 49.8444L58.6516 49.077L58.6516 49.0772L60.4986 49.8444ZM60.5056 49.934L58.8022 50.9821L58.8023 50.9822L60.5056 49.934ZM64.8382 56.9744L66.5415 55.9262L64.8382 56.9744ZM64.8529 55H23.1471V59H64.8529V55ZM24.9089 57.9468C24.8951 57.9724 24.8805 57.9977 24.8651 58.0227L21.4586 55.9262C21.4328 55.968 21.4085 56.0104 21.3854 56.0532L24.9089 57.9468ZM24.8652 58.0226L29.1943 50.9878L25.7877 48.8914L21.4585 55.9262L24.8652 58.0226ZM29.1943 50.9878C29.5518 50.4069 29.6052 49.693 29.3465 49.0694L25.6518 50.6019C25.4213 50.0462 25.4687 49.4097 25.7877 48.8914L29.1943 50.9878ZM29.3465 49.0694C29.0882 48.4466 28.5463 47.9803 27.8832 47.8224L26.9566 51.7136C26.365 51.5727 25.8819 51.1568 25.6518 50.6019L29.3465 49.0694ZM27.8831 47.8224L19.8474 45.9091L18.9209 49.8004L26.9567 51.7136L27.8831 47.8224ZM19.8474 45.9091C20.5231 46.07 21 46.6737 21 47.3683H17C17 48.526 17.7948 49.5322 18.9209 49.8004L19.8474 45.9091ZM21 47.3683V38.6344H17V47.3683H21ZM21 38.6344C21 39.329 20.5231 39.9327 19.8474 40.0936L18.921 36.2024C17.7948 36.4705 17 37.4767 17 38.6344H21ZM19.8474 40.0936L27.8782 38.1815L26.9518 34.2903L18.9209 36.2024L19.8474 40.0936ZM27.8783 38.1815C28.5432 38.0232 29.0864 37.5554 29.3452 36.9312L25.6501 35.3995C25.8795 34.8461 26.3613 34.4309 26.9517 34.2903L27.8783 38.1815ZM29.3452 36.9312C29.6042 36.3063 29.5507 35.591 29.1924 35.0089L25.7858 37.1052C25.4677 36.5883 25.4204 35.9536 25.6501 35.3995L29.3452 36.9312ZM29.1924 35.0088L24.8656 27.9778L21.459 30.0741L25.7858 37.1052L29.1924 35.0088ZM24.8656 27.9778C25.2296 28.5693 25.1399 29.3334 24.6488 29.8246L21.8203 26.9961C21.0018 27.8147 20.8522 29.0882 21.459 30.0742L24.8656 27.9778ZM24.6488 29.8246L30.8246 23.6487L27.9962 20.8203L21.8203 26.9961L24.6488 29.8246ZM30.8246 23.6487C30.3335 24.1399 29.5693 24.2296 28.9778 23.8656L31.0742 20.4589C30.0883 19.8522 28.8148 20.0017 27.9962 20.8203L30.8246 23.6487ZM28.9778 23.8656L36.0081 28.1919L38.1045 24.7853L31.0742 20.4589L28.9778 23.8656ZM36.0081 28.1919C36.5902 28.5501 37.3054 28.6036 37.9301 28.3444L36.3976 24.6497C36.9521 24.4197 37.5872 24.467 38.1045 24.7853L36.0081 28.1919ZM37.9301 28.3444C38.5539 28.0857 39.0212 27.5428 39.1795 26.8783L35.2882 25.9518C35.4288 25.3613 35.844 24.8793 36.3976 24.6497L37.9301 28.3444ZM39.1795 26.8783L41.0916 18.8474L37.2003 17.9209L35.2882 25.9518L39.1795 26.8783ZM41.0916 18.8474C40.9307 19.5231 40.3269 20 39.6324 20V16C38.4747 16 37.4685 16.7948 37.2003 17.9209L41.0916 18.8474ZM39.6324 20H48.3663V16H39.6324V20ZM48.3663 20C47.6717 20 47.068 19.5231 46.9071 18.8474L50.7983 17.9209C50.5302 16.7948 49.524 16 48.3663 16V20ZM46.9071 18.8474L48.8187 26.8762L52.7099 25.9497L50.7983 17.9209L46.9071 18.8474ZM48.8187 26.8761C48.9771 27.5414 49.445 28.0848 50.0694 28.3437L51.6014 24.6487C52.1545 24.878 52.5694 25.3595 52.7099 25.9497L48.8187 26.8761ZM50.0694 28.3437C50.6946 28.6029 51.4103 28.5494 51.9928 28.1909L49.8965 24.7843C50.4132 24.4663 51.0476 24.4191 51.6014 24.6487L50.0694 28.3437ZM51.9928 28.1909L59.0222 23.8652L56.9258 20.4585L49.8965 24.7843L51.9928 28.1909ZM59.0222 23.8652C58.4307 24.2292 57.6666 24.1395 57.1754 23.6483L60.0038 20.8199C59.1852 20.0013 57.9118 19.8518 56.9258 20.4585L59.0222 23.8652ZM57.1754 23.6483L63.3512 29.8242L66.1797 26.9957L60.0038 20.8199L57.1754 23.6483ZM63.3513 29.8242C62.8601 29.333 62.7704 28.5689 63.1344 27.9774L66.541 30.0738C67.1478 29.0878 66.9983 27.8143 66.1797 26.9957L63.3513 29.8242ZM63.1344 27.9774L58.8088 35.0065L62.2154 37.1029L66.541 30.0738L63.1344 27.9774ZM58.8088 35.0065C58.4502 35.5893 58.3967 36.3053 58.6559 36.9307L62.351 35.3988C62.5804 35.9523 62.5333 36.5864 62.2155 37.1028L58.8088 35.0065ZM58.6559 36.9305C58.9149 37.5554 59.4586 38.0236 60.1242 38.182L61.0506 34.2908C61.6405 34.4312 62.1219 34.846 62.3511 35.399L58.6559 36.9305ZM60.1241 38.182L68.1526 40.0935L69.0791 36.2023L61.0506 34.2908L60.1241 38.182ZM68.1526 40.0935C67.4769 39.9327 67 39.3289 67 38.6343H71C71 37.4767 70.2052 36.4705 69.079 36.2023L68.1526 40.0935ZM67 38.6343V47.3683H71V38.6343H67ZM67 47.3683C67 46.6737 67.4769 46.07 68.1526 45.9091L69.079 49.8003C70.2052 49.5322 71 48.5259 71 47.3683H67ZM68.1526 45.9091L60.128 47.8197L61.0545 51.7109L69.0791 49.8003L68.1526 45.9091ZM60.128 47.8197C59.4587 47.979 58.9123 48.4496 58.6516 49.077L62.3455 50.6117C62.1178 51.1598 61.6402 51.5715 61.0545 51.7109L60.128 47.8197ZM58.6516 49.0772C58.3942 49.6967 58.4474 50.4055 58.8022 50.9821L62.209 48.8859C62.5305 49.4085 62.5786 50.0506 62.3456 50.6116L58.6516 49.0772ZM58.8023 50.9822L63.1348 58.0226L66.5415 55.9262L62.2089 48.8858L58.8023 50.9822ZM63.1348 58.0226C63.1196 57.9978 63.105 57.9724 63.0911 57.9467L66.6147 56.0533C66.5915 56.0103 66.5671 55.9679 66.5415 55.9262L63.1348 58.0226ZM44.0002 52.1406C49.0497 52.1406 53.1431 48.0472 53.1431 42.9978H49.1431C49.1431 45.8381 46.8405 48.1406 44.0002 48.1406V52.1406ZM34.8574 42.9978C34.8574 48.0472 38.9508 52.1406 44.0002 52.1406V48.1406C41.1599 48.1406 38.8574 45.8381 38.8574 42.9978H34.8574ZM44.0002 33.8549C38.9508 33.8549 34.8574 37.9483 34.8574 42.9978H38.8574C38.8574 40.1574 41.1599 37.8549 44.0002 37.8549V33.8549ZM53.1431 42.9978C53.1431 37.9483 49.0497 33.8549 44.0002 33.8549V37.8549C46.8405 37.8549 49.1431 40.1574 49.1431 42.9978H53.1431Z" fill="#BE054B" mask="url(#path-4-inside-1_639_6300)"/>
                                    <path d="M31 74C31 71.7909 32.7909 70 35 70H53C55.2091 70 57 71.7909 57 74V76H31V74Z" fill="#07012E"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M53 72H35C33.8954 72 33 72.8954 33 74H55C55 72.8954 54.1046 72 53 72ZM35 70C32.7909 70 31 71.7909 31 74V76H57V74C57 71.7909 55.2091 70 53 70H35Z" fill="#07012E"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 56C4 55.4477 4.44772 55 5 55L83 55C83.5523 55 84 55.4477 84 56C84 56.5523 83.5523 57 83 57L5 57C4.44772 57 4 56.5523 4 56Z" fill="black"/>
                                </svg>
                            </div>
                            <figcaption>
                                <h3 class="title title-h3">Проектирование и изготовление</h3>
                                <p class="pros__text pros__text--mobile">Работаем с нестандартными редукторами по чертежам и образцам заказчика <br>с использованием современных<br> технологий и оборудования.</p>
                                <p class="pros__text pros__text--tablet">Работаем с нестандартными редукторами по чертежам и образцам заказчика с использованием современных технологий и<br> оборудования.</p>
                                <p class="pros__text pros__text--desktop">Работаем с нестандартными<br> редукторами по чертежам и образцам<br> заказчика с использованием<br> современных технологий и<br> оборудования.</p>
                                <p class="pros__text pros__text--extra-desktop">Работаем с нестандартными редукторами по чертежам<br> и образцам заказчика с использованием современных<br> технологий и оборудования.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <div data-aos="fade-up" data-aos-easing="linear" data-aos-delay="250">
                                <svg width="88" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 88 80" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                                    <mask id="a" fill="#fff">
                                        <path fill-rule="evenodd" d="M78 12a6 6 0 0 1 6 6v18a6 6 0 0 1-6 6H56v4a1 1 0 0 1-1.6.8L48 42h-4a6 6 0 0 1-6-6V18a6 6 0 0 1 6-6h34Z" clip-rule="evenodd"/>
                                    </mask>
                                    <path fill="#07012E" d="M56 42h-2v-2h2v2Zm-1.6 4.8-1.2 1.6 1.2-1.6ZM48 42v-2h.67l.53.4L48 42Zm34-24a4 4 0 0 0-4-4v-4a8 8 0 0 1 8 8h-4Zm0 18V18h4v18h-4Zm-4 4a4 4 0 0 0 4-4h4a8 8 0 0 1-8 8v-4Zm-22 0h22v4H56v-4Zm-2 6v-4h4v4h-4Zm1.6-.8a1 1 0 0 0-1.6.8h4a3 3 0 0 1-4.8 2.4l2.4-3.2Zm-6.4-4.8 6.4 4.8-2.4 3.2-6.4-4.8 2.4-3.2ZM44 40h4v4h-4v-4Zm-4-4a4 4 0 0 0 4 4v4a8 8 0 0 1-8-8h4Zm0-18v18h-4V18h4Zm4-4a4 4 0 0 0-4 4h-4a8 8 0 0 1 8-8v4Zm13.68 0H44v-4h13.68v4Zm19.69 0H57.68v-4h19.69v4Zm.63 0h-.63v-4H78v4Z" mask="url(#a)"/>
                                    <mask id="b" fill="#fff">
                                        <path fill-rule="evenodd" d="M16 4a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h12v5.59a1 1 0 0 0 1.7.7L36 36h24a8 8 0 0 0 8-8V12a8 8 0 0 0-8-8H16Z" clip-rule="evenodd"/>
                                    </mask>
                                    <path fill="#FAFAFA" fill-rule="evenodd" d="M16 4a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h12v5.59a1 1 0 0 0 1.7.7L36 36h24a8 8 0 0 0 8-8V12a8 8 0 0 0-8-8H16Z" clip-rule="evenodd"/>
                                    <path fill="#BE054B" d="M28 36h2v-2h-2v2Zm1.7 6.3 1.42 1.4-1.41-1.4ZM36 36v-2h-.83l-.58.59L36 36ZM10 12a6 6 0 0 1 6-6V2A10 10 0 0 0 6 12h4Zm0 16V12H6v16h4Zm6 6a6 6 0 0 1-6-6H6a10 10 0 0 0 10 10v-4Zm12 0H16v4h12v-4Zm2 7.59V36h-4v5.59h4Zm-1.7-.71a1 1 0 0 1 1.7.7h-4a3 3 0 0 0 5.12 2.13l-2.83-2.83Zm6.29-6.3-6.3 6.3 2.83 2.83 6.3-6.3-2.83-2.82ZM60 34H36v4h24v-4Zm6-6a6 6 0 0 1-6 6v4a10 10 0 0 0 10-10h-4Zm0-16v16h4V12h-4Zm-6-6a6 6 0 0 1 6 6h4A10 10 0 0 0 60 2v4ZM16 6h44V2H16v4Z" mask="url(#b)"/>
                                    <path stroke="#07012E" stroke-width="2" d="M29 52a7 7 0 1 1-14 0 7 7 0 0 1 14 0Zm44 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                                    <path fill="#07012E" fill-rule="evenodd" d="M40 76a18.44 18.44 0 0 0-18-14A18.44 18.44 0 0 0 4 76h36Zm-2.79-2A16.42 16.42 0 0 0 22 64 16.42 16.42 0 0 0 6.79 74H37.2Z" clip-rule="evenodd"/>
                                    <path fill="#07012E" fill-rule="evenodd" d="M40 76a18.44 18.44 0 0 0-18-14A18.44 18.44 0 0 0 4 76h36Zm44 0a18.44 18.44 0 0 0-18-14 18.44 18.44 0 0 0-18 14h36Z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <figcaption>
                                <h3 class="title title-h3">Продажа и консультирование </h3>
                                <p class="pros__text pros__text--mobile">Предоставляем консультацию нашими квалифицированными техническими специалистами по вопросам замены и подбора редуктора, тем самым наши клиенты всегда получают оптимальные для них решения.</p>
                                <p class="pros__text pros__text--tablet">Предоставляем консультацию нашими квалифицированными<br> техническими специалистами по вопросам замены и подбора<br> редуктора, тем самым наши клиенты всегда получают оптимальные<br> для них решения.</p>
                                <p class="pros__text pros__text--desktop">Предоставляем консультацию нашими<br> квалифицированными техническими<br> специалистами по вопросам замены<br> и подбора редуктора, тем самым наши <br>клиенты всегда получают оптимальные<br> для них решения.</p>
                                <p class="pros__text pros__text--extra-desktop">Предоставляем консультацию нашими<br> квалифицированными техническими специалистами<br> по вопросам замены и подбора редуктора, тем самым<br> наши клиенты всегда получают нужные для них<br> решения.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <div data-aos="fade-up" data-aos-easing="linear" data-aos-delay="250">
                                <svg width="88" height="80" viewBox="0 0 88 80" fill="none" xmlns="http://www.w3.org/2000/svg" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                                    <g clip-path="url(#clip0_639_6284)">
                                        <path d="M38 64C38 61.7909 39.7909 60 42 60H46C48.2091 60 50 61.7909 50 64V72C50 74.2091 48.2091 76 46 76H42C39.7909 76 38 74.2091 38 72V64Z" fill="#07012E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M46 62H42C40.8954 62 40 62.8954 40 64V72C40 73.1046 40.8954 74 42 74H46C47.1046 74 48 73.1046 48 72V64C48 62.8954 47.1046 62 46 62ZM42 60C39.7909 60 38 61.7909 38 64V72C38 74.2091 39.7909 76 42 76H46C48.2091 76 50 74.2091 50 72V64C50 61.7909 48.2091 60 46 60H42Z" fill="#07012E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M54 56.0596C54 54.546 54.8696 53.1845 56.1478 52.3738C63.8141 47.5117 69 38.3982 69 29C69 15.1929 57.8071 4 44 4C30.1929 4 19 15.1929 19 29C19 38.3982 24.1859 47.5117 31.8522 52.3738C33.1304 53.1845 34 54.546 34 56.0596V67C34 69.2091 35.7909 71 38 71H50C52.2091 71 54 69.2091 54 67V56.0596Z" fill="#FAFAFA"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44 5C30.7452 5 20 15.7452 20 29C20 38.0496 25.0054 46.8473 32.3877 51.5293C33.9074 52.4931 35 54.1505 35 56.0596V67C35 68.6569 36.3431 70 38 70H50C51.6569 70 53 68.6569 53 67V56.0596C53 54.1505 54.0926 52.4931 55.6123 51.5293C62.9946 46.8473 68 38.0496 68 29C68 15.7452 57.2548 5 44 5ZM18 29C18 14.6406 29.6406 3 44 3C58.3594 3 70 14.6406 70 29C70 38.7467 64.6337 48.1761 56.6834 53.2183C55.6466 53.8759 55 54.9414 55 56.0596V67C55 69.7614 52.7614 72 50 72H38C35.2386 72 33 69.7614 33 67V56.0596C33 54.9414 32.3534 53.8759 31.3166 53.2183C23.3663 48.1761 18 38.7467 18 29Z" fill="#07012E"/>
                                        <path d="M35 65H53V67H35V65Z" fill="#07012E"/>
                                        <path d="M35 61H53V63H35V61Z" fill="#07012E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M50.7071 47.2929C50.3166 46.9024 49.6834 46.9024 49.2929 47.2929L45.2929 51.2929C45.1054 51.4804 45 51.7348 45 52V61H47V52.4142L50.7071 48.7071C51.0976 48.3166 51.0976 47.6834 50.7071 47.2929Z" fill="#BE054B"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.2929 47.2929C37.6834 46.9024 38.3166 46.9024 38.7071 47.2929L42.7071 51.2929C42.8946 51.4804 43 51.7348 43 52V61H41V52.4142L37.2929 48.7071C36.9024 48.3166 36.9024 47.6834 37.2929 47.2929Z" fill="#BE054B"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8491 15.2632C23.4028 22.7096 23.2115 34.4957 30.3052 41.5893C30.6957 41.9799 30.6957 42.613 30.3052 43.0036C29.9147 43.3941 29.2815 43.3941 28.891 43.0036C20.9645 35.0771 21.2603 22.0236 29.4349 13.849C37.6096 5.67438 50.663 5.37858 58.5895 13.3051C58.98 13.6956 58.98 14.3288 58.5895 14.7193C58.199 15.1098 57.5658 15.1098 57.1753 14.7193C50.0816 7.62561 38.2955 7.81686 30.8491 15.2632Z" fill="#BE054B"/>
                                        <path d="M73 28C73 27.4477 73.4477 27 74 27H80C80.5523 27 81 27.4477 81 28C81 28.5523 80.5523 29 80 29H74C73.4477 29 73 28.5523 73 28Z" fill="#BE054B"/>
                                        <path d="M69.3647 13.4329C69.0886 12.9546 69.2525 12.343 69.7308 12.0669L74.9269 9.06689C75.4052 8.79075 76.0168 8.95463 76.2929 9.43292C76.5691 9.91121 76.4052 10.5228 75.9269 10.7989L70.7308 13.7989C70.2525 14.0751 69.6409 13.9112 69.3647 13.4329Z" fill="#BE054B"/>
                                        <path d="M68.8647 42.4329C69.1409 41.9546 69.7525 41.7908 70.2308 42.0669L75.4269 45.0669C75.9052 45.343 76.0691 45.9546 75.7929 46.4329C75.5168 46.9112 74.9052 47.0751 74.4269 46.7989L69.2308 43.7989C68.7525 43.5228 68.5886 42.9112 68.8647 42.4329Z" fill="#BE054B"/>
                                        <path d="M7 27C7 26.4477 7.44772 26 8 26H14C14.5523 26 15 26.4477 15 27C15 27.5523 14.5523 28 14 28H8C7.44772 28 7 27.5523 7 27Z" fill="#BE054B"/>
                                        <path d="M11.707 45.5672C11.4309 45.0889 11.5948 44.4773 12.0731 44.2012L17.2692 41.2012C17.7475 40.925 18.3591 41.0889 18.6352 41.5672C18.9114 42.0455 18.7475 42.6571 18.2692 42.9332L13.0731 45.9332C12.5948 46.2094 11.9832 46.0455 11.707 45.5672Z" fill="#BE054B"/>
                                        <path d="M12.207 8.56671C12.4832 8.08842 13.0948 7.92454 13.5731 8.20068L18.7692 11.2007C19.2475 11.4768 19.4114 12.0884 19.1352 12.5667C18.8591 13.045 18.2475 13.2089 17.7692 12.9327L12.5731 9.93273C12.0948 9.65659 11.9309 9.045 12.207 8.56671Z" fill="#BE054B"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_639_6284">
                                            <rect width="88" height="80" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <figcaption>
                                <h3 class="title title-h3">Замена и модернизация</h3>
                                <p class="pros__text pros__text--mobile">Мы производим замену зарубежных редукторов на отечественные аналоги, а также проводим модернизацию устаревших редукторов с учетом потребностей заказчика.</p>
                                <p class="pros__text pros__text--tablet">Мы производим замену зарубежных редукторов на отечественные<br> аналоги, а также проводим модернизацию устаревших редукторов с<br> учетом потребностей заказчика.</p>
                                <p class="pros__text pros__text--desktop">Мы производим замену зарубежных<br> редукторов на отечественные аналоги,<br> а также проводим модернизацию <br>устаревших редукторов с учетом <br> потребностей заказчика.</p>
                                <p class="pros__text pros__text--extra-desktop">Мы производим замену зарубежных редукторов на<br> отечественные аналоги,а также делаем<br> модернизацию устаревших редукторов с учетом <br> потребностей заказчика.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <div data-aos="fade-up" data-aos-easing="linear" data-aos-delay="250">
                                <svg width="88" height="80" viewBox="0 0 88 80" fill="none" xmlns="http://www.w3.org/2000/svg" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                                    <path d="M16 68C16 70.2091 14.2091 72 12 72C9.79086 72 8 70.2091 8 68C8 65.7909 9.79086 64 12 64C14.2091 64 16 65.7909 16 68Z" fill="#FAFAFA"/>
                                    <path d="M79 43H85V46C85 46.5523 84.5523 47 84 47H80C79.4477 47 79 46.5523 79 46V43Z" fill="#FAFAFA"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M80 46H15C13.8954 46 13 46.8954 13 48V72C13 73.1046 13.8954 74 15 74H80C81.1046 74 82 73.1046 82 72V48C82 46.8954 81.1046 46 80 46ZM15 44C12.7909 44 11 45.7909 11 48V72C11 74.2091 12.7909 76 15 76H80C82.2091 76 84 74.2091 84 72V48C84 45.7909 82.2091 44 80 44H15Z" fill="#07012E"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0727 24H7.92732L6.07547 74L17.9246 74L16.0727 24ZM7.92732 22C6.85156 22 5.96851 22.8509 5.92869 23.926L4.07684 73.926C4.03488 75.0588 4.94187 76 6.07547 76H17.9246C19.0582 76 19.9652 75.0588 19.9232 73.926L18.0714 23.926C18.0315 22.8509 17.1485 22 16.0727 22H7.92732Z" fill="#07012E"/>
                                    <path d="M5.92869 29.926C5.96851 28.8509 6.85156 28 7.92732 28H16.0727C17.1485 28 18.0315 28.8509 18.0714 29.926L19.9232 72.926C19.9652 74.0588 19.0582 75 17.9246 75H6.07547C4.94187 75 4.03488 74.0588 4.07684 72.926L5.92869 29.926Z" fill="#07012E"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M58.4797 4.38419C58.5333 4.15896 58.7345 4 58.9661 4H65.0333C65.2649 4 65.4661 4.15896 65.5198 4.38419L66.871 10.0596C66.8774 10.0862 66.8961 10.1081 66.9213 10.1186C66.9466 10.1291 66.9753 10.1268 66.9986 10.1125L71.967 7.05502C72.1642 6.93368 72.4189 6.96358 72.5826 7.1273L76.8728 11.4175C77.0365 11.5812 77.0664 11.8359 76.9451 12.0331L73.8877 17.0014C73.8734 17.0246 73.8712 17.0532 73.8816 17.0783C73.892 17.1034 73.9138 17.122 73.9403 17.1283L79.6158 18.4797C79.841 18.5333 80 18.7345 80 18.9661V25.0333C80 25.2649 79.841 25.4661 79.6158 25.5198L73.9417 26.8707C73.9147 26.8772 73.8925 26.8962 73.8818 26.9218C73.8712 26.9475 73.8735 26.9767 73.888 27.0003L76.9444 31.967C77.0658 32.1642 77.0359 32.4189 76.8722 32.5826L72.5819 36.8728C72.4182 37.0365 72.1635 37.0664 71.9663 36.9451L66.9988 33.8882C66.9755 33.8738 66.9466 33.8715 66.9212 33.882C66.8959 33.8925 66.8771 33.9145 66.8708 33.9412L65.5197 39.6158C65.466 39.841 65.2648 40 65.0333 40H58.966C58.7344 40 58.5332 39.841 58.4796 39.6158L57.1282 33.9398C57.1219 33.9136 57.1035 33.892 57.0786 33.8817C57.0537 33.8714 57.0254 33.8736 57.0024 33.8878L52.0327 36.946C51.8355 37.0674 51.5808 37.0375 51.4171 36.8737L47.1269 32.5835C46.9632 32.4198 46.9333 32.1651 47.0546 31.9679L50.1125 26.9989C50.1268 26.9756 50.1291 26.9467 50.1186 26.9214C50.1081 26.8961 50.0861 26.8773 50.0594 26.8709L44.3842 25.5197C44.159 25.466 44 25.2648 44 25.0333V18.966C44 18.7344 44.159 18.5332 44.3842 18.4796L50.0614 17.1279C50.0872 17.1217 50.1085 17.1035 50.1187 17.079C50.1289 17.0544 50.1267 17.0264 50.1128 17.0038L47.0539 12.0332C46.9326 11.836 46.9625 11.5813 47.1262 11.4176L51.4164 7.12741C51.5802 6.96369 51.8349 6.93379 52.032 7.05513L57.001 10.113C57.0243 10.1273 57.0529 10.1295 57.0781 10.1191C57.1033 10.1087 57.1219 10.0868 57.1282 10.0603L58.4797 4.38419ZM62.0003 27.1426C64.8406 27.1426 67.1432 24.8401 67.1432 21.9998C67.1432 19.1595 64.8406 16.8569 62.0003 16.8569C59.16 16.8569 56.8575 19.1595 56.8575 21.9998C56.8575 24.8401 59.16 27.1426 62.0003 27.1426Z" fill="#FAFAFA"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M65.5198 4.38419C65.4661 4.15896 65.2649 4 65.0333 4H58.9661C58.7345 4 58.5333 4.15896 58.4797 4.38419L57.1282 10.0603C57.1219 10.0868 57.1033 10.1087 57.0781 10.1191C57.0529 10.1295 57.0243 10.1273 57.001 10.113L52.032 7.05513C51.8349 6.93379 51.5802 6.96369 51.4164 7.12741L47.1262 11.4176C46.9625 11.5813 46.9326 11.836 47.0539 12.0332L50.1128 17.0038C50.1267 17.0264 50.1289 17.0544 50.1187 17.079C50.1085 17.1035 50.0872 17.1217 50.0614 17.1279L44.3842 18.4796C44.159 18.5332 44 18.7344 44 18.966V25.0333C44 25.2648 44.159 25.466 44.3842 25.5197L50.0594 26.8709C50.0861 26.8773 50.1081 26.8961 50.1186 26.9214C50.1291 26.9467 50.1268 26.9756 50.1125 26.9989L47.0546 31.9679C46.9333 32.1651 46.9632 32.4198 47.1269 32.5835L51.4171 36.8737C51.5808 37.0375 51.8355 37.0674 52.0327 36.946L57.0024 33.8878C57.0254 33.8736 57.0537 33.8714 57.0786 33.8817C57.1035 33.892 57.1219 33.9136 57.1282 33.9398L58.4796 39.6158C58.5332 39.841 58.7344 40 58.966 40H65.0333C65.2648 40 65.466 39.841 65.5197 39.6158L66.8708 33.9412C66.8771 33.9145 66.8959 33.8925 66.9212 33.882C66.9466 33.8715 66.9755 33.8738 66.9988 33.8882L71.9663 36.9451C72.1635 37.0664 72.4182 37.0365 72.5819 36.8728L76.8722 32.5826C77.0359 32.4189 77.0658 32.1642 76.9444 31.967L73.888 27.0003C73.8735 26.9767 73.8712 26.9475 73.8818 26.9218C73.8925 26.8962 73.9147 26.8772 73.9417 26.8707L79.6158 25.5198C79.841 25.4661 80 25.2649 80 25.0333V18.9661C80 18.7345 79.841 18.5333 79.6158 18.4797L73.9403 17.1283C73.9138 17.122 73.892 17.1034 73.8816 17.0783C73.8712 17.0532 73.8734 17.0246 73.8877 17.0014L76.9451 12.0331C77.0664 11.8359 77.0365 11.5812 76.8728 11.4175L72.5826 7.1273C72.4189 6.96358 72.1642 6.93368 71.967 7.05502L66.9986 10.1125C66.9753 10.1268 66.9466 10.1291 66.9213 10.1186C66.8961 10.1081 66.8774 10.0862 66.871 10.0596L65.5198 4.38419ZM60.1509 6L59.0738 10.5236C58.919 11.1738 58.4618 11.7104 57.8443 11.9665C57.2263 12.2229 56.5227 12.167 55.9529 11.8163L51.9929 9.3794L49.3782 11.9941L51.8161 15.9556C52.1682 16.5278 52.2208 17.2308 51.9661 17.845C51.7118 18.4584 51.1779 18.9179 50.5246 19.0735L46 20.1508V23.8485L50.5227 24.9253C51.177 25.0811 51.7114 25.5413 51.966 26.1554C52.221 26.7702 52.1684 27.4741 51.8158 28.0471L49.3789 32.0071L51.9936 34.6218L55.9542 32.1844C56.5238 31.8339 57.227 31.7781 57.8448 32.0343C58.462 32.2902 58.919 32.8266 59.0738 33.4766L60.1508 38H63.8485L64.9251 33.478C65.08 32.8275 65.5375 32.2906 66.1552 32.0345C66.7734 31.7782 67.4771 31.8341 68.047 32.1849L72.0055 34.6208L74.6202 32.0062L72.1847 28.0485C71.8319 27.4752 71.7793 26.7709 72.0344 26.1557C72.2891 25.5414 72.8238 25.081 73.4785 24.9251L78 23.8486V20.1509L73.477 19.074C72.8268 18.9191 72.2902 18.4619 72.0342 17.8445C71.7779 17.2265 71.8337 16.523 72.1844 15.9532L74.6208 11.994L72.0062 9.37928L68.0468 11.8158C67.477 12.1665 66.7734 12.2224 66.1553 11.9661C65.5377 11.71 65.0803 11.1733 64.9254 10.5229L63.8486 6H60.1509ZM69.1432 21.9998C69.1432 25.9447 65.9452 29.1426 62.0003 29.1426C58.0554 29.1426 54.8575 25.9447 54.8575 21.9998C54.8575 18.0549 58.0554 14.8569 62.0003 14.8569C65.9452 14.8569 69.1432 18.0549 69.1432 21.9998ZM67.1432 21.9998C67.1432 24.8401 64.8406 27.1426 62.0003 27.1426C59.16 27.1426 56.8575 24.8401 56.8575 21.9998C56.8575 19.1595 59.16 16.8569 62.0003 16.8569C64.8406 16.8569 67.1432 19.1595 67.1432 21.9998Z" fill="#BE054B"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M35 55H27L27 63H35V55ZM27 53C25.8954 53 25 53.8954 25 55V63C25 64.1046 25.8954 65 27 65H35C36.1046 65 37 64.1046 37 63V55C37 53.8954 36.1046 53 35 53H27Z" fill="#07012E"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M55 55H47L47 63H55V55ZM47 53C45.8954 53 45 53.8954 45 55V63C45 64.1046 45.8954 65 47 65H55C56.1046 65 57 64.1046 57 63V55C57 53.8954 56.1046 53 55 53H47Z" fill="#07012E"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M75 55H67L67 63H75V55ZM67 53C65.8954 53 65 53.8954 65 55V63C65 64.1046 65.8954 65 67 65H75C76.1046 65 77 64.1046 77 63V55C77 53.8954 76.1046 53 75 53H67Z" fill="#07012E"/>
                                </svg>
                            </div>
                            <figcaption>
                                <h3 class="title title-h3">Собственное производство</h3>
                                <p class="pros__text pros__text--mobile">Наша компания имеет большую клиентскую базу и множество постоянных заказчиков, которые имеют в нашем лице надежного и стабильного поставщика
                                    <br>с собственным производственными мощностями по изготовлению редукторов.</p>
                                <p class="pros__text pros__text--tablet">Наша компания имеет большую клиентскую базу и множество<br> постоянных заказчиков, которые имеют в нашем лице надежного и<br> стабильного поставщика с собственным производственными<br> мощностями по изготовлению редукторов.</p>
                                <p class="pros__text pros__text--desktop">Наша компания имеет большую<br> клиентскую базу и множество постоянных<br> заказчиков, которые имеют в нашем лице<br> надежного и стабильного поставщика<br> с собственным производственными<br> мощностями по изготовлению<br> редукторов.</p>
                                <p class="pros__text pros__text--extra-desktop">Наша компания имеет большую клиентскую базу и<br> множество постоянных заказчиков, которые ищут<br> надежного и стабильного поставщика с собственным<br>  предприятием по изготовлениюредукторов.</p>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </section>
        <article class="news">
            <div class="container">
                <div class="news__title-row">
                    <h2 class="title title-h2">Новости</h2>
                    <a class="news__link" href="/news">все новости</a>
                </div>
                <ul role="list">
                    @foreach($news as $one)

                        <li data-aos="fade-in" data-aos-delay="{{$loop->iteration*200}}"><a href="/news/{{$one->slug}}">
                                <figure>
                                    <picture>
                                        <img src="storage/images/news/{{$one->image}}" loading="lazy" decoding="async" alt="image" width="241" height="180">
                                    </picture>
                                    <figcaption>
                                        <time datetime="2022-03-15">{{$one->created_at}}</time>
                                        <h3 class="title title-h3">{{$one->name}}</h3>
                                    </figcaption>
                                </figure>
                            </a></li>
                    @endforeach
                </ul>
            </div>
        </article>
    </main>
@endsection
