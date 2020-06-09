import xml.etree.cElementTree as x2j
import json
import sys

with open(".\\json\\rams.json") as json_format_file: 
  d = json.load(json_format_file)

r = x2j.Element("sheep")
x2j.SubElement(r,"title").text = d["title"]
x2j.SubElement(r,"url").text = d["url"]
x2j.SubElement(r,"img").text = str(d["img"])
x2j.SubElement(r,"age").text = str(d["age"])
x2j.SubElement(r,"location").text = str(d["location"])

a = x2j.ElementTree(r)
a.write(".\\json\\rams.xml")