(() => {
  const $ = (s, r = document) => [...r.querySelectorAll(s)];
  const menu = document.getElementById('menu'), burger = $('.burger')[0];
  burger.addEventListener('click', () => burger.setAttribute('aria-expanded', menu.classList.toggle('open')));
  $('a', menu).forEach(a => a.addEventListener('click', () => { menu.classList.remove('open'); burger.setAttribute('aria-expanded', 'false'); }));
  // Active nav link while scrolling
  const links = $('[data-spy]');
  const spy = new IntersectionObserver(es => es.forEach(e => {
    if (e.isIntersecting) links.forEach(l => l.classList.toggle('active', l.dataset.spy === e.target.id));
  }), { rootMargin: '-45% 0px -50% 0px' });
  $('main > section').forEach(s => spy.observe(s));
  // Skills accordion
  $('.acc button').forEach(b => b.addEventListener('click', () => {
    const open = b.parentElement.classList.toggle('open');
    b.setAttribute('aria-expanded', open);
  }));
  // Reveal cards and timeline items once
  const fade = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); fade.unobserve(e.target); } }), { threshold: .12 });
  $('.card, .item').forEach(el => { el.classList.add('fade'); fade.observe(el); });
  // Back to top
  const top = document.getElementById('totop');
  addEventListener('scroll', () => top.classList.toggle('show', scrollY > 600), { passive: true });
  top.addEventListener('click', () => scrollTo({ top: 0 }));
  // Client-side hint only; the server re-validates everything
  const f = $('.form')[0];
  f && f.addEventListener('submit', e => { if (!f.checkValidity()) { e.preventDefault(); f.reportValidity(); } });
})();
