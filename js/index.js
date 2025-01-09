 // Close mobile menu when clicking outside
 document.addEventListener('click', (e) => {
    const navbar = document.getElementById('navbarNav');
    const toggler = document.querySelector('.navbar-toggler');

    if (!navbar.contains(e.target) && !toggler.contains(e.target) && navbar.classList.contains('show')) {
        toggler.click();
    }
});
//navbar js ends

//other js
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (!targetElement) return;

            // Add offset for navbar height
            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            const elementPosition = targetElement.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - navbarHeight;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                document.querySelector('.navbar-toggler').click();
            }
        });
    });
});

// Form validation and enhanced submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.needs-validation');

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            if (!form.checkValidity()) {
                event.stopPropagation();
                form.classList.add('was-validated');
                return;
            }

            // Get form data
            const formData = {
                name: document.getElementById('floatingName').value,
                email: document.getElementById('floatingEmail').value,
                subject: document.getElementById('floatingSubject').value,
                message: document.getElementById('floatingMessage').value
            };

            // Disable submit button and show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';

            // Simulate form submission
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check"></i> Message Sent!';
                submitBtn.classList.remove('btn-primary');
                submitBtn.classList.add('btn-success');

                // Reset form after success
                setTimeout(() => {
                    form.reset();
                    form.classList.remove('was-validated');
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.classList.remove('btn-success');
                    submitBtn.classList.add('btn-primary');
                }, 2000);
            }, 1500);
        });
    }
});


// Back to top button functionality
const backToTopBtn = document.createElement('button');
backToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
backToTopBtn.className = 'back-to-top';
backToTopBtn.style.cssText = `
position: fixed;
bottom: 20px;
right: 20px;
padding: 10px 15px;
background: var(--accent-orange);
color: white;
border: none;
border-radius: 50%;
cursor: pointer;
opacity: 0;
transition: opacity 0.3s, transform 0.3s;
z-index: 1000;
display: none;
`;

document.body.appendChild(backToTopBtn);

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopBtn.style.display = 'block';
        setTimeout(() => backToTopBtn.style.opacity = '1', 0);
    } else {
        backToTopBtn.style.opacity = '0';
        setTimeout(() => backToTopBtn.style.display = 'none', 300);
    }
});

backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
