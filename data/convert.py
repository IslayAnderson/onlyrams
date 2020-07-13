import xml.etree.cElementTree as x2j
import json
import sys

with open("/var/www/vhosts/onlyrams.co.uk/httpdocs/data/json/rams.json") as json_format_file: 
  d = json.load(json_format_file)

len = len(d)
r = x2j.Element("root")
i=0

while i < len:
    print(d[i]["title"])
    x2j.SubElement(r,"title").text = d[i]["title"]
    x2j.SubElement(r,"url").text = d[i]["url"]
    x2j.SubElement(r,"img").text = str(d[i]["img"])
    x2j.SubElement(r,"age").text = str(d[i]["age"])
    x2j.SubElement(r,"location").text = str(d[i]["location"])
    i += 1

a = x2j.ElementTree(r)

a.write("/var/www/vhosts/onlyrams.co.uk/httpdocs/data/json/rams.xml")