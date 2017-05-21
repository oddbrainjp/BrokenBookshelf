class Hello {  
    private count = 0;

    public constructor() {
        console.log('Hello World');
    }

    public tick(): void {
        ++this.count;
        console.log('count', this.count);
    }

    public setCounter(num: number):void {
        this.count = num;
    }
}

var hello = new Hello();
var hello2 = new Hello();

hello.setCounter(1);
hello2.setCounter(2);

function main() {  
    hello.tick();
    hello2.tick();
    setTimeout(main, 1000);
}

main();  