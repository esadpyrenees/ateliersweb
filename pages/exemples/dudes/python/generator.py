#!/usr/bin/python3

# most code bortowed from https://chir.ag/projects/ntc/ + stackoverflow
# 

from random import randint
from colornames import names
import colorsys
import math
import os

saturations = [ "an almost grey", "a very unsaturated", "an unsaturated", "a rather unsaturated", "a rather saturated", "a saturated", "a very saturated" ]
brightnesses = [ "very dark", "dark", "", "light", "very light"]
hues = {
  "red" : 0,
  "orange" : 20,
  "yellow" : 40,
  "lime" : 60,
  "green" : 100,
  "cyan" : 170,
  "blue" : 190,
  "purple" : 260,
  "magenta" : 290,
  "pink" : 310,
  "red" : 340,
  "red" : 360 
}
sizes = ["tiny", "small", "medium", "large", "huge"]

def dorange(value, inmin, inmax, outmin, outmax):
  return math.floor( (((value - inmin) * (outmax - outmin)) / (inmax - inmin)) + outmin)

def getHue(hue):
  h = "red"
  for key, value in hues.items():
    if value > hue:
      continue
    h = key
  return h

def getHSL(my_hex):

    my_rgb = tuple(int(my_hex[i:i+2], 16) for i in (0, 2, 4))
    [r,g,b] = [i / 255 for i in my_rgb]
    
    my_min = min(r, min(g, b))
    my_max = max(r, max(g, b))
    delta = my_max - my_min
    l = (my_min + my_max) / 2

    s = 0
    if l > 0 and l < 1 :
      divisor = 2 * l if l < 0.5 else 2 - 2 * l
      s = delta / divisor

    h = 0
    if delta > 0:
      if (my_max == r and my_max != g) :
        h += (g - b) / delta
      if (my_max == g and my_max != b) :
        h += (2 + (b - r) / delta)
      if (my_max == b and my_max != r) :
        h += (4 + (r - g) / delta)
        
      h = h / 6
      
    return [int(h * 255), int(s * 255), int(l * 255)]


def getColorname(my_hex):
  my_rgb = tuple(int(my_hex[i:i+2], 16) for i in (0, 2, 4))
  [r,g,b] = [i for i in my_rgb]
  my_hls = tuple(colorsys.rgb_to_hls(r/255, g/255, b/255))
  [h,s,l] = getHSL(my_hex)

  ndf1 = 0
  ndf2 = 0
  ndf = 0
  df = -1
  col = -1 
  
  for idx, color in enumerate(names):
    color_hex = color[0]
    color_rgb = tuple(int(color_hex[i:i+2], 16) for i in (0, 2, 4))
    [cr, cg, cb] = [c / 255 for c in color_rgb ]
    color_hls = tuple(colorsys.rgb_to_hls(cr, cg, cb))
    [ch, cl, cs] = [ int(c * 255) for c in color_hls ]
    if my_hex == color[0]:
      return color[1]

    ndf1 = math.pow(r - color_rgb[0], 2) + math.pow(g - color_rgb[1], 2) + math.pow(b - color_rgb[2], 2)
    ndf2 = math.pow(h - ch, 2) + math.pow(s - cs, 2) + math.pow(l - cl, 2)
    ndf = ndf1 + ndf2 * 2
    if df < 0 or df > ndf:
      df = ndf
      col = idx
  
  return names[col][1]

def generate(i):
  
  saturation = randint(0, 100)
  saturation_word = saturations[ dorange(saturation, 0, 100, 0, len(saturations) - 1)].strip()
  
  brightness = randint(0, 100)
  brightness_word = brightnesses[ dorange(brightness, 0, 100, 0, len(brightnesses) - 1)].strip()
  
  hue = randint(0, 360)
  hue_word = getHue(hue)
  
  hsl = "{}deg {}% {}%".format(hue, saturation, brightness)
  myrgb = colorsys.hls_to_rgb(hue/360, brightness/100, saturation/100)
  
  myhex = '%02x%02x%02x'%(round(myrgb[0]*255),round(myrgb[1]*255),round(myrgb[2]*255))
  myhex = myhex.upper()
  
  colorname = ""
  colorname = getColorname(myhex)  
  
  width = randint(40, 200)
  if randint(0, 100) > 50:
    shape = "disc" if randint(0, 100) > 50 else "square"
    height = width
  else:
    height = randint(40, 200)
    shape = "ellipse" if randint(0, 100) > 50 else "rectangle"
  size_word = sizes[ dorange(width * height, 0, 40000, 0, len(sizes) - 1)]
  
  shade_word = "{} {}".format(brightness_word, hue_word) if brightness > 10 else "near black"
  shade_word = shade_word if brightness < 95 else "near white" 
  
  phrase = "My name is {}, I’m {} {} {} {}.".format(colorname, saturation_word, shade_word, size_word, shape)
  phrase = " ".join(phrase.split())
  
  filename = 'data-{}.yml'.format(i)
  directory = '../dudes'
  path = os.path.join(directory, filename)
  f = open(path, 'w')
  
  data = 'hsl: {}\n'.format(hsl) 
  data += 'hex: "{}"\n'.format(myhex) 
  data += 'phrase: {}\n'.format(phrase) 
  data += 'shape: {}\n'.format(shape) 
  data += 'fontsize: {}\n'.format(round((width + height) / 12)) 
  data += 'width: {}\n'.format(width) 
  data += 'height: {}\n'.format(height) 
  data += 'hue: {}\n'.format(hue) 
  data += 'saturation: {}\n'.format(saturation) 
  data += 'brightness: {}\n'.format(brightness) 
  data += 'color: {}\n'.format("white" if brightness < 50 else "black") 
  data += "colorname: {}\n".format(colorname)
  f.write(data)
  
  f.close()
  
  
for i in range(200):
  generate(i)
  