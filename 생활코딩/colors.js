var Links ={
  setColor:function(color){
    // var alist = document.querySelectorAll('a');
    // var i=0;
    // while(i<alist.length){
    //   console.log(alist[i].style.color=color);
    //   i=i+1;
    // }
    $('a').css('color',color);
  }
}
  var Body = {
    setColor:function(color){
        //document.querySelector('body').style.color=color;
      $('body').css('color',color);
    },
    setBackgroundColor(color){
      //document.querySelector('body').style.backgroundColor=color;
      $('body').css('backgroundColor',color);
    }
  }

  function nightDayHandler(self){
    var target = document.querySelector('body');
      if(self.value === 'Night'){
        Body.setBackgroundColor('black');
        Body.setColor('white')
        self.value='Day';
        Links.setColor('white');
      }
      else{
        Body.setBackgroundColor('white');
        Body.setColor('black');
        self.value='Night';
        Links.setColor('blue');
      }
  }
