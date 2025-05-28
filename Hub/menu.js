var menuI = document.querySelectorAll('.itemenu')

function selectL(){
    menuI.forEach((item)=>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuI.forEach((item)=>
    item.addEventListener('click', selectL)    
)