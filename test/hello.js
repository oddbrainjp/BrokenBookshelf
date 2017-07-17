var Hello = (function () {
    function Hello() {
        this.count = 0;
        console.log('Hello World');
    }
    Hello.prototype.tick = function () {
        ++this.count;
        console.log('count', this.count);
    };
    Hello.prototype.setCounter = function (num) {
        this.count = num;
    };
    return Hello;
}());
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
//# sourceMappingURL=hello.js.map