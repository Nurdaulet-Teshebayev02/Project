const words = [
    "the best",
    "cheap",
    "quick",
    "super"
]

const output = document.getElementById("output")
let wordTurn = 0
let charTurn = 0

function printWord(){
    if(charTurn <= words[wordTurn].length){
        let str = words[wordTurn].substring(0, charTurn)
        output.innerHTML = str
        charTurn++
        setTimeout(printWord, 100)
    }else{
        setTimeout(deleteWord, 700)
    }
}

function deleteWord(){
    if(charTurn >= 0){
        let str = words[wordTurn].substring(0, charTurn)
        output.innerHTML = str
        charTurn--
        setTimeout(deleteWord, 50)
    }else{
        wordTurn++
        if(wordTurn == words.length){
            wordTurn = 0
        }
        setTimeout(printWord, 100)
    }
}

printWord()