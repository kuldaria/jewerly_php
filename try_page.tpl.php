<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry</title>
    <meta name="description" content="Ювелирная мастерская ручной работы. Украшения с бриллиантами, рубинами, сапфирами">
    <link rel="stylesheet" href="try.css" media="all">
    <link rel="stylesheet" href="/try.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="header" aria-label="Основная навигация">
        <div class="container">
            <nav class="navbar" aria-label="Навигация">
                <div class="logo" aria-label="Логотип">
                    <span class="logo-text">Jewerly</span>
                </div>
                <ul class="nav-menu" role="menubar">
                    <li class="dropdown" role="none">
                        <a href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">
                            О НАС <i class="fas fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" role="menu" aria-label="Подменю О нас">
                            <a href="#" class="dropdown-item" role="menuitem">История</a>
                            <a href="#" class="dropdown-item" role="menuitem">Мастера</a>
                            <a href="#" class="dropdown-item" role="menuitem">Философия бренда</a>
                            <a href="#" class="dropdown-item" role="menuitem">Качество материалов</a>
                        </div>
                    </li>
                    <li role="none"><a href="#" role="menuitem">ИНДИВИДУАЛЬНЫЕ ЗАКАЗЫ</a></li>
                    <li role="none"><a href="#" role="menuitem">ПОДДЕРЖКА</a></li>
                    <li role="none"><a href="#footer" role="menuitem">КОНТАКТЫ</a></li>
                </ul>
                <button class="menu-toggle" aria-label="Меню" aria-expanded="false">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </button>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero hero-section-with-video" aria-label="Главный баннер">
            <div class="video-background-container" aria-hidden="true">
                <video autoplay muted loop playsinline id="hero-video" aria-hidden="true">
                    <source src="IMG_2630.MP4" type="video/mp4">
                </video>
            </div>
            <div class="video-overlay" aria-hidden="true"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        <span class="title-line">Элегантность</span>
                        <span class="title-line">в каждой детали</span>
                    </h1>
                    <div class="hero-buttons">
                        <a href="#catalog" class="btn btn-primary">КАТАЛОГ</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="floating-card card-1">
                        <h4>Дизайн мечты</h4>
                        <p>Каждое украшение создаётся с вниманием к деталям и гармонии формы</p>
                    </div>
                    <div class="floating-card card-2">
                        <h4>Ручная работа</h4>
                        <p>Мастера воплощают ваши идеи в уникальные изделия из драгоценных материалов</p>
                    </div>
                    <div class="floating-card card-3">
                        <h4>Исключительный блеск</h4>
                        <p>Мы заботимся о каждом украшении: полировка, уход и восстановление сияния</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" aria-labelledby="services-title">
            <div class="container">
                <div class="section-header">
                    <h2 id="services-title" class="section-title">Что мы можем вам предложить</h2>
                </div>
                <div class="services-grid">
                    <article class="service-card">
                        <div class="service-icon" aria-hidden="true"><i class="fas fa-gem"></i></div>
                        <h3>Гарантия качества</h3>
                        <p>Сертифицированные камни, только натуральные материалы, пожизненная гарантия фиксации.</p>
                        <a href="#quality" class="service-link">Подробнее <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                    </article>
                    <article class="service-card">
                        <div class="service-icon" aria-hidden="true"><i class="fas fa-user-cog"></i></div>
                        <h3>Индивидуальный подход</h3>
                        <p>Эскизы по вашим пожеланиям, 3D-моделирование, создание семейных реликвий.</p>
                        <a href="#custom" class="service-link">Подробнее <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                    </article>
                    <article class="service-card">
                        <div class="service-icon" aria-hidden="true"><i class="fas fa-award"></i></div>
                        <h3>Система лояльности</h3>
                        <p>Обмен украшений, бесплатное обслуживание, накопительные скидки и бонусы.</p>
                        <a href="#loyalty" class="service-link">Подробнее <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                    </article>
                </div>
            </div>
        </section>

        <section class="jewelry-collage" id="catalog" aria-labelledby="jewelry-title">
            <div class="container">
                <div class="section-header">
                    <h2 id="jewelry-title" class="section-title">Наши украшения</h2>
                    <p class="section-subtitle">Уникальные изделия ручной работы от наших мастеров</p>
                </div>
                <div class="collage-container">
                    <div class="collage-item large-item">
                        <div class="collage-image">
                            <img src="украшение 6.jpg" alt="Браслет" loading="lazy">
                        </div>
                    </div>
                    <div class="collage-item medium-item">
                        <div class="collage-image">
                            <img src="украшение 1.jpg" alt="Кольцо со звездами" loading="lazy">
                        </div>
                    </div>
                    <div class="collage-item small-item">
                        <div class="collage-image">
                            <img src="украшение 5.jpg" alt="Браслет" loading="lazy">
                        </div>
                    </div>
                    <div class="collage-item medium-item">
                        <div class="collage-image">
                            <img src="украшение 2.jpg" alt="Колье с рубином" loading="lazy">
                        </div>
                    </div>
                    <div class="collage-item small-item">
                        <div class="collage-image">
                            <img src="украшение 4.jpg" alt="Кольцо" loading="lazy">
                        </div>
                    </div>
                    <div class="collage-item large-item">
                        <div class="collage-image">
                            <img src="украшение 3.jpg" alt="Браслет с бантом" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="collage-cta">
                    <a href="#catalog" class="btn btn-primary">ПОСМОТРЕТЬ ВЕСЬ КАТАЛОГ <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>

        <section class="stones-section" aria-labelledby="stones-title">
            <div class="container">
                <div class="section-header">
                    <h2 id="stones-title" class="section-title">С какими камнями мы работаем</h2>
                    <p class="section-subtitle">Сертифицированные драгоценные и полудрагоценные камни высшего качества</p>
                </div>
                <div class="stones-grid">
                    <article class="stone-card">
                        <div class="stone-image">
                            <img src="камень 4.jpg" alt="Бриллиант" loading="lazy">
                        </div>
                        <div class="stone-info">
                            <h3>Бриллиант</h3>
                            <p>Самый твердый минерал, символ чистоты и вечности. Используем бриллианты от 0.3 карат.</p>
                            <div class="stone-properties">
                                <span class="property"><i class="fas fa-weight-hanging" aria-hidden="true"></i> От 0.3 карат</span>
                                <span class="property"><i class="fas fa-palette" aria-hidden="true"></i> D-F цвета</span>
                            </div>
                        </div>
                    </article>
                    <article class="stone-card">
                        <div class="stone-image">
                            <img src="камень 1.jpg" alt="Танзанит" loading="lazy">
                        </div>
                        <div class="stone-info">
                            <h3>Танзанит</h3>
                            <p>Редкий камень с уникальным синим оттенком, символ мудрости и вдохновения.</p>
                            <div class="stone-properties">
                                <span class="property"><i class="fas fa-weight-hanging" aria-hidden="true"></i> От 0.5 карат</span>
                                <span class="property"><i class="fas fa-palette" aria-hidden="true"></i> Синий-фиолетовый</span>
                            </div>
                        </div>
                    </article>
                    <article class="stone-card">
                        <div class="stone-image">
                            <img src="камень 2.jpg" alt="Сапфир" loading="lazy">
                        </div>
                        <div class="stone-info">
                            <h3>Сапфир</h3>
                            <p>Королевский камень синего цвета, символ верности и благородства. Кашмирские и цейлонские сапфиры.</p>
                            <div class="stone-properties">
                                <span class="property"><i class="fas fa-weight-hanging" aria-hidden="true"></i> От 0.4 карат</span>
                                <span class="property"><i class="fas fa-palette" aria-hidden="true"></i> Синий, розовый</span>
                            </div>
                        </div>
                    </article>
                    <article class="stone-card">
                        <div class="stone-image">
                            <img src="камень 5.jpg" alt="Рубин" loading="lazy">
                        </div>
                        <div class="stone-info">
                            <h3>Рубин</h3>
                            <p>Камень страсти и любви, один из самых дорогих драгоценных камней. Бирманские рубины высшего качества.</p>
                            <div class="stone-properties">
                                <span class="property"><i class="fas fa-weight-hanging" aria-hidden="true"></i> От 0.3 карат</span>
                                <span class="property"><i class="fas fa-palette" aria-hidden="true"></i> Кроваво-красный</span>
                            </div>
                        </div>
                    </article>
                    <article class="stone-card">
                        <div class="stone-image">
                            <img src="камень 6.jpg" alt="Аметист" loading="lazy">
                        </div>
                        <div class="stone-info">
                            <h3>Аметист</h3>
                            <p>Полудрагоценный камень фиолетового цвета, символ духовности. Уругвайские и бразильские аметисты.</p>
                            <div class="stone-properties">
                                <span class="property"><i class="fas fa-weight-hanging" aria-hidden="true"></i> От 1 карата</span>
                                <span class="property"><i class="fas fa-palette" aria-hidden="true"></i> Фиолетовый, сиреневый</span>
                            </div>
                        </div>
                    </article>
                    <article class="stone-card">
                        <div class="stone-image">
                            <img src="камень 3.jpg" alt="Аквамарин" loading="lazy">
                        </div>
                        <div class="stone-info">
                            <h3>Аквамарин</h3>
                            <p>Полудрагоценный камень голубого оттенка, символ спокойствия и мудрости.</p>
                            <div class="stone-properties">
                                <span class="property"><i class="fas fa-weight-hanging" aria-hidden="true"></i> От 1.5 карат</span>
                                <span class="property"><i class="fas fa-palette" aria-hidden="true"></i> Голубой, зелёный</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="testimonials-section" aria-labelledby="testimonials-title">
            <div class="container">
                <div class="section-header">
                    <h2 id="testimonials-title" class="section-title">Отзывы клиентов</h2>
                    <p class="section-subtitle">Реальные впечатления людей, которые доверили нам свои украшения</p>
                </div>
                <div class="testimonials-slider" role="region" aria-label="Отзывы клиентов">
                    <div class="testimonial-slide active" role="group" aria-label="Отзыв 1 из 3">
                        <div class="testimonial-card">
                            <blockquote class="testimonial-text">"Заказывала обручальные кольца для свадьбы. Мастер учёл все пожелания, кольца идеально сидят. Результат превзошёл все ожидания!"</blockquote>
                            <cite class="client-name">Анна Смирнова</cite>
                        </div>
                    </div>
                    <div class="testimonial-slide" role="group" aria-label="Отзыв 2 из 3" hidden>
                        <div class="testimonial-card">
                            <blockquote class="testimonial-text">"Делал предложение руки и сердца, нужно было идеальное кольцо. Подобрали камень, создали дизайн, выполнили в срок. Невеста была в восторге!"</blockquote>
                            <cite class="client-name">Максим Иванов</cite>
                        </div>
                    </div>
                    <div class="testimonial-slide" role="group" aria-label="Отзыв 3 из 3" hidden>
                        <div class="testimonial-card">
                            <blockquote class="testimonial-text">"Это уже третье украшение, которое я заказываю у вас! Качество всегда на высоте. Особенно нравится сервис по уходу — украшения как новые даже спустя годы."</blockquote>
                            <cite class="client-name">Екатерина Петрова</cite>
                        </div>
                    </div>
                    <div class="slider-controls" role="group" aria-label="Управление слайдером">
                        <button class="slider-arrow prev-arrow" aria-label="Предыдущий отзыв">&#10094;</button>
                        <button class="slider-arrow next-arrow" aria-label="Следующий отзыв">&#10095;</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="pricing-section" aria-labelledby="pricing-title">
            <div class="container">
                <div class="section-header">
                    <h2 id="pricing-title" class="section-title">Тарифы по уходу за украшениями</h2>
                    <p class="section-subtitle">Профессиональный уход и обслуживание для сохранения безупречного вида</p>
                </div>
                <div class="pricing-grid">
                    <article class="pricing-card">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Базовый уход</h3>
                            <div class="pricing-price"><span class="price-amount">2 500 ₽</span><span class="price-period">/ год</span></div>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check" aria-hidden="true"></i> Чистка ультразвуком (2 раза в год)</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Проверка застежек и креплений</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Консультация по хранению</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Базовая полировка</li>
                            <li><i class="fas fa-times" aria-hidden="true"></i> <span class="feature-disabled">Срочный ремонт</span></li>
                        </ul>
                        <div class="pricing-cta">
                            <a href="#contact-form" class="btn">Выбрать тариф</a>
                        </div>
                    </article>
                    <article class="pricing-card featured">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Расширенная забота</h3>
                            <div class="pricing-price"><span class="price-amount">5 900 ₽</span><span class="price-period">/ год</span></div>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check" aria-hidden="true"></i> Чистка ультразвуком (4 раза в год)</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Полная диагностика украшения</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Полировка и восстановление блеска</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Мелкий ремонт (до 1 часа)</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Фирменная шкатулка для хранения</li>
                        </ul>
                        <div class="pricing-cta">
                            <a href="#contact-form" class="btn btn-primary">Выбрать тариф</a>
                        </div>
                    </article>
                    <article class="pricing-card">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Премиум-сервис</h3>
                            <div class="pricing-price"><span class="price-amount">12 000 ₽</span><span class="price-period">/ год</span></div>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check" aria-hidden="true"></i> Неограниченная чистка и полировка</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Срочный ремонт в течение 24 часов</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Страхование украшения на год</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Персональный менеджер</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Бесплатная доставка в сервис</li>
                        </ul>
                        <div class="pricing-cta">
                            <a href="#contact-form" class="btn">Выбрать тариф</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="faq">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Часто задаваемые вопросы</h2>
                    <p class="section-subtitle">Ответы на самые популярные вопросы наших клиентов.</p>
                </div>
                
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-number">1</div>
                            <h3>Как заказать индивидуальный дизайн украшения?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Для заказа индивидуального дизайна заполните форму внизу страницы, опишите ваши пожелания, и наш дизайнер свяжется с вами в течение 24 часов для обсуждения деталей.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-number">2</div>
                            <h3>Какие материалы вы используете в производстве?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Мы работаем только с качественными материалами: золото 585 и 750 пробы, серебро 925 пробы, бриллианты, изумруды, сапфиры и другие драгоценные камни. Все материалы сертифицированы.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-number">3</div>
                            <h3>Сколько времени занимает изготовление украшения на заказ?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Срок изготовления зависит от сложности дизайна:
                                    <br>- Простые украшения: 7-14 дней
                                    <br>- Средней сложности: 14-30 дней
                                    <br>- Сложные дизайны: 30-60 дней
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-number">4</div>
                            <h3>Есть ли гарантия на ваши изделия?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Да, мы предоставляем гарантию 2 года на все наши изделия. Гарантия покрывает производственные дефекты. Гарантийный талон выдается при покупке.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-number">5</div>
                            <h3>Можно ли изменить или отменить заказ?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Изменения в дизайн возможны на этапе утверждения эскиза. После начала производства изменения вносятся за дополнительную плату. Отмена заказа возможна до начала производства.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-number">6</div>
                            <h3>Доставляете ли вы по всей России?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Да, мы осуществляем доставку по всей России через проверенные транспортные компании. Доставка по Москве и Санкт-Петербургу - бесплатно. В другие регионы доставка рассчитывается индивидуально.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-number">7</div>
                            <h3>Можно ли увидеть 3D-модель украшения перед изготовлением?</h3>
                            <span class="faq-toggle">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Да, для всех индивидуальных заказов мы создаем 3D-модель, которую вы можете рассмотреть со всех сторон, внести правки и утвердить перед началом производства.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer" id="footer" aria-label="Футер сайта">
            <div class="container">
                <div class="footer-main">
                    <div class="footer-logo">
                        <div class="logo" aria-hidden="true">
                            <span class="logo-text">Оставить заявку на создание собственного дизайна</span>
                        </div>
                        <p class="footer-description">Если вы не смогли выбрать что-то из нашего каталога, но хотели бы изделие именно от нас, оставьте заявку и мы обязательно свяжемся с вами.</p>
                        <div class="footer-contact">
                            <h4>Наши контакты</h4>
                            <address class="contact-item">
                                <i class="fas fa-phone" aria-hidden="true"></i>
                                <a>8 888 888-88-88</a>
                            </address>
                            <address class="contact-item">
                                <i class="fas fa-envelope" aria-hidden="true"></i>
                                <a>info@digital.com</a>
                            </address>
                        </div>
                    </div>
                    <div class="footer-form-container">
                        <div class="form-wrapper">
                            <form action="/" method="POST" class="footer-form" id="contactForm" aria-label="Форма заявки">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Ваше имя" required aria-required="true">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="Телефон" pattern="^(\+7|7|8)?[\s\-]?\(?[0-9]{3}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$" title="Введите номер телефона в формате: +7 (XXX) XXX-XX-XX" required aria-required="true">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" title="Адрес электронной почты должен содержать символ @ и домен." required aria-required="true">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Ваши пожелания по дизайну изделия" required aria-required="true"></textarea>
                                </div>
                                <div class="form-group checkbox-group">
                                    <input class="form-check-input" type="checkbox" name="agreement" id="contract" required checked aria-required="true">
                                    <label class="form-check-label" for="contract">
                                        Отправляя заявку, я даю согласие на <a href="agree.pdf">обработку своих персональных данных.*</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-form-submit">отправить</button>
                                <div id="form-response" style="margin-top: 10px; font-weight: bold;"></div> 
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="social-links" aria-label="Социальные сети">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" aria-label="ВКонтакте"><i class="fab fa-vk" aria-hidden="true"></i></a>
                        <a href="#" aria-label="Telegram"><i class="fab fa-telegram" aria-hidden="true"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="scripts.js" defer></script>
</body>

</html>
