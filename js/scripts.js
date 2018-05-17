//Scripts
/*    const nav = document.querySelector('#main');
    let topOfNav = nav.offsetTop;

    function fixNav() {
      if (window.scrollY >= topOfNav) {
        document.body.style.paddingTop = nav.offsetHeight + 'px';
        document.body.classList.add('fixed-nav');
      } else {
        document.body.classList.remove('fixed-nav');
        document.body.style.paddingTop = 0;
      }
    }

    window.addEventListener('scroll', fixNav);
*/
// Flex Panels JS
    const panels = document.querySelectorAll('.panel');
    const underlay = document.querySelectorAll('.dark-underlay');

    function toggleOpen(e) {
            //Removes all '.open' classes from panels
      panels.forEach(panel => {
      panel.classList.remove('open');
      panel.classList.remove('dark-underlay-active');
      });
      this.classList.toggle('open');
        panels.forEach(panel => {
        panel.classList.remove('text-active')
        });
        this.classList.add('text-active');
        this.classList.add('dark-underlay-active');

      }

    panels.forEach(panel => panel.addEventListener('click', toggleOpen));

//Nav JS
    const nav = document.querySelector('#main');
    let topOfNav = nav.offsetTop;

    function fixNav() {
      if (window.scrollY >= topOfNav) {
        document.body.style.paddingTop = nav.offsetHeight + 'px';
        document.body.classList.add('fixed-nav');
      } else {
        document.body.classList.remove('fixed-nav');
        document.body.style.paddingTop = 0;
      }
    }

    window.addEventListener('scroll', fixNav);