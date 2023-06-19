const elemSize = document.querySelector(".custom_select_size")
const elemColor = document.querySelector(".custom_select_color")

const choiceSize = new Choices(elemSize, {
    searchEnabled: false,
    itemSelectText: ""
})

const choiceColor = new Choices(elemColor, {
    searchEnabled: false,
    itemSelectText: ""
})
