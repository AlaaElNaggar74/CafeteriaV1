

let diplsy = document.getElementById("welcomCaftria");
let wordArr = [
  "laravel ",
  "Cafeteria! ",
  "Created by ",
  "Aya ",
  "Noor  ",
  "Norhan  ",
  "Mostfa  ",
  "Alaa  ",
  ];

let wordCount = 0;
let charCount = 0;

updateline();

function updateline() {
    charCount++;
  diplsy.innerHTML = ` ${wordArr[wordCount].slice(0, charCount)}</h1>`;
 
  if (charCount == wordArr[wordCount].length) {
    charCount = 0;
    wordCount++;
  }
  if (wordCount == wordArr.length) {
   
    wordCount = 0;
  }

  setTimeout(updateline, 600);
}




// var string = "laravel Cafeteria!";
// var array = string.split("");
// var timer;

// function looper() {
//   if (array.length > 0) {
//     document.getElementById("welcomCaftria").innerHTML += array.shift();
//   } else {
//     // clearTimeout(looper);
//     // clearTimeout(looper);
//     document.getElementById("welcomCaftria").innerHTML ="";
//      string = "laravel Cafeteria! created by Aya Noor Norhan Mostfa Alaa";
//      array = string.split("");
    
//   }
//   timer = setTimeout('looper()', 500);
// }
// looper();



// function sleep(ms) {
//   return new Promise(resolve => setTimeout(resolve, ms));
// }

// function writeSomething (element, txt, speed, callback = function(){}) {
//   var i = 0;  
//   element.innerHTML = "";
//   function write() {
//     if (i < txt.length) {
//       element.innerHTML += txt.charAt(i);
//       i++;
//       if (i == txt.length) {
//         callback();
//       } else {
//         setTimeout(write, speed);
//       }
//     }
//   }
  
//   write();
// }

// let sentences = ['Cafeteria'];

// function write (index=0) {
//   console.log("call")
//   writeSomething(document.querySelector(".welcomCaftria"), sentences[index], 500, () => {
//     if (index < sentences.length -1) {
//       write(index + 1)
//     } else {
//       return false
//     }
//   })
// }
// async function run () {
//     while (true) {
//       write()
//       await sleep(sentences.length * 2000)
//     }
//   }
  
//   run()
  


// console.log("ggggggggggggg");