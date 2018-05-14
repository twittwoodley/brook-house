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

    const panels = document.querySelector('.panels');
    const panel = document.querySelectorAll('.panel');

    function openPanel() {
      //Removes all '.open' classes from panels
      panel.forEach(panel => {
      panel.classList.remove('open');
      });
      //Adds '.open' class to this
      this.classList.add('open');
      //Removes all '.open-active' classes from panels. This class reveals text from top and bottom of screen.
      panel.forEach(panel => {
        panel.classList.remove('text-active');
      });
      //Adds class to reveal text
      this.classList.add('text-active')
      }

    panel.forEach(panel => {
      panel.addEventListener('click', openPanel)
    });    
