import './bootstrap';
(function(){
    const sliders= [...document.querySelectorAll('.slider__body')];
    sliders[0].classList.toggle('slider__body--show');
    const arrowNext= document.querySelector('#after');
    const arrowBefore= document.querySelector('#before');
    let value; 

    arrowNext.addEventListener('click', ()=>changePosition(1));
    arrowBefore.addEventListener('click', ()=>changePosition(-1));

    function changePosition(change){
        const currentElement= Number(document.querySelector('.slider__body--show').dataset.id);
        value=currentElement;
        value+=change;
        sliders.forEach((slider, i) => {
            if(slider.dataset.id == currentElement) {
                slider.classList.toggle('slider__body--show');
                let value = i + change
                if (value === -1 || value === sliders.length) {
                    value = i === 0 ? sliders.length - 1 : 0;
                }
                sliders[value].classList.toggle('slider__body--show');
            }
        })
    }
})();
