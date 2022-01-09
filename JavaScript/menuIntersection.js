let options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.1
}

let observer = new IntersectionObserver((entries, observer) =>{
    entries.forEach(entry=> {
        console.log(entry);
        if (entry.isIntersecting) {
            document.querySelector('.nav').style.backgroundColor="transparent";
        } else {
            document.querySelector('.nav').style.backgroundColor="white";
        }
    })
}, options);

let target =  document.querySelector('#main_image');
observer.observe(target);