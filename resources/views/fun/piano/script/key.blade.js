function fireMouseEvents( element, eventNames ){
    element = document.querySelector("div");
    console.log(element);
    if(element && eventNames && eventNames.length){
        console.log('111111111111');
        for(var index in eventNames){
            console.log('222222222222');
            var eventName = eventNames[index];
            if(element.fireEvent ){
                console.log('3333333333333');
                element.fireEvent( 'on' + eventName );     
            } else {   
                console.log('44444444444');
                var eventObject = document.createEvent( 'MouseEvents' );
                eventObject.initEvent( eventName, true, false );
                element.dispatchEvent(eventObject);
            }
        }
    }
}

function uniCharCode(event) { 
    var char = event.which || event.keyCode; 
    document.getElementById("demo").innerHTML =
      "The Unicode CHARACTER code is: " + char;
}

function uniKeyCode(event) {
    var key = event.which || event.keyCode; 
    document.getElementById("demo2").innerHTML =
      "The Unicode KEY code is: " + key;

  if (key == 65) {
    var el = $("[data-note=C][data-octave=3]")[0];
    fireMouseEvents(
      el, ['mousedown']
    );
    // console.log(el);
    // el.click();
  }
}

function uniKeyCodeUp(event) {
  var key = event.which || event.keyCode;
  document.getElementById("demo3").innerHTML =
    "The Unicode KEY code is: " + key;

  if (key == 65) {
    var el = $("[data-note=C][data-octave=3]");
    console.log(el);
    el.mouseup();
  }
}