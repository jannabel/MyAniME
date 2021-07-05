      let $ = function (element) {
        return document.querySelector(element);
      };
      
      let container = $('.container');
      let card = $('.card');
      let cardTitle = $('.card-title');
      let cardImg = $('.card-img');
      let paragraph = $('.paragraph');
      container.addEventListener('mousemove', e => {
        let xAxis = (window.innerWidth / 2 - e.pageX) / 22;
        let yAxis = (window.innerHeight / 2 - e.pageY) / 22;
        card.style.transform = `rotateX(${yAxis}deg) rotateY(${xAxis}deg)`;
      });
      container.addEventListener('mouseenter', e => {
        card.style.transition = "none";
        cardTitle.style.transform = `translateZ(50px)`;
        paragraph.style.transform = `translateZ(30px)`;
        cardImg.style.transform = `translateZ(50px) translateY(-10px) scale(1.1)`;
      });
      container.addEventListener('mouseleave', e => {
        card.style.transition = "all 0.5s ease";
        card.style.transform = `rotateX(0deg) rotateY(0deg)`;
        cardTitle.style.transform = `translateZ(0px)`;
        paragraph.style.transform = `translateZ(0px)`;
        cardImg.style.transform = `translateZ(0px) rotateZ(0deg)`;
      });

      
        
      
      
      