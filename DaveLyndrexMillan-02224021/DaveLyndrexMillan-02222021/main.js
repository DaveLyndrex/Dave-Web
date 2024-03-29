

const customName = document.getElementById('customname');
const randomize = document.querySelector('.randomize');
const story = document.querySelector('.story');
 
function randomValueFromArray(array){
  const random = Math.floor(Math.random()*array.length);
  return array[random];
} 
var storyText = 'It was 94 fahrenheit outside, so :insertx: went for a walk. When they got to :inserty:, they stared in horror for a few moments, then :insertz:. Bob saw the whole thing, but was not surprised — :insertx: weighs 300 pounds, and it was a hot day.';
var insertX = ['Willy the Goblin', 'Big Daddy', 'Father Christmas'];
var insertY = ['the soup kitchen', 'Disneyland', 'the White House'];
var insertZ = ['spontaneously combusted', 'melted into a puddle on the sidewalk', 'turned into a slug and crawled away']; 

randomize.addEventListener('click', result);
 
function result() {
  var newStory = storyText;
  var xItem = randomValueFromArray(insertX);
  var yItem = randomValueFromArray(insertY);
  var zItem = randomValueFromArray(insertZ);

  while (newStory.indexOf(':insert') > -1) {
    newStory = newStory.replace(':insertx:',xItem);
    newStory = newStory.replace(':insertx:', xItem);
    newStory = newStory.replace(':inserty:', yItem);
    newStory = newStory.replace(':insertz:', zItem);
  }

 
  if(customName.value !== '') {
    var name = customName.value;
    newStory = newStory.replace('Bob', name);//lacking.
 
  
 
  if(document.getElementById("uk").checked) {
    let weight = Math.round(300 * 0.0714286)+ ' stone'; // I've search for "converting pounds to stone".
    let temperature =  Math.round((94 - 32) * 5 / 9) + ' centigrade'; // I've search for "converting Fahrenheit to centigrade."
    newStory = newStory.replace('300 pounds',weight); // missing line
    newStory = newStory.replace('94 farenheit',temperature); //missing line
 
  }
 
  story.textContent = newStory; // Lacking variable which is newStory.
  story.style.visibility = 'visible';
}
}
    
