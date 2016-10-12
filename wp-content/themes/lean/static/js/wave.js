//Inspired by paper.js future splash demo

var values = {
    friction: .8,
    timeStep: 0.01,
    amount: 45,
    mass: 1,
    count: 0
};
values.invMass = 1 / values.mass;

$(function(){
    values.width = $(window).width()
})

var path;
view.viewSize = [values.width, 500];
var size = view.size;


var Spring = Base.extend({
    initialize: function(a, b, param) {
        if (!param)
            param = {};
        this.a = a;
        this.b = b;
        this.restLength = param.restLength || 30;
        this.strength = param.strength ? param.strength : 0.55;
        this.mamb = values.invMass * values.invMass;
    },
    update: function() {
        var delta = this.b - this.a;
        var dist = delta.length;
        var normDistStrength = (dist - this.restLength) /
            (dist * (this.mamb)) * this.strength;
        delta.y *= (normDistStrength * values.invMass) / 10;
        if (!this.a.fixed)
            this.a.y += delta.y;
        if (!this.b.fixed)
            this.b.y -= delta.y;
    }
});

onResize();

function createPath(strength) {
    var path = new Path();
    path.data = {};
    path.data.springs = [];
    path.data.mathChars = [];
    // path.fillColor = '#f4e21f'; // thier yellow
    // path.fillColor = '#F7E632';
    // path.fillColor = '#E9D443';
//    path.fillColor = '#eedd20';
    path.fillColor = '#f5f5f5'; 
   segments = path.segments;
    var previous;

    for (var i = 0; i <= values.amount; i++) {
        var segment = path.add(new Point(i / values.amount, 0.67) * size);
        var point = segment.point;
        point.px = point.x;
        point.py = point.y;
        point.fixed = i === 0 || i == values.amount;
        var charContent = ['0','1']
        var randChar = Math.floor(Math.random()*2)
        mathChar = new PointText(new Point(point.px, point.py));
        mathChar.justification = 'center';
        mathChar.content = charContent[randChar];
        mathChar.characterStyle = {
            fontSize: 7,
            fillColor: '#9a8f1a'
        };
        mathChar.data = {};
        mathChar.data.rand = Math.random();
        mathChar.data.mapDat = function (newY, rand){
            var offset = Math.floor(rand * 50);
            var height = view.size.height;
            var cap = height - (height - newY);
            var position = mapRange (offset, [0, 200], [cap, height + 50]);
            return position;
        }
        mathChar.position.x -= size.width / 8;

        path.data.mathChars.push(mathChar);

        if (previous) {
            var spring = new Spring(previous, point, {
                strength: strength
            });
            path.data.springs.push(spring);

        }
        previous = point;
    }
    path.position.x -= size.width / 8;

    return path;
}

function onResize() {
    values.count = 0;
    if (path) {
        path.remove();
    }
    size = view.bounds.size * [2, 1];
    path = createPath(0.1);
}

function onMouseMove(event) {
    var segments = path.segments;
    var index = Math.floor((event.point.x + size.width / 4) * segments.length / size.width);
    var y = event.point.y;
    var range = size.height / 15;
    var segment = segments[index];
    if (segment) {
	var point = segment.point;
	var prev, next;
	if (segment.previous)
            prev = segment.previous.point;
	if (segment.next)
            next = segment.next.point;

	if (!point.fixed && y + range > point.y && y - range < point.y) {
            point.y += (y - point.y) /8;
            if (prev && !prev.fixed) prev.y += (y - prev.y) / 20;
            if (next && !next.fixed) next.y += (y - next.y) / 20;
	}
    }
}

function onFrame(event) {
    if (values.count != 0) {
        path.firstSegment.remove();
        path.lastSegment.remove();
    }
    updateWave(path);
    values.count++;
}

function updateWave(path) {
    var segments = path.segments;
    var force = 1 - values.friction * values.timeStep * values.timeStep;
    for (var i = 0, l = segments.length; i < l; i++) {
        var point = segments[i].point;
        var ty = point.y;
        var dy = (point.y - point.py) * force;
        point.y += dy;
        point.py = ty;
        point.y = Math.max(0, point.y);
        mathChar = path.data.mathChars[i]
        mathChar.position.y = mathChar.data.mapDat(point.y, mathChar.data.rand) + 5;
    }
    for (var j = 0, l = path.data.springs.length; j < l; j++) {
        path.data.springs[j].update(true);
    }
    path.smooth();
    path.insert(0, new Point(0, size.height));
    path.add(new Point(size));
}

function mapRange(value, srcRange, dstRange){
  // value is outside source range return
    if (value < srcRange[0] || value > srcRange[1]){
	return NaN;
    }

    var srcMax = srcRange[1] - srcRange[0],
    dstMax = dstRange[1] - dstRange[0],
    adjValue = value - srcRange[0];

    return (adjValue * dstMax / srcMax) + dstRange[0];
}