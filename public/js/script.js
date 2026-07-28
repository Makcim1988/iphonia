let btns = document.querySelectorAll('.btn');

for (let btn of btns) {
    btn.addEventListener('click', () => {
        console.log(btn.innerHTML);
    });

    console.log(btn.innerHTML);

}

//localStorage.setItem('key', 'text');