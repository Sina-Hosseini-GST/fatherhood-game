// icons
let ul= document.querySelector('footer > ul');
for(let i=0; i<ul.children.length; i++){
  let svg= ul.children[i].children[0].children[0];
  svg.classList.add('fill-gray-400', 'hover:fill-white', 'transition-colors', 'h-auto', 'xl:w-c', 'lg:w-c-87', 'md:w-c-29', 'w-c-88');
  for(let j=0; j<svg.children.length; j++){
    if(svg.children[j].tagName == 'title'){
      svg.children[j].remove();
    }
  }
  ['fill', 'color'].forEach((attr)=>{
    svg.removeAttribute(attr);
  });
}

// iframe
let iframe= document.getElementsByTagName('iframe');
for(let i=0; i<iframe.length; i++){
  iframe[i].classList.add('lg:flex-1', 'lg:w-unset', 'lg:h-unset', 'w-full', 'h-c-71');
}

let a= document.querySelector('body > a');
let svg= a.children[0].children[0];
svg.classList.add('fill-gray-400', 'group-hover:fill-white', 'transition-colors', 'duration-200', 'h-auto', 'xl:w-c-9', 'lg:w-c-154', 'md:w-c-129', 'w-c-155');
for(let j=0; j<svg.children.length; j++){
  if(svg.children[j].tagName == 'title'){
    svg.children[j].remove();
  }
}
['fill', 'color'].forEach((attr)=>{
  svg.removeAttribute(attr);
});

// variables
let events_cnt= document.getElementById('events-cnt');
let items_cnt= document.getElementById('items-cnt');
let section_4= document.getElementById('section-4');

function set_width(){
  if(events_cnt.children){
    items_cnt.style.width= `${99999999}px`;
    let events_l= events_cnt.children.length;
    let event_w= events_cnt.children[0].getBoundingClientRect().width;
    let fixed_w= items_cnt.children[0].getBoundingClientRect().width;
    let width= (events_l*event_w) + ((events_l-1)*fixed_w) + (2*fixed_w);
    items_cnt.style.width= `${width}px`;
  }
}

// variables
let val= false;
let pageX_1;
let pageX_2;
let time_1;
let time_2;
let speed;
let is_stop;
let ok_to_resize= false;
// let sub_text_counter;
let storage=[];
let text_cnt= document.getElementsByClassName('text-cnt');
let progress_bar= document.getElementsByClassName('progress-bar');
// set time
let time= 4000;
let duration= 500;

function set_text(index, width, text){
  // set text
  text_cnt[index].textContent= text;
  // set duration
  text_cnt[index].style.transitionDuration= `${duration}ms`;
  progress_bar[index].style.transitionDuration= `${duration}ms`;
  // animations
  // start to middle
  text_cnt[index].classList.remove('top-full', 'opacity-0');
  text_cnt[index].classList.add('top-1/2', 'opacity-1');
  // set progress-bar
  progress_bar[index].style.width= `${width*100}%`;
  // middle to finish
  setTimeout(() => {
    text_cnt[index].classList.remove('top-1/2', 'opacity-1');
    text_cnt[index].classList.add('top-0', 'opacity-0');
  }, time-(duration*2));
  // finish to start
  setTimeout(() => {
    text_cnt[index].classList.remove('top-0');
    text_cnt[index].classList.add('top-full');
  }, time-duration);
}

// padding, border ok!
// load
window.addEventListener('load', function(){
  set_width();
  ok_to_resize= true;
  for(let i=0; i<text_cnt.length; i++){
    let text= text_cnt[i].textContent.trim();
    let text_into_array= text.split(' ');
    storage.push(text_into_array);
    text_cnt[i].textContent= '';
  }
  // set text
  for(let i=0; i<storage.length; i++){
    for(let j=0; j<storage[i].length; j++){
      setTimeout(() => {
        set_text(i, (j+1)/storage[i].length, storage[i][j]);
        setInterval(() => {
          set_text(i, (j+1)/storage[i].length, storage[i][j]);
        }, time*storage[i].length);
      }, time*j);
    }
  }

  // old method!
  // let text_cnt= document.getElementsByClassName('text-cnt');
  // for(let i=0; i<text_cnt.length; i++){
  //   let text= text_cnt[i].textContent.trim().split(' ');
  //   text_cnt[i].textContent= '';
  //   for(let j=0; j<text.length; j++){
  //     let sub_text= text[j];
  //     // create element
  //     let sub_text_elm= document.createElement('div');
  //     // add class
  //     sub_text_elm.classList.add('text-transparent', 'bg-clip-text', 'bg-gradient-to-r', 'from-c-yellow-2', 'to-white', 'h-full', 'flex', 'justify-center', 'items-center');
  //     // add text
  //     sub_text_elm.innerText= sub_text;
  //     // inject element
  //     text_cnt[i].appendChild(sub_text_elm);
  //   }
  //   sub_text_counter= text_cnt[i].children.length;
  //   for(let j=0; j<Math.ceil(text_cnt[i].getBoundingClientRect().height)*sub_text_counter; j++){
  //     setTimeout(() => {
  //       text_cnt[i].scrollTo(0, text_cnt[i].scrollTop + 1);
  //     }, j*20);
  //   }
  // }

// responsive-ish code! 
//   let width_free= document.getElementsByClassName('width-free');
//   for(let i=0; i<width_free.length; i++){
//     while(width_free[i].getBoundingClientRect().width > (width_free[i].parentElement.getBoundingClientRect().width*2/3)){
//       let font_size_string= window.getComputedStyle(width_free[i], null).getPropertyValue('font-size');
//       let font_size= parseInt(font_size_string.slice(0, font_size_string.length-2));
//       font_size-= 0.01;
//       width_free[i].style.fontSize= `${font_size}px`;
//     }
//   }
});

window.addEventListener('resize', function(){
  if(ok_to_resize){
    set_width();
  }
});

// set to new state
section_4.addEventListener('mousedown', function(event){
  val= true;
  pageX_1= event.pageX;
  time_1= Date.now();
});

// set to dflt state
section_4.addEventListener('mouseup', function(){
  val= false;
  section_4.classList.remove('cursor-grabbing');
  section_4.classList.add('cursor-grab');
});

// when stopped
setInterval(() => {
  // dflt
  // stop
  is_stop= true;

  // update time_1
  if(is_stop){
    time_1= Date.now();
  }

  // hold simulation
  if(val){
    section_4.classList.remove('cursor-grab');
    section_4.classList.add('cursor-grabbing');
  }
}, 5);

section_4.addEventListener('mousemove', function(event){
  // move + hold simulation
  if(val){
    // moving
    // it's always false
    is_stop= false;

    // event.pageX --> increases with moving right
    pageX_2= event.pageX;
    time_2= Date.now();

    // test
    // console.log(`time_1: ${time_1}\ntime_2: ${time_2}`);

    // (moving through Y axis) => (pageX_2 == pageX_1)
    if((pageX_2 != pageX_1) && (time_2 != time_1)){
    
      // *********** 1 ***********
      // speed= Math.abs((pageX_2-pageX_1)/(time_2-time_1));
      // 
      // (mouse) to left
      // to start moving
      // if(pageX_2 < pageX_1){
      //   section_4.scrollTo(section_4.scrollLeft + speed, 0);
      // }
      //
      // (mouse) to right
      // to start moving back
      // if(pageX_2 > pageX_1){
      //   section_4.scrollTo(section_4.scrollLeft - speed, 0);
      // }

      // *********** 2 ***********
      speed= (pageX_2-pageX_1)/(time_2-time_1);
      // speed= (pageX_2-pageX_1)/(time_2-time_1)*(window.innerWidth/1250);
      section_4.scrollTo(section_4.scrollLeft - speed, 0);

    }
    // last pageX_1 and last time_1 will be useless, thanks to mousedown
    pageX_1= event.pageX;
    time_1= Date.now();
  }
});

function ml_webform_success_377793() {
  var $ = ml_jQuery || jQuery;
  $('.ml-subscribe-form-377793 .row-success').show();
  $('.ml-subscribe-form-377793 .row-form').hide();
}