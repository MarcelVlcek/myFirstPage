
$(document).ready(function() {
   
/*
 * BACKGROUND COVER    
 */

    var covers = $('.fadecovers');

    covers.children(':not(:last)').hide();

    setInterval(function() {

        covers.children(':last').fadeOut(6000, function() {
            $(this).prependTo( covers );
        }).prev().fadeIn(6000);
    }, 3000);


/*
  /*
    * BACK TO TOP 
    */
  document.addEventListener('DOMContentLoaded', function() {
  var backToTop = document.createElement('a');
  backToTop.href = '#home';
  backToTop.className = 'back-to-top';

  var arrowIcon = document.createElement('i');
  arrowIcon.className = 'fa-solid fa-circle-arrow-up fa-3x';
  
  backToTop.appendChild(arrowIcon);

  backToTop.style.display = 'none';
  document.body.appendChild(backToTop);

  backToTop.addEventListener('click', function() {
      scrollToTop();
  });

  window.addEventListener('scroll', function() {
      if (window.scrollY >= 100) {
          fadeIn(backToTop);
      } else {
          hide(backToTop);
      }
  });

  function scrollToTop() {
      window.scrollTo({
          top: 0,
          behavior: 'smooth'
      });
  }

  function fadeIn(element) {
      element.style.display = 'block';
  }

  function hide(element) {
      element.style.display = 'none';
  }

});
    
/*
 * NAVIGATION ACTIVE
 */


document.querySelectorAll('.nav-link').forEach
(link => {
    if(link.href == window.location.href){
        link.setAttribute('aria-current', 'page')
    }

    
})


/*
 * RESPONSIVE NAVIGATION LINKS
 */


const toggleBtn = document.querySelector('.toggle-btn')
const toggleBtnIcon = document.querySelector('.toggle-btn-icon')
const dropDownMenu = document.querySelector('.dropdown-menu')  


toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    
}

})        







/*
 *  READ MORE BUTTON 
 */


const cardHolders = document.querySelectorAll('.card-holder');

cardHolders.forEach(cardHolder => {
    cardHolder.addEventListener('click', e => {
        const current = e.target;
        const isReadMoreBtn = current.classList.contains('read-more-btn');

        if (!isReadMoreBtn) {
            return;
        }

        const currentCard = current.closest('.card');
        const currentText = currentCard.querySelector('.card__read-more');

        currentText.classList.toggle('card__read-more--open');
        current.textContent = currentText.classList.contains('card__read-more--open') ? 'Menej...' : 'Viac...';
    });
});






