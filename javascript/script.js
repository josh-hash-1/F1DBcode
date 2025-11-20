// smooth-scroll.js

// Initialize Locomotive Scroll with GSAP integration
document.addEventListener('DOMContentLoaded', () => {
    
    // Register GSAP ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);
    
    // Smooth scroll configuration
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        orientation: 'vertical',
        gestureOrientation: 'vertical',
        smoothWheel: true,
        wheelMultiplier: 1,
        smoothTouch: false,
        touchMultiplier: 2,
        infinite: false,
    });

    // Sync Lenis with GSAP ScrollTrigger
    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });

    gsap.ticker.lagSmoothing(0);

    // Smooth scroll to anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                lenis.scrollTo(target, {
                    offset: -100,
                    duration: 1.5,
                    easing: (t) => t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1
                });
            }
        });
    });

    // Fade-in animations on scroll
    gsap.utils.toArray('.fade-in').forEach((element) => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: 'top 80%',
                end: 'top 20%',
                toggleActions: 'play none none reverse',
            },
            opacity: 0,
            y: 50,
            duration: 1,
            ease: 'power2.out'
        });
    });

    // Slide-in from left
    gsap.utils.toArray('.slide-in-left').forEach((element) => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: 'top 80%',
                toggleActions: 'play none none reverse',
            },
            opacity: 0,
            x: -100,
            duration: 1,
            ease: 'power3.out'
        });
    });

    // Slide-in from right
    gsap.utils.toArray('.slide-in-right').forEach((element) => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: 'top 80%',
                toggleActions: 'play none none reverse',
            },
            opacity: 0,
            x: 100,
            duration: 1,
            ease: 'power3.out'
        });
    });

    // F1 Racing line animation (optional cool effect)
    const racingLine = document.querySelector('.racing-line');
    if (racingLine) {
        gsap.to(racingLine, {
            scrollTrigger: {
                trigger: 'body',
                start: 'top top',
                end: 'bottom bottom',
                scrub: 1,
            },
            scaleX: 1,
            transformOrigin: 'left center',
        });
    }
});
