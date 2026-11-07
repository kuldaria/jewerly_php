document.addEventListener('DOMContentLoaded', function() {

    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData.entries());

            try {
                const response = await fetch('/api/save', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (result.status === 'success') {
                    alert('Заявка принята.\n\nВаш логин: ${result.login}\nВаш пароль: ${result.password}');
                    responseDiv.style.color = "#57d7d9";
                    contactForm.reset();
                } else {
                    alert('Ошибка при сохранении данных.');
                }
            } catch (error) {
                console.error('Ошибка:', error);
                alert('Не удалось связаться с сервером.');
            }
        });
    }


    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            const icon = this.querySelector('i');
            if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
        });
    }
    
    const dropdownToggles = document.querySelectorAll('.dropdown > a');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                e.stopPropagation();
                
                const dropdown = this.parentElement;
                
                document.querySelectorAll('.dropdown').forEach(otherDropdown => {
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove('active');
                        const otherIcon = otherDropdown.querySelector('a i');
                        if (otherIcon) {
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    }
                });
                
                dropdown.classList.toggle('active');
                
                const icon = this.querySelector('i');
                if (icon) {
                    if (dropdown.classList.contains('active')) {
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        icon.style.transform = 'rotate(0deg)';
                    }
                }
            }
        });
    });
    
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                dropdown.classList.remove('active');
                const link = dropdown.querySelector('a');
                if (link) {
                    const icon = link.querySelector('i');
                    if (icon) {
                        icon.style.transform = 'rotate(0deg)';
                    }
                }
            });
        }
        
        if (window.innerWidth <= 768 && e.target.closest('.nav-menu a')) {
            if (e.target.closest('.dropdown-item')) {
                navMenu.classList.remove('active');
                if (menuToggle) {
                    const icon = menuToggle.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                }
                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    dropdown.classList.remove('active');
                    const link = dropdown.querySelector('a');
                    if (link) {
                        const arrowIcon = link.querySelector('i');
                        if (arrowIcon) {
                            arrowIcon.style.transform = 'rotate(0deg)';
                        }
                    }
                });
            }
            else if (!e.target.closest('.dropdown')) {
                navMenu.classList.remove('active');
                if (menuToggle) {
                    const icon = menuToggle.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                }
            }
        }
    });
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    if (menuToggle) {
                        const icon = menuToggle.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    }
                }
                
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    const floatingCards = document.querySelectorAll('.floating-card');
    floatingCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.2}s`;
    });
    
    const video = document.getElementById('hero-video');
    if (video) {
        const playPromise = video.play();
        
        if (playPromise !== undefined) {
            playPromise.then(() => {
                console.log('Видео фоновое запущено');
            }).catch((error) => {
                console.log('Ошибка запуска видео:', error);
                const heroSection = document.querySelector('.hero-section-with-video');
                if (heroSection) {
                    heroSection.style.background = 'linear-gradient(135deg, #0F0F1E 0%, #1A1A2E 100%)';
                }
            });
        }
        
        video.addEventListener('error', function() {
            console.log('Ошибка загрузки видео');
            const heroSection = document.querySelector('.hero-section-with-video');
            if (heroSection) {
                heroSection.style.background = 'linear-gradient(135deg, #0F0F1E 0%, #1A1A2E 100%)';
            }
        });
    }
    
    const faqItems = document.querySelectorAll('.faq-item');
    
    if (faqItems.length > 0) {
        function toggleFaqAccordion(item) {
            const answer = item.querySelector('.faq-answer');
            const toggleIcon = item.querySelector('.faq-toggle i');
            
            if (item.classList.contains('active')) {
                item.classList.remove('active');
                if (answer) answer.style.maxHeight = null;
                if (toggleIcon) toggleIcon.style.transform = 'rotate(0deg)';
            } else {
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        const otherIcon = otherItem.querySelector('.faq-toggle i');
                        if (otherAnswer) otherAnswer.style.maxHeight = null;
                        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                    }
                });
                
                item.classList.add('active');
                if (answer) answer.style.maxHeight = answer.scrollHeight + 'px';
                if (toggleIcon) toggleIcon.style.transform = 'rotate(180deg)';
            }
        }
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const toggleBtn = item.querySelector('.faq-toggle');
            const questionNumber = item.querySelector('.question-number');
            
            if (item.classList.contains('active')) {
                if (answer) answer.style.maxHeight = answer.scrollHeight + 'px';
            } else {
                if (answer) answer.style.maxHeight = null;
            }
            
            if (question) {
                question.addEventListener('click', function() {
                    toggleFaqAccordion(item);
                });
            }
            
            if (toggleBtn) {
                toggleBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleFaqAccordion(item);
                });
            }
            
            if (questionNumber) {
                questionNumber.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleFaqAccordion(item);
                });
            }
        });
        
    }
    
    const slides = document.querySelectorAll('.testimonial-slide');
    const prevBtn = document.querySelector('.prev-arrow');
    const nextBtn = document.querySelector('.next-arrow');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if(i === index) slide.classList.add('active');
        });
    }

    if (prevBtn && nextBtn && slides.length > 0) {
        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        });

        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        });
    }
    
    const contactForm = document.querySelector('.footer-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const phoneInput = this.querySelector('input[type="tel"]');
            const emailInput = this.querySelector('input[type="email"]');
            const checkbox = this.querySelector('input[type="checkbox"]');
            
            let isValid = true;
            
            if (phoneInput && !phoneInput.checkValidity()) {
                phoneInput.style.borderColor = '#FF6584';
                isValid = false;
            } else if (phoneInput) {
                phoneInput.style.borderColor = '';
            }
            
            if (emailInput && !emailInput.checkValidity()) {
                emailInput.style.borderColor = '#FF6584';
                isValid = false;
            } else if (emailInput) {
                emailInput.style.borderColor = '';
            }
            
            if (checkbox && !checkbox.checked) {
                isValid = false;
                const label = this.querySelector('.form-check-label');
                if (label) {
                    label.style.color = '#FF6584';
                    setTimeout(() => {
                        label.style.color = '';
                    }, 2000);
                }
            }
            
            if (isValid) {
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                
                submitBtn.textContent = 'Отправка...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    alert('Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.');
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    contactForm.reset();
                }, 1500);
            } else {
                alert('Пожалуйста, заполните все обязательные поля корректно.');
            }
        });
    }
    
    window.addEventListener('resize', function() {
        faqItems.forEach(item => {
            if (item.classList.contains('active')) {
                const answer = item.querySelector('.faq-answer');
                if (answer) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            }
        });
    });
    
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.service-card, .stone-card, .collage-item');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('animated');
            }
        });
    };

    animateOnScroll();
    window.addEventListener('scroll', animateOnScroll);
    
    console.log('Сайт успешно загружен.');
});