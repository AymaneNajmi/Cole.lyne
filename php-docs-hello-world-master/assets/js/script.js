/**
 * Main JavaScript file for First Berserker Khazan Wiki
 * Handles interactive elements and responsive behavior
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }
    
    // Sidebar dropdown toggles
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            this.classList.toggle('active');
            
            // Find the next sibling which should be the dropdown menu
            const dropdownMenu = this.nextElementSibling;
            if (dropdownMenu && dropdownMenu.classList.contains('dropdown-menu')) {
                dropdownMenu.classList.toggle('active');
            }
        });
    });
    
    // Image lightbox functionality
    const contentImages = document.querySelectorAll('.main-content img:not(.no-lightbox)');
    
    contentImages.forEach(img => {
        img.addEventListener('click', function() {
            openLightbox(this.src, this.alt);
        });
    });
    
    // Search form validation
    const searchForm = document.querySelector('.search-form');
    
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const searchInput = this.querySelector('input[type="text"]');
            if (!searchInput.value.trim()) {
                e.preventDefault();
                searchInput.focus();
            }
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            if (targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});

// Lightbox functionality
function openLightbox(src, alt) {
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    
    const img = document.createElement('img');
    img.src = src;
    img.alt = alt || '';
    
    const caption = document.createElement('div');
    caption.className = 'lightbox-caption';
    caption.textContent = alt || '';
    
    const closeBtn = document.createElement('button');
    closeBtn.className = 'lightbox-close';
    closeBtn.innerHTML = '&times;';
    closeBtn.addEventListener('click', function() {
        document.body.removeChild(lightbox);
    });
    
    lightbox.appendChild(closeBtn);
    lightbox.appendChild(img);
    
    if (alt) {
        lightbox.appendChild(caption);
    }
    
    document.body.appendChild(lightbox);
    
    // Close lightbox when clicking outside the image
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            document.body.removeChild(lightbox);
        }
    });
    
    // Close lightbox with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.querySelector('.lightbox')) {
            document.body.removeChild(lightbox);
        }
    });
}

// Add lightbox styles dynamically
const lightboxStyles = document.createElement('style');
lightboxStyles.textContent = `
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        padding: 30px;
    }
    
    .lightbox img {
        max-width: 90%;
        max-height: 80vh;
        object-fit: contain;
        border: 2px solid #333;
    }
    
    .lightbox-caption {
        position: absolute;
        bottom: 20px;
        left: 0;
        width: 100%;
        text-align: center;
        color: white;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.7);
    }
    
    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 30px;
        color: white;
        background: none;
        border: none;
        cursor: pointer;
    }
`;

document.head.appendChild(lightboxStyles);
