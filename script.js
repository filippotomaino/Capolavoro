const select = document.querySelector("select")
const button = document.getElementById("vai")
const imageTesta = document.getElementById("testa")
const imageCroce = document.getElementById("croce")
const title = document.getElementById("title")
const result = document.getElementById("result")
const signUp = document.getElementById("ciao")


button.addEventListener("click", () => {
    const random = Math.floor(Math.random() * 11)

    if(random % 2 == 0) {
        imageTesta.style.display = "block"
        imageCroce.style.display = "none"
    } else {
        imageCroce.style.display = "block"
        imageTesta.style.display = "none"
    }

    if(select.options[select.selectedIndex].text == "Testa" && random % 2 == 0 || select.options[select.selectedIndex].text == "Croce" && random % 2 != 0) {
        title.style.display = "none"
        result.style.display = "block"
        result.innerHTML = "Hai vinto!"
    } else if(select.options[select.selectedIndex].text == "Croce" && random % 2 == 0 || select.options[select.selectedIndex].text == "Testa" && random % 2 != 0) {
        title.style.display = "none"
        result.style.display = "block"
        result.innerHTML = "Hai perso!"
    }
})

signUp.addEventListener("click", () => {
    document.documentElement.scrollTop = 1000
})