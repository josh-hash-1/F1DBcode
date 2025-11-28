// Smooth scroll animations for team cards
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
});

document.querySelectorAll('.mclaren, .ferrari, .redbull, .mercedes, .aston-martin, .alpine, .haas, .racing-bulls, .williams, .sauber').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'all 0.6s ease';
    observer.observe(card);
});

// Image hover zoom effect
document.querySelectorAll('.car-box img').forEach(img => {
    img.addEventListener('mouseenter', () => {
        img.style.transform = 'scale(1.08)';
        img.style.transition = 'transform 0.4s ease';
    });
    img.addEventListener('mouseleave', () => {
        img.style.transform = 'scale(1)';
    });
});

// Expand/collapse team info
document.querySelectorAll('.mclaren, .ferrari, .redbull, .mercedes, .aston-martin, .alpine, .haas, .racing-bulls, .williams, .sauber').forEach(card => {
    const p = card.querySelector('p');
    const btn = document.createElement('button');
    btn.textContent = 'Read More';
    btn.style.cssText = 'margin-top: 15px; padding: 8px 20px; cursor: pointer; border-radius: 5px; background: var(--f1-light); color: var(--f1-dark); border: none; font-weight: bold;';
    
    const fullText = p.textContent;
    const shortText = fullText.substring(0, 150) + '...';
    let isExpanded = false;
    
    p.textContent = shortText;
    card.appendChild(btn);
    
    btn.addEventListener('click', () => {
        isExpanded = !isExpanded;
        p.textContent = isExpanded ? fullText : shortText;
        btn.textContent = isExpanded ? 'Read Less' : 'Read More';
    });
});

// Scroll to top button
const scrollBtn = document.createElement('button');
scrollBtn.innerHTML = '⬆️ Top';
scrollBtn.style.cssText = 'position: fixed; bottom: 30px; right: 30px; padding: 12px 15px; cursor: pointer; display: none; z-index: 999; background: var(--f1-light); color: var(--f1-dark); border: none; border-radius: 50%; font-weight: bold;';
document.body.appendChild(scrollBtn);

window.addEventListener('scroll', () => {
    scrollBtn.style.display = window.scrollY > 300 ? 'block' : 'none';
});

scrollBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
