const words = ["Halo..", "Salam kenal.." , "Nama saya Christiano"]

let masterTL = gsap.timeline({repeat: -1})

words.forEach(word => {
    let tl = gsap.timeline({repeat: 1, yoyo: true, repeatDelay: 1.5})
    tl.to('.lead', {duration: 1, delay: 0.5, text: word})
    masterTL.add(tl)
})