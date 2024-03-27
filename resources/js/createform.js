let bookName = document.querySelector('#bookName');
let autor = document.querySelector('#autor');
let editor = document.querySelector('#editor');
let year = document.querySelector('#year');

bookNameName?.addEventListener('input',()=>{

    let stringWithoutSpace = bookNameName.value.replace(/\s/g, '').length;

    if (stringWithoutSpace >= 8) {
        bookNameName.classList.add('is-valid')
    }else{
        bookNameName.classList.remove('is-valid')
    }
})  

autor?.addEventListener('input',()=>{

    let stringWithoutSpace = artist.value.replace(/\s/g, '').length;

    if (stringWithoutSpace >= 1 && stringWithoutSpace < 26) {
        autor.classList.add('is-valid')
    }else{
        autor.classList.remove('is-valid')
    }
})  

editor?.addEventListener('input',()=>{

    let stringWithoutSpace = editor.value.replace(/\s/g, '').length;

    if (stringWithoutSpace < 2) {
        editor.classList.add('is-valid')
        editor.classList.remove('is-invalid')
    }else{
        editor.classList.remove('is-valid')
        editor.classList.add('is-invalid')
    }
})  

year?.addEventListener('input',()=>{

    let stringWithoutSpace = year.value.replace(/\s/g, '').length;

    if (stringWithoutSpace < 5 && stringWithoutSpace > 3) {
        year.classList.add('is-valid')
    }else{
        year.classList.remove('is-valid')
    }
})  