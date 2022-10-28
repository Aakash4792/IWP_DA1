const quote = document.querySelector('.quote');
const by = document.querySelector('.by');
const shift = document.querySelector('.shift i');
const quotes = [
    ['“The purpose of our lives is to be happy.”','- Dalai Lama'],
    ['“Life is what happens when you’re busy making other plans.”','- John Lennon'],
    ['“Get busy living or get busy dying.”','- Stephen King'],
    ['“You only live once, but if you do it right, once is enough.” ','- Mae West'],
    ['“Many of life’s failures are people who did not realize how close they were to success when they gave up.”','- Thomas A. Edison'],
    ['“Never let the fear of striking out keep you from playing the game.”','- Babe Ruth'],
    ['“Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma – which is living with the results of other people’s thinking.”','- Steve Jobs'],
    ['“Not how long, but how well you have lived is the main thing.”','- Seneca'],
    ['“If life were predictable it would cease to be life, and be without flavor.”','- Eleanor Roosevelt'],
    ['“In order to write about life first you must live it.”','- Ernest Hemingway'],
    ['“Curiosity about life in all of its aspects, I think, is still the secret of great creative people.”','- Leo Burnett'],
    ['“The unexamined life is not worth living.”','- Socrates'],
    ['“Turn your wounds into wisdom.”','- Oprah Winfrey'],
    ['“The way I see it, if you want the rainbow, you gotta put up with the rain.”','- Dolly Parton'],
    ['“Live for each second without hesitation.”','- Elton John'],
    ['“Life is like riding a bicycle. To keep your balance, you must keep moving.”','- Albert Einstein'],
    ['“Life is really simple, but men insist on making it complicated.”','- Confucius'],
    ['“Life is like a coin. You can spend it any way you wish, but you only spend it once.”','- Lillian Dickson'],
    ['“In three words I can sum up everything I’ve learned about life: It goes on.”','- Robert Frost'],
    ['“Life is ten percent what happens to you and ninety percent how you respond to it.”',' - Charles Swindoll'],
    ['“Keep calm and carry on.”','- Winston Churchill'],
    ['“Life would be tragic if it weren’t funny.”','- Stephen Hawking'],
    ['“Life’s tragedy is that we get old too soon and wise too late.”','- Benjamin Franklin'], 
];
let randomIndex = () => Math.floor((Math.random()*23));

let i = randomIndex();

quote.textContent = quotes[i][0];
by.textContent = quotes[i][1];


shift.addEventListener('click',e=>{
    let i = randomIndex();
    quote.textContent = quotes[i][0];
    by.textContent = quotes[i][1];
})
