// foked from https://github.com/plehoux/fontBomb/tree/master/js

var Bomb, Explosion, Particle, targetTime, vendor, w, _i, _len, _ref,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

let vel = .1
let amplitude = 1000000
let minforce = 1.5
let rotation = true
let rotationIntensity = .1

w = window;

_ref = ['ms', 'moz', 'webkit', 'o'];
for (_i = 0, _len = _ref.length; _i < _len; _i++) {
  vendor = _ref[_i];
  if (w.requestAnimationFrame) break;
  w.requestAnimationFrame = w["#vendorRequestAnimationFrame"];
  w.cancelAnimationFrame = w["#vendorCancelAnimationFrame"] || w["#vendorCancelRequestAnimationFrame"];
}

targetTime = 0;

w.requestAnimationFrame || (w.requestAnimationFrame = function(callback) {
  var currentTime;
  targetTime = Math.max(targetTime + 16, currentTime = +(new Date));
  return w.setTimeout((function() {
    return callback(+(new Date));
  }), targetTime - currentTime);
});

w.cancelAnimationFrame || (w.cancelAnimationFrame = function(id) {
  return clearTimeout(id);
});

w.findClickPos = function(e) {
  var posx, posy;
  posx = 0;
  posy = 0;
  if (!e) e = window.event;
  if (e.pageX || e.pageY) {
    posx = e.pageX;
    posy = e.pageY;
  } else if (e.clientX || e.clientY) {
    posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
    posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
  }
  return {
    x: posx,
    y: posy
  };
};

w.getOffset = function(el) {
  var body, _x, _y;
  body = document.getElementsByTagName("body")[0];
  _x = 0;
  _y = 0;
  while (el && !isNaN(el.offsetLeft) && !isNaN(el.offsetTop)) {
    _x += el.offsetLeft - el.scrollLeft;
    _y += el.offsetTop - el.scrollTop;
    el = el.offsetParent;
  }
  return {
    top: _y + body.scrollTop,
    left: _x + body.scrollLeft
  };
};

Particle = (function() {

  function Particle(elem) {
    this.elem = elem;
    this.style = elem.style;
    this.elem.style['zIndex'] = 9999;
    this.transformX = 0;
    this.transformY = 0;
    this.transformRotation = 0;
    this.offsetTop = window.getOffset(this.elem).top;
    this.offsetLeft = window.getOffset(this.elem).left;
    this.velocityX = 0;
    this.velocityY = 0;
  }

  Particle.prototype.tick = function(blast) {
    var distX, distXS, distY, distYS, distanceWithBlast, force, forceX, forceY, previousRotation, previousStateX, previousStateY, rad, transform;
    previousStateX = this.transformX;
    previousStateY = this.transformY;
    previousRotation = this.transformRotation;
    if (this.velocityX > vel) {
      this.velocityX -= vel;
    } else if (this.velocityX < -vel) {
      this.velocityX += vel;
    } else {
      this.velocityX = 0;
    }
    if (this.velocityY > vel) {
      this.velocityY -= vel;
    } else if (this.velocityY < -vel) {
      this.velocityY += vel;
    } else {
      this.velocityY = 0;
    }
    if (blast != null) {
      distX = this.offsetLeft + this.transformX - blast.x;
      distY = this.offsetTop + this.transformY - blast.y;
      distXS = distX * distX;
      distYS = distY * distY;
      distanceWithBlast = distXS + distYS;
      force = amplitude / distanceWithBlast;
      if (force > minforce) force = minforce;
      rad = Math.asin(distYS / distanceWithBlast);
      forceY = Math.sin(rad) * force * (distY < 0 ? -1 : 1);
      forceX = Math.cos(rad) * force * (distX < 0 ? -1 : 1);
      this.velocityX = +forceX;
      this.velocityY = +forceY;
    }
    this.transformX = this.transformX + this.velocityX;
    this.transformY = this.transformY + this.velocityY;
    if(rotation){
      this.transformRotation = this.transformX * - rotationIntensity;
    }
    if ((Math.abs(previousStateX - this.transformX) > 1 || Math.abs(previousStateY - this.transformY) > 1 || Math.abs(previousRotation - this.transformRotation) > 1) && ((this.transformX > 1 || this.transformX < -1) || (this.transformY > 1 || this.transformY < -1))) {
      transform = "translate(" + this.transformX + "px, " + this.transformY + "px) rotate(" + this.transformRotation + "deg)";
      this.style['MozTransform'] = transform;
      this.style['OTransform'] = transform;
      this.style['WebkitTransform'] = transform;
      this.style['msTransform'] = transform;
      return this.style['transform'] = transform;
    }
  };

  return Particle;

})();

this.Particle = Particle;

Bomb = (function() {


  function Bomb(x, y) {
    this.drop = __bind(this.drop, this);      this.pos = {
      x: x,
      y: y
    };
    this.body = document.getElementsByTagName("body")[0];
    this.state = 'planted';
    this.drop();
  }

  Bomb.prototype.drop = function() {
    this.bomb = document.createElement("div");
    return this.explose();
  };


  Bomb.prototype.explose = function() {
    this.bomb.innerHTML = '';
    return this.state = 'explose';
  };

  Bomb.prototype.exploded = function() {
    this.state = 'exploded';
  };

  return Bomb;

})();

this.Bomb = Bomb;

Explosion = (function() {

  function Explosion() {
    this.tick = __bind(this.tick, this);
    this.dropBomb = __bind(this.dropBomb, this);
    var char, confirmation, style, _ref2,
      _this = this;
    if (window.FONTBOMB_LOADED) return;
    window.FONTBOMB_LOADED = true;
    this.bombs = [];
    this.body = document.getElementsByTagName("body")[0];
    if ((_ref2 = this.body) != null) {
      _ref2.onclick = function(event) {
        return _this.dropBomb(event);
      };
    }
    this.body.addEventListener("touchstart", function(event) {
      return _this.touchEvent = event;
    });
    this.body.addEventListener("touchmove", function(event) {
      _this.touchMoveCount || (_this.touchMoveCount = 0);
      return _this.touchMoveCount++;
    });
    this.body.addEventListener("touchend", function(event) {
      if (_this.touchMoveCount < 2) _this.dropBomb(_this.touchEvent);
      return _this.touchMoveCount = 0;
    });
    this.explosifyNodes(this.body.childNodes);
    this.chars = (function() {
      var _j, _len2, _ref3, _results;
      _ref3 = document.getElementsByTagName('particle');
      _results = [];
      for (_j = 0, _len2 = _ref3.length; _j < _len2; _j++) {
        char = _ref3[_j];
        _results.push(new Particle(char, this.body));
      }
      return _results;
    }).call(this);
    this.tick();
   
  }

  Explosion.prototype.explosifyNodes = function(nodes) {
    var node, _j, _len2, _results;
    _results = [];
    for (_j = 0, _len2 = nodes.length; _j < _len2; _j++) {
      node = nodes[_j];
      _results.push(this.explosifyNode(node));
    }
    return _results;
  };

  Explosion.prototype.explosifyNode = function(node) {
    var name, newNode, _j, _len2, _ref2;
    _ref2 = ['script', 'style', 'iframe', 'canvas', 'video', 'audio', 'textarea', 'embed', 'object', 'select', 'area', 'map', 'input'];
    for (_j = 0, _len2 = _ref2.length; _j < _len2; _j++) {
      name = _ref2[_j];
      if (node.nodeName.toLowerCase() === name) return;
    }
    switch (node.nodeType) {
      case 1:
        return this.explosifyNodes(node.childNodes);
      case 3:
        if (!/^\s*$/.test(node.nodeValue)) {
          if (node.parentNode.childNodes.length === 1) {
            return node.parentNode.innerHTML = this.explosifyText(node.nodeValue);
          } else {
            newNode = document.createElement("particles");
            newNode.innerHTML = this.explosifyText(node.nodeValue);
            return node.parentNode.replaceChild(newNode, node);
          }
        }
    }
  };

  Explosion.prototype.explosifyText = function(string) {
    var char, chars, index;
    chars = (function() {
      var _len2, _ref2, _results;
      _ref2 = string.split('');
      _results = [];
      for (index = 0, _len2 = _ref2.length; index < _len2; index++) {
        char = _ref2[index];
        if (!/^\s*$/.test(char)) {
          _results.push("<particle style='display:inline-block;'>" + char + "</particle>");
        } else {
          _results.push('&nbsp;');
        }
      }
      return _results;
    })();
    chars = chars.join('');
    chars = (function() {
      var _len2, _ref2, _results;
      _ref2 = chars.split('&nbsp;');
      _results = [];
      for (index = 0, _len2 = _ref2.length; index < _len2; index++) {
        char = _ref2[index];
        if (!/^\s*$/.test(char)) {
          _results.push("<word style='white-space:nowrap'>" + char + "</word>");
        } else {
          _results.push(char);
        }
      }
      return _results;
    })();
    return chars.join(' ');
  };

  Explosion.prototype.dropBomb = function(event) {
    var pos;
    pos = window.findClickPos(event);
    this.bombs.push(new Bomb(pos.x, pos.y));
    if (window.FONTBOMB_PREVENT_DEFAULT) return event.preventDefault();
  };

  Explosion.prototype.tick = function() {
    var bomb, char, _j, _k, _l, _len2, _len3, _len4, _ref2, _ref3, _ref4;
    _ref2 = this.bombs;
    for (_j = 0, _len2 = _ref2.length; _j < _len2; _j++) {
      bomb = _ref2[_j];
      if (bomb.state === 'explose') {
        bomb.exploded();
        this.blast = bomb.pos;
      }
    }
    if (this.blast != null) {
      _ref3 = this.chars;
      for (_k = 0, _len3 = _ref3.length; _k < _len3; _k++) {
        char = _ref3[_k];
        char.tick(this.blast);
      }
      this.blast = null;
    } else {
      _ref4 = this.chars;
      for (_l = 0, _len4 = _ref4.length; _l < _len4; _l++) {
        char = _ref4[_l];
        char.tick();
      }
    }
    return requestAnimationFrame(this.tick);
  };

  return Explosion;

})();


