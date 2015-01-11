void setup() {
size(640, 480);
smooth();
}
void draw() {
if (mousePressed) {
fill(0);
} else {
fill(255);
}
point(mouseX, mouseY);
}
