document.addEventListener('DOMContentLoaded', () => {
    const cardArray = [
        {
            name: 'charizard',
            img: 'img/charizard.png'
        },
        {
            name: 'venusaur',
            img: 'img/venusaur.png'
        },
        {
            name: 'blastoise',
            img: 'img/blastoise.png'
        },
        {
            name: 'mewtwo',
            img: 'img/mewtwo.png'
        },
        {
            name: 'eevee',
            img: 'img/eevee.png'
        },
        {
            name: 'pikachu',
            img: 'img/pikachu.png'
        },
        {
            name: 'charizard',
            img: 'img/charizard.png'
        },
        {
            name: 'venusaur',
            img: 'img/venusaur.png'
        },
        {
            name: 'blastoise',
            img: 'img/blastoise.png'
        },
        {
            name: 'mewtwo',
            img: 'img/mewtwo.png'
        },
        {
            name: 'eevee',
            img: 'img/eevee.png'
        },
        {
            name: 'pikachu',
            img: 'img/pikachu.png'
        }
    ]

    cardArray.sort(() => 0.5 - Math.random())

    const grid = document.querySelector('.grid')
    const resultDisplay = document.querySelector('#result')
    let cardsChosen = []
    let cardsChosenId = []
    let cardsWon = []

    function createBoard() {
        for (let i = 0; i < cardArray.length; i++) {
            const card = document.createElement('img')
            card.setAttribute('src', 'img/carta.png')
            card.setAttribute('data-id', i)
            card.addEventListener('click', flipCard)
            grid.appendChild(card)
        }
    }

    function checkForMatch() {
        const cards = document.querySelectorAll('img')
        const optionOneId = cardsChosenId[0]
        const optionTwoId = cardsChosenId[1]

        if (optionOneId == optionTwoId) {
            cards[optionOneId].setAttribute('src', 'img/carta.png')
            cards[optionTwoId].setAttribute('src', 'img/carta.png')
            alert('Has clicado la misma carta...')
        }
        else if (cardsChosen[0] === cardsChosen[1]) {
            alert('Has encontrado una coincidencia')
            cards[optionOneId].setAttribute('src', 'img/white.png')
            cards[optionTwoId].setAttribute('src', 'img/white.png')
            cards[optionOneId].removeEventListener('click', flipCard)
            cards[optionTwoId].removeEventListener('click', flipCard)
            cardsWon.push(cardsChosen)
        } else {
            cards[optionOneId].setAttribute('src', 'img/carta.png')
            cards[optionTwoId].setAttribute('src', 'img/carta.png')
            alert('Lo siento, Vuelve a intentarlo')
        }
        cardsChosen = []
        cardsChosenId = []
        resultDisplay.textContent = cardsWon.length
        if (cardsWon.length === cardArray.length / 2) {
            resultDisplay.textContent = '¡Felicidades, has ganado!'
        }
    }

    function flipCard() {
        let cardId = this.getAttribute('data-id')
        cardsChosen.push(cardArray[cardId].name)
        cardsChosenId.push(cardId)
        this.setAttribute('src', cardArray[cardId].img)
        if (cardsChosen.length === 2) {
            setTimeout(checkForMatch, 500)
        }
    }

    createBoard()
})