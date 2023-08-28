let texte = document.querySelector('.texte')
let texte2 = document.querySelector('.texte2')
let texte3 = document.querySelector('.texte3')
let texte4 = document.querySelector('.texte4')
let texte5 = document.querySelector('.texte5')
let texte6 = document.querySelector('.texte6')
let residence = document.querySelector('.residence')
let mariage = document.querySelector('.mariageLi')
let certificatDeces = document.querySelector('.certificatDeces')
let extraitNaissanace = document.querySelector('.extraitNaissanace')
let papierExtrait = document.querySelector('.papierExtrait')
let Certificat = document.querySelector('.Certificat')
let civil = document.querySelector('.civil')
texte.classList.add('diplayNone')
texte2.classList.add('diplayNone')
texte3.classList.add('diplayNone')
texte4.classList.add('diplayNone')
texte5.classList.add('diplayNone')
texte6.classList.add('diplayNone')

residence.addEventListener('click', function () {
    if (texte.classList.contains('diplayFlex')) {
        texte.classList.remove('diplayFlex')
        texte.classList.add('diplayNone')        
    }else{
        texte.classList.add('diplayFlex')
        texte.classList.remove('diplayNone')
    }
})


mariage.addEventListener('click', function () {
    if (texte2.classList.contains('diplayFlex')) {
        texte2.classList.remove('diplayFlex')
        texte2.classList.add('diplayNone')    
    }else{
        texte2.classList.add('diplayFlex')
        texte2.classList.remove('diplayNone')        
        texte3.classList.add('diplayNone')      
        texte4.classList.add('diplayNone') 
    }
})

certificatDeces.addEventListener('click', function () {
    if (texte5.classList.contains('diplayFlex')) {
        texte5.classList.remove('diplayFlex')
        texte5.classList.add('diplayNone')        
    }else{
        texte5.classList.add('diplayFlex')
        texte5.classList.remove('diplayNone')
    }
})

extraitNaissanace.addEventListener('click', function () {
    if (texte6.classList.contains('diplayFlex')) {
        texte6.classList.remove('diplayFlex')
        texte6.classList.add('diplayNone')       
    }else{
        texte6.classList.add('diplayFlex')
        texte6.classList.remove('diplayNone')
    }
})

Certificat.addEventListener('click', function () {
    if (texte3.classList.contains('diplayFlex')) {
        texte3.classList.remove('diplayFlex')
        texte3.classList.add('diplayNone')        
    }else{
        texte3.classList.add('diplayFlex')
        texte3.classList.remove('diplayNone')
    }
})

civil.addEventListener('click', function () {
    if (texte4.classList.contains('diplayFlex')) {
        texte4.classList.remove('diplayFlex')
        texte4.classList.add('diplayNone')        
    }else{
        texte4.classList.add('diplayFlex')
        texte4.classList.remove('diplayNone')
    }
})