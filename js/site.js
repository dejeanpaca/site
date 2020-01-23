var quotes = {
    last: -1,
    list: [
        'New posts every <b>undefined</b>',
        'Live long and prosper',
        'May the force be with you',
        'In defeat we learn',
        '640K ought to be enough for anyone',
        'So Say We All',
        'Now with 50% more js frameworks',
        'She cannae take anymore captain',
        'Resistance is futile',
        'We will add your biological and technological distinctiveness to our own',
        'No, I am your father.',
        'Turning players into payers',
        'We don\'t use cookies, we eat them',
        'Fuck you, give us money (Realistic corporate slogan)',
        'Take me to your leader',
        'This is the way',
        'People think it don\'t be like it is, but it do'
    ],

    giveth: function() {
        this.last = random(this.list.length);

        return this.list[this.last];
    }
};

function insertQuote() {
    var previous = quotes.last;

    var quote = quotes.giveth();

    // don't give the same quote again
    while(previous == quotes.last) {
        quote = quotes.giveth();
    }

    var element = document.getElementById('quote');

    if(element) {
        element.innerHTML = quote;

        var container = document.getElementById('quote-container');

        if(container)
            container.style = 'display: block';
    }
}

function random(max) {
    return Math.floor(Math.random() * max);
}

insertQuote();
