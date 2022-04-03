const burgerMenu = () => {
    document.querySelector('#burger').addEventListener('click', () => {
        this.style.transform = 'rotate(90deg)'
    })
}

burgerMenu()