const numbers = document.querySelectorAll(".number")

numbers.forEach((num)=>{
    num.innerHTML = "0"
    function changeNum(){
        let finalRes = +(num.getAttribute("data-num"))
        let increment = Math.ceil(finalRes/100)
        let value = +num.innerHTML
        if(value < finalRes){
            value += increment
            num.innerHTML = value
            setTimeout(changeNum, 100)
        }else{
            num.innerHTML = finalRes
        }
    }
    changeNum()
})
console.log(numbers);