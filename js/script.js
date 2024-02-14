
$(document).ready(function() {
   
/*
 * BACKGROUND COVER    
 */

    let covers = $('.fadecovers');

    covers.children(':not(:last)').hide();

    setInterval(function() {

        covers.children(':last').fadeOut(6000, function() {
            $(this).prependTo( covers );
        }).prev().fadeIn(6000);
    }, 3000);



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






