var quotes = {
    last: -1,
    list: [
        'Live long and prosper',
        'May the force be with you',
        'In defeat we learn',
        '640K ought to be enough for anyone',
        'So Say We All',
        'Now with 50% more js frameworks',
        'She cannae take anymore captain',
        'Resistance is futile',
        'We will add your biological and technological distinctiveness to our own',
        'No, I am your father.'
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
        element.innerText = quote;

        var container = document.getElementById('quote-container');

        if(container)
            container.style = 'display: block';
    }
}

function random(max) {
    return Math.floor(Math.random() * max);
}

insertQuote();
