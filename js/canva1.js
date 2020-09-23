const canvas = document.getElementById("canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const ctx = canvas.getContext("2d");
const minRadius = 2;
const maxRadius = 3;
const proximityDistance = 150;

let mouseClickPosition = {
  x: undefined,
  y: undefined
};

let mouseOverPosition = {
  x: undefined,
  y: undefined
};

addEventListener("click", (event) => {
  mouseClickPosition.x = event.clientX;
  mouseClickPosition.y = event.clientY;
  addCircles(circles, mouseClickPosition);
});

addEventListener("mousemove", (event) => {
  mouseOverPosition.x = event.clientX;
  mouseOverPosition.y = event.clientY;
});

addEventListener("mouseout", () => {
  mouseOverPosition.x = undefined;
  mouseOverPosition.y = undefined;
});

addEventListener("resize", () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  createCircles();
});

colors = [
  "#CC33A8",
  "#AB33F0",
  "#FF8F33",
  "#FFFFFF",
  "#FF3340",
  "#00421C",
  "#ACFF33",
  "#003083",
  "#7CACFF"
];

// A class that has the properties pertaining to a circle
class Circle {
  constructor(x, y, dx, dy, radius) {
    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.radius = radius;
    this.minRadius = radius;
    this.color = colors[Math.floor(Math.random() * colors.length)];
  }

  draw = () => {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
    ctx.fillStyle = this.color;
    ctx.fill();
  };

  update = (circles) => {
    // check if the circle is crossing the boundaries, if it crosses, reverse the direction
    this.checkBoundaries();

    this.x += this.dx;
    this.y += this.dy;

    // if circles are near to the mouse position, enlarge them
    if (
      Math.abs(this.x - mouseOverPosition.x) < proximityDistance &&
      Math.abs(this.y - mouseOverPosition.y) < proximityDistance
    ) {
      if (this.radius < minRadius * 10) {
        this.radius += 2;
      }
    } else if (this.radius > this.minRadius) {
      this.radius -= 1;
    }

    this.draw();

    // draw lines between circles that are close enough
    this.proximityCheck(circles);
  };

  proximityCheck = (circles) => {
    for (let i = 0; i < circles.length; i++) {
      if (this === circles[i]) continue;

      // calculate distane btw 2 circles
      let distanceBetweenTwoCircles = calculateDistance(
        this.x,
        this.y,
        circles[i].x,
        circles[i].y
      );

      if (distanceBetweenTwoCircles <= proximityDistance) {
        drawLine(this.x, this.y, circles[i].x, circles[i].y);
      }
    }
  };

  checkBoundaries = () => {
    // check for the left & right boundaries
    if (this.x + this.radius > innerWidth || this.x - this.radius < 0) {
      this.dx *= -1;
    }

    // check for the top and bottom boundaries
    if (this.y + this.radius > innerHeight || this.y - this.radius < 0) {
      this.dy *= -1;
    }
  };
}

let circles = [];
let numberOfCircles = 40;

createCircles();

function animate() {
  requestAnimationFrame(animate);
  ctx.clearRect(0, 0, innerWidth, innerHeight);

  for (let i = 0; i < numberOfCircles; i++) {
    circles[i].update(circles);
  }
}

function calculateDistance(x1, y1, x2, y2) {
  let dx = x2 - x1;
  let dy = y2 - y1;
  return Math.sqrt(Math.pow(dx, 2) + Math.pow(dy, 2));
}

function drawLine(x1, y1, x2, y2) {
  ctx.beginPath();
  ctx.moveTo(x1, y1);
  ctx.lineTo(x2, y2);
  ctx.lineWidth = 0.3;
  ctx.strokeStyle = "white";
  ctx.stroke();
}

// create new circles with properties generated randomly
function createCircles() {
  circles = [];

  for (let i = 0; i < numberOfCircles; i++) {
    let radius = Math.random() * maxRadius + minRadius;
    let x = Math.random() * (innerWidth - radius * 2) + radius;
    let y = Math.random() * (innerHeight - radius * 2) + radius;
    let dx = (Math.random() - 0.5) * 3;
    let dy = (Math.random() - 0.5) * 3;

    circles.push(new Circle(x, y, dx, dy, radius));
  }
}

function addCircles(circles, mouseClickPosition) {
  let extraCircles = 5;
  numberOfCircles += extraCircles;
  for (let i = 0; i < extraCircles; i++) {
    let radius = Math.random() * maxRadius + minRadius;
    let x = mouseClickPosition.x;
    let y = mouseClickPosition.y;
    let dx = (Math.random() - 0.5) * 3;
    let dy = (Math.random() - 0.5) * 3;

    circles.push(new Circle(x, y, dx, dy, radius));
  }
}

animate();
