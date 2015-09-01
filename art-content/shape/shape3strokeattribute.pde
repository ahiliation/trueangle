void setup()
{
size(640, 480);
smooth();
}
void draw()
{
strokeWeight(12);
strokeJoin(ROUND);
// Round the stroke corners
rect(40, mouseY, 70, 70);
strokeJoin(BEVEL);
// Bevel the stroke corners
rect(140, 25, 70, 70);
strokeCap(SQUARE);
// Square the line endings
line(270, 25, 340, 95);
strokeCap(ROUND);
// Round the line endings
line(350, 25, 420, 95);
}