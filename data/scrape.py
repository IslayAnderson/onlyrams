import xml.etree.cElementTree as x2j
import json
import sys
import time
#import pandas as pd
from bs4 import BeautifulSoup as bs
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.firefox.options import Options
from selenium.webdriver.common.by import By

URLp1 = 'https://www.sellmylivestock.co.uk/sheep?q={"index":"listings_startDate","query":"","facets":["assurances.farm","assurances.organic","commodity","portals","meta.ageMin","meta.ageMax","meta.pregnant","meta.orphan","meta.children","meta.tbRestricted","meta.pedigreeStatus","meta.cross","meta.homebred","meta.healthScheme","owner.business"],"disjunctiveFacets":["tradeType","status","categories.lvl0","categories.lvl1","location.country","location.nation","location.region","meta.types","meta.sexes"],"hierarchicalFacets":[],"facetsRefinements":{"commodity":["livestock"]},"facetsExcludes":{},"disjunctiveFacetsRefinements":{"meta.sexes":["Rams"],"categories.lvl0":["Sheep"]},"numericRefinements":{"start":{">=":[1583020800]}},"tagRefinements":[],"hierarchicalFacetsRefinements":{},"hitsPerPage":36,"page":'
URLp2 = ',"getRankingInfo":true}'

javascript1 = 'return document.querySelector("div.flex.shrink.mt-2 > span").innerText'
javascript2 = "var listingData = '{';ramUrl=function(e){return document.getElementsByClassName('listing-card__link')[e].href};ramTitle=function(e){return document.getElementsByClassName('listing-card__title')[e].querySelector('span > span').innerText};ramAge=function(e){return document.getElementsByClassName('listing-card__tags')[e].querySelector('span:nth-child(2) > span').innerText};ramLocation=function(e){return document.getElementsByClassName('listing-card__location')[e].innerText};ramImg=function(e){a = getComputedStyle(document.getElementsByClassName('listing-card__header')[e].querySelector(' div.v-responsive.v-image > div.v-image__image.v-image__image--cover'),null).getPropertyValue('background-image');b = a.replace('linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)), url(\"', ''); c = b.replace('\")', ''); return c};listing=document.getElementsByClassName('listing-card');for(i=0;i<listing.length;i++){if(i== listing.length-1){last='}'}else{last=','}listingData = listingData + '\"Sheep\":{\"title\":\"' +ramTitle(i)+'\",\"url\":\"'+ramUrl(i)+'\",\"img\":\"'+ramImg(i)+'\",\"age\":\"'+ramAge(i)+'\",\"location\":\"'+ramLocation(i)+'\"}'+last;}return listingData"

scrape = []
results = ""
final = ""

options = Options()

options.headless = True

driver = webdriver.Firefox(executable_path = r'geckodriver')

#driver = webdriver.Firefox()
driver.implicitly_wait(2)

i = 0

while i < 99:
    driver.get(URLp1+str(i)+URLp2)
    time.sleep(7)
    try:
        results = driver.execute_script(javascript1)
    except:
        print('results displayed')
    print(results)
    if results == "NO RESULTS":
        break
    scrape.append(driver.execute_script(javascript2))
    #print('js2 failed')
    print(scrape)
    i +=1
print("==============================")
print(scrape)
print("==============================")
e = 0
b = len(scrape)

while e < b:
    final += scrape[e]
    e +=1

with open(".//json//rams.json", "w+", encoding="utf-8") as file:
        file.write(str(final))

driver.quit()
