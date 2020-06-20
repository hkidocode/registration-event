const submitForm = document.getElementById('form-container');
const standsDiv = document.getElementById('stands');
let testedStands = [];

standsDiv.addEventListener('click', (event) => {
    let targetedStand = event.target;
    if (targetedStand != standsDiv) {
        targetedStand.style.backgroundColor = "#28CBBC";
        targetedStand.style.color = "white";
        targetedStand.style.border = "none";
        testedStands.push(targetedStand);
        if(testedStands.length > 1) {
            testedStands[0].style.border = "2px solid #3368C6";
            testedStands[0].style.backgroundColor = "white";
            testedStands[0].style.color = "black";
            testedStands.shift();
        }

    }

});




