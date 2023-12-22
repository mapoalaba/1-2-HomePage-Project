gsap.to("#nav",{
    backgroundColor :"#000",
    duration:0.5,
    height:"110px",
    scrollTrigger:{
        trigger:"#nav",
        scroller:"body",
        // markers:true,
        start:"top -10%",
        end:"top -11%",
        scrub:1
    },
});
gsap.to("#main",{
    backgroundColor : "#000",
    scrollTrigger:{
        trigger:"#main",
        scroller:"body",
        // markers:true,
        start:"top -25%",
        end:"top -70%",
        scrub:2
    },
});
gsap.from("#about-us img",{
    scale: 0.8,
    duration:1,
    stagger:0.1,
    scrollTrigger:{
        trigger:"#about-us img",
        scroller:"body",
        // markers:true
        start:"top 70%",
        end:"top 65%",
        scrub:3
    },
});
gsap.from(".card",{
    scale: 0.8,
    duration:1,
    stagger:0.1,
    scrollTrigger:{
        trigger:".card",
        scroller:"body",
        // markers:true
        start:"top 70%",
        end:"top 65%",
        scrub:7
    },
});
gsap.from("#page3 p",{
    y:5,
    x:5,
    scrollTrigger:{
        trigger:"#page3 p",
        scroller:"body",
        start:"top 55%",
        end:"top 45%",
        scrub:4
    },
});
gsap.from("#colon1",{
    y:-70,
    x:-70,
    scrollTrigger:{
        trigger:"#colon1",
        scroller:"body",
        start:"top 55%",
        end:"top 45%",
        scrub:4
    },
});
gsap.from("#colon2",{
    y:70,
    x:70,
    scrollTrigger:{
        trigger:"#colon1",
        scroller:"body",
        start:"top 55%",
        end:"top 45%",
        scrub:4
    },
});
gsap.from("background-image",{
    y:-70,
    x:-70,
    scrollTrigger:{
        trigger:"#colon1",
        scroller:"body",
        start:"top 55%",
        end:"top 45%",
        scrub:4
    },
});
gsap.from("#page4 h1",{
    y:50,
    scrollTrigger:{
        trigger:"#page4 h1",
        scroller:"body",
        start:"top 75%",
        end:"top 70%",
        scrub:4
    },
});
// var typingEffect = new Typed("#page1 h2",{
//     strings : ["성장기 아이들에게 필요한건 웃음!"],
//     loop : true,
//     typeSpeed : 100,
//     backSpeed : 80,
//     backDelay : 
// })