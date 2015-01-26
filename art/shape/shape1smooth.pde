void setup()
{
size(640, 480);
}
void draw()
{
smooth();
// Turns on smoothing
ellipse(140, mouseY, 90, 90);
noSmooth();
// Turns off smoothing
ellipse(mouseX, 70, 90, 90);
}
