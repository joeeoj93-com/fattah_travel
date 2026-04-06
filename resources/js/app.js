import './bootstrap';

function initScrollReveal() {
	const elements = document.querySelectorAll('.scroll-reveal');
	if (!elements.length) {
		return;
	}

	const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	if (reduceMotion) {
		elements.forEach(function (el) {
			el.classList.add('is-visible');
		});
		return;
	}

	const observer = new IntersectionObserver(function (entries, obs) {
		entries.forEach(function (entry) {
			if (entry.isIntersecting) {
				entry.target.classList.add('is-visible');
				obs.unobserve(entry.target);
			}
		});
	}, {
		threshold: 0.08,
		rootMargin: '0px 0px -5% 0px'
	});

	const viewportHeight = window.innerHeight || document.documentElement.clientHeight;

	elements.forEach(function (el) {
		if (!el.dataset.reveal) {
			el.dataset.reveal = 'up';
		}
		if (el.dataset.revealDelay) {
			const delay = parseInt(el.dataset.revealDelay, 10);
			if (!Number.isNaN(delay)) {
				el.style.transitionDelay = delay + 'ms';
			}
		}

		const rect = el.getBoundingClientRect();
		const isInitiallyVisible = rect.top < viewportHeight * 0.95 && rect.bottom > 0;

		if (isInitiallyVisible) {
			requestAnimationFrame(function () {
				el.classList.add('is-visible');
			});
			return;
		}

		observer.observe(el);
	});
}

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', initScrollReveal);
} else {
	initScrollReveal();
}
